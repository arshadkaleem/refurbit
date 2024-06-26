<?php

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'sys_purchases';

    public function scopePaid($query)
    {
        return $query->where('status', '=', 'Paid');
    }

    public function scopeUnpaid($query)
    {
        return $query->where('status', '=', 'Unpaid');
    }

    public static function gen_email($iid, $etpl)
    {
        global $config;

        $d = ORM::for_table('sys_purchases')->find_one($iid);

        if ($etpl == 'created') {
            $e = ORM::for_table('sys_email_templates')
                ->where('tplname', 'Purchase Invoice:Invoice Created')
                ->find_one();
        } elseif ($etpl == 'reminder') {
            $e = ORM::for_table('sys_email_templates')
                ->where('tplname', 'Purchase Invoice:Invoice Payment Reminder')
                ->find_one();
        } elseif ($etpl == 'overdue') {
            $e = ORM::for_table('sys_email_templates')
                ->where('tplname', 'Purchase Invoice:Invoice Overdue Notice')
                ->find_one();
        } elseif ($etpl == 'confirm') {
            $e = ORM::for_table('sys_email_templates')
                ->where(
                    'tplname',
                    'Purchase Invoice:Invoice Payment Confirmation'
                )
                ->find_one();
        } elseif ($etpl == 'refund') {
            $e = ORM::for_table('sys_email_templates')
                ->where(
                    'tplname',
                    'Purchase Invoice:Invoice Refund Confirmation'
                )
                ->find_one();
        } else {
            $d = false;
            $e = false;
        }

        if ($d) {
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $dispid = $d['cn'] != '' ? $d['cn'] : $d['id'];
            $invoice_num = $d['invoicenum'] . $dispid;
            //parse template
            $total = $d['total'];
            $credit = $d['credit'];
            $due_amount = $total - $credit;
            $tax = $d['tax'];
            $taxrate = $d['taxrate'];
            $subtotal = $d['subtotal'];
            $subject = new Template($e['subject']);
            $subject->set('business_name', $config['CompanyName']);
            $subject->set('invoice_id', $invoice_num);
            $subj = $subject->output();
            $message = new Template($e['message']);
            $message->set('name', $a['account']);
            $message->set('customer_name', $a['account']);
            $message->set('client_name', $a['account']);
            $message->set('company', $a['company']);
            $message->set('business_name', $config['CompanyName']);
            $message->set(
                'invoice_url',
                U .
                    'client/purchase_view/' .
                    $d['id'] .
                    '/token_' .
                    $d['vtoken']
            );
            $message->set('invoice_id', $invoice_num);
            $message->set('invoice_status', $d['status']);
            $message->set(
                'invoice_amount_paid',
                number_format(
                    $credit,
                    2,
                    $config['dec_point'],
                    $config['thousands_sep']
                )
            );
            $message->set(
                'invoice_due_amount',
                number_format(
                    $due_amount,
                    2,
                    $config['dec_point'],
                    $config['thousands_sep']
                )
            );
            $message->set('invoice_taxname', $d['taxname']);
            $message->set(
                'invoice_tax_amount',
                number_format(
                    $tax,
                    2,
                    $config['dec_point'],
                    $config['thousands_sep']
                )
            );
            $message->set(
                'invoice_tax_rate',
                number_format(
                    $taxrate,
                    2,
                    $config['dec_point'],
                    $config['thousands_sep']
                )
            );
            $message->set(
                'invoice_subtotal',
                number_format(
                    $subtotal,
                    2,
                    $config['dec_point'],
                    $config['thousands_sep']
                )
            );
            $message->set(
                'invoice_due_date',
                date($config['df'], strtotime($d['duedate']))
            );
            $message->set(
                'invoice_date',
                date($config['df'], strtotime($d['date']))
            );
            $message->set(
                'invoice_amount',
                number_format(
                    $total,
                    2,
                    $config['dec_point'],
                    $config['thousands_sep']
                )
            );
            $message_o = $message->output();

            $gen = [];

            $gen['cid'] = $a['id'];
            $gen['name'] = $a['account'];
            $gen['email'] = $a['email'];
            $gen['subject'] = $subj;
            $gen['body'] = $message_o;

            return $gen;
        }

        return false;
    }

    public static function pdf($id, $r_type = '', $token = '')
    {
        global $config, $_L, $pdf_tpl;

        $d = ORM::for_table('sys_purchases')->find_one($id);
        if ($d) {
            if ($token != '') {
                $token = str_replace('token_', '', $token);
                $vtoken = $d->vtoken;
                if ($token != $vtoken) {
                    echo 'Sorry Token does not match!';
                    exit();
                }
            }

            $items = ORM::for_table('sys_purchaseitems')
                ->where('invoiceid', $id)
                ->order_by_asc('id')
                ->find_many();

            $trs_c = ORM::for_table('sys_transactions')
                ->where('purchase_id', $id)
                ->count();

            $trs = ORM::for_table('sys_transactions')
                ->where('purchase_id', $id)
                ->order_by_desc('id')
                ->find_many();

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            $i_due = $d['credit'] != '0.00' ? $i_total - $i_credit : $d['total'];

            $cf = ORM::for_table('crm_customfields')
                ->where('showinvoice', 'Yes')
                ->order_by_asc('id')
                ->find_many();

            $dispid = $d['cn'] != '' ? $d['cn'] : $d['id'];

            $in = $d['invoicenum'] . $dispid;

            $company = $a->cid != '' || $a->cid != 0 ? Company::find($a->cid) : false;

            $pdf_c = '';
            $ib_w_font = 'dejavusanscondensed';
            if ($config['pdf_font'] == 'default') {
                $pdf_c = 'c';
                $ib_w_font = 'Helvetica';
            }

            $mpdf = new \Mpdf\Mpdf();

            $mpdf->SetTitle($config['CompanyName'] . ' Invoice');
            $mpdf->SetAuthor($config['CompanyName']);
            $mpdf->SetDisplayMode('fullpage');

            if ($config['pdf_font'] == 'AdobeCJK') {
                $mpdf->useAdobeCJK = true;
                $mpdf->autoScriptToLang = true;
                $mpdf->autoLangToFont = true;
            }

            $pdf_tpl = __DIR__ . '/../lib/invoices/purchase.php';

            if (file_exists(__DIR__ . '/../overrides/purchase_pdf.php')) {
                $pdf_tpl = __DIR__ . '/../overrides/purchase_pdf.php';
            }

            Event::trigger('invoices/before_pdf_render/', [$id]);

            ob_start();

            require $pdf_tpl;

            $html = ob_get_contents();

            ob_end_clean();

            $mpdf->WriteHTML($html);

            if ($r_type == 'dl') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'D'); # D
            } elseif ($r_type == 'inline') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
            } elseif ($r_type == 'store') {
                $mpdf->Output(
                    'storage/temp/' . __('Purchase') . '_' . $in . '.pdf',
                    'F'
                ); # D
            } else {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
            }
        }
    }

    public static function forSingleItem(
        $cid,
        $item,
        $amount,
        $is_credit_invoice = '0'
    ) {
        global $config;

        $datetime = date("Y-m-d H:i:s");

        $today = date('Y-m-d');

        $discount_type = 'f';
        $discount_value = '0.00';

        $actual_discount = '0.00';

        $fTotal = $amount;

        $taxval = '0.00';

        $taxname = '';

        $taxrate = '0.00';

        $notes = '';

        $invoicenum = '';

        $r = '0';
        $nd = $today;

        $cn = '';

        $currency = 0;
        $currency_symbol = $config['currency_code'];
        $currency_rate = 1.0;

        $u = ORM::for_table('crm_accounts')->find_one($cid);

        if (!$u) {
            return false;
        }

        $vtoken = _raid(10);
        $ptoken = _raid(10);
        $d = ORM::for_table('sys_purchases')->create();
        $d->userid = $cid;
        $d->account = $u->account;
        $d->date = $today;
        $d->duedate = $today;
        $d->datepaid = $datetime;
        $d->subtotal = $amount;
        $d->discount_type = $discount_type;
        $d->discount_value = $discount_value;
        $d->discount = $actual_discount;
        $d->total = $fTotal;
        $d->tax = $taxval;
        $d->taxname = $taxname;
        $d->taxrate = $taxrate;
        $d->vtoken = $vtoken;
        $d->ptoken = $ptoken;
        $d->status = 'Unpaid';
        $d->notes = $notes;
        $d->r = $r;
        $d->nd = $nd;
        $d->invoicenum = $invoicenum;
        $d->cn = $cn;
        $d->tax2 = '0.00';
        $d->taxrate2 = '0.00';
        $d->paymentmethod = '';

        $d->currency = $currency;
        $d->currency_symbol = $currency_symbol;
        $d->currency_rate = $currency_rate;

        $d->is_credit_invoice = $is_credit_invoice;

        $d->save();
        $invoiceid = $d->id();

        $sqty = 1;
        $samount = $amount;
        $ltotal = $amount;

        $d = ORM::for_table('sys_purchaseitems')->create();
        $d->invoiceid = $invoiceid;
        $d->userid = $cid;
        $d->description = $item;
        $d->qty = $sqty;
        $d->amount = $samount;
        $d->total = $ltotal;

        $d->taxed = '0';

        $d->type = '';
        $d->relid = '0';
        $d->itemcode = '';
        $d->taxamount = '0.00';
        $d->duedate = date('Y-m-d');
        $d->paymentmethod = '';
        $d->notes = '';

        $d->save();

        $invoice = [];
        $invoice['id'] = $invoiceid;
        $invoice['vtoken'] = $vtoken;

        return $invoice;
    }

    public static function fromCart()
    {
        global $config;

        $datetime = date("Y-m-d H:i:s");

        $today = date('Y-m-d');

        $discount_type = 'f';
        $discount_value = '0.00';

        $actual_discount = '0.00';

        $taxval = '0.00';

        $taxname = '';

        $taxrate = '0.00';

        $notes = '';

        $invoicenum = '';

        $r = '0';
        $nd = $today;

        $cn = '';

        $currency = 0;
        $currency_symbol = $config['currency_code'];
        $currency_rate = 1.0;

        if (isset($_COOKIE['ib_cart_secret'])) {
            $secret = $_COOKIE['ib_cart_secret'];

            $cart = ORM::for_table('sys_cart')
                ->where('secret', $secret)
                ->find_one();

            if ($cart) {
                $u = ORM::for_table('crm_accounts')->find_one($cart->cid);

                $cid = $cart->cid;

                if (!$u) {
                    return false;
                }

                $fTotal = $cart->total;

                $vtoken = _raid(10);
                $ptoken = _raid(10);
                $d = ORM::for_table('sys_purchases')->create();
                $d->userid = $cid;
                $d->account = $u->account;
                $d->date = $today;
                $d->duedate = $today;
                $d->datepaid = $datetime;
                $d->subtotal = $fTotal;
                $d->discount_type = $discount_type;
                $d->discount_value = $discount_value;
                $d->discount = $actual_discount;
                $d->total = $fTotal;
                $d->tax = $taxval;
                $d->taxname = $taxname;
                $d->taxrate = $taxrate;
                $d->vtoken = $vtoken;
                $d->ptoken = $ptoken;
                $d->status = 'Unpaid';
                $d->notes = $notes;
                $d->r = $r;
                $d->nd = $nd;

                $d->invoicenum = $invoicenum;
                $d->cn = $cn;
                $d->tax2 = '0.00';
                $d->taxrate2 = '0.00';
                $d->paymentmethod = '';

                $d->currency = $currency;
                $d->currency_symbol = $currency_symbol;
                $d->currency_rate = $currency_rate;

                $d->save();
                $invoiceid = $d->id();

                $current_items = $cart->items;
                $current_items_d = json_decode($current_items, true);

                foreach ($current_items_d as $e_i) {
                    $d = ORM::for_table('sys_purchaseitems')->create();
                    $d->invoiceid = $invoiceid;
                    $d->userid = $cid;
                    $d->description = $e_i['name'];
                    $d->qty = $e_i['qty'];
                    $d->amount = $e_i['price'];
                    $d->total = $e_i['price'] * $e_i['qty'];

                    $d->taxed = '0';

                    $d->type = '';
                    $d->relid = '0';
                    $d->itemcode = '';
                    $d->taxamount = '0.00';
                    $d->duedate = date('Y-m-d');
                    $d->paymentmethod = '';
                    $d->notes = '';

                    $d->save();
                }

                $cart->delete();

                return $invoiceid;
            }
        }

        return false;
    }

    public static function files($invoice_id)
    {
        $file_ids = ORM::for_table('ib_doc_rel')
            ->where('rtype', 'invoice')
            ->where('rid', $invoice_id)
            ->find_array();

        $ids = [];

        foreach ($file_ids as $f) {
            $ids[] = $f['did'];
        }

        return empty($ids) ? [] : ORM::for_table('sys_documents')
            ->where_in('id', $ids)
            ->find_many();
    }

    public static function cloneInvoice($id)
    {
        $inv = ORM::for_table('sys_purchases')->find_one($id);

        if ($inv) {
            $vtoken = _raid(10);
            $ptoken = _raid(10);
            $d = ORM::for_table('sys_purchases')->create();
            $d->userid = $inv->userid;
            $d->account = $inv->account;
            $d->date = $inv->date;
            $d->duedate = $inv->duedate;
            $d->datepaid = $inv->datepaid;
            $d->subtotal = $inv->subtotal;
            $d->discount_type = $inv->discount_type;
            $d->discount_value = $inv->discount_value;
            $d->discount = $inv->discount;
            $d->total = $inv->total;
            $d->tax = $inv->tax;
            $d->taxname = $inv->taxname;
            $d->taxrate = $inv->taxrate;
            $d->vtoken = $vtoken;
            $d->ptoken = $ptoken;
            $d->status = 'Unpaid';
            $d->notes = $inv->notes;
            $d->r = $inv->r;
            $d->nd = $inv->nd;

            $d->invoicenum = $inv->invoicenum;
            $d->cn = $inv->cn;
            $d->tax2 = $inv->tax2;
            $d->taxrate2 = $inv->taxrate2;
            $d->paymentmethod = $inv->paymentmethod;

            $d->currency = $inv->currency;
            $d->currency_symbol = $inv->currency_symbol;
            $d->currency_rate = $inv->currency_rate;
            $d->save();
            $invoiceid = $d->id();

            $items = ORM::for_table('sys_purchaseitems')
                ->where('invoiceid', $id)
                ->order_by_asc('id')
                ->find_array();
            foreach ($items as $item) {
                $t = ORM::for_table('sys_purchaseitems')->create();
                $t->invoiceid = $invoiceid;
                $t->userid = $item['userid'];
                $t->description = $item['description'];
                $t->qty = $item['qty'];
                $t->amount = $item['amount'];
                $t->total = $item['total'];
                $t->taxed = $item['taxed'];
                $t->type = '';
                $t->relid = '0';
                $t->itemcode = $item['itemcode'];
                $t->taxamount = '0.00';
                $t->duedate = date('Y-m-d');
                $t->paymentmethod = '';
                $t->notes = '';
                $t->save();
            }

            return $invoiceid;
        }

        return false;
    }
}
