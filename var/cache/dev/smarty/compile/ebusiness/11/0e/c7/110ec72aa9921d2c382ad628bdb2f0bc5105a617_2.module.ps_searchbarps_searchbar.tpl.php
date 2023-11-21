<?php
/* Smarty version 4.3.1, created on 2023-11-15 09:09:13
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65548ab981c609_13302799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1699984411,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65548ab981c609_13302799 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_searchbar/ps_searchbar.tpl --><!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" style="display:contents;">
	            <form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="d-none d-lg-block active" style="background-color: #fff;width:max-content;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buscar','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" style="background: #fff !important;width:247px;">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
            		</button>
	</form>
	<form class="active mobile d-lg-none" method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" style="display: flex;width:100%;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buscar','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" style="width: 100%;">
		<button type="submit" style="border-radius: 0;">
			<i class="material-icons search">&#xE8B6;</i>
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
<style>
#search_widget form {
	width: max-content;
	top: -17px;
	padding: 0;
	border-radius: 20px;
	right: auto;
	position: unset;
}


#search_widget form button {
	margin-left: 0;
	border-radius: 0 20px 20px 0;
	background: #dd1312;
}
.header-top .search-widget form input[type="text"] {
	border-radius: 20px 0 0 20px;
	border: 0;
}
#search_widget .mobile {
	top: 0;
}

#search_widget .mobile input[type="text"]:focus-visible{
	outline: none !important;
}

#search_widget .mobile input[type="text"]:focus + button .search{
	color: #fff !important;
}

@media (max-width: 991px){
	.search-widget form button[type="submit"] {
		position: unset !important;
	}
}
@media (min-width: 992px){
	#searchbar {
		display: none;
	}
}


</style>
<!-- /Block search module TOP -->
<!-- end C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
