<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:18:52
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca02c0914f0_87764584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7eee593bbb6ecaa47c351f6c548a3318b2bfcd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\index.tpl',
      1 => 1700144167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca02c0914f0_87764584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_780195274655ca02c08dbc6_22631070', 'page_content_container');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_583508536655ca02c08e8a0_82555284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1504707173655ca02c08f162_98470543 extends Smarty_Internal_Block
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
class Block_780195274655ca02c08dbc6_22631070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_780195274655ca02c08dbc6_22631070',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_583508536655ca02c08e8a0_82555284',
  ),
  'page_content' => 
  array (
    0 => 'Block_1504707173655ca02c08f162_98470543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home" style="">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_583508536655ca02c08e8a0_82555284', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1504707173655ca02c08f162_98470543', 'page_content', $this->tplIndex);
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
