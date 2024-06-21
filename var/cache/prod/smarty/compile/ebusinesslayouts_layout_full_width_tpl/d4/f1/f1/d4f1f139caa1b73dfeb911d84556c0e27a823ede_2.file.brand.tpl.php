<?php
/* Smarty version 4.3.4, created on 2024-06-21 14:27:06
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\_partials\miniatures\brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66757faa813602_24960614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f1f139caa1b73dfeb911d84556c0e27a823ede' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\_partials\\miniatures\\brand.tpl',
      1 => 1718976190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66757faa813602_24960614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134792045766757faa811f72_69279305', 'brand');
?>

<?php }
/* {block 'brand'} */
class Block_134792045766757faa811f72_69279305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand' => 
  array (
    0 => 'Block_134792045766757faa811f72_69279305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <li class="brand col-md-4 col-sm-6 col-xs-6">
    <div class="brand_content_item">
        <div class="brand-img"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"></a></div>
                    </div>
  </li>
<?php
}
}
/* {/block 'brand'} */
}
