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
{if Context::getContext()->isMobile() != 1}
<style>
#ui-id-1{
  width: 293px!important;
  top: 155px!important;
  right: 162px!important;
  display: block;
  left: auto!important;
}
</style>
<div id="search_widget" class="search-widget" data-search-controller-url="{$search_controller_url}" style="display:contents;">
	{* <span class="search_icon_toogle"> *}
        {* <i class="material-icons-search"></i></span> *}
    <form method="get" action="{$search_controller_url}" class="d-none d-lg-flex active" style="background-color: #fff;width:max-content;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="{$search_string}" placeholder="{l s='Buscar' d='Shop.Theme.Catalog'}" style="background: #fff !important;width:247px;">
		<button type="submit">
			<i class="fa-solid fa-magnifying-glass"></i>
            {* {l s='Search' d='Shop.Theme.Catalog'} *}
		</button>
	</form>
</div>
{/if}
{if Context::getContext()->isMobile() == 1}
<style>
.header-top .search-widget form input[type="text"] {
  border-radius: 0 0 0 0;
  border: 0;
}
#ui-id-1{
  top: 88px!important;
}
.ui-autocomplete.searchbar-autocomplete {
  min-height: 22px;
}
</style>
</div></div>
<div id="search_widget" class="search-widget" data-search-controller-url="{$search_controller_url}" style="display:contents;">
  <div id="searchbar" style="display: none;">
	<form class="active mobile d-lg-none" method="get" action="{$search_controller_url}" style="display: flex;width:100%;top:0px;position:absolute;">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="{$search_string}" placeholder="{l s='Buscar' d='Shop.Theme.Catalog'}" style="width: 100%; height: 44px; border: 0px; padding-left: 12px;">
		<button type="submit" style="border-radius: 0;   background-color: #dd1312;   border: 0px;   padding-left: 17px;   padding-right: 17px;">
			<i class="fa-solid fa-magnifying-glass"></i>
			{* {l s='Search' d='Shop.Theme.Catalog'} *}
		</button>
	</form>
	</div>
	</div>
<script>
function dropdownSearch() {

			var idd = document.getElementById('lgm');
			var idds = window.getComputedStyle(idd);
			var iddss = idds.getPropertyValue('display');

			if(iddss == 'flex'){
					alternarDisplay();
			}

			var logoDesktop = document.getElementById('_desktop_logo');
			var estiloComputado = window.getComputedStyle(logoDesktop);
			var paddingTop = estiloComputado.getPropertyValue('padding-top');
			if(paddingTop == '0px'){
			logoDesktop.style.paddingTop = '47px';
			logoDesktop.style.setProperty('padding-top', '47px', 'important');
				}else
				{
			logoDesktop.style.paddingTop = '0px';
			logoDesktop.style.setProperty('padding-top', '0px', 'important');		
				}
					$('#searchbar').toggle()
			
	}
</script>
{/if}