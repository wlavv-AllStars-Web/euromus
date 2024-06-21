<?php
/* Smarty version 4.3.4, created on 2024-06-17 09:45:26
  from 'C:\xampp\htdocs\euromus\modules\wmmodule_homepage\views\templates\admin\desktop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ff7a65b2120_27476366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '685d284927cefae40498f2dac5bbf994e2cf423d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\wmmodule_homepage\\views\\templates\\admin\\desktop.tpl',
      1 => 1707501362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ff7a65b2120_27476366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('currentLanguageIso', Context::getContext()->language->iso_code);
$_smarty_tpl->_assignInScope('currentShop', Context::getContext()->shop->id);?>
<div id="desktop_container" style="font-weight: bolder;display:flex;flex-direction:column;">
            <div>
            <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: dodgerblue; " onclick="$('.elements_container').css('display', 'none');$('#banners_container').toggle();$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> BANNERS </div>
            </div>
            <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: grey;" onclick="$('.elements_container').css('display', 'none');$('#sliders50_container').toggle();$('#sliders50_container').css('display','flex');$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> ICONS 50% </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['currentShop']->value == 1) {?>
                <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: grey;" onclick="$('.elements_container').css('display', 'none');$('#sliders33_container').toggle();$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                    <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> ICONS 33% </div>
                </div>
            <?php } else { ?>
                <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: grey;" onclick="$('.elements_container').css('display', 'none');$('#sliders33_container').toggle();$('#sliders33_container').css('display','flex');$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                    <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder; color: #FFF;text-align: center;"> ICONS 33% </div>
                </div>
            <?php }?>
            <div class="options_desktop_container" style="cursor: pointer;display: flow-root;margin-top: 10px;width:25%;float:left;background-color: grey;" onclick="$('.elements_container').css('display', 'none');$('#videos_container').toggle();$('.options_desktop_container').css('background-color', 'grey'); $(this).css('background-color', 'dodgerblue')">
                <div style="width: 100%;text-align: left;border-top: 1px solid #666;border-left: 1px solid #666;border-right: 1px solid #666;padding: 5px;font-weight: bolder;color: #FFF;text-align: center;"> VIDEOS </div>
            </div>
        </div>
        <div>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['modules']->value)."/wmmodule_homepage/views/templates/admin/banners.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['modules']->value)."/wmmodule_homepage/views/templates/admin/icons_50.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['modules']->value)."/wmmodule_homepage/views/templates/admin/icons_33.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['modules']->value)."/wmmodule_homepage/views/templates/admin/videos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>            
        </div>

        <div style="text-align: center;margin: 10px;padding: 10px;">
            <button type="button" class="btn btn-primary" onclick="$('#showDesktopPreview').toggle();$('#desktop_container').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width:400px;">PREVIEW</button>
        </div>
    </div>
<div id="showDesktopPreview" style="display: none;background-color: #111;">
    
    <div style="background-color: #fff;">

        <div style="text-align: center;padding: 30px;width: 100%;display: inline-block;">
            <button type="button" class="btn btn-primary" onclick="$('#showDesktopPreview').toggle();$('#desktop_container').toggle();$('#mobile_container').toggle();$('#abas_container').toggle();" style="width:400px;">BACK TO EDITOR</button>
        </div>
    
        <div style="width: 1000px;margin: 0 auto;background-color: #333;">

            <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/header<?php echo $_smarty_tpl->tpl_vars['currentShop']->value;?>
.png"> 
            </div>
            <div class="bannersHome">
            
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_icons_50']->value, 'icons_50', false, 'index_50');
$_smarty_tpl->tpl_vars['icons_50']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index_50']->value => $_smarty_tpl->tpl_vars['icons_50']->value) {
$_smarty_tpl->tpl_vars['icons_50']->do_else = false;
?>
                <div class="card-img-container">
                    <div class="card-big">
                    <div class="layerHover">
                        <h6><?php echo $_smarty_tpl->tpl_vars['icons_50']->value["title_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
</h6>
                    </div>
                    
                    <img id="preview_image_<?php echo $_smarty_tpl->tpl_vars['icons_50']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['icons_50']->value["image_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
" />
                    </div>
                    <div class="card-min-img" style="<?php if ($_smarty_tpl->tpl_vars['index_50']->value == 0) {?>background:#ee302e<?php } elseif ($_smarty_tpl->tpl_vars['index_50']->value == 1) {?>background:#103054;<?php } elseif ($_smarty_tpl->tpl_vars['index_50']->value == 2) {?>background:#ddd;<?php }?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_icons_33']->value, 'icons_33', false, 'index_33');
$_smarty_tpl->tpl_vars['icons_33']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index_33']->value => $_smarty_tpl->tpl_vars['icons_33']->value) {
$_smarty_tpl->tpl_vars['icons_33']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['index_50']->value == 0 && $_smarty_tpl->tpl_vars['icons_33']->value['id_parent_card'] == 1) {?>
                            <div class="card-img ">
                            <div class="layerHover"><?php echo $_smarty_tpl->tpl_vars['icons_33']->value["title_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
</div>
                            <img id="preview_image_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value["image_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
?t=<?php echo rand();?>
" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['index_50']->value == 1 && $_smarty_tpl->tpl_vars['icons_33']->value['id_parent_card'] == 2) {?>
                            <div class="card-img ">
                            <div class="layerHover"><?php echo $_smarty_tpl->tpl_vars['icons_33']->value["title_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
</div>
                            <img id="preview_image_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
"  src="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value["image_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
?t=<?php echo rand();?>
" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['index_50']->value == 2 && $_smarty_tpl->tpl_vars['icons_33']->value['id_parent_card'] == 3) {?>
                            <div class="card-img ">
                            <div class="layerHover"><?php echo $_smarty_tpl->tpl_vars['icons_33']->value["title_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
</div>
                            <img id="preview_image_<?php echo $_smarty_tpl->tpl_vars['icons_33']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['icons_33']->value["image_".((string)$_smarty_tpl->tpl_vars['currentLanguageIso']->value)];?>
?t=<?php echo rand();?>
" />
                            </div>
                        <?php }?>
                        
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>    
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
                                                <div style="width: 100%;">
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/body<?php echo $_smarty_tpl->tpl_vars['currentShop']->value;?>
.png"> 
            </div>

            <div style="border-top:4px solid #103054;border-bottom:4px solid #ee302e;padding-block:2px;width: 100%;"></div>
            
              <div class="videosContainer" style="  flex-direction: row;">
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
                <img style="width: 100%;" src="/modules/wmmodule_homepage/views/images/footer<?php echo $_smarty_tpl->tpl_vars['currentShop']->value;?>
.png"> 
            </div>
        </div>
        <div style="text-align: center;padding: 30px;">
            <button type="button" class="btn btn-primary" onclick="saveDesktopLive()" style="width:400px;">SAVE</button>
        </div>
    </div>
</div>

<style>

    .image_container{ margin: 20px 0; border: 1px solid #555; }
    .image_container:hover{ margin: 20px 0; border: 1px solid red; }
    
    #exampleModalLabel{ padding: 0 15px; }
    .modal-footer{ display: none; }

    .videosContainer
{
  display: flex;

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


    .bannersHome {
        display: flex;
        display: flex;
  gap: 5px;
  margin-top: 5px;
    }

    .card-img-container {
        position: relative;
  flex: 1;
    }

    .card-big{
        position: relative;
  margin-bottom: 5px;
    }

    .layerHover {
        display: inline-block;
  position: absolute;
  transition: 0.3s;
  background-color: rgba(255, 255, 255, 0.0);
  color: transparent;
  height: 0em;
  width: 50%;
  bottom: 0;
  left: 25%;
    }

    .card-big img {
        width: 100%;
        object-fit: cover;
        height: 100%;
        min-height: 222px;
        max-height: 222px;
    }

    .card-min-img {
        width: 100%;
  display: flex;
  gap: 5px;
  padding: 5px 0;
  min-height: 77px;
    }

    .card-img {
        flex: 1;
  position: relative;
  overflow: hidden;
    }

    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        max-height: 71px;
        min-height: 71px;
    }


    
</style><?php }
}
