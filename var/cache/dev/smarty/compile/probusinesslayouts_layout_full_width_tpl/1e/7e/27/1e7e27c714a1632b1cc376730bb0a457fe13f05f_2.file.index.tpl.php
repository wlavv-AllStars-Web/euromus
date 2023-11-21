<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:19:28
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca050673970_51832045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7e27c714a1632b1cc376730bb0a457fe13f05f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\index.tpl',
      1 => 1700041520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca050673970_51832045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1207512725655ca0506712f9_25189516', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_699234777655ca050671b33_43791307 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2041655658655ca050672715_34518267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1050144322655ca0506723a4_31145817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2041655658655ca050672715_34518267', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1207512725655ca0506712f9_25189516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1207512725655ca0506712f9_25189516',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_699234777655ca050671b33_43791307',
  ),
  'page_content' => 
  array (
    0 => 'Block_1050144322655ca0506723a4_31145817',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2041655658655ca050672715_34518267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_699234777655ca050671b33_43791307', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1050144322655ca0506723a4_31145817', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
}
