<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:18:52
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca02c2f0ee7_74785703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f8c0bd85df28d8b512a4c12a7dba304bf38a8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\layouts\\layout-full-width.tpl',
      1 => 1700041520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca02c2f0ee7_74785703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421158249655ca02c2ef5d7_35359834', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1123599234655ca02c2efcc2_72699344', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1942056897655ca02c2f0246_62055648', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1421158249655ca02c2ef5d7_35359834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1421158249655ca02c2ef5d7_35359834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_1123599234655ca02c2efcc2_72699344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1123599234655ca02c2efcc2_72699344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_1127477739655ca02c2f0584_54344090 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1942056897655ca02c2f0246_62055648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1942056897655ca02c2f0246_62055648',
  ),
  'content' => 
  array (
    0 => 'Block_1127477739655ca02c2f0584_54344090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper p-0" >
    <div class="container" style="margin: 0;">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1127477739655ca02c2f0584_54344090', 'content', $this->tplIndex);
?>

        </div>
    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
