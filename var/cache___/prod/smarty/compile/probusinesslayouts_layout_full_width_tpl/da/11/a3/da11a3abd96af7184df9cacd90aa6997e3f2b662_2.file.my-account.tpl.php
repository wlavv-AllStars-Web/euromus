<?php
/* Smarty version 4.3.4, created on 2024-06-11 12:41:55
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\customer\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666838030f8078_69308181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da11a3abd96af7184df9cacd90aa6997e3f2b662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\customer\\my-account.tpl',
      1 => 1717765774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/block-address.tpl' => 1,
  ),
),false)) {
function content_666838030f8078_69308181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_954781644666838030cc6f0_83133205', 'page_content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_721643396666838030f6b83_55561742', 'page_footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_1590464179666838030e3e14_59273639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your addresses','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h1>
        <?php
}
}
/* {/block 'page_title'} */
/* {block 'customer_address'} */
class Block_580610763666838030e5326_81374143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/block-address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('address'=>$_smarty_tpl->tpl_vars['address']->value), 0, true);
?>
                <?php
}
}
/* {/block 'customer_address'} */
/* {block 'page_content'} */
class Block_954781644666838030cc6f0_83133205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_954781644666838030cc6f0_83133205',
  ),
  'page_title' => 
  array (
    0 => 'Block_1590464179666838030e3e14_59273639',
  ),
  'customer_address' => 
  array (
    0 => 'Block_580610763666838030e5326_81374143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row myaccount-container">
    <div class="col-lg-12 banner-myaccount">
      <img src="https://www.allstarsmotorsport.fr/img/cms/Header_pages/myaccount.jpg" />
    </div>


    <div class="col-lg-12">
    <ul class="nav nav-tabs" id="menu-client" role="tablist" style="display: flex;align-items:center;background-color: #f7f7f7; border: 1px solid #d8d8d8; height: 55px;margin-top: 20px;">
            <li class="nav-item">
        <a class="nav-link active" id="order_history-tab" data-toggle="tab" href="#order_history" role="tab" aria-controls="order_history" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-list-ol website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-dashboard website_blue font-size-40"></i></a>
      </li>
      
            <li class="nav-item">
        <a class="nav-link" id="addresses-tab" data-toggle="tab" href="#addresses" role="tab" aria-controls="addresses" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-building website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-truck website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-user website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item" style="width: 100%;display:flex;justify-content: end;">
        <a class="nav-link" id="logout-tab"  href="/?mylogout="><i class="fa-solid fa-lock-open"></i></a>
      </li>
    </ul>


    <div class="tab-content" id="myTabContent">
            <div class="tab-pane  show active" id="order_history" role="tabpanel" aria-labelledby="order_history-tab">
        <h1>Order history</h1>

        
        <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
          <table class="table table-striped table-bordered table-labeled hidden-sm-down">
            <thead class="thead-default">
              <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
                <th class="hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
                <th class="hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                <tr>
                  <th scope="row"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['reference'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</th>
                  <td><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['order_date'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</td>
                  <td class="text-xs-right"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</td>
                  <td class="hidden-md-down"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['payment'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</td>
                  <td>
                    <span
                      class="label label-pill <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                      style="background-color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['history']['current']['color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                    >
                      <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                    </span>
                  </td>
                  <td class="text-xs-center hidden-md-down">
                    <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                      <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE415;</i></a>
                    <?php } else { ?>
                      -
                    <?php }?>
                  </td>
                  <td class="text-xs-center order-actions">
                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['details_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                      <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
                    <?php }?>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
      
          <div class="orders hidden-md-up">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
              <div class="order">
                <div class="row">
                  <div class="col-xs-10">
                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['details_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><h3><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['reference'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3></a>
                    <div class="date"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['order_date'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                    <div class="total"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                    <div class="status">
                      <span
                        class="label label-pill <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                        style="background-color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['history']['current']['color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                      >
                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                      </span>
                    </div>
                  </div>
                  <div class="col-xs-2 text-xs-right">
                      <div>
                        <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['details_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                          <i class="material-icons">&#xE8B6;</i>
                        </a>
                      </div>
                      <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                        <div>
                          <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                            <i class="material-icons">&#xE863;</i>
                          </a>
                        </div>
                      <?php }?>
                  </div>
                </div>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
      
        <?php }?>
      </div>

      <div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">  
        <div class="col-sm-12 text-center">
            <div class="row statistics_container" style="max-width: 1350px; margin: 0 auto;display:flex;">
              <div class="col-lg-8 col-md-8">
                    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total purchases per month'),$_smarty_tpl ) );?>
</div>
                    <canvas id="myChart" width="664" height="332"></canvas>
                </div>
                <div class="col-lg-2"></div>
              <div class="col-lg-4">
                  <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total purchases by brand (€)'),$_smarty_tpl ) );?>
</div>
                    <canvas id="chart-area" height="332" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>
      </div>



            <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590464179666838030e3e14_59273639', 'page_title', $this->tplIndex);
?>

          <div class="row">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value['addresses'], 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
            <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 1rem 0;">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_580610763666838030e5326_81374143', 'customer_address', $this->tplIndex);
?>

            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
          <div class="clearfix"></div>
          <div class="addresses-footer">
            <a class="btn btn-primary" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['address'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-address">
              <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </a>
          </div>
      </div>

      <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
          <img src="https://www.allstarsmotorsport.fr/img/cms/Content_pages/shipping/ShipRates.jpg" style="max-width: 1000px;"/>
      </div>
      
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
        <div class="form-personal-info" style="padding-top: 2rem;">
          
          
          <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" class="std">
              <div class="left-form-personal col-lg-6 col-xs-12">
                <div class="form-group col-lg-9">
                  <h1 style="text-align: center;">Your Personal Information</h1>
                  <p style="text-align: center;">Please be sure to update your personal information if changed.</p>
                </div>
                <div class="radio-btns-form-personal  col-lg-12 col-md-6">
                  <div class="form-check col-md-3 col-xs-6" style="text-align: center;">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                    Mr.
                    </label>
                  </div>
                  <div class="form-check  col-md-3 col-xs-6" style="text-align: center;">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                    Mrs.
                    </label>
                  </div>
                </div>

                              <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" value="<?php echo htmlspecialchars((string) $_POST['firstname'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" value="<?php echo htmlspecialchars((string) $_POST['lastname'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars((string) $_POST['email'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
              <div class="form-row col-lg-9 col-md-7 ">
                <div class="form-group col-lg-12 col-md-12 col-xs-12 mx-0">
                  <label>Date of Birth</label>
                </div>
                <div class="form-group col-lg-4 col-md-4 col-xs-4 pl-0">
                  <select id="inputState" class="form-control">
                    <option selected>Day</option>
                    <option>...</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                      <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value == $_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <div class="form-group col-lg-4 col-md-4 col-xs-4 p-0">
                  <select id="inputState" class="form-control">
                    <option selected>Month</option>
                    <option>...</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value == $_smarty_tpl->tpl_vars['k']->value)) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl ) );?>
&nbsp;</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <div class="form-group col-lg-4 col-md-4 col-xs-4 pr-0">
                  <select id="inputState" class="form-control">
                    <option selected>Year</option>
                    <option>...</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value == $_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>
                <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="old_passwd ">Current Password</label>
                  <input type="password" class="form-control is_required validate" name="old_passwd" id="old_passwd" data-validate="isPasswd">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="passwd">New Password</label>
                  <input type="password" class="form-control is_required validate" name="passwd" id="passwd" data-validate="isPasswd">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="confirmation">New Password Confirmation</label>
                  <input type="password" class="form-control is_required validate" name="confirmation" id="confirmation" data-validate="isPasswd">
                </div>
                                <div class="form-group col-lg-12 col-md-7 col-xs-12">
                  <div class="form-check col-md-12">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        <a href="https://www.all-stars-distribution.com/en/content/20-terms-and-conditions">Sign up for our newsletter!</a>
                      </label>
                    
                  </div>
                </div>
                                          </div>
                        <div class="right-form-personal  col-lg-6 col-xs-12">
              <div class="form-group col-lg-12 col-md-7 col-xs-12" style="padding-top: 2rem;">
              <h1 style="text-align: center;">Your Company Information</h1>
              </div>
                              <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="inputEmail4">Company Name</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-xs-12">
                  <label for="inputPassword4">Vat Number</label>
                  <input type="text" class="form-control" id="inputPassword4">
                </div>
                
                              <div class="form-group col-lg-12 col-md-4 col-xs-12" style="text-align: center;padding-bottom:2rem;">
                  <button class="btn btn-primary" type="submitIdentity" style="background:#0273eb;">Submit form</button>
                </div>
                              <div class="form-group col-lg-12" style="padding-top: 2rem;">
                  <h1 class="page-subheading" style="text-align: center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General Data Protection Regulation'),$_smarty_tpl ) );?>
</h1>
                      
                  <div style="margin-top: 40px;text-align:center;">
                    <h4> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove account'),$_smarty_tpl ) );?>
  </h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After the account has been removed you can not go back!.'),$_smarty_tpl ) );?>
</p>
                    <button type="submit" name="removeIdentity" class="btn btn-default button button-medium">
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove Account'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
                    </button>
                  </div>
                </div>
                  
                <div class="form-group col-lg-12" style="padding-top: 2rem;">
                  <div style="margin-top: 40px;text-align:center;">
                    <h4> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Portability of personal data'),$_smarty_tpl ) );?>
  </h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allows you to extract your personal data in a CSV document!.'),$_smarty_tpl ) );?>
</p>	
                    <button type="submit" name="exportIdentity" class="btn btn-default button button-medium">
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export personal data'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
                    </button>
                  </div>
                </div>
                          </div>
            

            


            
            
          </form>
        </div>
        
      </div>

    </div>
    </div>


  
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    
      var myLineChart = new Chart(document.getElementById('myChart').getContext('2d'),
        {
            type: 'line',
            data: {
                    labels: [
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastYearOrdersMonth']->value, 'month');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
                        '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['month']->value, ENT_QUOTES, 'UTF-8');?>
',
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    datasets: [
                        {
                        data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastYearOrdersTotal']->value, 'total', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['total']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['total']->value) {
$_smarty_tpl->tpl_vars['total']->do_else = false;
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
                        borderColor: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lastYearOrdersColor']->value, ENT_QUOTES, 'UTF-8');?>
',
                        backgroundColor: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lastYearOrdersColor']->value, ENT_QUOTES, 'UTF-8');?>
',
                        fill: false,
                        label: ' €',
                        }
                    ]
                },

        }
    );

    /** PIE CHART **/


	window.myPie = new Chart(document.getElementById('chart-area').getContext('2d'), 
	    {
    		type: 'pie',
    		data: {
    			datasets: [{
    				data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersByBrand']->value['totals'], 'totalbrand', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['totalbrand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['totalbrand']->value) {
$_smarty_tpl->tpl_vars['totalbrand']->do_else = false;
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totalbrand']->value, ENT_QUOTES, 'UTF-8');?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
    				backgroundColor: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ordersByBrandColors']->value, ENT_QUOTES, 'UTF-8');?>
',
    				label: 'Dataset 1'
    			}],
    			labels: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersByBrand']->value['brands'], 'brand', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value, ENT_QUOTES, 'UTF-8');?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
    		},
    		options: {
    			responsive: true
    		}
    	}
	);
    <?php echo '</script'; ?>
>


      </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'my_account_links'} */
class Block_1880697938666838030f6ef0_63692417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-xs-center">
      <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
    </div>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_721643396666838030f6b83_55561742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_721643396666838030f6b83_55561742',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_1880697938666838030f6ef0_63692417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1880697938666838030f6ef0_63692417', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
