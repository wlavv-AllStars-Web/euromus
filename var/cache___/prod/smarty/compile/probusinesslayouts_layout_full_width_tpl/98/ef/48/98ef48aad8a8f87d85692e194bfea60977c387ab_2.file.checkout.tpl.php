<?php
/* Smarty version 4.3.4, created on 2024-06-11 10:11:08
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666814ac791ba2_38011959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ef48aad8a8f87d85692e194bfea60977c387ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\checkout\\checkout.tpl',
      1 => 1717684908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../_partials/header.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:../_partials/footer.tpl' => 1,
  ),
),false)) {
function content_666814ac791ba2_38011959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_738889439666814ac787946_85627223', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106006279666814ac78ae63_44499355', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1845868809666814ac790ea0_27761941', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header'} */
class Block_738889439666814ac787946_85627223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_738889439666814ac787946_85627223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:../_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'cart_summary'} */
class Block_694245153666814ac78b404_00259669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
      <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'continue_shopping'} */
class Block_2120054751666814ac78bf48_43398895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a class="label" onclick="window.history.go(-1); return false;" style="margin-left: 4rem;margin-right:1rem;font-size:1.1rem;color:#0273EB;" onMouseOver="this.style.color='#0273EB'" onMouseOut="this.style.color='#0273EB'">
          <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </a>
      <?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'checkout_process'} */
class Block_53467168666814ac78f222_82662625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'checkout_process'} */
/* {block 'content'} */
class Block_106006279666814ac78ae63_44499355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106006279666814ac78ae63_44499355',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_694245153666814ac78b404_00259669',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_2120054751666814ac78bf48_43398895',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_53467168666814ac78f222_82662625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content">
    <div class="row row-checkout">
                                        <div class="cart-grid-right col-xs-12 col-lg-12">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_694245153666814ac78b404_00259669', 'cart_summary', $this->tplIndex);
?>



          </div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2120054751666814ac78bf48_43398895', 'continue_shopping', $this->tplIndex);
?>

    
      <div class="cart-grid-body col-xs-12 col-lg-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53467168666814ac78f222_82662625', 'checkout_process', $this->tplIndex);
?>

      </div>
      
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1845868809666814ac790ea0_27761941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1845868809666814ac790ea0_27761941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:../_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
