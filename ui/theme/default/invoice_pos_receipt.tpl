
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

{*    <title>{$_L['INVOICE']} - {$d['invoicenum']}{if $d['cn'] neq ''} {$d['cn']} {else} {$d['id']} {/if}</title>*}

    <link rel="icon" href="{{APP_URL}}/storage/system/{get_or_default($config,'icon-32','icon-32x32.png')}" sizes="32x32" />
    <link rel="icon" href="{{APP_URL}}/storage/system/{get_or_default($config,'icon-192','icon-192x192.png')}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{APP_URL}}/storage/system/{get_or_default($config,'icon-180','icon-180x180.png')}" />
    <meta name="msapplication-TileImage" content="{{APP_URL}}/storage/system/{get_or_default($config,'icon-270','icon-270x270.png')}" />

    {if APP_STAGE == 'Dev'}

        {if $config['rtl'] eq '1'}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app-rtl.min.css?v={{_raid()}}">
        {else}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app.min.css?v={{_raid()}}">

        {/if}

        <link href="{$theme}default/css/themes/{$config['nstyle']}.css?v={{_raid()}}" rel="stylesheet">

    {else}

        {if $config['rtl'] eq '1'}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app-rtl.min.css?v=2">
        {else}
            <link id="css_app" rel="stylesheet" media="screen, print" href="{{APP_URL}}/ui/theme/default/css/app.min.css?v=2">
        {/if}

        <link href="{$theme}default/css/themes/{$config['nstyle']}.css?v=13" rel="stylesheet">
    {/if}

    {block name=style}{/block}

    <script>
        var base_url = '{$_url}';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    </script>

    {$config['header_scripts']}


    <style type="text/css">

        #invoice-POS {
            padding: 6mm;
            margin: 0 auto;
            width: 80mm;
            background: #FFF;
        }
        #invoice-POS ::selection {
            background-color: #FFF;
            color: #FFF;
        }
        #invoice-POS ::moz-selection {
            background-color: #FFF;
            color: #FFF;
        }
        #invoice-POS h1 {
            font-size: 1.6em;
            color: #222;
        }
        #invoice-POS h2 {
            font-size: 1em;
        }
        #invoice-POS h3 {
            font-size: 1.3em;
            font-weight: 300;
            line-height: 2em;
        }
        #invoice-POS p {
            font-size: 0.9em;
            color: #222;
            line-height: 1.2em;
        }
        #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
            /* Targets all id with 'col-' */
            border-bottom: 1px solid #EEE;
        }
        #invoice-POS #top {
            min-height: 100px;
        }
        #invoice-POS #mid {
            min-height: 80px;
        }
        #invoice-POS #bot {
            min-height: 50px;
        }
        #invoice-POS #top .logo {
            height: 80px;
            width: 80px;
            background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
            background-size: 80px 80px;
        }
        #invoice-POS .info {
            display: block;
            margin-left: 0;
        }
        #invoice-POS .title {
            float: right;
        }
        #invoice-POS .title p {
            text-align: right;
        }
        #invoice-POS table {
            width: 100%;
            border-collapse: collapse;
        }
        #invoice-POS .tabletitle {
            font-size: 0.7em;
            background: #EEE;
        }
        #invoice-POS .service {
            border-bottom: 1px solid #EEE;
        }
        #invoice-POS .item {
            width: 24mm;
        }
        #invoice-POS .itemtext {
            font-size: 0.8em;
        }
        #invoice-POS #legalcopy {
            margin-top: 5mm;
        }
        #invoice-POS .signature {
            margin-top: 5mm;
            border-top: 1px solid #EEE;
            text-align: center;
        }

        {if isset($payment_gateways_by_processor['stripe'])}

        .StripeElement {
            background-color: white;
            height: 40px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        {/if}


        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }


    </style>



</head>
<body class="fixed-nav">

<section class="">
    <div class="">
        <div class="invoice">
            {if isset($notify)}
                {$notify}
            {/if}
            <header class="clearfix">

                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="text-center">
{*                            <a href="{$_url}client/ipdf/{$d['id']}/token_{$d['vtoken']}/dl/" class="btn btn-primary buttons-pdf ml-sm"><i class="fal fa-file-pdf-o"></i> {$_L['Download PDF']}</a>*}
                            <a href="{$_url}invoices/pos-pdf/{$d['id']}/token_{$d['vtoken']}/view/" class="btn btn-primary buttons-excel ml-sm"><i class="fal fa-file-text-o"></i> {$_L['View PDF']}</a>
                            <a href="{$_url}invoices/pos-print/{$d['id']}/token_{$d['vtoken']}" target="_blank" class="btn btn-primary buttons-print ml-sm"><i class="fal fa-print"></i> {$_L['Printable Version']}</a>
                        </div>

                        <div class="hr-line-dashed"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mt-md">


                    </div>

                </div>
            </header>
            <div class="">
                <div class="row">
                    <div id="invoice-POS">
                        <center id="top">
                            <div class=" mt-4">
                                <img src="{$app_url}storage/system/{$config['logo_default']}" alt="{$config['CompanyName']}" class="img-fluid"  style="margin-bottom: 15px; max-width: 50%">
                            </div>
                            <div class="info">
                                <h2>{$config['CompanyName']}</h2>
                                <p class="info col-md-10">

                                    <br>
                                    {$config['caddress']}

                                    {if isset($config['vat_number']) && ($config['vat_number'] != '')}

                                        <br>
                                        <strong>{sp_config_or_default('label_tax_number',$_L['Vat number'])}:</strong> {$config['vat_number']}

                                    {/if}


                                </p>
                            </div><!--End Info-->
                        </center><!--End InvoiceTop-->

                        <div id="mid">
                            <div class="info">
                                <h2>{{__('Invoiced To')}}</h2>
                                <p>
                                    {if $a['company'] neq ''}
                                        {$a['company']}

                                        <br>

                                        {if $company && $config['show_business_number'] eq '1' }

                                            {if $company->business_number neq ''}
                                                {$config['label_business_number']}: {$company->business_number}
                                                <br>
                                            {/if}
                                        {/if}

                                        {$_L['ATTN']}: {$d['account']}
                                        <br>
                                    {else}
                                        {$d['account']}
                                        <br>
                                    {/if}

                                    {getContactFormattedAddress($config,$a)}
                                    <br>
                                    <strong>{$_L['Phone']}:</strong> {$a['phone']}

                                    {if $config['fax_field'] neq '0' && $a['fax'] neq ''}
                                        <br>
                                        <strong>{$_L['Fax']}:</strong> {$a['fax']}
                                    {/if}

                                    <br>
                                    <strong>{$_L['Email']}:</strong> {$a['email']}
                                    {foreach $cf as $cfs}
                                        {if $cfs['showinvoice'] == 'No'}
                                            {continue}
                                        {/if}
                                        <br>
                                        <strong>{$cfs['fieldname']}: </strong> {get_custom_field_value($cfs['id'],$a['id'])}
                                    {/foreach}
                                    {$x_html}
                                </p>

                                {if $d['status'] eq 'Unpaid'}
                                    <strong>{$_L['Unpaid']}</strong>
                                {elseif $d['status'] eq 'Paid'}
                                    <strong>{$_L['Paid']}</strong>
                                {elseif $d['status'] eq 'Partially Paid'}
                                    <strong>{$_L['Partially Paid']}</strong>
                                {else}
                                    <strong>{$d['status']}</strong>
                                {/if}

                                {if ($d['credit']) neq '0.00'}


                                    <p>
                                        <strong>{$_L['Total Paid']}:</strong> {formatCurrency($d['credit'],$d['currency_iso_code'])} <br>
                                        <strong>{$_L['Amount Due']}</strong>: {formatCurrency($i_due,$d['currency_iso_code'])}
                                    </p>

                                {/if}

                            </div>
                        </div><!--End Invoice Mid-->

                        <div id="bot">

                            <div id="table">
                                <table>

                                    <tr class="tabletitle">
                                        <td class="item"><h2>Item</h2></td>
                                        <td class="Hours"><h2>Qty</h2></td>
                                        <td class="Rate"><h2>Sub Total</h2></td>
                                    </tr>

                                    {foreach $items as $item}

                                        <tr class="service">
                                            <td class="tableitem"><p class="itemtext">{$item['description']}</p></td>
                                            <td class="tableitem"><p class="itemtext">{numberFormatUsingCurrency($item['qty'],$d['currency_iso_code'],0)}</p></td>
                                            <td class="tableitem"><p class="itemtext">
                                                    {formatCurrency(($item['total'] + $item['taxamount']),$d['currency_iso_code'])}
                                                </p></td>
                                        </tr>
                                    {/foreach}






                                    <tr class="tabletitle">
                                        <td></td>
                                        <td class="Rate"><h2>{{__("Sub Total")}}</h2></td>
                                        <td class="payment"><h2>{formatCurrency($d['subtotal'],$d['currency_iso_code'])}</h2></td>
                                    </tr>



                                        {if ($d['discount']) neq '0.00'}
                                    <tr>
                                        <td colspan="2">{$_L['Discount']}</td>
                                        <td class="text-left">{formatCurrency($d['discount'],$d['currency_iso_code'])}</td>
                                    </tr>
                                    {/if}

                                    {if $config['tax_system'] == 'India'}
                                        <tr>
                                            <td colspan="2">GST</td>
                                            <td class="text-left">{formatCurrency($d['tax'],$d['currency_iso_code'])}</td>
                                        </tr>
                                    {else}


                                        <tr class="tabletitle">
                                            <td></td>
                                            <td class="Rate"><h2>{{__('Tax')}}</h2></td>
                                            <td class="payment"><h2>{formatCurrency($d['tax'],$d['currency_iso_code'])}</h2></td>
                                        </tr>






                                    {/if}



{*                                        <td class="payment">*}
{*                                            <h2>{formatCurrency($d['tax'],$d['currency_iso_code'])}</h2>*}
{*                                        </td>*}



                                    </tr>

                                    <tr class="tabletitle">
                                        <td></td>
                                        <td class="Rate"><h2>{{__('Grand Total')}}</h2></td>
                                        <td class="payment"><h2>{formatCurrency($d['total'],$d['currency_iso_code'])}</h2></td>
                                    </tr>

                                </table>
                            </div><!--End Table-->

                            {if ($d['notes']) neq ''}
                                <div  id="legalcopy" class="m-t">
                                    <p class="legal">
                                       <strong> {$d['notes']}</strong>
                                    </p>

                                </div>
                            {/if}



{*                            <div id="legalcopy">*}


{*                                <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.*}
{*                                </p>*}
{*                            </div>*}

                        </div><!--End InvoiceBot-->
                    </div>

                </div>
            </div>

        </div>


</section>


</body>

<!--End Invoice-->
