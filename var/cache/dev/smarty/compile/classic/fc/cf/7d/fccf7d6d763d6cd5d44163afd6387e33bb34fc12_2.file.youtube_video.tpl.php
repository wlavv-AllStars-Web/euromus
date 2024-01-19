<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:15:01
  from 'C:\xampp\htdocs\euromus\modules\youtube_video\views\templates\hook\youtube_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a1739502d263_12885066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fccf7d6d763d6cd5d44163afd6387e33bb34fc12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\youtube_video\\views\\templates\\hook\\youtube_video.tpl',
      1 => 1704816035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a1739502d263_12885066 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['youtube_urls']->value)) && is_array($_smarty_tpl->tpl_vars['youtube_urls']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['youtube_urls']->value, 'url', false, 'key');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
            <div id="custom-text<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <?php }
}
}
