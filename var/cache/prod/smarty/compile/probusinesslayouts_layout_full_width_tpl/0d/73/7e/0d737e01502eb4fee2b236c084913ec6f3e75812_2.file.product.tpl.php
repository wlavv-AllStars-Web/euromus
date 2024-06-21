<?php
/* Smarty version 4.3.4, created on 2024-06-21 15:12:26
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66758a4aab3da4_33573928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d737e01502eb4fee2b236c084913ec6f3e75812' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\catalog\\product.tpl',
      1 => 1717496687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_66758a4aab3da4_33573928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37026022866758a4aa89569_66554176', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184794180466758a4aa8fca8_07982224', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137071699466758a4aa92598_22147440', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_37026022866758a4aa89569_66554176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_37026022866758a4aa89569_66554176',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_184794180466758a4aa8fca8_07982224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_184794180466758a4aa8fca8_07982224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_33139010366758a4aa933f4_75503850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_152154800766758a4aa93097_18242753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33139010366758a4aa933f4_75503850', 'product_cover_thumbnails', $this->tplIndex);
?>

                <div class="scroll-box-arrows">
                  <i class="material-icons left">&#xE314;</i>
                  <i class="material-icons right">&#xE315;</i>
                </div>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_37522240366758a4aa92d94_47303807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="page-content" id="content">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152154800766758a4aa93097_18242753', 'page_content', $this->tplIndex);
?>

            </section>
          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_139463903066758a4aa946e3_14567765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_46207337766758a4aa94415_07180041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="header_product" style="margin-bottom: 80px;">
                <h1 class="h1" style="text-align: center;font-size:30px;color: #666;font-weight:bold;line-height:1.15;text-transform:uppercase;"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139463903066758a4aa946e3_14567765', 'page_title', $this->tplIndex);
?>
</h1>
                <div style="display: flex;gap:0.5rem;justify-content:center;">
                  <span style="font-size: 18px;">SKU: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <span style="color: #0273EB;font-size: 18px;">-</span>
                  <span style="font-size: 18px;">SIZE: <?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['product']->value['height'], (int) 2, (int) 1), ENT_QUOTES, 'UTF-8');?>
x<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['product']->value['depth'], (int) 2, (int) 1), ENT_QUOTES, 'UTF-8');?>
x<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['product']->value['width'], (int) 2, (int) 1), ENT_QUOTES, 'UTF-8');?>
</span>
                  <span style="color: #0273EB;font-size: 18px;">|</span>
                  <span style="font-size: 18px;">WEIGHT: <?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['product']->value['weight'], (int) 2, (int) 1), ENT_QUOTES, 'UTF-8');?>
kg</span>
                </div>
              </div>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_124464569766758a4aa94113_20375621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46207337766758a4aa94415_07180041', 'page_header', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_145937511366758a4aa9a708_79456753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_85172195466758a4aa9af94_70031573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_38986626966758a4aa9c751_08886447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_94447510166758a4aa9fcb3_68418308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_183867639466758a4aaa5cf6_12142143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_26244566666758a4aaa0523_36064558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183867639466758a4aaa5cf6_12142143', 'product_miniature', $this->tplIndex);
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_add_to_cart'} */
class Block_156406126266758a4aaa7ba4_43090168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_80217932466758a4aaa8512_61605408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_71425534866758a4aa9eba9_60246819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94447510166758a4aa9fcb3_68418308', 'product_variants', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26244566666758a4aaa0523_36064558', 'product_pack', $this->tplIndex);
?>


                  
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156406126266758a4aaa7ba4_43090168', 'product_add_to_cart', $this->tplIndex);
?>


                  
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80217932466758a4aaa8512_61605408', 'product_refresh', $this->tplIndex);
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_images_modal'} */
class Block_280186566758a4aab2483_67255470 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_189686001566758a4aab2ff5_21695321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_80913884866758a4aab2d11_67268026 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189686001566758a4aab2ff5_21695321', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_137071699466758a4aa92598_22147440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_137071699466758a4aa92598_22147440',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_37522240366758a4aa92d94_47303807',
  ),
  'page_content' => 
  array (
    0 => 'Block_152154800766758a4aa93097_18242753',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_33139010366758a4aa933f4_75503850',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_124464569766758a4aa94113_20375621',
  ),
  'page_header' => 
  array (
    0 => 'Block_46207337766758a4aa94415_07180041',
  ),
  'page_title' => 
  array (
    0 => 'Block_139463903066758a4aa946e3_14567765',
  ),
  'product_prices' => 
  array (
    0 => 'Block_145937511366758a4aa9a708_79456753',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_85172195466758a4aa9af94_70031573',
  ),
  'product_customization' => 
  array (
    0 => 'Block_38986626966758a4aa9c751_08886447',
  ),
  'product_buy' => 
  array (
    0 => 'Block_71425534866758a4aa9eba9_60246819',
  ),
  'product_variants' => 
  array (
    0 => 'Block_94447510166758a4aa9fcb3_68418308',
  ),
  'product_pack' => 
  array (
    0 => 'Block_26244566666758a4aaa0523_36064558',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_183867639466758a4aaa5cf6_12142143',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_156406126266758a4aaa7ba4_43090168',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_80217932466758a4aaa8512_61605408',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_280186566758a4aab2483_67255470',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_80913884866758a4aab2d11_67268026',
  ),
  'page_footer' => 
  array (
    0 => 'Block_189686001566758a4aab2ff5_21695321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>


  <section id="main">
    <meta content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="row product-container js-product-container">
            <div class="col-md-4">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37522240366758a4aa92d94_47303807', 'page_content_container', $this->tplIndex);
?>

        </div>

                <div class="col-md-6 product-info-container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124464569766758a4aa94113_20375621', 'page_header_container', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145937511366758a4aa9a708_79456753', 'product_prices', $this->tplIndex);
?>



          <div class="product-information" style="margin-top: 80px;">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85172195466758a4aa9af94_70031573', 'product_description_short', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38986626966758a4aa9c751_08886447', 'product_customization', $this->tplIndex);
?>

            <?php }?>


            <div class="product-actions js-product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71425534866758a4aa9eba9_60246819', 'product_buy', $this->tplIndex);
?>


            </div>

            
            
        </div>
        
      </div>
      <div class="col-md-2 right-column-container">
        <div class="right_column_product" style="height: 24%;">
            <a target="_blank" href="" id_manufactrurer="">
                <img src="/img/m/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value->id_manufacturer, ENT_QUOTES, 'UTF-8');?>
.jpg" class="brand_logo">
            </a>
        </div>

        <div class="right_column_product column-right-stock">
          
          <div class="right_text"> <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity < 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock'),$_smarty_tpl ) );?>
 <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->quantity == 1) {?> <a href="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');?>
/contact-us" style="color: #666;text-transform: uppercase;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited stock, please contact us'),$_smarty_tpl ) );?>
</a> <?php } else { ?>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'STOCK'),$_smarty_tpl ) );?>
 <?php }?> 
          </div>
          
          <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity > 1) {?>
              <div class="right_logos"><i class="fa fa-check"></i></div>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->quantity == 1) {?>
              <div class="right_logos"><i class="fa fa-warning"></i></div>
          <?php } else { ?>
              <div class="right_logos"><i class="fa fa-times"></i></div>
          <?php }?>
        </div>

        <div class="right_column_product">
            <a target="_blank" href="https://www.all-stars-distribution.com/shipping-rates">
                <div class="right_text" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SHIPPING'),$_smarty_tpl ) );?>
</div>
                <div class="right_logos"><i class="fa fa-truck"></i></div>
            </a>
        </div>

        <div class="right_column_product">
          <?php if (($_smarty_tpl->tpl_vars['product']->value->id_manufacturer == 11) || ($_smarty_tpl->tpl_vars['product']->value->id_manufacturer == 20)) {?>
          <a href="https://www.all-stars-distribution.com/img/brands/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->manufacturer_name,' ',''), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->manufacturer_name,' ',''), ENT_QUOTES, 'UTF-8');?>
.pdf" download="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->manufacturer_name,' ',''), ENT_QUOTES, 'UTF-8');?>
.pdf">
          <?php } else { ?>
          <a href="https://www.all-stars-distribution.com/img/brands/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->manufacturer_name,' ',''), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->manufacturer_name,' ',''), ENT_QUOTES, 'UTF-8');?>
.xlsx" download="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->manufacturer_name,' ',''), ENT_QUOTES, 'UTF-8');?>
.xlsx">
          <?php }?>
                  <div class="right_text" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CATALOG'),$_smarty_tpl ) );?>
</div>
                  <div class="right_logos"><img class="cms_catalog_image" src="https://www.all-stars-distribution.com/img/cms/Content_pages/catalog/icons/xlsx_updated.png" style=" height: 50px; width: 55px; max-width: 55px;"></div>
          </a>
        </div>

        <div class="right_column_product">
            <a target="_blank" href="https://www.youtube.com/results?search_query=+<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->manufacturer_name,' ','+'), ENT_QUOTES, 'UTF-8');?>
+<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->reference,' ','+'), ENT_QUOTES, 'UTF-8');?>
">
                <div class="right_text" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VIDEOS'),$_smarty_tpl ) );?>
</div>
                <div class="right_logos"><i class="fa-brands fa-youtube"></i></div>
            </a>
        </div>


      </div>
    </div>

    
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_280186566758a4aab2483_67255470', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80913884866758a4aab2d11_67268026', 'page_footer_container', $this->tplIndex);
?>

  </section>

<?php
}
}
/* {/block 'content'} */
}
