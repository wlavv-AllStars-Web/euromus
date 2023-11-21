<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:18:53
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca02d7bf1f4_92174570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1700236577,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca02d7bf1f4_92174570 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info">
  <div class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <a class="user-info-account" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" rel="nofollow" >
        
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </a>
      <a class="logout" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" >
        <i class="material-icons">power_settings_new</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
    <?php } else { ?>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" rel="nofollow" >
        
      <i class="fa-solid fa-user"></i>
      </a>
    <?php }?>
  </div>
</div>
<!-- end C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
