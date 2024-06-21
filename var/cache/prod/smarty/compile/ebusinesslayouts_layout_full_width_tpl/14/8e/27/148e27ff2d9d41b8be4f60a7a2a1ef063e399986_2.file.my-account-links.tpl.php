<?php
/* Smarty version 4.3.4, created on 2024-06-21 10:25:51
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\customer\_partials\my-account-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6675471fb232e0_21327257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '148e27ff2d9d41b8be4f60a7a2a1ef063e399986' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\customer\\_partials\\my-account-links.tpl',
      1 => 1702297383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6675471fb232e0_21327257 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
  <i class="material-icons">&#xE5CB;</i>
  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</span>
</a>
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
  <i class="material-icons">&#xE88A;</i>
  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
</a>
<?php }
}
