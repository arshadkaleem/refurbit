<?php
/* Smarty version 4.2.1, created on 2022-09-14 17:33:57
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/dashboard_canvas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_632248c5ac4b05_11808777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acaa272d5b137ce5ccc879db346dca143fd04d3d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/dashboard_canvas.tpl',
      1 => 1660811440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632248c5ac4b05_11808777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1743805419632248c5888957_00117152', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1213408122632248c5a3bab1_72768143', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1743805419632248c5888957_00117152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1743805419632248c5888957_00117152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-12">
                <div id="panel-1" class="panel" data-panel-lock="false" data-panel-close="false" data-panel-collapsed="false"  data-panel-locked="false" data-panel-refresh="false" data-panel-reset="false">
                    <div class="panel-hdr">
                        <h2 class="fw-bolder">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>

                        </h2>

                        <div class="panel-toolbar">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" data-bs-toggle="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Refresh'];?>
">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                            </a>
                        </div>

                    </div>

                    <div class="panel-container show">
                        <div class="panel-content border-left-0 border-right-0 border-top-0"

                                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                    style="background: #232F47;"
                                <?php } else { ?>
                                    style="background: #fff;"
                                <?php }?>

                        >
                            <div class="row no-gutters">

                                <div class="col-lg-4 col-xl-4">

                                    <div class="p-8  mb-2 flex-grow-1" style="
                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                            background: #232F47;
                                    <?php } else { ?>
                                            background: #6A6CFF;
                                    <?php }?>
                                            border-radius: 8px; padding: 26px 20px; margin-left:1rem; margin-right:1rem;
                                            box-shadow: 0 0.1rem 1rem 0.25rem rgb(0 0 0 / 5%);
                                            ">

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="symbol symbol-circle symbol-light-success symbol-40 flex-shrink-0 me-3">
                                                <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg><!--end::Svg Icon--></span>                            </div>
                                            </div>
                                            <div class="ms-3">
                                                <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_income']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                                <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="symbol symbol-circle symbol-light-danger symbol-40 flex-shrink-0 me-3">
                                                <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right-square-fill" viewBox="0 0 16 16">
  <path d="M14 16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12zM5.904 5.197 10 9.293V6.525a.5.5 0 0 1 1 0V10.5a.5.5 0 0 1-.5.5H6.525a.5.5 0 0 1 0-1h2.768L5.197 5.904a.5.5 0 0 1 .707-.707z"/>
</svg>
                                    </span>                            </div>
                                            </div>
                                            <div class="ms-3">
                                                <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_expense']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                                <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
</div>
                                            </div>
                                        </div>

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="symbol symbol-circle symbol-light-success symbol-40 flex-shrink-0 me-3">
                                                <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#14B981" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
</svg>
                                </span>                            </div>
                                            </div>
                                            <div class="ms-3">
                                                <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['ti']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                                <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Today'];?>
</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="symbol symbol-circle symbol-light-warning symbol-40 flex-shrink-0 me-3">
                                                <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>
                                    </span>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['te']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                                <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Today'];?>
</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="symbol symbol-circle symbol-light-primary symbol-40 flex-shrink-0 me-3">
                                                <div class="symbol-label">
                                <span class="svg-icon svg-icon-md ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5046E4" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>
                                    </span>                            </div>
                                            </div>
                                            <div class="ms-3">
                                                <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['mi']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                                <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income This Month'];?>
</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-light-danger symbol-40 flex-shrink-0 me-3">
                                                <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
  <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
</svg>
                                    </span>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['me']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                                <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense This Month'];?>
</div>
                                            </div>
                                        </div>

                                    </div>


                                </div>


                                <div class="col-lg-8 col-xl-8">

                                    <div style="padding-left: 0.5rem; padding-right: 1rem;">

                                        <div class="row">



                                            <div class="<?php if ($_smarty_tpl->tpl_vars['config']->value['leads'] && $_smarty_tpl->tpl_vars['config']->value['companies']) {?>col-md-4 <?php } else { ?> col-md-6<?php }?>">

                                                <a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/list/">
                                                    <div class="card mb-2" style="



                                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                                            background-color: #213137;
                                                    <?php }?>

                                                            height: 130px"

                                                    >

                                                        <div class="card-body" >
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="h1 mb-0"><?php echo $_smarty_tpl->tpl_vars['customers_total']->value;?>
</div>


                                                                </div>
                                                                <div class="col">
                                                                    <div class="symbol symbol-circle symbol-light symbol-40 flex-shrink-0 me-3 float-end">
                                                                        <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor]" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                                </span>                            </div>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h4 class="text-muted mt-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</h4>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </a>


                                            </div>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['companies'])) && $_smarty_tpl->tpl_vars['config']->value['companies']) {?>

                                                <div class="<?php if ($_smarty_tpl->tpl_vars['config']->value['leads'] && $_smarty_tpl->tpl_vars['config']->value['companies']) {?>col-md-4 <?php } else { ?> col-md-6<?php }?>">

                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/companies/">
                                                        <div class="card mb-2" style="

                                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                                                background-color: #372F29;
                                                        <?php }?>

                                                                height: 130px">

                                                            <div class="card-body" >
                                                                <div class="row">

                                                                    <div class="col">
                                                                        <div class="h1 mb-0"><?php echo $_smarty_tpl->tpl_vars['companies_total']->value;?>
</div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="symbol symbol-circle symbol-light symbol-40 flex-shrink-0 me-3 float-end">
                                                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>
                                </span>                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                                <h4 class="text-muted mt-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
</h4>
                                                            </div>

                                                        </div>
                                                    </a>


                                                </div>

                                            <?php }?>


                                            <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['leads'])) && $_smarty_tpl->tpl_vars['config']->value['leads']) {?>

                                                <div class="<?php if ($_smarty_tpl->tpl_vars['config']->value['leads'] && $_smarty_tpl->tpl_vars['config']->value['companies']) {?>col-md-4 <?php } else { ?> col-md-6<?php }?>">

                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
leads/">

                                                        <div class="card mb-2" style="

                                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                                                background-color: #372533;
                                                        <?php }?>
                                                                height: 130px"
                                                        >
                                                            <div class="card-body">

                                                                <div class="row">
                                                                    <div class="col">

                                                                        <div class="h1  mb-0"><?php echo $_smarty_tpl->tpl_vars['leads_total']->value;?>
</div>

                                                                    </div>
                                                                    <div class="col">

                                                                        <div class="symbol symbol-circle symbol-light symbol-40 flex-shrink-0 me-3 float-end">
                                                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shift-fill" viewBox="0 0 16 16">
  <path d="M7.27 2.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v3a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-3H1.654C.78 10.5.326 9.455.924 8.816L7.27 2.047z"/>
</svg>
                                </span>                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h4 class="text-muted mt-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Leads'];?>
</h4>

                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>

                                                    </a>

                                                </div>
                                            <?php }?>

                                        </div>
                                    </div>


                                    <div class="position-relative">



                                        <div class="col-md-12 mt-3">
                                            <div id="cash_flow_chart">

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>



            </div>
        </div>





        <div class="row">





            <div class="col-lg-6">
                <div id="panel-12" class="panel border-0 ">
                    <div class="panel-hdr">
                        <h2 class="fw-bolder">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Clients'];?>

                        </h2>
                    </div>
                    <div class="panel-container show p-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>

                                    </th>

                                    <th class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>

                                    </th>


                                    <th class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>

                                    </th>
                                </tr>
                                </thead>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_customers']->value, 'recent_customer');
$_smarty_tpl->tpl_vars['recent_customer']->iteration = 0;
$_smarty_tpl->tpl_vars['recent_customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_customer']->value) {
$_smarty_tpl->tpl_vars['recent_customer']->do_else = false;
$_smarty_tpl->tpl_vars['recent_customer']->iteration++;
$__foreach_recent_customer_0_saved = $_smarty_tpl->tpl_vars['recent_customer'];
?>

                                    <tr>
                                        <td data-order="<?php echo $_smarty_tpl->tpl_vars['recent_customer']->iteration;?>
">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->id;?>
"><?php echo sp_get_contact_image($_smarty_tpl->tpl_vars['recent_customer']->value);?>
</a>
                                        </td>
                                        <td>
                                            <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->id;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->account;?>

                                            </a></br>
                                            <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->email;?>

                                        </td>



                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['recent_customer']->value->created_at)) {?>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_customer']->value->created_at));?>

                                            <?php }?>
                                        </td>
                                    </tr>

                                <?php
$_smarty_tpl->tpl_vars['recent_customer'] = $__foreach_recent_customer_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>

                        </div>

                    </div>
                </div>
            </div>








            <div class="col-lg-6">
                <div id="panel-3" class="panel border-0" data-panel-close="false">
                    <div class="panel-hdr">
                        <h2 class="fw-bolder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h2>

                    </div>
                    <div class="panel-container show p-3">

                        <div class="table-responsive  widget-table">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th class="h6">#</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                </tr>
                                </thead>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr class="cursor-pointer clickable-row" data-id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                                        <td class="text-info h6">
                                            <strong>
                                                <?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?>
                                            </strong>
                                        </td>
                                        <td class="h6">


                                            <strong><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</strong> <br>
                                        </td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                        <td class="h6">

                                            <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['date'])) {?>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>

                                                <?php } else { ?>
                                                --
                                            <?php }?>


                                        </td>
                                        <td class="h6">

                                            <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['duedate'])) {?>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>

                                                <?php } else { ?>
                                                --
                                            <?php }?>

                                        </td>
                                        <td class="h6">
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>

                                                <span class="badge badge-outline badge-outline-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>

                                            <?php } else { ?>

                                                <span class="badge badge-outline  badge-outline-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>

                                            <?php }?>


                                        </td>

                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>

                        </div>

                        <div class="panel-content">
                            <div id="invoice_stats"></div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="col-lg-6">
                <div id="panel-5" class="panel">
                    <div class="panel-hdr">
                        <h2 class="fw-bolder">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Vs_Expense'];?>

                        </h2>
                    </div>
                    <div class="panel-container show p-3">
                        <div id="chart_income_vs_expense"></div>
                    </div>
                </div>
            </div>

            <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['projects'])) && $_smarty_tpl->tpl_vars['config']->value['projects']) {?>
                <div class="col-lg-6">
                    <div id="panel-4" class="panel border-0">
                        <div class="panel-hdr">
                            <h2 class="fw-bolder">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Projects'];?>

                            </h2>
                        </div>
                        <div class="panel-container border-0 show p-3">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>

                                    <th class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>

                                    </th>
                                    <th class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Budget'];?>


                                    </th>
                                    <td class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                                    </td>

                                    <th class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>

                                    </th>

                                </tr>
                                </thead>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_projects']->value, 'project');
$_smarty_tpl->tpl_vars['project']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->do_else = false;
?>

                                    <tr>

                                        <td class="h6">
                                            <?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>

                                        </td>
                                        <td class="h6">
                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['project']->value->budget,$_smarty_tpl->tpl_vars['project']->value->currency);?>

                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['project']->value->status == 'Completed') {?>
                                                <span class="badge badge-outline text-uppercase badge-outline-success mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                                            <?php } else { ?>
                                                <span class="badge badge-outline text-uppercase badge-outline-warning mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                                            <?php }?>

                                        </td>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['project']->value->due_date)) {?>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['project']->value->due_date));?>

                                                <?php } else { ?>
                                                --
                                            <?php }?>
                                        </td>

                                    </tr>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>
                        </div>
                    </div>
                </div>

            <?php }?>

            <div class="col-lg-6">
                <div id="panel-11" class="panel border-0">
                    <div class="panel-hdr">
                        <h2 class="fw-bolder">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Calendar'];?>

                        </h2>
                    </div>
                    <div class="panel-container show p-5">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>




            <div class="col-lg-6">
                <div class="panel" id="panel-7">
                    <div class="panel-hdr">

                        <h2 class="fw-bolder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Expense'];?>
</h2>
                    </div>

                    <div class="panel-container show p-3 ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                    <th class="text-end h6 "><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                </tr>
                                </thead>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exp']->value, 'exps');
$_smarty_tpl->tpl_vars['exps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['exps']->value) {
$_smarty_tpl->tpl_vars['exps']->do_else = false;
?>
                                    <tr>
                                        <td class="text-info h6">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['exps']->value['date'])) {?>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['exps']->value['date']));?>

                                                <?php } else { ?>
                                                --
                                            <?php }?>
                                        </td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['exps']->value['id'];?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['exps']->value['description'];?>
</strong></a> </td>
                                        <td class="text-end text-danger amount h6"><?php echo formatCurrency($_smarty_tpl->tpl_vars['exps']->value['amount'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-6">
                <div id="panel-2" class="panel" data-panel-fullscreen="false">
                    <div class="panel-hdr">
                        <h2 class="fw-bolder">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense by Category'];?>

                        </h2>
                    </div>
                    <div class="panel-container show">

                        <div class="panel-content p-0">
                            <div id="expense_chart" class=""></div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="panel" id="panel-6">
                    <div class="panel-hdr">
                        <h2 class="fw-bolder"><?php ob_start();
echo __('Net Worth n Account Balances');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h2>
                        <div class="panel-toolbar">

                            <a href="#" id="set_goal" class="btn btn-primary btn-xs pull-right"> <?php ob_start();
echo __('Set Goal');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 </a>
                        </div>


                    </div>
                    <div class="panel-container" style="min-height: 365px;">
                        <div class="panel-content">

                            <h1 class="text-center amount"><?php echo formatCurrency($_smarty_tpl->tpl_vars['net_worth']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h1>


                            <div>
                                <span class="amount"><?php echo formatCurrency($_smarty_tpl->tpl_vars['net_worth']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <span class="amount"><?php echo $_smarty_tpl->tpl_vars['config']->value['networth_goal'];?>
</span>
                                <small class="float-right"><span class="amount_no_currency"><?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
</span>%</small>

                                <div class="progress progress-small">
                                    <div style="width: <?php echo $_smarty_tpl->tpl_vars['pgb']->value;?>
%;" class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['pgc']->value;?>
  bg-success"></div>
                                </div>

                            </div>


                            <table class="table" style="margin-top: 26px;">

                                <thead class="thead-light">
                                <tr>
                                    <th class="text-info h6"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</strong></th>

                                    <th class="text-end h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                                </tr>
                                </thead>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['balances']->value['banks'], 'bank');
$_smarty_tpl->tpl_vars['bank']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->do_else = false;
?>

                                    <tr>
                                        <td class="text-info h6"><strong><?php echo $_smarty_tpl->tpl_vars['bank']->value->account;?>
</strong></td>

                                        <td class="text-end h6">
                                            <?php if (((isset($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id])))) {?>
                                                <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>

                                            <?php }?>
                                        </td>

                                    </tr>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>



                        </div>





                        <div>





                        </div>






                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing'] && $_smarty_tpl->tpl_vars['all_data_access']->value) {?>


                <div class="col-md-6">

                    <div class="panel" id="panel-7">
                        <div class="panel-hdr">
                            <h2 class="fw-bolder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</h2>
                        </div>
                        <div class="panel-container">
                            <div class="panel-content">
                                <div class="ibox-content">

                                    <div id="sales_pie_graph"></div>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="col-md-6">
                    <div class="panel" id="panel-8">
                        <div class="panel-hdr">
                            <h2 class="fw-bolder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</h2>
                            <div class="panel-toolbar">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/" class="btn btn-primary btn-xs pull-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a>
                            </div>



                        </div>
                        <div class="panel-container">
                            <table class="table table-striped " >
                                <thead class="thead-light">
                                <tr>

                                    <th class="h6"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</strong></th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Count'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>


                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_sold']->value, 'sold');
$_smarty_tpl->tpl_vars['sold']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sold']->value) {
$_smarty_tpl->tpl_vars['sold']->do_else = false;
?>
                                    <tr>

                                        <td class="text-info h6">
                                            <strong>
                                                <?php echo strTrunc($_smarty_tpl->tpl_vars['sold']->value['name'],30);?>

                                            </strong>

                                        </td>
                                        <td class="h6"><?php echo floor($_smarty_tpl->tpl_vars['sold']->value['sold_count']);?>
</td>
                                        <td class="amount h6"><?php echo $_smarty_tpl->tpl_vars['sold']->value['total_amount'];?>
</td>



                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>
                            </table>


                        </div>



                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="panel" id="panel-6">
                        <div class="panel-hdr">

                            <h2 class="fw-bolder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Income'];?>
</h2>
                        </div>
                        <div class="panel-container show p-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                        <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                        <th class="text-end h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    </tr>
                                    </thead>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inc']->value, 'incs');
$_smarty_tpl->tpl_vars['incs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['incs']->value) {
$_smarty_tpl->tpl_vars['incs']->do_else = false;
?>
                                        <tr>
                                            <td class="h6 text-info">

                                                <?php if (!empty($_smarty_tpl->tpl_vars['incs']->value->date)) {?>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['incs']->value['date']));?>

                                                <?php } else { ?>
                                                --
                                                <?php }?>


                                            </td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['incs']->value['id'];?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['incs']->value['description'];?>
</strong></a> </td>
                                            <td class="text-end text-success amount h6"><?php echo formatCurrency($_smarty_tpl->tpl_vars['incs']->value['amount'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                                </table>
                            </div>

                        </div>

                    </div>

                </div>

            <?php }?>



        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1213408122632248c5a3bab1_72768143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1213408122632248c5a3bab1_72768143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

        function displayEvent(event_id=0,date=0)
        {
            $.fancybox.open({
                src  :  base_url + 'calendar/event/'+event_id+'/'+date,
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        // $('[data-toggle="datepicker"]').datepicker();
                        // $start_time.timepicker();
                        // $end_time.timepicker();

                        $('#start').datepicker();
                        $('#start_time').timepicker();
                        $('#end').datepicker();

                        let eventForm = $('#eventForm');
                        eventForm.on('submit',function (e) {
                            e.preventDefault();
                            $.post( base_url + "calendar/save_event/", eventForm.serialize())
                                .done(function( data ) {



                                    if ($.isNumeric(data)) {

                                        location.reload();

                                    }

                                    else {
                                        toastr.error(data);
                                    }

                                });


                            return false;
                        });

                    }
                },
            });
        }

        $(function () {

            $.getJSON( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard/json_income_vs_exp/", function( data ) {
                var options1 = {
                    chart: {
                        fontFamily: 'Open Sans, sans-serif',
                        height: 300,
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                        foreColor: '#fff',
                        <?php }?>
                        toolbar: {
                            show: false
                        },
                        events: {
                            mounted: function(ctx, config) {
                                const highest1 = ctx.getHighestValueInSeries(0);
                                const highest2 = ctx.getHighestValueInSeries(1);

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                                    y: highest1,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
                                    y: highest2,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })
                            },
                        }
                    },
                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                    colors: ["#4586DB", "#C23C3E"],
                    <?php } else { ?>
                    colors: ["#5443EE", "#FB8141"],
                    <?php }?>

                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        width: [0, 2, 5],
                        curve: 'smooth'
                    },
                    fill: {
                        opacity: [0.5, 0.25, 1],
                        gradient: { shade: '#1449DC', shadeIntensity: .8, opacityFrom: .8, opacityTo: .25, stops: [0, 95, 100] }
                    },

                    markers: {
                        discrete: [{
                            seriesIndex: 0,
                            dataPointIndex: 7,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 5
                        }, {
                            seriesIndex: 2,
                            dataPointIndex: 11,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 4
                        }]
                    },
                    subtitle: {
                        text: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth'];?>
',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 35,
                        floating: false,
                        style: {
                            fontSize: '14px',
                            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                            color:  '#fff',
                            <?php } else { ?>
                            color:  '#565674',
                            <?php }?>
                        }
                    },
                    title: {
                        text: '<?php echo formatCurrency($_smarty_tpl->tpl_vars['net_worth']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 0,
                        floating: false,
                        style: {
                            fontSize: '25px',
                            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                            color:  '#fff',
                            <?php } else { ?>
                            color:  '#0e1726'
                            <?php }?>
                        },
                    },

                    series: [{
                        type: 'area',
                        name: 'Income',
                        data: data.Income,

                    }, {
                        type: 'area',
                        name: 'Expenses',
                        data: data.Expense,
                    }],
                    labels: data.Months,
                    xaxis: {


                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: 0,
                            offsetY: 5,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-xaxis-title',
                            },
                        }
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value, index) {
                                return (value / 1000) + 'K'
                            },
                            offsetX: -22,
                            offsetY: 0,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-yaxis-title',
                            },
                        }
                    },
                    grid: {
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                        borderColor: "#2B2C3F",
                        <?php } else { ?>
                        borderColor: "#f1f1f1",
                        <?php }?>
                        padding: {
                            top: 10
                        },
                        strokeDashArray: 4,
                        yaxis: {
                            lines: {
                                show: true
                            }
                        }

                    },
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right',
                        offsetY: -50,
                        fontSize: '16px',
                        fontFamily: 'Open Sans, sans-serif',
                        markers: {
                            width: 10,
                            height: 10,
                            strokeWidth: 0,
                            strokeColor: '#fff',
                            fillColors: undefined,
                            radius: 12,
                            onClick: undefined,
                            offsetX: 0,
                            offsetY: 0
                        },
                        itemMargin: {
                            horizontal: 0,
                            vertical: 20
                        }
                    },
                    tooltip: {
                        theme: 'dark',
                        marker: {
                            show: true,
                        },
                        x: {
                            show: false,
                        }
                    },
                    responsive: [{
                        breakpoint: 575,
                        options: {
                            legend: {
                                offsetY: -30,
                            },
                        },
                    }],
                    plotOptions: { bar: { horizontal: !1, columnWidth: "15%", endingShape: "rounded" } },
                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                    background: '#000',
                    foreColor: '#fff',
                    <?php }?>
                };


                var chart1 = new ApexCharts(
                    document.querySelector("#cash_flow_chart"),
                    options1
                );

                chart1.render();
            });


            var expense_chart_options = {
                chart: {
                    height: 403,
                    type: 'bar',
                    toolbar: {
                        show: false,
                    },
                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                    foreColor: '#fff',
                    <?php }?>

                },
                colors: ["#5C34F4"],
                xaxis: {
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expense_cats']->value, 'expnese_cat');
$_smarty_tpl->tpl_vars['expnese_cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['expnese_cat']->value) {
$_smarty_tpl->tpl_vars['expnese_cat']->do_else = false;
?>
                        '<?php echo $_smarty_tpl->tpl_vars['expnese_cat']->value->name;?>
',
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                },
                series: [{
                    data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expense_cats']->value, 'expnese_cat');
$_smarty_tpl->tpl_vars['expnese_cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['expnese_cat']->value) {
$_smarty_tpl->tpl_vars['expnese_cat']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['expnese_cat']->value->total_amount;?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
                }],
                plotOptions: {
                    bar: {
                        horizontal: true,
                        endingShape: 'rounded',

                    }
                },
                grid: {
                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                    borderColor: "#2B2C3F"
                    <?php } else { ?>
                    borderColor: "#f1f1f1"
                    <?php }?>

                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }

            var expense_chart = new ApexCharts(
                document.querySelector("#expense_chart"),
                expense_chart_options
            );

            expense_chart.render();


            $.getJSON( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard/json_d_chart_data/", function( data ) {
                var chart_income_vs_expense_options = {
                    chart: {
                        height: 400,
                        type: 'bar',
                        toolbar: {
                            show: false,
                        },
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                        foreColor: '#fff',
                        <?php }?>
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 0,
                        colors: ['transparent']
                    },
                    series: [{
                        name: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Income'];?>
',
                        data: data.Income
                    }, {
                        name: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense'];?>
',
                        data: data.Expense
                    }],
                    xaxis: {
                        categories: [
                            '01',
                            '02',
                            '03',
                            '04',
                            '05',
                            '06',
                            '07',
                            '08',
                            '09',
                            '10',
                            '11',
                            '12',
                            '13',
                            '14',
                            '15',
                            '16',
                            '17',
                            '18',
                            '19',
                            '20',
                            '21',
                            '22',
                            '23',
                            '24',
                            '25',
                            '26',
                            '27',
                            '28',
                            '29',
                            '30',
                            '31'
                        ],
                    },
                    yaxis: {
                        title: {
                            text: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
'
                        }
                    },
                    colors: ["#5C34F4", "#FC9740"],
                    fill: {
                        opacity: 1

                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val
                            }
                        }
                    }
                }

                var chart_income_vs_expense = new ApexCharts(
                    document.querySelector("#chart_income_vs_expense"),
                    chart_income_vs_expense_options
                );

                chart_income_vs_expense.render();
            });

            $('.clickable-row').on('click',function () {
                window.location = base_url + 'invoices/view/' + $(this).data('id');
            });

            var invoice_stats = $("#invoice_stats");

            $.get( base_url + "dashboard/invoice_stats_json/", function( data ) {

                invoice_stats.html(' <span class="font-12 head-font txt-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
 <span class="float-right">'+ data.Unpaid.percentage +'%</span></span>\
                        <div class="progress my-2 progress-small mt-10">\
                        <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '+ data.Unpaid.percentage +'%" role="progressbar"> <span class="sr-only">'+ data.Unpaid.percentage +'%</span> </div>\
                        </div>\
                        <span class="font-12 head-font txt-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
 <span class="float-right">'+ data['Partially Paid'].percentage +'%</span></span>\
                        <div class="progress my-2 progress-small mt-10">\
                        <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '+ data['Partially Paid'].percentage +'%" role="progressbar"> <span class="sr-only">'+ data['Partially Paid'].percentage +'</span> </div>\
                        </div>\
                        <span class="font-12 head-font txt-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
 <span class="float-right">'+ data.Paid.percentage +'%</span></span>\
                        <div class="progress my-2 progress-small mt-10">\
                        <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '+ data.Paid.percentage +'%" role="progressbar"> <span class="sr-only">'+ data.Paid.percentage +'</span> </div>\
                        </div>\
                        ');
                invoice_stats.slideDown( "slow" );

                // Load Account Balances



            });


            $('#clx-page-content').smartPanel({
                localStorage: true,
                onChange: function () {},
                onSave: function () {},
                opacity: 1,
                deleteSettingsKey: '#deletesettingskey-options',
                settingsKeyLabel: 'Reset settings?',
                deletePositionKey: '#deletepositionkey-options',
                positionKeyLabel: 'Reset position?',
                sortable: true,
                buttonOrder: '%collapse% %fullscreen% %close%',
                buttonOrderDropdown: '%refresh% %locked% %color% %custom% %reset%',
                // customButton: true,
                // customButtonLabel: "Custom Button",
                onCustom: function () {},
                closeButton: false,
                onClosepanel: function() {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onClosepanel")
                },
                fullscreenButton: true,
                onFullscreen: function() {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onFullscreen")
                },
                collapseButton: true,
                onCollapse: function() {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onCollapse")
                },
                lockedButton: false,
                lockedButtonLabel: "Lock Position",
                onLocked: function() {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onLocked")
                },
                // refreshButton: true,
                // refreshButtonLabel: "Refresh Content",
                // onRefresh: function() {
                //     if (myapp_config.debugState)
                //         console.log($(this).closest(".panel").attr('id') + " onRefresh")
                // },
                colorButton: true,
                colorButtonLabel: "Panel Style",
                onColor: function() {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onColor")
                },
                panelColors: ['bg-primary-700 bg-success-gradient',
                    'bg-primary-500 bg-info-gradient',
                    'bg-primary-600 bg-primary-gradient',
                    'bg-info-600 bg-primray-gradient',
                    'bg-info-600 bg-info-gradient',
                    'bg-info-700 bg-success-gradient',
                    'bg-success-900 bg-info-gradient',
                    'bg-success-700 bg-primary-gradient',
                    'bg-success-600 bg-success-gradient',
                    'bg-danger-900 bg-info-gradient',
                    'bg-fusion-400 bg-fusion-gradient',
                    'bg-faded'],
                resetButton: true,
                resetButtonLabel: "Reset Panel",
                onReset: function() {
                    if (myapp_config.debugState)
                        console.log( $(this).closest(".panel").attr('id') + " onReset callback" )
                }
            });


            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl,
                {
                    plugins: ['dayGrid', 'list', 'timeGrid', 'interaction', 'bootstrap'],
                    themeSystem: 'bootstrap',
                    timeZone: 'UTC',
                    //dateAlignment: "month", //week, month
                    buttonText:
                        {
                            today: 'today',
                            month: 'month',
                            week: 'week',
                            day: 'day',
                            list: 'list'
                        },
                    eventTimeFormat:
                        {
                            hour: 'numeric',
                            minute: '2-digit',
                            meridiem: 'short'
                        },
                    navLinks: true,
                    header:
                        {
                            left: 'title',
                            center: '',
                            right: 'today prev,next'
                        },
                    footer:
                        {
                            left: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
                            center: '',
                            right: ''
                        },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    eventSources: [{
                        url: base_url + 'calendar/data/',
                        type: 'GET',
                        error: function() {

                        }
                    } ],
                    viewSkeletonRender: function()
                    {
                        $('.fc-toolbar .btn-default').addClass('btn-sm');
                        $('.fc-header-toolbar h2').addClass('fs-md');
                        $('#calendar').addClass('fc-reset-order')
                    },

                    dateClick: function(info) {
                        displayEvent(0,info.dateStr);
                    },
                    eventClick: function(info) {
                        displayEvent(info.event.id);
                    }


                });

            calendar.render();

            $("#set_goal").click(function (e) {
                e.preventDefault();

                (async () => {

                    const { value: result } = await Swal.fire({
                        title: '<?php echo __('Set New Goal for Net Worth');?>
',
                        input: 'text',
                        inputLabel: '<?php echo __('Goal');?>
',
                        inputPlaceholder: '<?php echo __('Amount');?>
',
                    })

                    if (result) {

                        $.post( base_url + "settings/networth_goal/", { goal: result })
                            .done(function( data ) {
                                location.reload();
                            });
                    }

                })()

            });




            var options = {
                series: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_sold']->value, 'sold');
$_smarty_tpl->tpl_vars['sold']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sold']->value) {
$_smarty_tpl->tpl_vars['sold']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['sold']->value['sold_count'];?>
,
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                chart: {
                    height: 350,
                    type: 'radialBar',
                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                    foreColor: '#fff',
                    colors: ["#4586DB", "#C23C3E"],
                    <?php } else { ?>
                    colors: ["#7E5FF4", "#FB8141"],
                    <?php }?>


                },
                plotOptions: {
                    radialBar: {
                        dataLabels: {
                            name: {
                                fontSize: '22px',
                            },
                            value: {
                                fontSize: '16px',
                            },
                            total: {
                                show: true,
                                label: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
',
                                formatter: function (w) {
                                    // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                    return <?php echo count($_smarty_tpl->tpl_vars['item_sold']->value);?>

                                }
                            }
                        }
                    }
                },
                labels: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_sold']->value, 'sold');
$_smarty_tpl->tpl_vars['sold']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sold']->value) {
$_smarty_tpl->tpl_vars['sold']->do_else = false;
?>
                    '<?php echo strTrunc(addslashes($_smarty_tpl->tpl_vars['sold']->value['name']),30);?>
',
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                background: '#000',
                <?php }?>
            }


            var chart = new ApexCharts(document.querySelector("#sales_pie_graph"), options);
            chart.render();




        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
