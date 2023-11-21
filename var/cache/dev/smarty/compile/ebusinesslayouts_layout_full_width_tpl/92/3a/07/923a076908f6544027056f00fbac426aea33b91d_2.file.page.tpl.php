<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:18:52
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca02c177ee3_83056067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923a076908f6544027056f00fbac426aea33b91d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\page.tpl',
      1 => 1700236688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca02c177ee3_83056067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_297964856655ca02c170880_91577526', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_485656828655ca02c171993_02972992 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h2><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h2>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1452975273655ca02c171094_64442923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485656828655ca02c171993_02972992', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1170488198655ca02c174873_21380430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2008110327655ca02c1753a5_53896556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_587595143655ca02c1740f4_42846152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1170488198655ca02c174873_21380430', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2008110327655ca02c1753a5_53896556', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_317570191655ca02c176b19_31750052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1705010797655ca02c176424_51978979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_317570191655ca02c176b19_31750052', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_297964856655ca02c170880_91577526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_297964856655ca02c170880_91577526',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1452975273655ca02c171094_64442923',
  ),
  'page_title' => 
  array (
    0 => 'Block_485656828655ca02c171993_02972992',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_587595143655ca02c1740f4_42846152',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1170488198655ca02c174873_21380430',
  ),
  'page_content' => 
  array (
    0 => 'Block_2008110327655ca02c1753a5_53896556',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1705010797655ca02c176424_51978979',
  ),
  'page_footer' => 
  array (
    0 => 'Block_317570191655ca02c176b19_31750052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1452975273655ca02c171094_64442923', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_587595143655ca02c1740f4_42846152', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1705010797655ca02c176424_51978979', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
