<?php
/* Smarty version 4.3.4, created on 2024-06-17 09:45:27
  from 'C:\xampp\htdocs\euromus\modules\wmmodule_homepage\views\templates\admin\videos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ff7a76f4954_44641617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6fcfd7038519512f6487648346763156e54f312' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\wmmodule_homepage\\views\\templates\\admin\\videos.tpl',
      1 => 1718190190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ff7a76f4954_44641617 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="display: none;" id="videos_container" class="elements_container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_videos']->value, 'video', false, 'index');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
        <div style="border: 1px solid #666;width: 33.33%;float: left;padding: 5px;">
     	    <input type="hidden" name="video_position[<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
">
     	    <input type="hidden" name="video_type[<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
]" value="desktop">
     	    <input type="hidden" name="video_icon_type[<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
]" value="3">
            <input type="hidden" value="1" name="active[<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
]"> 
            <img id="image_<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['video']->value['image_en'];
if (strlen($_smarty_tpl->tpl_vars['video']->value['image_en']) > 0) {?>?t=<?php echo rand();
}?>" style="background-color: #fff;margin-bottom: 10px;width: 100%;border: 1px solid #000;min-height: 258px;background-image: url('/modules/wmmodule_homepage/views/images/upload.webp');background-position: center;background-repeat: no-repeat;background-size: contain;" onclick="setModal(<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
,4,$('#image_<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
'))">
                
            <input style="text-align: center;" name="title_en[<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['youtube_code'];?>
" placeholder="Youtube code" id="title_en_<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" onblur="saveVideoCode(this, <?php echo $_smarty_tpl->tpl_vars['index']->value;?>
)">
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
