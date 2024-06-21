<?php
/* Smarty version 4.3.4, created on 2024-06-11 14:44:16
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\catalog\brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666854b0f29939_89414182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59843693c906d6f31024325e51eaf48207d67a9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\catalog\\brands.tpl',
      1 => 1716982101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/brand.tpl' => 1,
  ),
),false)) {
function content_666854b0f29939_89414182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_888777247666854b0f225a3_90635617', 'content');
?>

 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_miniature'} */
class Block_940364772666854b0f22af0_62326932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <ul class="list_manu row">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
           <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brand'=>$_smarty_tpl->tpl_vars['brand']->value), 0, true);
?>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </ul>
     <?php
}
}
/* {/block 'brand_miniature'} */
/* {block 'content'} */
class Block_888777247666854b0f225a3_90635617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_888777247666854b0f225a3_90635617',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_940364772666854b0f22af0_62326932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <section id="main">
     <div id="brands-page">
       <div class="brands_banner">
         <img src="https://www.all-stars-distribution.com/img/dealers/headers/brands.jpg" />
       </div>
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_940364772666854b0f22af0_62326932', 'brand_miniature', $this->tplIndex);
?>

     </div>
   </section>
 
 <?php
}
}
/* {/block 'content'} */
}
