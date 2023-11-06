<?php
/* Smarty version 4.3.1, created on 2023-09-21 15:16:24
  from 'C:\xampp\htdocs\euromus\adminEuromus\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650c503838d235_76674718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed80f005c3d37db271eaa2a2e6d2504afd83e4f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\adminEuromus\\themes\\default\\template\\content.tpl',
      1 => 1692974995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650c503838d235_76674718 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
