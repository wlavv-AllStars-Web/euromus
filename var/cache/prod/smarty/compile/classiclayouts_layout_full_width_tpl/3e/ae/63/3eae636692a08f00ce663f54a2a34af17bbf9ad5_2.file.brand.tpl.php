<?php
/* Smarty version 4.3.4, created on 2024-01-15 17:21:09
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\catalog\_partials\miniatures\brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a569858d4be5_94480233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eae636692a08f00ce663f54a2a34af17bbf9ad5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\brand.tpl',
      1 => 1705337936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a569858d4be5_94480233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131399413465a569858d2e97_99050458', 'brand_miniature_item');
?>

<?php }
/* {block 'brand_miniature_item'} */
class Block_131399413465a569858d2e97_99050458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_miniature_item' => 
  array (
    0 => 'Block_131399413465a569858d2e97_99050458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <li class="brand">
    <div class="brand-img"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></a></div>
      </li>
<?php
}
}
/* {/block 'brand_miniature_item'} */
}
