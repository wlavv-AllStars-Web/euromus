<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:15:22
  from 'C:\xampp\htdocs\euromus\admineuromus1\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a173aab2f962_05390685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd739e65dc0489e3853d120c5215e6efbb84ba7d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\admineuromus1\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1704806630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a173aab2f962_05390685 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
