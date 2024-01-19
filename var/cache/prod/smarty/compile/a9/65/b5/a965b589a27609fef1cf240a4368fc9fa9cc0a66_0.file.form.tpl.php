<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:31:22
  from 'C:\xampp\htdocs\euromus\admineuromus1\themes\default\template\controllers\attributes_groups\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55dda405de2_76572007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a965b589a27609fef1cf240a4368fc9fa9cc0a66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\admineuromus1\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\form\\form.tpl',
      1 => 1704806617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a55dda405de2_76572007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178867570365a55dda402186_01759939', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_178867570365a55dda402186_01759939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_178867570365a55dda402186_01759939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
