<?php
/* Smarty version 4.3.4, created on 2024-06-13 12:02:38
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\_partials\productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ad1ce0df808_77852105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcd3762b1da4b0fc3d494861111644242a071623' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\_partials\\productlist.tpl',
      1 => 1711122418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_666ad1ce0df808_77852105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productClasses", null);
if (!empty($_smarty_tpl->tpl_vars['productClass']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClass']->value, ENT_QUOTES, 'UTF-8');
} else { ?>col-xs-12 col-sm-6 col-lg-3 col-xl-3<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    
<div class="products<?php if (!empty($_smarty_tpl->tpl_vars['cssClass']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ((isset($_smarty_tpl->tpl_vars['search']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('filter1', Tools::getValue('filters1'));?>
        <?php $_smarty_tpl->_assignInScope('filter2', Tools::getValue('filters2'));?>
        <?php $_smarty_tpl->_assignInScope('filter3', Tools::getValue('filters3'));?>
        <?php $_smarty_tpl->_assignInScope('filter4', Tools::getValue('filters4'));?>

        <?php $_smarty_tpl->_assignInScope('compatvalues', IndexControllerCore::getBrandAndModel($_smarty_tpl->tpl_vars['filter1']->value,$_smarty_tpl->tpl_vars['filter2']->value,$_smarty_tpl->tpl_vars['filter3']->value,$_smarty_tpl->tpl_vars['filter4']->value,2));?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compatvalues']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['name_brand'], 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('brand', $_smarty_tpl->tpl_vars['brand']->value['value']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['name_model'], 'model');
$_smarty_tpl->tpl_vars['model']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('model', $_smarty_tpl->tpl_vars['model']->value['value']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['name_type'], 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('type', $_smarty_tpl->tpl_vars['type']->value['value']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['name_version'], 'version');
$_smarty_tpl->tpl_vars['version']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['version']->value) {
$_smarty_tpl->tpl_vars['version']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('version', $_smarty_tpl->tpl_vars['version']->value['value']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="js-product product car<?php if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?>" style="display: flex;justify-content:center;outline: 3px solid #103054;">
            <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="thumbnail-container" style="background:#1030543d;display: flex;flex-direction: column;justify-content: center;">
                    <div class="thumbnail-top">
                        <picture>
                            <img src="/img/eurmuscle/cardCarsHome/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['model']->value, ENT_QUOTES, 'UTF-8');?>
.png" style="width: 100%;background:transparent;max-height: 175px;
                            object-fit: cover;"/>
                        </picture>
                    </div>
                    <div class="product-descriptionn" style="background: transparent;display: flex;flex-direction: column;align-items: center;color:#fff;gap:0.5rem;">
                        <div style="display: flex;gap:1rem;font-size: 1.25rem;font-weight: 600;color:#103054;">
                            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value, ENT_QUOTES, 'UTF-8');?>
</span>|<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['model']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div style="display: flex;flex-direction:column;align-items: center;gap:0.25rem;color:#103054;font-weight: 400;font-size: 1rem;">
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    </div>
                </div>
        </div>
        
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['name'] == "4X4" || $_smarty_tpl->tpl_vars['category']->value['name'] == "TRUCK" || $_smarty_tpl->tpl_vars['category']->value['name'] == "CLASSICS" || $_smarty_tpl->tpl_vars['category']->value['name'] == "MODERN" || $_smarty_tpl->tpl_vars['category']->value['name'] == "TOOLS" || $_smarty_tpl->tpl_vars['category']->value['name'] == "MERCHANDISING") {?>
    <div class="js-product product category<?php if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?>" style="display: flex;justify-content:center;outline: 3px solid #103054;">
        <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="thumbnail-container" style="background:#1030543d;display: flex;flex-direction: row;justify-content: center;align-items:center;">
                <div class="thumbnail-top" style="flex: 1;height:100%;">
                    <picture>
                        <img src="/img/eurmuscle/bannersHome/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['id'], ENT_QUOTES, 'UTF-8');?>
.webp" style="width: 100%;background:transparent;height:100%;object-position: -132px center;
                        object-fit: cover;"/>
                    </picture>
                </div>
                <div class="product-descriptionn" style="background: transparent;display: flex;flex-direction: column;align-items: center;color:#fff;gap:0.5rem;padding:0.5rem 0;flex:0.7;">
                    <h2 style="color: #103054;font-size:1.5rem;font-weight:600;"><?php echo htmlspecialchars((string) mb_strtoupper((string) $_smarty_tpl->tpl_vars['category']->value['name'] ?? '', 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h2>
                </div>
            </div>
    </div>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>$_smarty_tpl->tpl_vars['productClasses']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php }
}
