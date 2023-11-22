<?php
/* Smarty version 4.3.1, created on 2023-11-22 12:53:49
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655df9dd7ed507_84050118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8329daa37a68f83d36984e73819c6e19fee89bcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1700567096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655df9dd7ed507_84050118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<style>
  .back {
    
    background: linear-gradient(180deg, rgba(4, 30, 66, 1) 63%, rgba(0, 0, 0, 1) 100%);
  }

  .border {
    border-top: 2px solid red;
    outline: 2px solid #041E42;
    outline-offset: 2px;
  }

  @media (max-width: 576px){
    .text-sm-center{
      text-align: center;
  }
  };

</style>

<div class="container-fluid ">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_464750255655df9dd7e9047_29967865', 'hook_footer_before');
?>

  </div>
</div>
<<<<<<< Updated upstream
<div class="footer-container border back">
  <div style="width: 90%;" class="container ">
    <div class="row ">
=======
<div class="footer-container1" style="background-color: darkgreen;">
  <div class="container">
    <div class="row">
>>>>>>> Stashed changes
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_887444844655df9dd7e9fb7_87352667', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204374627655df9dd7eac99_91539628', 'hook_footer_after');
?>

    </div>
  </div>
  <div style="border-top: 2px solid rgba(128, 128, 128, 0.2); background-color: #041E42;" class="row pt-1 ">
    <p class="text-sm-center">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461780966655df9dd7eb945_12204189', 'copyright_link');
?>

    </p>
  </div>
</div><?php }
/* {block 'hook_footer_before'} */
class Block_464750255655df9dd7e9047_29967865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_464750255655df9dd7e9047_29967865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_887444844655df9dd7e9fb7_87352667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_887444844655df9dd7e9fb7_87352667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_204374627655df9dd7eac99_91539628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_204374627655df9dd7eac99_91539628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_461780966655df9dd7eb945_12204189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_461780966655df9dd7eb945_12204189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="https://www.prestashop-project.org/" target="_blank" rel="noopener noreferrer nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </a>
      <?php
}
}
/* {/block 'copyright_link'} */
}
