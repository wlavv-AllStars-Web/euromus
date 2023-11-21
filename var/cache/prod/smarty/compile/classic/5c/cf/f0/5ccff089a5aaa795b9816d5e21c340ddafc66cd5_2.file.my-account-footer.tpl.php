<?php
/* Smarty version 4.3.1, created on 2023-11-21 17:45:41
  from 'C:\xampp\htdocs\euromus\themes\classic\modules\ps_emailalerts\views\templates\hook\my-account-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655cecc5a23ba6_37898363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ccff089a5aaa795b9816d5e21c340ddafc66cd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\modules\\ps_emailalerts\\views\\templates\\hook\\my-account-footer.tpl',
      1 => 1700041519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655cecc5a23ba6_37898363 (Smarty_Internal_Template $_smarty_tpl) {
?>

<li class="colorli">
  <a style="color: white" vhref="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
