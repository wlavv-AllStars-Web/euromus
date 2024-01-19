<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:32:40
  from 'C:\xampp\htdocs\euromus\admineuromus1\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55e2898f043_14519953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6412f12144ebc9e35cb2a398833c18f42fbd8833' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\admineuromus1\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1704806618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a55e2898f043_14519953 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
