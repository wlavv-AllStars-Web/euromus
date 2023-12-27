{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <div style="border-top:2px solid #103054;border-bottom:2px solid red;padding-block:1px;"></div>
  <nav class="header-nav" style="border-bottom: none;">
    <div class="container" style="width: 1440px;">
      <div class="row">
        <div class="hidden-sm-down">
          {* <div class="col-md-7 col-xs-12">
          {hook h='displayNav2'}
          </div> *}
          <div class="col-md-12 right-nav">
          

          {hook h='displayNav1'}
          {* <a>{l s='Support' d='Shop.Theme.Global'}</a> *}
                
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container" style="width: 1440px;">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1 class="header-logo">
                {renderLogo}
              </h1>
            {else}
              {renderLogo}
            {/if}
          {/if}
        </div>
        <div class="header-top-right col-md-10 col-sm-12 position-static">
          {hook h='displayTop'}
          <a href="" class="btn-header">
            <h5>{l s='MAKE MODELS' d='Shop.Theme.Global'}</h5>
            <small>{l s='Make Model List' d='Shop.Theme.Global'}</small>
          </a>
          <a href="" class="btn-header">
            <h5>{l s='GET A QUOTE' d='Shop.Theme.Global'}</h5>
            <small>{l s='Online Parts Quote' d='Shop.Theme.Global'}</small>
          </a>
          {hook h='displayNav2'}
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}

<style>
.header-logo .logo {
  max-width: 240px !important;
}

.header-nav #_desktop_contact_link #contact-link{
  margin-top: 0 !important;
}
.header-nav .right-nav .language-selector{
  margin-top: 0 !important;
}

.header-nav .right-nav {
  align-items: unset;
  gap: 2rem;
  margin-top: 1rem;
}
.header-nav .right-nav .links ul{
  margin-bottom: 0;
}

.header-nav .right-nav .links .h3{
  display: none;
}
.header-top {
  padding: 0 !important;
  height: 117px;
}
.header-top-right {
  display: flex !important;
}


.btn-header{
  width: 180px !important;
  height: 55px;
  color: #103054;
  text-align: center;
  padding: 0.5em 0.3em;
  display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  

}
.btn-header:hover{
  width: 180px !important;
  color: #fff !important;
  background: #103054;
}

.btn-header h5 {
  font-size: 1.15em;
  width: 180px !important;
  margin-bottom: 0;
  color: #103054;
  font-weight: 400;
}
.btn-header small {
  /* width: 180px !important; */
  font-size: 0.85em;
  color: #103054;
  font-weight: 400;
}

.btn-header:hover  h5{
  color: #fff;
}
.btn-header:hover  small{
  color: #fff;
}
</style>