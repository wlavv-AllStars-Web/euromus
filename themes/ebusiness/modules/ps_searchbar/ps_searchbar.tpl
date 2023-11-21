{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="{$search_controller_url}" style="display:contents;">
	{* <span class="search_icon_toogle"> *}
        {* <i class="material-icons-search"></i></span> *}
    <form method="get" action="{$search_controller_url}" class="d-none d-lg-block active" style="background-color: #fff;width:max-content;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="{$search_string}" placeholder="{l s='Buscar' d='Shop.Theme.Catalog'}" style="background: #fff !important;width:247px;">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
            {* {l s='Search' d='Shop.Theme.Catalog'} *}
		</button>
	</form>
	<form class="active mobile d-lg-none" method="get" action="{$search_controller_url}" style="display: flex;width:100%;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="{$search_string}" placeholder="{l s='Buscar' d='Shop.Theme.Catalog'}" style="width: 100%;">
		<button type="submit" style="border-radius: 0;">
			<i class="material-icons search">&#xE8B6;</i>
			{* {l s='Search' d='Shop.Theme.Catalog'} *}
		</button>
	</form>
</div>
<script>
	function dropdownSearch() {
		$('#searchbar').toggle()
	}
</script>
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
