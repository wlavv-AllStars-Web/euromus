<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:15:39
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a173bb26ba50_19219872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1704796022,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a173bb26ba50_19219872 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a rel="nofollow" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart link containing %nbProducts% product(s)','sprintf'=>array('%nbProducts%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>

        <i class="material-icons search" aria-hidden="true">search</i>
        <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
              <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
>

// document.addEventListener("DOMContentLoaded", function() {
//   const buttonSearchMobile = document.querySelector('#_desktop_cart .search');
//   const search_widget = document.getElementById('search_widget');

//   buttonSearchMobile.addEventListener('click', () => {
//     if(search_widget.style.display === 'none'){
//       search_widget.style.display = 'block'
//     }else{
//       search_widget.style.display = 'none'
//     }
//   });
// });

document.addEventListener("DOMContentLoaded", function() {
  const buttonSearchMobile = document.querySelector('#_desktop_cart .search');
  const search_widget = document.getElementById('search_widget');

  buttonSearchMobile.addEventListener('click', () => {
    const computedStyle = window.getComputedStyle(search_widget);

    if (computedStyle.display === 'none') {
      search_widget.style.display = 'block';
    } else {
      search_widget.style.display = 'none';
    }
  });
});


<?php echo '</script'; ?>
>


<!-- end C:\xampp\htdocs\euromus/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}
