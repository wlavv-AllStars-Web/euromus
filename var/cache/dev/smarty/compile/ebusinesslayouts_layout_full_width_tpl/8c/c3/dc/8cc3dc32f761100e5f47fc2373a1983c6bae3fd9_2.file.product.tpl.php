<?php
/* Smarty version 4.3.4, created on 2024-06-20 17:31:39
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6674596b15fa70_86707812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cc3dc32f761100e5f47fc2373a1983c6bae3fd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1718895946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6674596b15fa70_86707812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature d-flex justify-content-center col-lg-3" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container" style="width: 526px;height:349px;display:flex;flex-direction:column;justify-content:center;align-items:center;position:relative">
    <div class="image_item_product" style="border: 0;">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11870613976674596b149c23_78781359', 'product_thumbnail');
?>

                                                                                                                                                                                                                                                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10298482876674596b153675_72028049', 'product_variants');
?>

    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['filter_1']->value))) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7851631966674596b154cd4_46839805', 'product_price_and_shipping');
?>

    <?php } else { ?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13783350186674596b157d61_89674303', 'product_price_and_shipping');
?>

    <?php }?>
    <div class="product-description" style="color: black;">
    
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17616519976674596b15ac43_09076485', 'product_name');
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['description_short'])) && $_smarty_tpl->tpl_vars['product']->value['description_short'] != '') {?>
        <div class="short_description" style="color: black;"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],100,'...' ));?>
</div>
      <?php }?>
      
      <div class="hook-reviews">
	      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

	  </div>

    <?php if (count($_smarty_tpl->tpl_vars['product']->value['attributes']) > 0) {?>
    <div class="variantionsProductList" style="color: var(--asm-color);text-align:center;display: block;line-height: 17px;color: var(--asm-color);text-align: center;font-size: 14px;margin-top: 5px;">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More variations available','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </div>
    <?php } else { ?>
      <div class="variantionsProductList" style="min-height:17px"></div>
    <?php }?>
    

    <?php if (str_contains($_smarty_tpl->tpl_vars['product']->value['category'],'clearance')) {?>
      <div style="position: absolute;top:1rem; left:0; width: fit-content;height:31px;background:var(--asm-color);border-radius:0 50px 50px 0;display:flex;align-items:center;gap:0.5rem;min-width:200px;font-weight:600;font-size:18px;padding:0 0.5rem;">
      <span style="color: #131313;font-weight:700">CLEARANCE</span>  
      <span style="color: white;"> - 25%</span>  
     
      </div>
    <?php }?>
      
      
    </div>
      </div>

</article>

<?php echo '<script'; ?>
>
// document.addEventListener('DOMContentLoaded', function() {
//   var addButton = document.querySelectorAll('.add_to_cart_button .btn.btn-primary');
  

//   addButton.forEach((item) => {
//     var icon = item.querySelector('.add_to_cart i');

//     item.addEventListener('mouseover', function() {
//       icon.style.color = 'white';
//     });

//     item.addEventListener('mouseout', function() {
//       icon.style.color = ''; // Revert to the default color or remove this line if not needed
//     });
//   })

  
// });

<?php echo '</script'; ?>
>
<?php }
/* {block 'product_thumbnail'} */
class Block_11870613976674596b149c23_78781359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_11870613976674596b149c23_78781359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['cover_image_id']) {?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <picture>
                        <img
            src="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover_image_id'],'home_default'), ENT_QUOTES, 'UTF-8');
}?>"
              alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
              loading="lazy"
              data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
              width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
              height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
            />
          </picture>
        </a>
      <?php } else { ?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <picture>
            <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
            <img
              src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              loading="lazy"
              width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
              height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
            />
          </picture>
        </a>
      <?php }?>
    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_variants'} */
class Block_10298482876674596b153675_72028049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_10298482876674596b153675_72028049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price_and_shipping'} */
class Block_7851631966674596b154cd4_46839805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_7851631966674596b154cd4_46839805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product_pricebox" style="width: 100%;display:flex;">
            <div class="product-price-and-shipping" style="width: fit-content;height:31px;background:var(--asm-color);border-radius:0 50px 50px 0;display:flex;align-items:center;min-width:200px;">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


              <span itemprop="price" class="price" style="color: white;padding:0 0rem 0 1rem;font: 600 21px/26px 'Open Sans', sans-serif;margin-right:0;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
€</span>
              
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="regular-price" style="color: #131313;font-weight:600;font-size:19px;padding-top:4px;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
€</span>
                              <?php }?>
              
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_price_and_shipping'} */
class Block_13783350186674596b157d61_89674303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_13783350186674596b157d61_89674303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product_pricebox" style="width: 100%;display:flex;">
            <div class="product-price-and-shipping" style="width: fit-content;height:31px;background:var(--asm-color);border-radius:0 50px 50px 0;display:flex;align-items:center;min-width:200px;">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


              <span itemprop="price" class="price" style="color: white;padding:0 0rem 0 1rem;font: 600 21px/26px 'Open Sans', sans-serif;margin-right:0;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
              
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="regular-price" style="color: #131313;font-weight:600;font-size:19px;padding-top:4px;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                              <?php }?>
              
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_name'} */
class Block_17616519976674596b15ac43_09076485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_17616519976674596b15ac43_09076485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div style="display:flex;align-items:flex-start;justify-content: space-between;">
          <h4 class="h3 product-title"  itemprop="name" style="max-width: 382px;text-align:start;padding:0 0.5rem; margin-top:11px;"><a style="color: #131313;font-size:14px;text-transform:uppercase;" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
          <div class="add_to_cart_button" style="margin-right: 1rem;">

          <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                  <div class="add">
                  <button
                    class="btn btn-primary add-to-cart"
                    data-button-action="add-to-cart"
                    data-dismiss="modal"
                    type="submit"
                                      >
                    <i class="material-icons shopping-cart">&#xE547;</i>
    
                  </button>
                </div>
          </form>

          </div>
         </div>
      <?php
}
}
/* {/block 'product_name'} */
}
