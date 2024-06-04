{extends file="$layouts_admin"}

{block name="content"}

    <div class="panel">
        <div class="panel-hdr">




            {if $action == 'credit-notes'}

                <h2>{__('Credit Notes')}</h2>

                {else}

                <h2>{$_L['Invoices']}</h2>


            {/if}



            <div class="panel-toolbar">

                <div class="btn-group">
                    <a href="{$_url}invoices/add/" class="btn btn-primary  btn-sm"> {$_L['Add Invoice']}</a>
                    <a href="{$_url}reports/invoices/" class="btn btn-warning btn-sm"> {$_L['View Reports']}</a>
                </div>

            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                {if $action !== 'credit-notes'}
                    <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="{$base_url}invoices/list/">{$_L['Filter']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/unpaid">{$_L['Unpaid']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/partially_paid/">{$_L['Partially Paid']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/paid/">{$_L['Paid']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/cancelled/">{$_L['Cancelled']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/all/">{$_L['All']}</a></li>
                    </ul>
                {/if}



                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="reportrange">{$_L['Date Range']}</label>
                                        <input type="text" name="reportrange" class="form-control" id="reportrange">
                                    </div>

                                    <div class="mb-3">
                                        <label for="customer">{$_L['Customer']}</label>
                                        <select class="form-select" name="customer" id="customer">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $customers as $customer}
                                                <option value="{$customer.id}">{$customer.account} {$customer.email}</option>
                                            {/foreach}
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="customer">{$_L['Status']}</label>
                                        <select class="form-select" name="status" id="status">
                                            <option value="">{$_L['All']}</option>
                                            <option value="Paid">{$_L['Paid']}</option>
                                            <option value="Unpaid">{$_L['Unpaid']}</option>
                                            <option value="Partially Paid">{$_L['Partially Paid']}</option>
                                            <option value="Cancelled">{$_L['Cancelled']}</option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="type" value="{{$action}}">

                                    <button type="submit" id="sp_filter" class="btn btn-primary">{__('Filter')}</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body" id="result_div">

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>







{/block}

{block name=script}

    <script>



        $(function () {

            let $app = $('#cloudonex_body');

            let $customer = $('#customer').select2();

            var start = moment().subtract(29, 'days');
            var end = moment();



            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            var $reportrange = $("#reportrange");

            $reportrange.daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    format: 'YYYY/MM/DD'
                }
            }, cb);

            cb(start, end);

            let $result_div = $('#result_div');


            function loadResult() {

                $result_div.html('<img src="{APP_URL}/storage/system/fsubmit.gif">');

                let $form = $('form');
                let data = $form.serialize();

                $.post('{$_url}invoices/filter', data, function (data) {
                    $result_div.html(data);
                });
            }

            loadResult();

            $('#sp_filter').on('click', function (e) {
                e.preventDefault();

                loadResult();

            });

            $app.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                app.confirm("{__('are_you_sure')}", function(result) {
                    if(result){
                        window.location.href = base_url + "delete/invoice/" + id;
                    }
                });


            });


        });
    </script>


{/block}
