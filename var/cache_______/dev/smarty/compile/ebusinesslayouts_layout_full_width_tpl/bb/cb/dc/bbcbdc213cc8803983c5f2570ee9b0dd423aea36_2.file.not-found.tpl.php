<?php
/* Smarty version 4.3.4, created on 2024-06-19 12:07:11
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6672bbdf1557f0_68626567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbcbdc213cc8803983c5f2570ee9b0dd423aea36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\errors\\not-found.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6672bbdf1557f0_68626567 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="content" class="page-content page-not-found">
  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available for the moment.','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h1>
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>


  </section>
<style>
  #manufacturer main {
      min-height: 100vh;
    }
  #manufacturer main #wrapper{
      min-height: 57vh;
    }
  #manufacturer main #wrapper #content{
    text-align: center;
  }
  #manufacturer main #wrapper #content h1 {
    color: var(--color-red);
  }
</style><?php }
}
