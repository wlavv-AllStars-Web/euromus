<?php
/* Smarty version 4.3.4, created on 2024-06-21 15:53:03
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667593cf513137_65631210',
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
function content_667593cf513137_65631210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2090455417667593cf50a483_73122121', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1406531093667593cf50e0a9_04148128', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214003984667593cf512899_98032892', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header'} */
class Block_2090455417667593cf50a483_73122121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2090455417667593cf50a483_73122121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:../_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'cart_summary'} */
class Block_1236472926667593cf50e9c3_75894733 extends Smarty_Internal_Block
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
class Block_2004811282667593cf50f496_53790687 extends Smarty_Internal_Block
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
class Block_396803005667593cf511571_89121903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'checkout_process'} */
/* {block 'content'} */
class Block_1406531093667593cf50e0a9_04148128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1406531093667593cf50e0a9_04148128',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_1236472926667593cf50e9c3_75894733',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_2004811282667593cf50f496_53790687',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_396803005667593cf511571_89121903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content">
    <div class="row row-checkout">
                                        <div class="cart-grid-right col-xs-12 col-lg-12">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1236472926667593cf50e9c3_75894733', 'cart_summary', $this->tplIndex);
?>



          </div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2004811282667593cf50f496_53790687', 'continue_shopping', $this->tplIndex);
?>

    
      <div class="cart-grid-body col-xs-12 col-lg-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396803005667593cf511571_89121903', 'checkout_process', $this->tplIndex);
?>

      </div>
      
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_214003984667593cf512899_98032892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_214003984667593cf512899_98032892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:../_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
