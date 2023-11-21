<?php
/* Smarty version 4.3.1, created on 2023-11-21 17:45:39
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655cecc3e9b076_67723036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59e0b8985ad4920b63aed60e9c544d6be6a387ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1699545400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655cecc3e9b076_67723036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\euromus\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\59\\e0\\b8\\59e0b8985ad4920b63aed60e9c544d6be6a387ca_2.file.helpers.tpl.php',
    'uid' => '59e0b8985ad4920b63aed60e9c544d6be6a387ca',
    'call_name' => 'smarty_template_function_renderLogo_1475199279655cecc3e95761_57902011',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1475199279655cecc3e95761_57902011 */
if (!function_exists('smarty_template_function_renderLogo_1475199279655cecc3e95761_57902011')) {
function smarty_template_function_renderLogo_1475199279655cecc3e95761_57902011(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_1475199279655cecc3e95761_57902011 */
}
