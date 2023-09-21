<?php
/* Smarty version 4.3.1, created on 2023-09-21 14:11:51
  from 'C:\xampp\htdocs\euromus\adminEuromus\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650c411708bb68_80871069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63d7c6f1e166a96d4908e3bdc8a1196a0361b703' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\adminEuromus\\themes\\new-theme\\template\\content.tpl',
      1 => 1692974995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650c411708bb68_80871069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
