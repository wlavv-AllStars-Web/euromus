<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:14:54
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a1738e110af3_79028004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59e0b8985ad4920b63aed60e9c544d6be6a387ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1702297383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a1738e110af3_79028004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\euromus\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\59\\e0\\b8\\59e0b8985ad4920b63aed60e9c544d6be6a387ca_2.file.helpers.tpl.php',
    'uid' => '59e0b8985ad4920b63aed60e9c544d6be6a387ca',
    'call_name' => 'smarty_template_function_renderLogo_23565277965a1738e10af12_07131038',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_23565277965a1738e10af12_07131038 */
if (!function_exists('smarty_template_function_renderLogo_23565277965a1738e10af12_07131038')) {
function smarty_template_function_renderLogo_23565277965a1738e10af12_07131038(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_23565277965a1738e10af12_07131038 */
}
