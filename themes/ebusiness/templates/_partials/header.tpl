{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="header_content">
{block name='header_nav'}
  <nav class="header-nav d-none d-lg-block" style="margin-bottom:0;background:linear-gradient(to bottom, #969696,#282828);">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;">
            <div class="left-nav">
              {* {hook h='ybcCustom4'}   *}
             {hook h='displayNav1'}
            </div>
            <div class="right-nav" style="display: flex;gap:1rem;align-items:center;">
                <span style="color: white;">PAIMENT EN 3X / 4X PAR CB - EN SAVOIR PLUS</span>
                {hook h='displayNav2'}
            </div>
        </div>
    </div>
    <style>
    .blockcart.cart-preview {
      line-height: 0;
    }
    .cart-preview .cart-products-count {
      top: -7px;
    }
    </style>
  </nav>
  <nav class="header-nav mobile d-lg-none" style="margin-bottom:0;background: #111111;">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;">
            <div class="left-nav col-4 d-flex justify-content-start">
              <i onclick="dropdownSearch()" class="material-icons search">&#xE8B6;</i>
            </div>
            <div class="col-4 d-flex justify-content-center">
              <img width="32" height="32" src="/img/eu.png" />
            </div>
            <div class="right-nav  col-4" style="display: flex;gap:1rem;align-items:center;">
                {hook h='displayNav2'}
            </div>
        </div>
    </div>
    <style>
    .blockcart.cart-preview {
      line-height: 0;
    }
    .cart-preview .cart-products-count {
      top: -7px;
    }
    </style>
  </nav>
  
  <div id="searchbar" style="display: none;transition:all 0.5s;">
      {hook h='displaySearch'}
	</div>
  <div id="languageSelectorMobile" style="transition:all 0.5s;">
	</div>
  
{/block}

{block name='header_top'}
  <div class="header-top" style="background:  #282828;padding:2rem 0;margin:0;">
    <div class="container-fluid">
       <div class="row">
        {* <div class="pull-xs-left hidden-md-up text-xs-center mobile closed" id="menu-icon">
          <i class="material-icons d-inline menu">menu</i>
        </div> *}
        <div class="col-xs-12 col-lg-4 d-flex justify-content-sm-center p-0" id="_desktop_logo">
          <a href="{$urls.base_url}">
            <img class="logo img-responsive" src="{if isset($tc_dev_mode) && $tc_dev_mode && isset($logo_url)&&$logo_url}{$logo_url}{else}{$shop.logo}{/if}" alt="{$shop.name}">
          </a>
        </div>
        <div class="col-md-4  d-none d-lg-flex justify-content-center align-items-center" >
        <img width="90" height="90" src="/img/eu.png" />
        </div>
        <div class="col-md-4 d-none d-lg-flex justify-content-center align-items-center" style="position: relative;z-index:1;">
            {hook h='displayTop'}
            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}
</div>
{hook h='displayMLS'}

<style>
    #index main {
      overflow: hidden;
    }
    .header-top .container .row {
    display: flex;
    align-items: center;
    }
    .search-widget form button[type="submit"] {
      height: 42px;
    }
    </style>