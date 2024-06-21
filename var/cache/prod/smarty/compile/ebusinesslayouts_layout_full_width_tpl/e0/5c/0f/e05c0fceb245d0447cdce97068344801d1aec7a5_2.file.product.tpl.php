<?php
/* Smarty version 4.3.4, created on 2024-06-21 12:47:03
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66756837aadf69_65129362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e05c0fceb245d0447cdce97068344801d1aec7a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\product.tpl',
      1 => 1718969965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 2,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_66756837aadf69_65129362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174232309066756837a661d7_10070220', 'head');
?>

 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1149747566756837a6c998_94615861', 'head_microdata_special');
?>

 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50706734266756837a6f348_98324800', 'content');
?>

 

 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_174232309066756837a661d7_10070220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_174232309066756837a661d7_10070220',
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
   <?php }?>
 <?php
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_1149747566756837a6c998_94615861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_1149747566756837a6c998_94615861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_105077233466756837a701b2_51400789 extends Smarty_Internal_Block
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
class Block_85853743466756837a6fe53_44658979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                             
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105077233466756837a701b2_51400789', 'product_cover_thumbnails', $this->tplIndex);
?>

               <div class="scroll-box-arrows">
                 <i class="material-icons left" >&#xE314;</i>
                 <i class="material-icons right" >&#xE315;</i>
               </div>
               
 
             <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_155346622666756837a6fb57_70129548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

           <section class="page-content" id="content" >
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85853743466756837a6fe53_44658979', 'page_content', $this->tplIndex);
?>

           </section>
         <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_content'} */
class Block_114171586966756837a718d9_66676534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <div class="swiper-slide">
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_image" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"/>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_title'} */
class Block_196549248666756837a77771_37406339 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_57570462166756837a77497_65238419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

               <h1 class="h1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196549248666756837a77771_37406339', 'page_title', $this->tplIndex);
?>
</h1>
             <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_135450417966756837a77162_86668344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57570462166756837a77497_65238419', 'page_header', $this->tplIndex);
?>

           <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_availability'} */
class Block_98628730766756837a7bd41_67676995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

               
              <span id="product-availability" class="js-product-availability" >
                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                                    
                  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                                        <div style="font-weight: 700;">Availability: <span style="background: #ff9a52;color:#f2f2f2;padding: 0.25rem 0.5rem;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span></div>
                    <?php } else { ?>
                                            <div style="font-weight: 700;">Availability: <span style="background: #ee302e;color:#f2f2f2;padding: 0.25rem 1rem;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <div class="tooltip" style="font-size: 1rem;width:15px;text-align:center;cursor:pointer;">?
                        <div class="tooltiptext">This product is currently out of stock or requires a specific order. Please check ETA mentioned as working days to know approximate shipping date for this item.</div>
                      </div>
                      </div>
                    <?php }?>
                <?php } else { ?>
                  <div style="font-weight: 700;">Availability: 
                    <span style="background: #88f941;color: #3a3a34;padding: 0.25rem 0.5rem;font-size:14px;font-weight: 600;">In Stock</span>
                    <div class="tooltip" onclick="OpenTooltip(this)" style="font-size: 1rem;width:15px;text-align:center;cursor:pointer;">?
                      <div class="tooltiptext">This product is in stock in our warehouses and will ship the same day if ordered before 12:30 or next weekday if ordered later</div>
                    </div>
                  </div>
                <?php }?>
              </span>
              <?php echo '<script'; ?>
>
                function OpenTooltip(element){
                  const tooltip = element;
                  const tooltipText = element.querySelector(".tooltiptext");
                  tooltipText.style.visibility = "visible";
                  document.body.addEventListener("click", function(event) {
                      // Check if the click is outside the tooltip
                      if (!tooltip.contains(event.target)) {
                          // If outside, hide the tooltip
                          tooltipText.style.visibility = "hidden";
                      }
                  });
                }
              <?php echo '</script'; ?>
>
            <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_customization'} */
class Block_60646627066756837a81407_83974105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
               <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_prices'} */
class Block_191513782666756837a84638_09594411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                     <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                   <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_miniature'} */
class Block_78285706966756837a88412_19558111 extends Smarty_Internal_Block
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
class Block_136660289766756837a85441_35148824 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78285706966756837a88412_19558111', 'product_miniature', $this->tplIndex);
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
/* {block 'product_discounts'} */
class Block_185028683166756837a8a2f9_35056143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                         <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                       <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_variants'} */
class Block_177225185966756837a8b069_43447637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                         <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                       <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_36689054166756837a8bce2_66664627 extends Smarty_Internal_Block
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
class Block_20080375566756837a8cab6_17941510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_168246651066756837a82905_79397602 extends Smarty_Internal_Block
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
                                      <div class="prices-availability" >

                   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191513782666756837a84638_09594411', 'product_prices', $this->tplIndex);
?>



                   </div>
 
                   <div class="features_productdetails" >
                                         
                     <div class="product-details-options" >
                       
                       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136660289766756837a85441_35148824', 'product_pack', $this->tplIndex);
?>

 
                       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185028683166756837a8a2f9_35056143', 'product_discounts', $this->tplIndex);
?>

 
                       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177225185966756837a8b069_43447637', 'product_variants', $this->tplIndex);
?>

 
                       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36689054166756837a8bce2_66664627', 'product_add_to_cart', $this->tplIndex);
?>

                       
                     </div>
                   </div>
                   
 
                                                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20080375566756837a8cab6_17941510', 'product_refresh', $this->tplIndex);
?>

                 </form>
               <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_67183251566756837a98667_38113444 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                         <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                       <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_description'} */
class Block_80059091366756837a9c309_31572203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                         <div class="product-description" style="<?php if (empty($_smarty_tpl->tpl_vars['product']->value['youtube_code'])) {?>width:90%;<?php } else { ?>width: 60%;<?php }?>">
                           <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No description.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                         </div>
                       <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_attachments'} */
class Block_94751196466756837aa1262_80145504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                     <div class="tab-pane fade in" id="product-installation" role="tabpanel">
                        <div class="banner-tabs" >
                          <img src="https://www.all-stars-motorsport.com/img/app_icons/instructions_en.webp" />
                        </div>
                        <section class="product-attachments tab">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                            <div class="attachment">
                                                                                          <a class="btn_downloadInstructions" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download Instructions','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                              </a>

                              <div class="difficulty-level">
                                <span>Difficulty Level:</span>
                                <img src="https://www.all-stars-motorsport.com/img/app_icons/difficulty_3.webp" />
                              </div>
                            </div>
                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </section>
                      </div>
                    <?php } else { ?>
                      
                       <div class="tab-pane fade in" id="product-installation" role="tabpanel">
                         <div class="banner-tabs" >
                           <img src="https://www.all-stars-motorsport.com/img/app_icons/instructions_en.webp" />
                         </div>
                         <p class="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Instructions','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
                       </div>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_85005613666756837a8e474_46898617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <div class="tabs" style="background: #f6f6f6;margin-top:0;">
                 <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                        <a
                          class="nav-link active js-product-nav-active"
                          data-toggle="tab"
                          href="#description"
                          role="tab"
                          aria-controls="description"
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DESCRIPTION','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                     </li>
                                      <li class="nav-item">
                     <a
                       class="nav-link"
                       data-toggle="tab"
                       href="#product-installation"
                       role="tab"
                       aria-controls="product-installation"
                       <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'INSTRUCTIONS','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                   </li>
                   <li class="nav-item">
                     <a
                       class="nav-link"
                       data-toggle="tab"
                       href="#compatibilities"
                       role="tab"
                       aria-controls="product-details"
                       <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'COMPATIBILITIES','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                   </li>
                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                     <li class="nav-item">
                       <a
                         class="nav-link"
                         data-toggle="tab"
                         href="#extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                         role="tab"
                         aria-controls="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                     </li>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   <li class="nav-item">
                     <a
                       class="nav-link"
                       data-toggle="tab"
                       href="#product_shipping"
                       role="tab"
                       aria-controls="product-details"
                       <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SHIPPING','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                   </li>
                   <li class="nav-item">
                     <a
                       class="nav-link"
                       data-toggle="tab"
                       href="#product_warranty"
                       role="tab"
                       aria-controls="product-details"
                       <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warranty','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                   </li>
                   <li class="nav-item">
                     <a
                       class="nav-link"
                       data-toggle="tab"
                       href="#product_askquestion"
                       role="tab"
                       aria-controls="product-details"
                       <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ASK A QUESTION','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                   </li>
                   <li class="nav-item mobile">
                     <a
                       class="nav-link"
                       data-toggle="tab"
                       href="#product_reviews"
                       role="tab"
                       aria-controls="product_reviews"
                       <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                   </li>
                   
                 </ul>
         
                          
                 <div class="tab-content" id="tab-content">
                  <div class="tab-pane fade in active" id="description" role="tabpanel">
                   <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                     <div class="banner-tabs" >
                       <img src="https://www.all-stars-motorsport.com/img/app_icons/description/99_en.webp" />
                     </div>
                     <div class="tab-description tab" style="display: flex;justify-content:center;flex-direction:column;padding:1rem">
                       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67183251566756837a98667_38113444', 'product_description', $this->tplIndex);
?>

                       <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['youtube_code'])) {?>
                         <div class="column_video" style="display:flex;justify-content:center;align-items:center;margin:2rem 0;">
                           <div class="video3 video" style="width:480px;border-radius: 0.25rem;overflow: hidden;">
                             <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="position: relative;cursor:pointer;">
                             <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" style="width: 100%;max-height:318px;object-fit:cover;" loading="lazy"/>
                               <div class="play" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                                 <img class="image_play" alt="video player" src="/img/youtube_play.png" loading="lazy" />
                               </div>
                             </div>
                             <div  class="iframeClass"  style="display:none;height:318px">
                               <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['youtube_code'], ENT_QUOTES, 'UTF-8');?>
?autoplay=0&mute=1&rel=0" loading="lazy" style="width:100%;height:318px;">
                               </iframe>
                             </div>
                           </div>
                         </div>
                         <?php }?>
                         <smalL style="text-align: center;">Content protected by copyright © 2024 - All rights reserved</smalL>
                     </div>
                                        <?php } else { ?>
                     <div class="banner-tabs" >
                       <img src="https://www.all-stars-motorsport.com/img/app_icons/description/99_en.webp" />
                     </div>
                     <div class="tab-description tab" style="display: flex;">
                       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80059091366756837a9c309_31572203', 'product_description', $this->tplIndex);
?>

                       <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['youtube_code'])) {?>
                         <div class="column_video" style="width: 40%;display:flex;justify-content:center;align-items:center;">
                           <div class="video3 video" style="width: 75%;border-radius: 0.25rem;overflow: hidden;">
                             <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="position: relative;cursor:pointer;">
                             <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" style="width: 100%;max-height:318px;object-fit:cover;" loading="lazy"/>
                               <div class="play" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                                 <img class="image_play" alt="video player" src="/img/youtube_play.png" loading="lazy" />
                               </div>
                             </div>
                             <div  class="iframeClass"  style="display:none;height:318px">
                               <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['youtube_code'], ENT_QUOTES, 'UTF-8');?>
?autoplay=0&mute=1&rel=0" loading="lazy" style="width:100%;height:318px;">
                               </iframe>
                             </div>
                           </div>
                         </div>
                         <?php }?>
                                              
                     </div>
 
                   <?php }?>
                   <?php echo '<script'; ?>
>
                       addEventListener("DOMContentLoaded", (event) => {
                         const videoProduct =  document.querySelector(".column_video .video");
                         const imgPlay = document.querySelector(".image_play")
                         if(videoProduct && imgPlay){
                           videoProduct.addEventListener('mouseover', () => {
                             imgPlay.setAttribute('src', "/img/youtube_play_hover.png")
                           });
                           videoProduct.addEventListener('mouseleave', () => {
                             imgPlay.setAttribute('src', "/img/youtube_play.png")
                           });
                         }
                         
                       });
                       <?php echo '</script'; ?>
>
                  </div>
         
                                    
         
                  <div class="tab-pane fade in" id="compatibilities" role="tabpanel">
                     <div class="banner-tabs" >
                       <img src="https://www.all-stars-motorsport.com/img/app_icons/compatibilities_en.webp" />
                     </div>
                    <div class="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductTabContent','mod'=>'ukoocompat','id_module'=>124),$_smarty_tpl ) );?>
</div>
                  </div>
         
                           
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94751196466756837aa1262_80145504', 'product_attachments', $this->tplIndex);
?>

         
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                  <div class="tab-pane fade in <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                    <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                  </div>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         
                  <div  class="tab-pane fade in" id="product_shipping"  role="tabpanel">
                   <div class="banner-tabs" >
                     <img src="https://www.all-stars-motorsport.com/img/app_icons/shipping_en.webp" />
                   </div>
                    <div class="tab">
                      Shipping options
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['zone']->value, ENT_QUOTES, 'UTF-8');?>

                    </div>
                  </div>

                  <div  class="tab-pane fade in" id="product_warranty"  role="tabpanel">
                   <div class="banner-tabs" >
                     <img src="https://www.all-stars-motorsport.com/img/app_icons/warranty_en.webp" />
                   </div>
                   <p class="tab">Product Warranty</p>
                  </div>

                  <div  class="tab-pane fade in" id="product_askquestion"  role="tabpanel">
                   <div class="banner-tabs" >
                       <img src="https://www.all-stars-motorsport.com/img/app_icons/faq_en.webp" />
                   </div>
                   
                   <form class="form-askquestion col-lg-9 tab">
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputname" aria-describedby="nameHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your question."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  
                   </form>
                  </div>
         
               </div>
               </div>
             <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
class Block_179488974366756837aa8cf6_37424563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, true);
?>
                 <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_miniature'} */
class Block_46495320166756837aab414_88246365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, true);
?>
                 <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_107674203766756837aa7060_09344598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
         <section class="product-accessories clearfix">
                      <div class="products desktop">
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
               <?php if ($_smarty_tpl->tpl_vars['position']->value < 4) {?>
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179488974366756837aa8cf6_37424563', 'product_miniature', $this->tplIndex);
?>

               <?php }?>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           </div>

           <div class="swiper products-mobile mobile">
            <div class="swiper-wrapper">
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
               <?php if ($_smarty_tpl->tpl_vars['position']->value < 4) {?>
                <div class="swiper-slide">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46495320166756837aab414_88246365', 'product_miniature', $this->tplIndex);
?>

                </div>
               <?php }?>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
           </div>

         </section>
       <?php }?>
     <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_images_modal'} */
class Block_19837670566756837aac7c1_88105217 extends Smarty_Internal_Block
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
class Block_115793385766756837aad2e7_09635136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

           <!-- Footer content -->
         <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_101543814966756837aacff1_52418976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <footer class="page-footer">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115793385766756837aad2e7_09635136', 'page_footer', $this->tplIndex);
?>

       </footer>
     <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_50706734266756837a6f348_98324800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_50706734266756837a6f348_98324800',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_155346622666756837a6fb57_70129548',
  ),
  'page_content' => 
  array (
    0 => 'Block_85853743466756837a6fe53_44658979',
    1 => 'Block_114171586966756837a718d9_66676534',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_105077233466756837a701b2_51400789',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_135450417966756837a77162_86668344',
  ),
  'page_header' => 
  array (
    0 => 'Block_57570462166756837a77497_65238419',
  ),
  'page_title' => 
  array (
    0 => 'Block_196549248666756837a77771_37406339',
  ),
  'product_availability' => 
  array (
    0 => 'Block_98628730766756837a7bd41_67676995',
  ),
  'product_customization' => 
  array (
    0 => 'Block_60646627066756837a81407_83974105',
  ),
  'product_buy' => 
  array (
    0 => 'Block_168246651066756837a82905_79397602',
  ),
  'product_prices' => 
  array (
    0 => 'Block_191513782666756837a84638_09594411',
  ),
  'product_pack' => 
  array (
    0 => 'Block_136660289766756837a85441_35148824',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_78285706966756837a88412_19558111',
    1 => 'Block_179488974366756837aa8cf6_37424563',
    2 => 'Block_46495320166756837aab414_88246365',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_185028683166756837a8a2f9_35056143',
  ),
  'product_variants' => 
  array (
    0 => 'Block_177225185966756837a8b069_43447637',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_36689054166756837a8bce2_66664627',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_20080375566756837a8cab6_17941510',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_85005613666756837a8e474_46898617',
  ),
  'product_description' => 
  array (
    0 => 'Block_67183251566756837a98667_38113444',
    1 => 'Block_80059091366756837a9c309_31572203',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_94751196466756837aa1262_80145504',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_107674203766756837aa7060_09344598',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_19837670566756837aac7c1_88105217',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_101543814966756837aacff1_52418976',
  ),
  'page_footer' => 
  array (
    0 => 'Block_115793385766756837aad2e7_09635136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 
   <section id="main">
     <meta content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <div class="row product-container js-product-container">
        <div class="col-md-6 left-side desktop">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155346622666756837a6fb57_70129548', 'page_content_container', $this->tplIndex);
?>

         </div>

         <div class="container-imgs-mobile mobile">
         <h1><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114171586966756837a718d9_66676534', 'page_content', $this->tplIndex);
?>

         </div>

         <div class="col-md-6 right-side" >
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135450417966756837a77162_86668344', 'page_header_container', $this->tplIndex);
?>

 
           <?php $_smarty_tpl->_assignInScope('linkPayment', $_smarty_tpl->tpl_vars['link']->value->getCMSLink(47));?>
           <?php $_smarty_tpl->_assignInScope('manufacturers', Manufacturer::getManufacturers());?>
 
           <div class="subtitles-details">

            <div class="subtitles-details-left">
              <div class="details-reference"><b>Reference:</b> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div>EC Approved: <span>No</span></div>
            </div>

            <div class="subtitles-details-right">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98628730766756837a7bd41_67676995', 'product_availability', $this->tplIndex);
?>

              <div>Shipped from EU</div>
            </div>

           </div>
           
 
           <div class="product-information">
              
             <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60646627066756837a81407_83974105', 'product_customization', $this->tplIndex);
?>

             <?php }?>
 
             <div class="product-actions js-product-actions">
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168246651066756837a82905_79397602', 'product_buy', $this->tplIndex);
?>

 
             </div>
  
         </div>
 
 
 
       </div>
     </div>

 <div class="section_tabs_video" style="display: flex;<?php if (empty($_smarty_tpl->tpl_vars['product']->value['youtube_code'])) {?>justify-content:center;<?php }?>">
                          <div class="column_tabs" style="width:100%">
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85005613666756837a8e474_46898617', 'product_tabs', $this->tplIndex);
?>

 
             </div>
                                              <?php echo '<script'; ?>
>
          //  document.addEventListener("DOMContentLoaded", (event) => {
          //    const arrowsImgs = document.querySelector(".scroll-box-arrows")
          //    if(screen.width < 600){
          //      arrowsImgs.style.display = "none";
          //    }
          //  })
           <?php echo '</script'; ?>
>
 </div>

 <div class="desktop" style="padding: 0.5rem 1rem; background:#333;width:100%;color: #fff;">
 Reviews
 </div>

 <div  class="desktop" id="product_reviews" style="padding:1rem 0;display:flex;flex-direction:column;">
  <div class="banner-tabs" >
    <img src="https://www.all-stars-motorsport.com/img/app_icons/reviews_en.webp" />
  </div>
  
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

</div>

 
<div class="complementary-products-flag">
Complementary Products
</div>
 
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107674203766756837aa7060_09344598', 'product_accessories', $this->tplIndex);
?>

 
      
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19837670566756837aac7c1_88105217', 'product_images_modal', $this->tplIndex);
?>

 
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101543814966756837aacff1_52418976', 'page_footer_container', $this->tplIndex);
?>

   </section>
 
 <?php
}
}
/* {/block 'content'} */
}
