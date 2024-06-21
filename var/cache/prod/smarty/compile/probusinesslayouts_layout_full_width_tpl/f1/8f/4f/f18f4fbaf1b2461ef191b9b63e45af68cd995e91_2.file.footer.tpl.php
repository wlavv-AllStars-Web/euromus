<?php
/* Smarty version 4.3.4, created on 2024-06-21 16:28:29
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66759c1dd30f65_79011057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18f4fbaf1b2461ef191b9b63e45af68cd995e91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\_partials\\footer.tpl',
      1 => 1716458162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66759c1dd30f65_79011057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<div  class="footer-container">
      <div style="max-width: 100%;" class="row">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      </div>
    
    <div style="justify-content:center; display: flex ; max-width: 100%;" class="row">
    <div style="padding-top: 25px ;" class="col-md-12" >
      <p class="text-sm-center" >
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88325707366759c1dd30877_35546555', 'copyright_link');
?>

      </p>
    </div>
  </div>
  
    </div>
  </div>
<?php }
/* {block 'copyright_link'} */
class Block_88325707366759c1dd30877_35546555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_88325707366759c1dd30877_35546555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          @ 2024 All Stars Distribution. All Rights Reserved.
        <?php
}
}
/* {/block 'copyright_link'} */
}
