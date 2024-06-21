<?php
/* Smarty version 4.3.4, created on 2024-06-21 14:54:01
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\modules\wmmodule_homepage\views\templates\hook\slider_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667585f97bf457_25972161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd5aae851194020db2d4d280d500e19e258fc852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\modules\\wmmodule_homepage\\views\\templates\\hook\\slider_script.tpl',
      1 => 1706804376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667585f97bf457_25972161 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
// $(window).load(function(){
// 		$('#angarslider').bxSlider({
// 			maxSlides: 1,
// 			slideWidth: 1920,
// 			infiniteLoop: true,
// 			auto: true,
// 			pager: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pager']->value, ENT_QUOTES, 'UTF-8');?>
,
// 			autoHover: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pause_hover']->value, ENT_QUOTES, 'UTF-8');?>
,
// 			speed: 500,
// 			pause: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pause']->value, ENT_QUOTES, 'UTF-8');?>
,
// 			adaptiveHeight: true,
// 			touchEnabled: true
// 		});
// });
<?php echo '</script'; ?>
>
<?php }
}
