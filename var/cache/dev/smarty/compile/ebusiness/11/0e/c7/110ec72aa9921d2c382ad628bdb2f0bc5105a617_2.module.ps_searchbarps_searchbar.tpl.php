<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:18:53
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca02d9954d2_45969440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1700236435,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca02d9954d2_45969440 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_searchbar/ps_searchbar.tpl --><!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" style="display:contents;">
	            <form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="d-none d-lg-flex active" style="background-color: #fff;width:max-content;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buscar','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" style="background: #fff !important;width:247px;">
		<button type="submit">
			<i class="fa-solid fa-magnifying-glass"></i>
            		</button>
	</form>
	<form class="active mobile d-lg-none" method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" style="display: flex;width:100%;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buscar','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" style="width: 100%;">
		<button type="submit" style="border-radius: 0;">
			<i class="fa-solid fa-magnifying-glass"></i>
					</button>
	</form>
</div>
<?php echo '<script'; ?>
>
	function dropdownSearch() {
		$('#searchbar').toggle()
	}
<?php echo '</script'; ?>
>

<!-- /Block search module TOP -->
<!-- end C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
