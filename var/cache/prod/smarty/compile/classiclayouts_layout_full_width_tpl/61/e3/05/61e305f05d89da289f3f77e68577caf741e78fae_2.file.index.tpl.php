<?php
/* Smarty version 4.3.4, created on 2024-01-19 09:06:55
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65aa3baff0b754_78260438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61e305f05d89da289f3f77e68577caf741e78fae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\index.tpl',
      1 => 1702297383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa3baff0b754_78260438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171546849865aa3baff09127_97636945', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_39874200465aa3baff099a7_35590641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_156133009065aa3baff0a783_52140531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_101237236565aa3baff0a3f6_23957759 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156133009065aa3baff0a783_52140531', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_171546849865aa3baff09127_97636945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_171546849865aa3baff09127_97636945',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_39874200465aa3baff099a7_35590641',
  ),
  'page_content' => 
  array (
    0 => 'Block_101237236565aa3baff0a3f6_23957759',
  ),
  'hook_home' => 
  array (
    0 => 'Block_156133009065aa3baff0a783_52140531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39874200465aa3baff099a7_35590641', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101237236565aa3baff0a3f6_23957759', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
