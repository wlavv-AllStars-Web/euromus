<?php
/* Smarty version 4.3.1, created on 2023-11-21 17:45:40
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655cecc4d20d34_77896303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1700567341,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655cecc4d20d34_77896303 (Smarty_Internal_Template $_smarty_tpl) {
?> <style>
 @media (min-width: 767px){
 .bigscreen {
      max-width: 100vw !important; 
      width: 100%;
      
 }
}

@media (max-width: 767px){
  .smallscreen{
    max-width: 100vw !important; 
    width:95vw; 
    border-radius: 25px;   
  }
  .whitebg{
    background-color: white;
  }
}
 </style>
  <div id="search_widget" class="search-widgets bigscreen smallscreen" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="controller" value="search">
      <i class="material-icons search" aria-hidden="true">search</i>
      <input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" class="whitebg"
        placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
        aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
      <i class="material-icons clear" aria-hidden="true">clear</i>
    </form>
  </div>
<?php }
}
