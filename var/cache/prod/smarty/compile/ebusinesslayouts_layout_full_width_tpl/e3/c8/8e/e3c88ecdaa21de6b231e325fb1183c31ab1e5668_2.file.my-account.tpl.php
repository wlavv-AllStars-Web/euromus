<?php
/* Smarty version 4.3.4, created on 2024-06-21 12:12:59
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\customer\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6675603ba3f443_49630998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3c88ecdaa21de6b231e325fb1183c31ab1e5668' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\customer\\my-account.tpl',
      1 => 1718968377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6675603ba3f443_49630998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9198229096675603ba1e6c6_59649884', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1561711886675603ba1f500_47178752', 'page_content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16111237786675603ba3d910_17120921', 'page_footer');
?>




  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_IDENTITY_FORM']->value, ENT_QUOTES, 'UTF-8');?>


  <?php echo '<script'; ?>
>
    $('input[name="vat_number"]').next('input').prop('disabled', true);

    $('input[name="vat_number"]').focusout(function(){
        
    $.ajax({
            type: "POST",
            dataType: 'text',
            headers: { "cache-control": "no-cache" },
            url: "/index.php?controller=addresses",
            data: {
                'action' : 'check_vat',
                'vatnumber' : $('input[name="vat_number"]').val()
            },
            success: function(msg){
                
              if(msg == 1){
                  $('input[name="vat_number"]').css('border-color', 'black'); 
                  $('input[name="vat_number"]').next('input').prop('disabled', false);
              }else{
                  $('input[name="vat_number"]').css('border-color', 'red'); 
                  alert("Inserted VAT Number is invalid for your country, please verify!");
                  $('input[name="vat_number"]').next('input').prop('disabled', true);   
                  $('input[name="vat_number"]').value = "";   
                  $('input[name="vat_number"]').attr('value', '');  
              }
            }
          });
    });
  <?php echo '</script'; ?>
>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_9198229096675603ba1e6c6_59649884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_9198229096675603ba1e6c6_59649884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_customer_account'} */
class Block_2183036916675603ba3ad18_58203688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_content'} */
class Block_1561711886675603ba1f500_47178752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1561711886675603ba1f500_47178752',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_2183036916675603ba3ad18_58203688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>


  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to your account. Here you can manage all of your personal information and orders.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</p>
  <div class="row">
    <div class="links">

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="identity-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
        <span class="link-item">
          <i class="material-icons">&#xE853;</i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

        </span>
      </a>

      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="addresses-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="fa-solid fa-house"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Addresses','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php } else { ?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="address-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="fa-solid fa-house"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="history-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="fa-solid fa-list"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="order-slips-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE8B0;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="discounts-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['discount'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE54E;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="returns-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE860;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      
      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="identity-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_cars'], ENT_QUOTES, 'UTF-8');?>
">
        <span class="link-item">
          <i class="fa-solid fa-car"></i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cars','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

        </span>
      </a>

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="identity-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <span class="link-item">
          <i class="fa-solid fa-lock"></i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

        </span>
      </a>

      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 d-flex">
      
      <div class="tvaNumber" style="display: flex;flex-direction: column;margin-bottom: 1.875rem !important;justify-content: center;padding:0 1rem;
      align-items: center;
      box-shadow: 2px 2px 11px 0px rgba(0, 0, 0, 0.1);width:100%;">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TVA number (Only for companies)','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 :</h3>
        <form method="post" class="input-group" style="display:flex;flex-wrap: nowrap;padding-left: 0px;padding-right:0px;gap:0.5rem;">
          <input type="text" name="vat_number" class="form-control" placeholder="TVA number" aria-label="TVA number" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn" type="submit" value="save" style="border-radius: 0.25rem;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</button>
          </div>
        </form>
        <small style="text-align: start;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Ex: FR99999999999 / GR999999999)','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</small>
      </div>
      </div>
      

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2183036916675603ba3ad18_58203688', 'display_customer_account', $this->tplIndex);
?>


      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="display:flex;justify-content:center;align-items:center;margin-bottom: 1.875rem;">
        <div class="link-item" style="box-shadow: 2px 2px 11px 0px rgba(0, 0, 0, 0.1);width:100%;height:100%;display:flex;justify-content:center;align-items:center;">
          <button type="button" class="btn" style="width: 200px;height:60px;border-radius:0.5rem;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to homepage','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</button>
        </div>
      </div>

    </div>
  </div>
 
<?php
}
}
/* {/block 'page_content'} */
/* {block 'my_account_links'} */
class Block_16238742196675603ba3dd08_70512027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-xs-center">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
    </div>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_16111237786675603ba3d910_17120921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_16111237786675603ba3d910_17120921',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_16238742196675603ba3dd08_70512027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16238742196675603ba3dd08_70512027', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
