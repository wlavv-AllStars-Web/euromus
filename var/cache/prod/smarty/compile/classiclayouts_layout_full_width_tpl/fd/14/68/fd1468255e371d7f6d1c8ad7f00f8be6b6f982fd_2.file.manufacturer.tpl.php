<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:59:47
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\catalog\listing\manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a564835abea3_21235883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd1468255e371d7f6d1c8ad7f00f8be6b6f982fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\catalog\\listing\\manufacturer.tpl',
      1 => 1702297383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_65a564835abea3_21235883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79515617765a564835a1b24_31901264', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114422056865a564835a4394_79037421', 'product_list');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_79515617765a564835a1b24_31901264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_79515617765a564835a1b24_31901264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products by brand %brand_name%','sprintf'=>array('%brand_name%'=>$_smarty_tpl->tpl_vars['manufacturer']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
  <div id="manufacturer-short_description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>
</div>
  <div id="manufacturer-description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
<?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list'} */
class Block_114422056865a564835a4394_79037421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list' => 
  array (
    0 => 'Block_114422056865a564835a4394_79037421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-3"), 0, false);
}
}
/* {/block 'product_list'} */
}
