<div class="row mb-3">
    <div class="col">
        {if $type == 'credit-notes'}

            <h2>{__('Credit Notes')}</h2>

        {else}

            <h2>{$_L['Invoices']}</h2>


        {/if}
    </div>
    {if $has_delete_access}
        <div class="col text-end">
            <form onSubmit="if(!confirm('{$_L['are_you_sure']}')){ return false; }" method="post" action="{$base_url}invoices/mass-delete">

                <input type="hidden" name="invoice_ids" value="{foreach $invoices as $invoice}{$invoice->id},{/foreach}">
                <button id="delete_all" class="btn btn-danger">{$_L['Delete']}</button>

            </form>
        </div>
    {/if}
</div>

<div class="table-responsive">
    <table id="clx_datatable" class="table table-striped">
        <thead style="background: #f0f2ff">
        <tr>
            <th>#</th>
            <th>{$_L['Account']}</th>
            <th>{$_L['Amount']}</th>
            <th>{$_L['Invoice Date']}</th>
            <th>{$_L['Due Date']}</th>
            <th>
                {$_L['Status']}
            </th>
            <th>{$_L['Type']}</th>
            <th class="text-end" width="140px;">{$_L['Manage']}</th>
        </tr>
        </thead>
        <tbody>

        {foreach $invoices as $invoice}
            <tr>
                <td><a href="{$_url}invoices/view/{$invoice->id}/">{$invoice->invoicenum}{if $invoice->cn neq ''} {$invoice->cn} {else} {$invoice->id} {/if}</a> </td>
                <td>
                    {if isset($customers[$invoice->id])}
                        <a href="{$_url}invoices/view/{$invoice->id}/">
                            <strong>
                                {$invoice->account}
                                {if $customers[$invoice->userid]->company != ''}
                                    <br>  {$customers[$invoice->userid]->company}
                                {/if}
                            </strong>


                        </a>
                    {elseif !empty($invoice->account)}
                        <a href="{$_url}invoices/view/{$invoice->id}/">
                            <strong>
                                {$invoice->account}
                            </strong>

                        </a>
                    {/if}
                </td>
                <td>{formatCurrency($invoice->total,$invoice->currency_iso_code)}</td>
                <td data-value="{strtotime($invoice->date)}">{date( $config['df'], strtotime($invoice->date))}</td>
                <td data-value="{strtotime($invoice->duedate)}">{date( $config['df'], strtotime($invoice->duedate))}</td>
                <td>

                    {if $invoice->status eq 'Unpaid'}
                        <span class="badge bg-danger">{ib_lan_get_line($invoice->status)}</span>
                    {elseif $invoice->status eq 'Paid'}
                        <span class="badge bg-primary">{ib_lan_get_line($invoice->status)}</span>
                    {elseif $invoice->status eq 'Partially Paid'}
                        <span class="badge bg-warning">{ib_lan_get_line($invoice->status)}</span>
                    {elseif $invoice->status eq 'Cancelled'}
                        <span class="badge bg-secondary">{ib_lan_get_line($invoice->status)}</span>
                    {else}
                        {ib_lan_get_line($invoice->status)}
                    {/if}



                </td>
                <td>
                    {if $invoice->r eq '0'}
                        <span class="badge bg-success">{$_L['Onetime']}</span>
                    {else}
                        <span class="badge bg-primary">{$_L['Recurring']}</span>
                    {/if}
                </td>
                <td class="text-end">


                    <div class="btn-group">
                        <a href="{$_url}invoices/view/{$invoice->id}/" class="btn btn-primary btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['View']}"><i class="fal fa-file-alt"></i></a>

                        <a href="{$_url}invoices/clone/{$invoice->id}/" class="btn btn-success btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Clone']}"><i class="fal fa-copy"></i></a>


                        <a href="{$_url}invoices/edit/{$invoice->id}/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Edit']}"><i class="fal fa-file-edit"></i></a>

                        {if $invoice['r'] neq '0'}

                            <a href="{$_url}invoices/stop_recurring/{$invoice->id}/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Stop Recurring']}"><i class="fal fa-stop"></i></a>

                        {/if}

                        <a href="#" class="btn btn-danger btn-icon cdelete" id="iid{$invoice->id}" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fal fa-trash-alt"></i></a>
                    </div>


                </td>
            </tr>
        {/foreach}

        </tbody>

    </table>
</div>
