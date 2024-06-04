<?php
/* Smarty version 4.2.1, created on 2022-09-14 17:34:01
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_632248c9eb0512_71484637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da6ad153bc775b70910e1c32d7cfc85d851da3d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_add.tpl',
      1 => 1663093171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632248c9eb0512_71484637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1109033191632248c9dea967_97754181', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452112616632248c9dee777_81198839', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1404589225632248c9e96413_51583899', "script");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1109033191632248c9dea967_97754181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1109033191632248c9dea967_97754181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_452112616632248c9dee777_81198839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_452112616632248c9dee777_81198839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2><span></span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/import_csv/" class="btn btn-primary"><i class="fal fa-upload"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Import Contacts'];?>
</a>
                    </div>

                </div>

                <div class="panel-container show" id="ibox_form">

                    <div class="panel-content">

                        <div class="px-2">
                            <div class="alert alert-danger" id="emsg" style="display: none;">
                                <span id="emsgbody"></span>
                            </div>

                            <form id="rform">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3 row">
                                            <label for="account" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</span><span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="account" name="account" class="form-control" autofocus>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="code" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="code" name="code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['predict_customer_number']->value;?>
">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="display_name" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['contact_extra_field'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <input type="text" id="display_name" name="display_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="cid" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <select id="cid" name="cid" class="form-control">
                                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c_selected_id']->value == ($_smarty_tpl->tpl_vars['company']->value['id'])) {?>selected<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>

                                                        </option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>



                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>
                                            <div class="mb-3 row">
                                                <label for="business_number" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</span> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="business_number" name="business_number" class="form-control">
                                                </div>
                                            </div>


                                        <?php }?>

                                        <div class="mb-3 row">
                                            <label for="type" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="defaultChecked" name="customer" value="Customer" <?php if ($_smarty_tpl->tpl_vars['contact_type']->value == 'customer') {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="defaultChecked"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</span></label>
                                                </div>

                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="input_supplier" name="supplier" value="Supplier" <?php if ($_smarty_tpl->tpl_vars['contact_type']->value == 'supplier') {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="input_supplier"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Supplier'];?>
</span></label>
                                                </div>

                                            </div>
                                        </div>


                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] == '1') {?>

                                            <div class="mb-3 row">
                                                <label for="fax" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
</span></label>
                                                <div class="col-sm-9">

                                                    <input type="text" id="fax" name="fax" class="form-control">


                                                </div>
                                            </div>


                                        <?php }?>



                                        <div class="mb-3 row">
                                            <label for="address" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="address" name="address" class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="city" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="city" name="city" class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="state" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="state" name="state" class="form-control">


                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="zip" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="zip" name="zip" class="form-control">
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="country" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select name="country" id="country" class="form-control">
                                                    <option value=""><span></span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                                    <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                                                </select>
                                            </div>
                                        </div>




                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                                            <div class="mb-3 row">
                                                <label class="form-label col-sm-3" for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</span></label>
                                                <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>


                                                    <div class="col-sm-9">

                                                        <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                                                        <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</p>
                                                        <?php }?>
                                                    </div>


                                                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>

                                                    <div class="col-sm-9">
                                                        <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                                                        <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</p>
                                                        <?php }?>
                                                    </div>



                                                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'dropdown') {?>

                                                    <div class="col-sm-9">
                                                        <select id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['f']->value['fieldoptions']), 'fo');
$_smarty_tpl->tpl_vars['fo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
$_smarty_tpl->tpl_vars['fo']->do_else = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
</option>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                        <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</p>
                                                        <?php }?>
                                                    </div>


                                                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'textarea') {?>

                                                    <div class="col-sm-9">
                                                        <textarea id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" rows="3"></textarea>
                                                        <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</p>
                                                        <?php }?>
                                                    </div>

                                                <?php }?>

                                            </div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <div class="mb-3 row">
                                            <label for="email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="email" name="email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="secondary_email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Secondary Email'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="secondary_email" name="secondary_email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="phone" name="phone" class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="currency" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select id="currency" name="currency" class="form-control">

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
                                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == ($_smarty_tpl->tpl_vars['currency']->value['cname'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
                                                        <?php
}
if ($_smarty_tpl->tpl_vars['currency']->do_else) {
?>
                                                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['config']->value['home_currency'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="group" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
 </span></label>
                                            <div class="col-sm-9">

                                                <select class="form-control" name="group" id="group">
                                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['g_selected_id']->value == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                                <span class="help-block "><a href="#" id="add_new_group" class="text-info"> <span class="h6 text-info"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
</a></span> </span>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="owner_id" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select class="form-control" name="owner_id" id="owner_id">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['owners']->value, 'owner');
$_smarty_tpl->tpl_vars['owner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['owner']->value) {
$_smarty_tpl->tpl_vars['owner']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['owner']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['owner']->value->id == $_smarty_tpl->tpl_vars['user']->value->id) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['owner']->value->fullname;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>



                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['customer_custom_username']) {?>

                                            <div class="mb-3 row">
                                                <label for="zip" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 </span></label>
                                                <div class="col-sm-9">

                                                    <input type="text" id="username" name="username" class="form-control">
                                                </div>
                                            </div>

                                        <?php }?>

                                        <div class="mb-3 row">
                                            <label for="password" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="password" id="password" name="password" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="cpassword" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm Password'];?>
</span></label>
                                            <div class="col-sm-9">

                                                <input type="password" id="cpassword" name="cpassword" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="send_client_signup_email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome Email'];?>
</span></label>
                                            <div class="col-sm-9">
                                                <label class="switch s-icons s-outline s-outline-primary">
                                                    <input type="checkbox" name="send_client_signup_email" value="on" id="send_client_signup_email">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">


                                            <button class="btn btn-primary mt-3 me-3" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>


                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1404589225632248c9e96413_51583899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1404589225632248c9e96413_51583899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(".progress").hide();
            $("#emsg").hide();
            var _url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';





            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
                theme: "bootstrap"
            });

            var $cid = $('#cid');

            $cid.select2();

            $country = $("#country");

            $country.select2();


            //
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message:block_msg });
                $.post(base_url + 'contacts/add-post/', $( "#rform" ).serialize())
                    .done(function (data) {
                        var sbutton = $("#submit");
                        if ($.isNumeric(data)) {

                            window.location = base_url + 'contacts/view/' + data;
                        }
                        else {
                            $('#ibox_form').unblock();
                            var body = $("html, body");
                            body.animate({ scrollTop:0 }, '1000', 'swing');
                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });





            <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>


            var $business_number = $("#business_number");

            var $address = $("#address");

            var $city = $("#city");

            var $state = $("#state");

            var $zip = $("#zip");



            function getBusinessDetails() {

                if($cid.val() === '0'){
                   // $business_number.val('');
                    return;
                }

                $.getJSON( base_url + "contacts/get_company_details/" +  $cid.val(), function( data ) {

                    console.log(data);

                    if(data.success === false){

                    }
                    else{

                        $business_number.val(data.business_number);

                        $address.val(data.address1);

                        $city.val(data.city);

                        $state.val(data.state);

                        $zip.val(data.zip);

                        $country.val(data.country).trigger('change');

                    }

                });
            }

            getBusinessDetails();


            $cid.change(function () {

                getBusinessDetails();


            });


            <?php }?>


            $("#add_new_group").click(function(e){

                e.preventDefault();

                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
',
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/add_group/", { group_name: group_name })
                            .done(function( data ) {

                                if ($.isNumeric(data)) {

                                    window.location = _url + 'contacts/add/customer/' + data + '/' + $cid.val();

                                }

                                else {
                                    Swal.fire({
                                        title: '<?php echo __('Error');?>
',
                                        text: data,
                                        type: 'error',
                                        confirmButtonText: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
'
                                    })
                                }

                            });
                    }

                })()


            });





        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
