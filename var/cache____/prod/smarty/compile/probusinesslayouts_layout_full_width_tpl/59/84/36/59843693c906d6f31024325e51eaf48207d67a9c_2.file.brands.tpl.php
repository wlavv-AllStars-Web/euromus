<?php
/* Smarty version 4.3.4, created on 2024-06-11 16:15:33
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\catalog\brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66686a155c5ac6_07623340',
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
function content_66686a155c5ac6_07623340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43628594266686a155bc5a4_26075266', 'content');
?>

 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_miniature'} */
class Block_7216088966686a155bcfc4_39460310 extends Smarty_Internal_Block
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
class Block_43628594266686a155bc5a4_26075266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_43628594266686a155bc5a4_26075266',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_7216088966686a155bcfc4_39460310',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7216088966686a155bcfc4_39460310', 'brand_miniature', $this->tplIndex);
?>

     </div>
   </section>
 
 <?php
}
}
/* {/block 'content'} */
}
