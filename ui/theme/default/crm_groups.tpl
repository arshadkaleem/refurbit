{extends file="$layouts_admin"}
{block name="head"}

    {if empty($config['admin_dark_theme'])}
        <style>
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #F7F9FC;
            }
        </style>
    {/if}

{/block}

{block name="content"}
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Groups']}</h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-success" id="add_new_group"><i class="fal fa-plus"></i> {$_L['Add New Group']}</a>
                            <a href="{$_url}reorder/groups/" class="btn btn-sm btn-primary"><i class="fal fa-download"></i> {$_L['Reorder']}</a>
                        </div>


                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="thead-light">
                            <table class="table table-striped">
                                <th><strong>{$_L['Group']}</strong></th>
                                <th class="float-right">{$_L['Manage']}</th>
                                {foreach $gs as $g}
                                    <tr>
                                        <td><strong>{$g['gname']}</strong></td>

                                         <td>
                                             <div class="float-end">
                                                 <a href="{$_url}contacts/find_by_group/{$g['id']}/" class="btn btn-sm btn-info"> {$_L['List Contacts']}</a>
                                                 <a href="#" class="btn btn-sm btn-primary edit_group" id="e{$g['id']}" data-name="{$g['gname']}"> {$_L['Edit']}</a>

                                                 <a href="javascript:;" id="g{$g['id']}" class="btn btn-sm btn-danger cdelete"> {$_L['Delete']}</a>
                                             </div>


                                        </td>
                                    </tr>
                                {/foreach}


                            </table>
                        </div>



                    </div>

                    <br>
                    <br>


                </div>
            </div>



        </div>



    </div>

    <input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="{$_L['Add New Group']}">
    <input type="hidden" name="_msg_group_name" id="_msg_group_name" value="{$_L['Group Name']}">
    <input type="hidden" name="_msg_edit" id="_msg_edit" value="{$_L['Edit']}">
    <input type="hidden" name="_msg_ok" id="_msg_ok" value="{$_L['OK']}">
    <input type="hidden" name="_msg_cancel" id="_msg_cancel" value="{$_L['Cancel']}">


{/block}

{block name="script"}

    <script>

        $(document).ready(function () {

            var _url = $("#_url").val();


            $("#add_new_group").click(function(e){

                e.preventDefault();

                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '{$_L['Add New Group']}',
                        input: 'text',
                        inputLabel: '{$_L['Group Name']}',
                        inputPlaceholder: '{$_L['Group Name']}',
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/add_group/", { group_name: group_name })
                            .done(function( data ) {

                                if ($.isNumeric(data)) {

                                    location.reload();

                                }

                                else {
                                    Swal.fire({
                                        title: '{__('Error')}',
                                        text: data,
                                        type: 'error',
                                        confirmButtonText: '{$_L['Close']}'
                                    })
                                }

                            });
                    }

                })()



            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/crm-group/" + id;
                    }
                });



            });


            $(".edit_group").click(function (e) {
                e.preventDefault();

                var eid = this.id;

                // alert(eid);

                var gname = $( this ).attr( "data-name" );


                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '{$_L['Edit']}',
                        input: 'text',
                        inputLabel: '{$_L['Group Name']}',
                        inputPlaceholder: '{$_L['Group Name']}',
                        inputValue: gname,
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/group_edit/", { id: eid, gname: group_name })
                            .done(function( data ) {
                                location.reload();
                            });
                    }

                })()



            });




        });
    </script>
{/block}
