<?php
/* Smarty version 4.3.1, created on 2023-11-22 13:55:35
  from 'C:\xampp\htdocs\euromus\admineuromus1\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655e0857bfb014_88769539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3940bc80432f1d7656c520ec2321ea50584af7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\admineuromus1\\themes\\new-theme\\template\\content.tpl',
      1 => 1700660819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655e0857bfb014_88769539 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
