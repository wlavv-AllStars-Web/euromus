<?php
/* Smarty version 4.3.4, created on 2024-06-17 09:45:26
  from 'C:\xampp\htdocs\euromus\modules\wmmodule_homepage\views\templates\admin\icons_33.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ff7a6d66885_36860750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b847488a93cd48e4d69535ef174bd2339ab0ab2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\wmmodule_homepage\\views\\templates\\admin\\icons_33.tpl',
      1 => 1718189453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ff7a6d66885_36860750 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="display: none;" id="sliders33_container" class="elements_container">
<?php $_smarty_tpl->_assignInScope('currentShop', Context::getContext()->shop->id);
$_smarty_tpl->_assignInScope('cardNumber', 0);?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_icons_50']->value, 'icons_50', false, 'index_50');
$_smarty_tpl->tpl_vars['icons_50']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index_50']->value => $_smarty_tpl->tpl_vars['icons_50']->value) {
$_smarty_tpl->tpl_vars['icons_50']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['currentShop']->value == 1) {?>
        <h1 style="font-weight: 700;width:100%">Card <?php echo $_smarty_tpl->tpl_vars['index_50']->value+1;?>
</h1>
        <?php }?>
        <div style="display: flex;gap:0.5rem;margin-top:1rem;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_icons_33']->value, 'icons_33', false, 'index_33');
$_smarty_tpl->tpl_vars['icons_33']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index_33']->value => $_smarty_tpl->tpl_vars['icons_33']->value) {
$_smarty_tpl->tpl_vars['icons_33']->do_else = false;
?> 
            <?php if ($_smarty_tpl->tpl_vars['index_50']->value == 0 && $_smarty_tpl->tpl_vars['icons_33']->value['id_parent_card'] == 1) {?>
                
                    <div style="border: 1px solid #666;flex:1;padding: 5px;min-height:560px;background:#808080;color:#fff">
                        <input type="hidden" name="position[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
">
                        <input type="hidden" name="type[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="desktop">
                        <input type="hidden" name="icon_type[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="3">
                        <input type="hidden" value="1" name="active[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]"> 
                        <?php $_smarty_tpl->_assignInScope('id_manufacturer', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['icons_33']->value['link'] )));?>
                        <input type="hidden" id="homepage_manufacturer_id_manufacturer_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="homepage_manufacturer_id_manufacturer[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['id_manufacturer']->value[0];?>
">
                        <input type="hidden" id="homepage_manufacturer_id_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="homepage_manufacturer_id[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="">
                        <?php if ($_smarty_tpl->tpl_vars['currentShop']->value === 1) {?>
                        <img id="image_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" inputparentcard="1" src="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['icons_33']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="background-color: #fff;margin-bottom: 10px;width: 100%;border: 1px solid #000;min-height: 365px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;object-fit: cover;max-height: 365px;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
,3,$('#select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
'),'miniature')">
                        <?php } else { ?>
                        <img id="image_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" inputparentcard="1" src="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['icons_33']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="background-color: #fff;margin-bottom: 10px;width: 100%;border: 1px solid #000;min-height: 365px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;object-fit: cover;max-height: 365px;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
,3,$('#select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
'))">
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['currentShop']->value != 1) {?>
                        <div style="display:flex;">
                            <div style="width: 45%;">
                                <label>Select brand</label> 
                                <select id="select_brand_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="link[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
, 'select_brand_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
')" style="padding:5px;">
                                    <option value="">---</option>
                                    <option value="523_clearence" <?php if ("523_clearence" == $_smarty_tpl->tpl_vars['icons_33']->value['link']) {?> selected <?php }?>>Clearence</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['link_data'];?>
" <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['link_data'] == $_smarty_tpl->tpl_vars['icons_33']->value['link']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div style="width: 10%;">
                                <div style="color: black; font-weight: bolder; font-size: 1rem; text-transform: uppercase; text-align: center; padding: 15px 15px 0px 15px;" > OR </div>
                            </div>
                            <div style="width: 45%;">
                                <label>Select car</label> 
                                <?php $_smarty_tpl->_assignInScope('compat', ((string)$_smarty_tpl->tpl_vars['icons_33']->value['brand'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['model'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['type'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['version']));?>
                                <select id="select_car_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="car[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
, 'select_car_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
');" style="padding:5px;">
                                    <option value="">---</option>
                                    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                                        <option value="<?php echo implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters']));?>
"  <?php if ((implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters'])) == $_smarty_tpl->tpl_vars['compat']->value)) {?> selected <?php }?>><?php echo implode(' | ',array_values($_smarty_tpl->tpl_vars['car']->value['filters']));?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                
                                </select>
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['currentShop']->value == 1) {?>
                            <div style="display: flex;flex-wrap:wrap;">
                            <div style="width: 45%;float: left;display:none;">
                                <label>Select Parent</label> 
                                <select id="select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" inputparentcard="1"  name="link[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
, 'select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
')" style="padding:5px;">
                                    <option value="">---</option>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" selected ><?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
</option>
                                                                    </select>
                            </div>
                            <div style="width: 10%;display:none;">
                                <div style="color: black; font-weight: bolder; font-size: 1rem; text-transform: uppercase; text-align: center; padding: 15px 15px 0px 15px;" > OR </div>
                            </div>
                            <div style="width: 100%;">
                                <label>Select car</label> 
                                <?php $_smarty_tpl->_assignInScope('compat', ((string)$_smarty_tpl->tpl_vars['icons_33']->value['brand'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['model'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['type'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['version']));?>
                                <select id="select_car_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="car[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setIdToZero(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
);" style="padding:5px;">
                                    <option value="">---</option>
                                    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                                        <option value="<?php echo implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters']));?>
"  <?php if ((implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters'])) == $_smarty_tpl->tpl_vars['compat']->value)) {?> selected <?php }?>><?php echo implode(' | ',array_values($_smarty_tpl->tpl_vars['car']->value['filters']));?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                
                                </select>
                            </div>
                            <div style="width: 100%;display:flex;flex-direction: column;margin:0.5rem 0;">
                                <label style="color: #103054;">ID of Product</label> 
                                <input class="id_product_input" style="width: 100%;height:39px;color: #555;font-size:0.85rem;" name="link_[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="number" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['link'];?>
" placeholder="0" id="link_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" onchange="setIdProduct(this,<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
)">  
                            </div>
                            </div>
                        <?php }?>


                    

                        <div style="color: #666; text-transform: uppercase; background-color: #808080;color:#fff;padding: 5px;display: inline-block;">
                            <span  style="width: 80px; float: left;padding: 5px 0;">Inglês</span>
                            <input style="width: calc(100% - 80px); float: left;" name="title_en[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_en'];?>
" placeholder="Titulo em inglês" id="title_en_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                            <span  style="width: 80px; float: left;padding: 5px 0;">Espanhol</span>
                            <input style="width: calc(100% - 80px); float: left;" name="title_es[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_es'];?>
" placeholder="Titulo em espanhol" id="title_es_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                            <span  style="width: 80px; float: left;padding: 5px 0;">Francês</span>
                            <input style="width: calc(100% - 80px); float: left;" name="title_fr[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_fr'];?>
" placeholder="Titulo em francês" id="title_fr_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                        </div>
                    </div>
                
            <?php } elseif ($_smarty_tpl->tpl_vars['index_50']->value == 1 && $_smarty_tpl->tpl_vars['icons_33']->value['id_parent_card'] == 2) {?>
                <div style="border: 1px solid #666;flex:1;padding: 5px;min-height:560px;background:#808080;color:#fff;">
                <input type="hidden" name="position[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
">
                <input type="hidden" name="type[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="desktop">
                <input type="hidden" name="icon_type[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="3">
                <input type="hidden" value="1" name="active[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]"> 
                <?php $_smarty_tpl->_assignInScope('id_manufacturer', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['icons_33']->value['link'] )));?>
                <input type="hidden" id="homepage_manufacturer_id_manufacturer_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="homepage_manufacturer_id_manufacturer[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['id_manufacturer']->value[0];?>
">
                <input type="hidden" id="homepage_manufacturer_id_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="homepage_manufacturer_id[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="">
                <img id="image_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" inputparentcard="2" src="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['icons_33']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="background-color: #fff;margin-bottom: 10px;width: 100%;border: 1px solid #000;min-height: 365px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;object-fit: cover;max-height: 365px;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
,3,$('#select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
'),'miniature')">
                
                
                <div style="display: flex;flex-wrap:wrap;">
                <div style="width: 45%;float: left;display:none;">
                    <label>Select Parent</label> 
                    <select id="select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" inputparentcard="1"  name="link[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
, 'select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
')" style="padding:5px;">
                        <option value="">---</option>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" selected ><?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
</option>
                                            </select>
                </div>
                <div style="width: 10%;display:none;">
                    <div style="color: black; font-weight: bolder; font-size: 1rem; text-transform: uppercase; text-align: center; padding: 15px 15px 0px 15px;" > OR </div>
                </div>
                <div style="width: 100%;">
                    <label>Select car</label> 
                    <?php $_smarty_tpl->_assignInScope('compat', ((string)$_smarty_tpl->tpl_vars['icons_33']->value['brand'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['model'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['type'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['version']));?>
                    <select id="select_car_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="car[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setIdToZero(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
);" style="padding:5px;">
                        <option value="">---</option>
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                            <option value="<?php echo implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters']));?>
"  <?php if ((implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters'])) == $_smarty_tpl->tpl_vars['compat']->value)) {?> selected <?php }?>><?php echo implode(' | ',array_values($_smarty_tpl->tpl_vars['car']->value['filters']));?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    </select>
                </div>
                <div style="width: 100%;display:flex;flex-direction: column;margin:0.5rem 0;">
                    <label style="color: #103054;">ID of Product</label> 
                    <input class="id_product_input" style="width: 100%;height:39px;color: #555;font-size:0.85rem;" name="link_[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="number" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['link'];?>
" placeholder="0" id="link_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" onchange="setIdProduct(this,<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
)">  
                </div>
                </div>
                


            

                <div style="color: #666; text-transform: uppercase;background:#808080;color:#fff;padding: 5px;display: inline-block;">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Inglês</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_en[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_en'];?>
" placeholder="Titulo em inglês" id="title_en_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Espanhol</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_es[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_es'];?>
" placeholder="Titulo em espanhol" id="title_es_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Francês</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_fr[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_fr'];?>
" placeholder="Titulo em francês" id="title_fr_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                </div>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['index_50']->value == 2 && $_smarty_tpl->tpl_vars['icons_33']->value['id_parent_card'] == 3) {?>
                <div style="border: 1px solid #666;flex:1;padding: 5px;background:#808080;color:#fff;min-height:560px">
                <input type="hidden" name="position[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
">
                <input type="hidden" name="type[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="desktop">
                <input type="hidden" name="icon_type[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="3">
                <input type="hidden" value="1" name="active[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]"> 
                <?php $_smarty_tpl->_assignInScope('id_manufacturer', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['icons_33']->value['link'] )));?>
                <input type="hidden" id="homepage_manufacturer_id_manufacturer_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="homepage_manufacturer_id_manufacturer[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['id_manufacturer']->value[0];?>
">
                <input type="hidden" id="homepage_manufacturer_id_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="homepage_manufacturer_id[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" value="">
                <img id="image_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['icons_33']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="background-color: #fff;margin-bottom: 10px;width: 100%;border: 1px solid #000;min-height: 365px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;object-fit: cover;max-height: 365px;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
,3,$('#select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
'),'miniature')">
                
                
                <div style="display: flex;flex-wrap:wrap;">
                            <div style="width: 45%;float: left;display:none;">
                                <label>Select Parent</label> 
                                <select id="select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" inputparentcard="1"  name="link[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
, 'select_mini_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
')" style="padding:5px;">
                                    <option value="">---</option>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" selected ><?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
</option>
                                                                    </select>
                            </div>
                            <div style="width: 10%;display:none;">
                                <div style="color: black; font-weight: bolder; font-size: 1rem; text-transform: uppercase; text-align: center; padding: 15px 15px 0px 15px;" > OR </div>
                            </div>
                            <div style="width: 100%;">
                                <label>Select car</label> 
                                <?php $_smarty_tpl->_assignInScope('compat', ((string)$_smarty_tpl->tpl_vars['icons_33']->value['brand'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['model'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['type'])."_".((string)$_smarty_tpl->tpl_vars['icons_33']->value['version']));?>
                                <select id="select_car_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" name="car[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" onclick="setIdToZero(this, <?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
);" style="padding:5px;">
                                    <option value="">---</option>
                                    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                                        <option value="<?php echo implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters']));?>
"  <?php if ((implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters'])) == $_smarty_tpl->tpl_vars['compat']->value)) {?> selected <?php }?>><?php echo implode(' | ',array_values($_smarty_tpl->tpl_vars['car']->value['filters']));?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                
                                </select>
                            </div>
                            <div style="width: 100%;display:flex;flex-direction: column;margin:0.5rem 0;">
                                <label style="color: #103054;">ID of Product</label> 
                                <input class="id_product_input" style="width: 100%;height:39px;color: #555;font-size:0.85rem;" name="link_[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="number" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['link'];?>
" placeholder="0" id="link_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" onchange="setIdProduct(this,<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
)">  
                            </div>
                            </div>

            

                <div style="color: #fff; text-transform: uppercase; background-color: #808080;padding: 5px;display: inline-block;">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Inglês</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_en[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_en'];?>
" placeholder="Titulo em inglês" id="title_en_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Espanhol</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_es[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_es'];?>
" placeholder="Titulo em espanhol" id="title_es_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Francês</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_fr[<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['title_fr'];?>
" placeholder="Titulo em francês" id="title_fr_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
">
                </div>
            </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<style>
.id_product_input:focus {
    border: none !important;
    border-color:#103054 !important;
    background: #e6e6e6 !important;
}
.id_product_input:focus-visible {
    border-color:#103054 !important;
    background: #e6e6e6 !important;
    border: none !important;
}
</style>

<?php }
}
