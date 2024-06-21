<?php
/* Smarty version 4.3.4, created on 2024-06-17 09:45:26
  from 'C:\xampp\htdocs\euromus\modules\wmmodule_homepage\views\templates\admin\icons_50.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ff7a6a69d49_41942991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36bbb488eadc19a4ead023645422d3b5e08aa2e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\wmmodule_homepage\\views\\templates\\admin\\icons_50.tpl',
      1 => 1709826355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ff7a6a69d49_41942991 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="display: none;" id="sliders50_container" class="elements_container">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_icons_50']->value, 'icons_50', false, 'index');
$_smarty_tpl->tpl_vars['icons_50']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['icons_50']->value) {
$_smarty_tpl->tpl_vars['icons_50']->do_else = false;
?>
        <div style="border: 1px solid #666;flex:1;padding: 5px;">
     	    <input type="hidden" name="position[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
">
     	    <input type="hidden" name="type[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" value="desktop">
     	    <input type="hidden" name="icon_type[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" value="2">
            <input type="hidden" value="1" name="active[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]"> 
     	    <?php $_smarty_tpl->_assignInScope('id_manufacturer', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['icons_50']->value['link'] )));?>
     	    <input type="hidden" id="homepage_manufacturer_id_manufacturer_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" name="homepage_manufacturer_id_manufacturer[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['id_manufacturer']->value[0];?>
">
     	    <input type="hidden" id="homepage_manufacturer_id_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" name="homepage_manufacturer_id[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" value="">
            <img id="image_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['icons_50']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="object-fit:cover;background-color: #fff;margin-bottom: 10px;width: 100%;border: 1px solid #000;min-height: 365px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;object-fit:cover;max-height: 365px;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
,2,$('#select_brand_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
'))">
            <div>
                <div style="display: flex;align-items:center;flex-wrap:wrap;">
                    <div style="width: 45%;">
                        <label>Select brand</label> 
                        <select id="select_brand_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" name="link[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
, 'select_brand_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
')">
                            <option value="">---</option>
                            <option value="523_clearence" <?php if ("523_clearence" == $_smarty_tpl->tpl_vars['icons_50']->value['link']) {?> selected <?php }?>>Clearence</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['link_data'];?>
" <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['link_data'] == $_smarty_tpl->tpl_vars['icons_50']->value['link']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div style="width: 10%;">
                        <div style="color: black; font-weight: bolder; font-size: 16px; text-transform: uppercase; text-align: center; padding: 15px 15px 0px 15px;" > OR </div>
                    </div>
                    <div style="width: 45%;">
                        <?php $_smarty_tpl->_assignInScope('compat', ((string)$_smarty_tpl->tpl_vars['icons_50']->value['brand'])."_".((string)$_smarty_tpl->tpl_vars['icons_50']->value['model'])."_".((string)$_smarty_tpl->tpl_vars['icons_50']->value['type'])."_".((string)$_smarty_tpl->tpl_vars['icons_50']->value['version']));?>
                        <label>Select car</label> 
                        <select id="select_car_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" name="car[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
, 'select_car_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
');">
                                                        
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                                                                <option value="<?php echo implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters']));?>
" <?php if ((implode('_',array_keys($_smarty_tpl->tpl_vars['car']->value['filters'])) == $_smarty_tpl->tpl_vars['compat']->value)) {?> selected <?php }?>><?php echo implode(' | ',array_values($_smarty_tpl->tpl_vars['car']->value['filters']));?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                        </select>
                    </div>
                    <div style="width: 100%;display:flex;flex-direction: column;margin:0.5rem 0;">
                                <label style="color: #103054;">ID of Product</label> 
                                <input class="id_product_input" style="width: 100%;height:39px;color: #555;font-size:0.85rem;" name="link_[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" type="number" value="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['link'];?>
" placeholder="0" id="link_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" onchange="setIdProduct(this,<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
)">  
                    </div>
                </div>
                <div style="color: #666; text-transform: uppercase; background-color: #ddd;padding: 5px;display: inline-block; padding: 10px; width: 100%;">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Inglês</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_en[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['title_en'];?>
" placeholder="Titulo em inglês" id="title_en_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Espanhol</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_es[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['title_es'];?>
" placeholder="Titulo em espanhol" id="title_es_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
">
                    <span  style="width: 80px; float: left;padding: 5px 0;">Francês</span>
                    <input style="width: calc(100% - 80px); float: left;" name="title_fr[<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['title_fr'];?>
" placeholder="Titulo em francês" id="title_fr_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
">
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
