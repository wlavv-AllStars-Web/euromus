<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:32:40
  from 'C:\xampp\htdocs\euromus\admineuromus1\themes\default\template\helpers\tree\tree_node_item_checkbox_shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55e28b58433_07406023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21a0f8b9a2eec2227211598209bdf407c44eb541' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\admineuromus1\\themes\\default\\template\\helpers\\tree\\tree_node_item_checkbox_shops.tpl',
      1 => 1704806618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a55e28b58433_07406023 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="checkbox" name="checkBoxShopAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
