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
<style>

  .none {
    border-bottom: none !important;

  }

  .linesize {
    height: 5px;
    font-size: small;
  }

  .borderhead {
    border-top: 0;
    border-bottom: 2px solid red;
    outline: 2px solid #041E42;
    outline-offset: 2px;
  }

  @media (min-width: 767px) {
  .vanishup{
    display: none;
  
  }
}

#wrapper {
  background-color: white;
}

  @media (max-width: 767px) {
    .back-blue {
      background: linear-gradient(180deg, rgba(4, 30, 66, 1) 63%, rgba(0, 0, 0, 1) 100%) !important;
    }
  

  .transp {
    background-color: transparent !important;
  }

  .fixup {
    margin-top: 15px;
  }
  .vanish{
    display: none;
    margin-left:3vh;
  }
}
</style>
<script>
function myFunction() {
  var x = document.getElementById("searchdiv");
  if (x.style.display == "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
</script>

<div class="borderhead back-blue">
  {block name='header_banner'}
    <div class="header-banner">
      {hook h='displayBanner'}
    </div>
  {/block}


  {block name='header_nav'}
    <nav class="header-nav none">
      <div style="width: 90%;" class="container">
        <div class="row linesize">
          <div class="">
            <div class="col-md-12 right-nav item-align-right line-size">
              {hook h='displayNav2'}
            </div>
          </div>
          <div style="padding-right: 20px; color: white " class="hidden-md-up text-sm-center mobile">
            <div class="float-xs-left" id="menu-icon">
              <i class="material-icons d-inline">&#xE5D2;</i>
            </div>
            <div>

              <div style="margin-left: 0px;" class="float-xs-right" id="_mobile_cart"></div>
              <div class="float-xs-right" id="_mobile_user_info"></div>
              <div class="float-xs-right fixup " onclick="myFunction()">
                <i class="material-icons search" aria-hidden="true" >search</i>
              </div>
              <div class="top-logo" id="_mobile_logo"></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
    </nav>
  {/block}



  {block name='header_top'}
    <div style="padding:0" class="header-top back-blue">
      <div style="width: 90%;" class="container ">
        <div style="justify-content: center; width: 100%" class="row ">
          <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
            {if $shop.logo_details}
              {if $page.page_name == 'index'}
                <h1>
                  {renderLogo}
                </h1>
              {else}
                {renderLogo}
              {/if}
            {/if}
          </div>
          <div style="padding: 0; padding-left: 25px; margin-top: 10px; margin-bottom: 10px"
            class="header-top transp col-md-10 col-sm-12 vanish"
            id="searchdiv">
            <div style="display: flex; width:100%; " class="row">
              {hook h='displayTop'}
            </div>
          </div>
        </div>
        <div id="mobile_top_menu_wrapper" class="row hidden-md-up transp" style="display:none;">
          <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
          <div class="js-top-menu-bottom transp">
            <div id="_mobile_currency_selector"></div>
            <div id="_mobile_language_selector"></div>
            <div id="_mobile_contact_link"></div>
          </div>
        </div>
      </div>
    </div>
    {hook h='displayNavFullWidth'}
  {/block}
</div>