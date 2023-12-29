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

 {* {Language::getLanguages(true, $this->context->shop->id)} *}

{assign var="languages" value=Language::getLanguages(true, $this->context->shop->id)}
{assign var="currentUrl" value=Tools::getCurrentUrl()}
{assign var="manufacturers" value=Manufacturer::getManufacturers()}

{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <div style="border-top:2px solid #103054;border-bottom:2px solid red;padding-block:1px;"></div>
  <nav class="header-nav" style="border-bottom: none;">

    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          {* <div class="col-md-7 col-xs-12">
          {hook h='displayNav2'}
          </div> *}
          <div class="col-md-12 right-nav">
          

          {* <a>{l s='Support' d='Shop.Theme.Global'}</a> *}
          {hook h='displayNav1'}
                
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
    <div class="container">
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
        <div class="js-top-menu mobile" id="_mobile_top_menu" onclick="closeMenu()">
        <i class="fa fa-times"></i>
          <div>Close</div>
        </div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          {* {$_SERVER.REQUEST_URI} *}
       
          {* <pre>{print_r($currentUrl,1)}</pre> *}
          <div id="homeLinkMobile" class="{if $currentUrl === $link->getPageLink('index', true)}activeLink{/if}"><a href="/">{l s='Home' d='Shop.Theme.Global'}</a></div>
        <div id="supportLinkMobile" class="{if $currentUrl === $link->getCMSLink(42)}activeLink{/if}"><a href="{$link->getCMSLink(42)}">{l s='Support' d='Shop.Theme.Global'}</a></div>
          <div id="_mobile_contact_link" class="{if $currentUrl === $link->getPageLink('contact', true)}activeLink{/if}"></div>
          <div id="button_modal_language"><img src="/img/flags/{$language.iso_code}.jpg" /><p>{l s='Change Language' d='Shop.Theme.Global'}</p></div>
          {* <div id="_mobile_language_selector"></div> *}
        </div>
      </div>
    </div>
    <ul class="mainmenuDesktop">
        <li><a href="{$link->getPageLink('index', true)}">Home</a></li>
        <li><a href="{$link->getPageLink('new-products', true)}">News</a></li>
        <li><a style="background: #04AA6D;">Your Car</a></li>
        <li class="dropdown">
          <div class="dropbtn">Brands<i class="fa-solid fa-caret-down"></i></div>
          <ul class="dropdown-content">
          {foreach from=$manufacturers item=$manufacturer }
            <li class="col-lg-3">
            <a href="{$manufacturer.link_rewrite}">
              {$manufacturer.name}
            </a>
            </li>
          {/foreach}
            {* <pre>{print_r($manufacturers,1)}</pre> *}
          </ul>
        </li>
        <li><a href="{$link->getPageLink('contact', true)}">Contact</a></li>
      </ul>
  </div>


  <div id="modalLanguage" class="modalLanguage">
  <!-- Modal content -->
    <div class="modal-content">
    <span class="close">&times;</span>
      <div id="_mobile_language_selector"></div>
    </div>
  </div>  

  {hook h='displayNavFullWidth'}
{/block}

<script>


function closeMenu() {
  const buttonCloseMenu = document.querySelector('#_mobile_top_menu')
const menuMobile = document.querySelector('#mobile_top_menu_wrapper')
const headerMobile = document.querySelector('#header')

  menuMobile.style.display = "none";
  headerMobile.classList.remove("is-open")
}

var modal = document.getElementById("modalLanguage");

// Get the button that opens the modal
var btn = document.getElementById("button_modal_language");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// const liList = document.querySelectorAll('.mainmenuDesktop .dropdown-content li');
// const screenSize = window.screen.width / 4;

// console.log(liList);
// console.log(screenSize);

// if (liList.length > 0 && screenSize) {
//   liList.forEach((li) => {
//     li.style.width = screenSize + 'px !important'; // Note: 'px' is added here
//   });
// }




</script>

<style>
/* main menu */
.mainmenuDesktop {
  display: flex;
  justify-content: end;
  align-items: center;
  margin-bottom: 0;
  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}
.mainmenuDesktop li{
  width: 100%;
  /* max-width: 100px; */
  display: flex;
  align-content: center;
}

.mainmenuDesktop a {
  background: #103054;
  color: white !important;
  padding: 16px;
  font-size: 16px;
  border: none;
  width: 100%;
  /* max-width: 100px; */
  display: flex;
  justify-content: center;
}

.mainmenuDesktop a:hover{
  background: #04AA6D !important;
  cursor: pointer;
}

/* drppdown inicio */

.dropbtn {
  background: #103054;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;
}

.dropdown {
  position: relative;
  display: inline-block !important;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background: #82bba6;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width: 1913px;
  left: -60vw;
}
.dropdown:hover .dropbtn {
  background: #04AA6D;
}

.dropdown:hover .dropdown-content {
  display: flex !important;
  min-height: fit-content;
  flex-wrap: wrap;
  /* justify-content: space-evenly; */
}

.dropdown-content li {
  color: #103054 !important;
  background: transparent !important;
  height: fit-content;
  text-decoration: none;
  display: flex;
  max-width: none!important;
  width: 25%;
  cursor: auto;
}

.dropdown-content li a{
  background: transparent;
  width: fit-content;
  /* color: #103054 !important; */
  color: #0b223b !important;
  max-width: none !important;
}
.dropdown-content li a:hover{
  color: #198754 !important;
  background: transparent !important;
}


/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}


/* drppdown fim */


.modalLanguage {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 99; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}


/* teste */

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
  /* max-height: 117px; */

}
.header-top-right {
  display: flex !important;
}

.header-top .container{
  max-width: 1440px;
  width: 100%;
}

.header-nav .container{
  max-width: 1440px;
  width: 100%;
}

.header-nav #menu-icon i{
  font-size: 1.85rem;
}
.header-nav #_mobile_cart .search{
  font-size: 1.85rem;
}
.header-nav #_mobile_cart .shopping-cart{
  font-size: 1.85rem;
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