<?php
/* Smarty version 4.3.1, created on 2023-11-21 13:24:42
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655caf9a7ee253_46313528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61e305f05d89da289f3f77e68577caf741e78fae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\index.tpl',
      1 => 1700567341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655caf9a7ee253_46313528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1117349231655caf9a7ebd26_74610461', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_983035665655caf9a7ec765_93828279 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_899549511655caf9a7ed2e0_48222469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1565373928655caf9a7ecf81_82150402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_899549511655caf9a7ed2e0_48222469', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1117349231655caf9a7ebd26_74610461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1117349231655caf9a7ebd26_74610461',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_983035665655caf9a7ec765_93828279',
  ),
  'page_content' => 
  array (
    0 => 'Block_1565373928655caf9a7ecf81_82150402',
  ),
  'hook_home' => 
  array (
    0 => 'Block_899549511655caf9a7ed2e0_48222469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <style>
      @media (min-width: 991px){
        .sli{
          align-items: center ;
        }
      }
      </style>
      <section style="display: flex; flex-direction: column" id="content" class="sli page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983035665655caf9a7ec765_93828279', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1565373928655caf9a7ecf81_82150402', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
