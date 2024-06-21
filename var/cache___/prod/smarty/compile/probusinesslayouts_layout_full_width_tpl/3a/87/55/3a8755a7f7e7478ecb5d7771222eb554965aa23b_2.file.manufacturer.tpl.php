<?php
/* Smarty version 4.3.4, created on 2024-06-11 14:44:20
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\catalog\listing\manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666854b4bbe431_15673233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a8755a7f7e7478ecb5d7771222eb554965aa23b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\catalog\\listing\\manufacturer.tpl',
      1 => 1717768857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_666854b4bbe431_15673233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_863523206666854b4bae449_90798659', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_704803784666854b4bba000_99494864', 'product_list');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_863523206666854b4bae449_90798659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_863523206666854b4bae449_90798659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
  <style>
    
    .btnCar{  black; float: left; width: 50%; margin: 0 auto; border: 0px solid #000; text-align: right; padding: 20px; }
    .btnBike{ black; float: left; width: 50%; margin: 0 auto; border: 0px solid #000; text-align: left;  padding: 20px; }
    
    .btnCar:hover{ background-color: #fff; }
    .btnBike:hover{ background-color: #fff; }

</style>

<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['bike_parts'] === 1) {?>
<div style="display: flex;width: 100%; text-align: center;margin: 0 auto; background-color: #fff;">

            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id']), ENT_QUOTES, 'UTF-8');?>
" class="btnCar mobile">
            <img id="car" <?php if ((!(isset($_smarty_tpl->tpl_vars['id_category']->value))) || ($_smarty_tpl->tpl_vars['id_category']->value != 17)) {?> src="/img/car_mobile_hover.webp" style="background-color: #0076E7;" <?php } else { ?> src="/img/car_mobile.webp" <?php }?>>
        </a> 
        <a href="<?php echo htmlspecialchars((string) $_SERVER['SCRIPT_URI'], ENT_QUOTES, 'UTF-8');?>
?id_category=17" class="btnBike mobile" >
            <img id="bike" <?php if ((isset($_smarty_tpl->tpl_vars['id_category']->value)) && ($_smarty_tpl->tpl_vars['id_category']->value == 17)) {?> src="/img/bike_mobile_hover.webp" style="background-color: #0076E7;" <?php } else { ?> src="/img/bike_mobile.webp" <?php }?>>
        </a> 
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id']), ENT_QUOTES, 'UTF-8');?>
" class="btnCar desktop">
            <img id="car" <?php if ((!(isset($_smarty_tpl->tpl_vars['id_category']->value))) || ($_smarty_tpl->tpl_vars['id_category']->value != 17)) {?> src="/img/car_hover.webp" style="background-color: #0076E7;" <?php } else { ?> src="/img/car.webp" <?php }?>>
        </a> 
        <a href="<?php echo htmlspecialchars((string) $_SERVER['SCRIPT_URI'], ENT_QUOTES, 'UTF-8');?>
?id_category=17" class="btnBike desktop" >
            <img id="bike" <?php if ((isset($_smarty_tpl->tpl_vars['id_category']->value)) && ($_smarty_tpl->tpl_vars['id_category']->value == 17)) {?> src="/img/bike_hover.webp" style="background-color: #0076E7;" <?php } else { ?> src="/img/bike.webp" <?php }?>>
        </a> 
    </div>
  <?php }
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list'} */
class Block_704803784666854b4bba000_99494864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list' => 
  array (
    0 => 'Block_704803784666854b4bba000_99494864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"), 0, false);
}
}
/* {/block 'product_list'} */
}
