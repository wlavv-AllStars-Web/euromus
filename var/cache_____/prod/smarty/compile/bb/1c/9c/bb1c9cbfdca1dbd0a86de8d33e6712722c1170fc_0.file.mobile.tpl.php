<?php
/* Smarty version 4.3.4, created on 2024-06-17 09:45:27
  from 'C:\xampp\htdocs\euromus\modules\wmmodule_homepage\views\templates\admin\mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ff7a78002d0_33290496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb1c9cbfdca1dbd0a86de8d33e6712722c1170fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\wmmodule_homepage\\views\\templates\\admin\\mobile.tpl',
      1 => 1718613518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ff7a78002d0_33290496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('currentLanguageIso', Context::getContext()->language->iso_code);
$_smarty_tpl->_assignInScope('currentShop', Context::getContext()->shop->id);?>
<div id="mobile_container">
    <div style="display: flex;">
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;flex:1;background-color: dodgerblue; " onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_0').toggle();$('#container_block_mobile_0').css('display', 'flex');$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 1 </div>
        </div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;flex:1;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_1').toggle();$('#container_block_mobile_1').css('display', 'flex');$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 2 </div>
        </div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;flex:1;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_2').toggle();$('#container_block_mobile_2').css('display', 'flex');$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 3 </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['currentShop']->value === 2) {?> 
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;flex:1;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_3').toggle();$('#container_block_mobile_3').css('display', 'flex');$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 4 </div>
        </div>
        <div class="options_mobile_container" style="cursor: pointer;display: flow-root;margin-top: 10px;flex:1;background-color: grey;" onclick="$('.elements_mobile_container').css('display', 'none');$('#container_block_mobile_4').toggle();$('#container_block_mobile_4').css('display', 'flex');$('.options_mobile_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
            <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> POSITION 5 </div>
        </div>
        <?php }?>
    </div>
    <div style="display: flex">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mobile_icons']->value, 'mobile', false, 'index');
$_smarty_tpl->tpl_vars['mobile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['mobile']->value) {
$_smarty_tpl->tpl_vars['mobile']->do_else = false;
?>
            
            <div id="container_block_mobile_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="elements_mobile_container" style="margin-top: 20px;display: flex;justify-content:center;width: 100%;<?php if ($_smarty_tpl->tpl_vars['index']->value == 0) {?> dispplay: block; <?php } else { ?> display:none; <?php }?>">

                <div style="width: 25%;">
                    <img id="image_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['mobile']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['mobile']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="background-color: #fff;width: 100%;height:100%;border: 1px solid #000;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;object-fit: cover;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['mobile']->value['icon_type'];?>
,$('#select_brand_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
'))">
                </div>
                <div style="width: 25%;border: 1px solid #000;">
                    <input type="hidden" value="$mobile_icon_1['active']" name="active"> 
                    <div style="padding: 5px;margin-top: 10px;padding: 0 10px;">
                        <div style="display: flex;flex-wrap:wrap;">
                            <div style="width: 45%;">
                                <label>Select brand</label> 
                                <select id="select_brand_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
" name="link" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
, 'select_car_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
')">
                                    <option value="">---</option>
                                    <option value="523_clearence" <?php if ("523_clearence" == $_smarty_tpl->tpl_vars['mobile']->value['link']) {?> selected <?php }?>>Clearence</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['link_data'];?>
" <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['link_data'] == $_smarty_tpl->tpl_vars['mobile']->value['link']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div style="width: 10%;"> <div style="color: black; font-weight: bolder; font-size: 20px; text-transform: uppercase; text-align: center;" ></div> </div>
                            <div style="width: 45%;">
                                <?php $_smarty_tpl->_assignInScope('compat', ((string)$_smarty_tpl->tpl_vars['mobile']->value['brand'])."_".((string)$_smarty_tpl->tpl_vars['mobile']->value['model'])."_".((string)$_smarty_tpl->tpl_vars['mobile']->value['type'])."_".((string)$_smarty_tpl->tpl_vars['mobile']->value['version']));?>
                                <label>Select car</label> 
                                <select id="select_car_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
" name="car" onclick="setImageText(this, <?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
, 'select_brand_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
');">
                                    <option value="">---</option>
                                   
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
                                <input class="id_product_input" style="width: 100%;height:39px;color: #555;font-size:0.85rem;" name="link_[<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
]" type="number" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value['link'];?>
" placeholder="0" id="link_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
" onchange="setIdProduct(this,<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
)">  
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <div style="color: #555; text-transform: uppercase;padding: 5px 0;display: flex;">
                                <div   style="width: 80px; float: left;font-weight: bolder;">Inglês</div>
                                <input style="width: calc(100% - 80px); float: left;" name="title_en" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value['title_en'];?>
" placeholder="Titulo em inglês" id="title_en_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
">
                            </div>
                            <div style="color: #555; text-transform: uppercase;padding: 5px 0;display: flex;">
                                <div   style="width: 80px; float: left;font-weight: bolder;">Espanhol</div>
                                <input style="width: calc(100% - 80px); float: left;" name="title_en" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value['title_es'];?>
" placeholder="Titulo em espanhol" id="title_es_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
">
                            </div>
                            <div style="color: #555; text-transform: uppercase;padding: 5px 0;display: flex;">
                                <div   style="width: 80px; float: left;font-weight: bolder;">Francês</div>
                                <input style="width: calc(100% - 80px); float: left;" name="title_en" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value['title_fr'];?>
" placeholder="Titulo em francês" id="title_fr_<?php echo $_smarty_tpl->tpl_vars['mobile']->value['id'];?>
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
    <div style="text-align: center;margin: 10px;padding: 10px;">
        <button type="button" class="btn btn-primary" onclick="$('#showMobilePreview').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width:200px;">PREVIEW</button>
    </div>
</div>
<div id="showMobilePreview" style="display: none;background-color: #111;">
    
    <div style="background-color: #fff;">
    
        <div style="text-align: center;padding: 30px;width: 100%;display: inline-block;">
            <button type="button" class="btn btn-primary" onclick="$('#showMobilePreview').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width: 320px;">BACK TO EDITOR</button>
        </div>
    
        <div style="width: 320px;margin: 0 auto;background-color: #5c5c5c;">
            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/header_mobile<?php echo $_smarty_tpl->tpl_vars['currentShop']->value;?>
.png"> 
            </div>   

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mobile_icons']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <div style="width: 100%;padding: 5px;">
                    <img id="preview_image_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_en'];?>
" style="overflow: hidden;border: 1px solid #999;width: 100%;min-height:210px;object-fit:cover;"> 
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/body_mobile<?php echo $_smarty_tpl->tpl_vars['currentShop']->value;?>
.png"> 
            </div>
            <div class="videosContainer" style="flex-direction:column;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_videos']->value, 'video', false, 'index');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
                    <div class="video3 video">
                    <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                    <img id="preview_image_<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
"  src="<?php echo $_smarty_tpl->tpl_vars['video']->value["image_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
"/>
                        <div class="play">
                        <img class="image_play" alt="video player" src="/img/youtube_play.png" />
                        </div>
                    </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/footer_mobile<?php echo $_smarty_tpl->tpl_vars['currentShop']->value;?>
.png"> 
            </div>
        </div>
        
        <div style="text-align: center;padding: 30px;">
            <button type="button" class="btn btn-primary" onclick="saveMobileLive();" style="width:320px;">SAVE</button>
        </div>
    </div>
</div>

<style>
 .videosContainer
{
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 5px;
  padding: 2rem 15px;
  background-color: #707c88;
}

.videosContainer .video
{
    flex: 1;
}

.videosContainer .video3
{
  position: relative;
}

.videosContainer img
{
  cursor: pointer;
  width: 100%;
  object-fit: contain;
  object-position: center;
}

.videosContainer .image_play
{
  max-width: 100px !important;
  position: absolute !important;
  pointer-events: none;
  width: 100%;
  object-fit: contain;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

</style><?php }
}
