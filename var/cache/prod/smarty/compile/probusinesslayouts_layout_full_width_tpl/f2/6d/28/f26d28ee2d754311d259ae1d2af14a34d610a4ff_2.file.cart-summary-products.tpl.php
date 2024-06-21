<?php
/* Smarty version 4.3.4, created on 2024-06-21 15:53:05
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\checkout\_partials\cart-summary-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667593d1131958_85372114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f26d28ee2d754311d259ae1d2af14a34d610a4ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\checkout\\_partials\\cart-summary-products.tpl',
      1 => 1711449237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-product-line.tpl' => 1,
  ),
),false)) {
function content_667593d1131958_85372114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <div class="cart-summary-products js-cart-summary-products">
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1888824289667593d112f9b2_62359382', 'cart_summary_product_list');
?>

</div>
<?php }
/* {block 'cart_summary_product_list'} */
class Block_1888824289667593d112f9b2_62359382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_product_list' => 
  array (
    0 => 'Block_1888824289667593d112f9b2_62359382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="" id="cart-summary-product-list">
      <ul class="media-list">
                <li class="media"><?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['cart']->value['products'][0]), 0, false);
?></li>
      </ul>
    </div>
  <?php
}
}
/* {/block 'cart_summary_product_list'} */
}
