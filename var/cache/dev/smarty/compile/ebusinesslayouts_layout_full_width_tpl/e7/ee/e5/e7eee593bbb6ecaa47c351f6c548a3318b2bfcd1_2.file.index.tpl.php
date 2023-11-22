<?php
/* Smarty version 4.3.1, created on 2023-11-22 12:55:46
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655dfa52dab847_83861854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7eee593bbb6ecaa47c351f6c548a3318b2bfcd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\index.tpl',
      1 => 1700589080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655dfa52dab847_83861854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_793889564655dfa52da7b19_06855832', 'page_content_container');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_711593248655dfa52da8188_60360066 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_152977122655dfa52da8a52_19491076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ybcCustom3'),$_smarty_tpl ) );?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_793889564655dfa52da7b19_06855832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_793889564655dfa52da7b19_06855832',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_711593248655dfa52da8188_60360066',
  ),
  'page_content' => 
  array (
    0 => 'Block_152977122655dfa52da8a52_19491076',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home" style="">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_711593248655dfa52da8188_60360066', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152977122655dfa52da8a52_19491076', 'page_content', $this->tplIndex);
?>

      </section>
      <style>
      #content {

      }
      /* @media screen and (max-width:560px) {
        #content{
          display: flex;justify-content:center;width:100%;padding:1rem;
        }
      } */
      </style>
    <?php
}
}
/* {/block 'page_content_container'} */
}
