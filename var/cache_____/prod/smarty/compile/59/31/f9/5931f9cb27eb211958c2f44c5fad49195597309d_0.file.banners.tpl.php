<?php
/* Smarty version 4.3.4, created on 2024-06-17 09:45:26
  from 'C:\xampp\htdocs\euromus\modules\wmmodule_homepage\views\templates\admin\banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ff7a67cded7_40929723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5931f9cb27eb211958c2f44c5fad49195597309d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\wmmodule_homepage\\views\\templates\\admin\\banners.tpl',
      1 => 1706781114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ff7a67cded7_40929723 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="display: block;" id="banners_container" class="elements_container">
    <div style="display: inline-block;border: 1px solid #444;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner', false, 'index');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
            <div style="border-bottom: 3px solid dodgerblue;width: 100%;">
                <div class="banner_container" id="container_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
">
             	    <input type="hidden" name="position[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
">
             	    <input type="hidden" name="type[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" value="desktop">
             	    <input type="hidden" name="icon_type[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" value="1">
             	    <?php $_smarty_tpl->_assignInScope('id_manufacturer', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['banner']->value['link'] )));?>
             	    <input type="hidden" id="homepage_manufacturer_id_manufacturer_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" name="homepage_manufacturer_id_manufacturer[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['id_manufacturer']->value[0];?>
">
             	    <input type="hidden" id="homepage_manufacturer_id_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" name="homepage_manufacturer_id[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" value="">
             	    <div style="display: flex;">
             	        <div style="border-bottom: 1px solid #666;"></div>
                        <div style="width: 68%; float: left;"> <img id="image_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['banner']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="width: 1100px;border: 1px solid #000;height: 200px;background-image: url('/modules/wmmodule_homepage/views/images/upload_banner.webp');background-position: center;background-repeat: no-repeat;background-size: contain;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
,1,$('#select_brand_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
'))"> </div>
                        <div style="width: calc(32% - 10px);float: left;margin: 0 10px;">                            
                            <div style="margin-top: 10px;"> <input type="checkbox" onclick="ativa('ativo_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
');" id="ativo_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" value="1" name="active[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['banner']->value['active'] == 1) {?> checked="checked" <?php } else { ?> <?php }?>> <span style="margin-left: 5px;"> Ativo</span> </div>
                            <div style="margin-top: 10px;width: 100%; float: left;">
                                <label>Select brand</label> 
                                <select id="select_brand_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" name="link[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
, 'select_brand_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
')">
                                    <option value="">---</option>
                                    <option value="523_clearence" <?php if ("523_clearence" == $_smarty_tpl->tpl_vars['banner']->value['link']) {?> selected <?php }?>>Clearence</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?> 
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['link_data'];?>
" <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['link_data'] == $_smarty_tpl->tpl_vars['banner']->value['link']) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div style="display:none;margin-top: 10px;width: 0%; float: left; color: black; font-weight: bolder; font-size: 16px; text-transform: uppercase; text-align: center; padding: 27px 0 0 0;" ></div>
                            <div style="display:none;margin-top: 10px;width: 0%; float: left;">
                                <label>Select car</label> 
                                <?php $_smarty_tpl->_assignInScope('compat', ((string)$_smarty_tpl->tpl_vars['banner']->value['brand'])."_".((string)$_smarty_tpl->tpl_vars['banner']->value['model'])."_".((string)$_smarty_tpl->tpl_vars['banner']->value['type'])."_".((string)$_smarty_tpl->tpl_vars['banner']->value['version']));?>
                                <select id="select_car_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
" name="car[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" onclick="setImageText($(this), <?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
, 'select_car_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
');">
                                    <option value="">---</option>
                                                                </select>                        
                            </div>
                            <div style="color: #666; text-transform: uppercase; background-color: #ddd;padding: 5px;display: inline-block; padding: 10px; margin-top: 10px;">
                                <span  style="width: 80px; float: left;padding: 5px 0;">Inglês</span>
                                <input style="width: calc(100% - 80px); float: left;" name="title_en[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title_en'];?>
" placeholder="Titulo em inglês" id="title_en_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
">
                                <span  style="width: 80px; float: left;padding: 5px 0;">Espanhol</span>
                                <input style="width: calc(100% - 80px); float: left;" name="title_es[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title_es'];?>
" placeholder="Titulo em espanhol" id="title_es_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
">
                                <span  style="width: 80px; float: left;padding: 5px 0;">Francês</span>
                                <input style="width: calc(100% - 80px); float: left;" name="title_fr[<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title_fr'];?>
" placeholder="Titulo em francês" id="title_fr_<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
