<?php
/* Smarty version 4.3.4, created on 2024-06-21 12:47:06
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6675683a0ef386_53648324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a92ea81d5457bd95e5a4dd4fb33661114c6fdf23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1718895971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6675683a0ef386_53648324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <div class="images-container js-images-container" >
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19667018426675683a0d7791_90254038', 'product_cover');
?>


 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18368264336675683a0e35b6_86282975', 'product_images');
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
/* {block 'product_cover'} */
class Block_19667018426675683a0d7791_90254038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_19667018426675683a0d7791_90254038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <div class="product-cover">
     <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
       <picture>
         <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
         <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
         <img
           class="js-qv-product-cover img-fluid"
           src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
           <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
             alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
             title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
           <?php } else { ?>
             alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           loading="lazy"
           width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
           height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
          
         >
       </picture>
       <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
         <i class="material-icons zoom-in">search</i>
       </div>
     <?php } else { ?>
       <picture>
         <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
         <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
         <img
           class="img-fluid"
           src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
           loading="lazy"
           width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
           height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
         >
       </picture>
     <?php }?>

     <?php if (str_contains($_smarty_tpl->tpl_vars['product']->value['category'],'clearance')) {?>
      <div style="position: absolute;top:1rem; right:0; width: fit-content;height:31px;background:var(--asm-color);border-radius:50px 0 0 50px;display:flex;align-items:center;gap:0.5rem;min-width:200px;font-weight:600;font-size:18px;padding:0 0.5rem;justify-content: end;">
      <span style="color: #131313;font-weight:700">CLEARANCE</span>  
      <span style="color: white;"> - 25%</span>  
     
      </div>
    <?php }?>

    <div class="real-picture" >
      Real Picture
    </div>
   </div>
 <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_18368264336675683a0e35b6_86282975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_18368264336675683a0e35b6_86282975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <div class="js-qv-mask mask">
     <ul class="product-images js-qv-product-images" >
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'key');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
         <?php if ($_smarty_tpl->tpl_vars['key']->value < 5) {?>
         <li class="thumb-container js-thumb-container">
           <picture>
             <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
             <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
             <img
               class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> selected js-thumb-selected <?php }?>"
               data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
               <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'])) {?>data-image-medium-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
               data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
               <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'])) {?>data-image-large-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
               src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
               <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                 alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                 title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
               <?php } else { ?>
                 alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
               <?php }?>
               loading="lazy"
               width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
               height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
             >
           </picture>
         </li>
         <?php }?>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </ul>
   </div>
 <?php
}
}
/* {/block 'product_images'} */
}
