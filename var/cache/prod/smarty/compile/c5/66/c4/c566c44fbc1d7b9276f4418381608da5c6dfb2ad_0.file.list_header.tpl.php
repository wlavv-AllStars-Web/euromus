<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:31:41
  from 'C:\xampp\htdocs\euromus\admineuromus1\themes\default\template\controllers\attributes_groups\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55ded5ca9f6_01343281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c566c44fbc1d7b9276f4418381608da5c6dfb2ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\admineuromus1\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\list\\list_header.tpl',
      1 => 1704806617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a55ded5ca9f6_01343281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103081896765a55ded5ca1e6_57143838', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_103081896765a55ded5ca1e6_57143838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_103081896765a55ded5ca1e6_57143838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
