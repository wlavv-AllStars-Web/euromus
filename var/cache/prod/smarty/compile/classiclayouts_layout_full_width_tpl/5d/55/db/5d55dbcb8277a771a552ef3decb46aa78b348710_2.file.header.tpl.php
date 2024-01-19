<?php
/* Smarty version 4.3.4, created on 2024-01-19 09:06:57
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65aa3bb13ec766_83368033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d55dbcb8277a771a552ef3decb46aa78b348710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1705336946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa3bb13ec766_83368033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 
<?php $_smarty_tpl->_assignInScope('languages', Language::getLanguages(true,$_smarty_tpl->tpl_vars['this']->value->context->shop->id));
$_smarty_tpl->_assignInScope('currentLanguage', Context::getContext()->language);?>
  
<?php $_smarty_tpl->_assignInScope('currentUrl', Tools::getCurrentUrl());
$_smarty_tpl->_assignInScope('manufacturers', Manufacturer::getManufacturers());?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23804311765aa3bb13d0818_29785575', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50459622565aa3bb13d1449_13080859', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57868798865aa3bb13d2271_91898088', 'header_top');
?>


<?php echo '<script'; ?>
>
window.addEventListener('scroll', () => {
  const footer = document.querySelector('footer#footer.js-footer');
  if (footer) {
    footer.style.display = "block"
}
});

function closeMenu() {
  const buttonCloseMenu = document.querySelector('#_mobile_top_menu')
const menuMobile = document.querySelector('#mobile_top_menu_wrapper')
const headerMobile = document.querySelector('#header')
const footer = document.querySelector('footer#footer.js-footer')
var wrapper =  document.getElementById("wrapper");

  menuMobile.style.display = "none";
  headerMobile.classList.remove("is-open")
  footer.style.display = "block"
  wrapper.style.display = "block";
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
    wrapper.style.display = "block";
  }
}

window.onload = function() {
  const searchIconMobile = document.querySelector('.header-nav #_mobile_cart .search');
  const searchBarMobile = document.querySelector('.header-top-right #search_widget');

  if (searchIconMobile) {
    searchIconMobile.addEventListener('click', () => {

      if (!searchBarMobile.style.display || searchBarMobile.style.display === "none") {
        searchBarMobile.style.display = "block";
      } else {
        searchBarMobile.style.display = "none";
      }
    });
  }
};

const dropdownBrands = document.querySelector('li .dropbtn');
const dropdownBrandsCaret = document.querySelector('li.dropdown i');
const dropdownContent = document.querySelector('ul.dropdown-content');

dropdownBrands.addEventListener('click', (e) => {
  e.stopPropagation();
  toggleDropdown();
});

// Add event listener to close dropdown on clicks outside
document.addEventListener('click', (e) => {
  const isClickInsideDropdown = dropdownBrands.contains(e.target) || dropdownContent.contains(e.target);

  if (!isClickInsideDropdown) {
    closeDropdown();
  }
});

function toggleDropdown() {
  if (!dropdownContent.style.display || dropdownContent.style.display === "none") {
    dropdownContent.style.display = "flex";
    dropdownContent.style.flexWrap = "wrap";
    dropdownBrandsCaret.style.transform = "rotate(0deg)";
  } else {
    closeDropdown();
  }
}

function closeDropdown() {
  dropdownContent.style.display = "none";
  dropdownBrandsCaret.style.transform = "rotate(-90deg)";
}


// mobile

const contentBrands = document.querySelector('.content_brands');
const btnBrandsMobile = document.querySelector('.btn-brandsMobile')

btnBrandsMobile.addEventListener('click', () => {
  btnBrandsMobile.classList.toggle('activeBtnBrands')
  contentBrands.classList.toggle("showBrands")
})



<?php echo '</script'; ?>
>

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
  transition: 0.3s;
}

.mainmenuDesktop .activeLinkDesk a{
  background-color: #fff !important;
  color: #103054 !important;
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
  transition: 0.3s;
}

.dropdown {
  position: relative;
  display: inline-block !important;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width: 100vw;
  left: -60vw;
  transition: all 1s;
}
.dropdown:hover .dropbtn {
  background: #fff;
  color: #103054;
}

.dropdown:hover .dropdown-content {
  display: flex ;
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
  text-transform: uppercase;
}
.dropdown-content li a:hover{
  color: #ee302e !important;
  background: transparent !important;
}

/* Show the dropdown menu on hover */
/* .dropdown:hover .dropdown-content {
  display: block;
} */


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
  margin:auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  top: 50%;
  transform: translateY(-50%);
}

.modal-content a {
  font-size: 1.1rem;
  width: 100%;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 36px;
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
  /* margin-top: 1rem; */
  align-items: center !important;
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
  justify-content: center;
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
</style><?php }
/* {block 'header_banner'} */
class Block_23804311765aa3bb13d0818_29785575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_23804311765aa3bb13d0818_29785575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_50459622565aa3bb13d1449_13080859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_50459622565aa3bb13d1449_13080859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav" style="border-bottom: none;">

    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-6 col-xs-12" style="display: flex;align-items:center;height:57px;gap:2rem;">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
          <div class="col-md-6 right-nav">
          

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

                
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_57868798865aa3bb13d2271_91898088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_57868798865aa3bb13d2271_91898088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row" style="position: relative;z-index:1;">
        <div class="col-md-4 hidden-sm-down" id="_desktop_logo" style="display: flex;justify-content:center;">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1 class="header-logo">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
        <div class="header-top-right col-md-10 col-sm-12 position-static mobile-search">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-8 header-top-right-desktop">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

        </div>
        </div>
        
      
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
              <div class="js-top-menu mobile" id="_mobile_top_menu" onclick="closeMenu()">
        <i class="fa fa-times"></i>
          <div>Close</div>
        </div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
                           
                    <div id="homeLinkMobile" class="<?php if ($_smarty_tpl->tpl_vars['currentUrl']->value === $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true)) {?>activeLink<?php }?>"><a href="/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></div>
          <div id="NewsLinkMobile" class="<?php if ($_smarty_tpl->tpl_vars['currentUrl']->value === $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products',true)) {?>activeLink<?php }?>"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products',true), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'News','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></div>
          <div id="_mobile_contact_link" class="<?php if ($_smarty_tpl->tpl_vars['currentUrl']->value === $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true)) {?>activeLink<?php }?>"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contacts','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></div>
          <div id="button_modal_language"><img src="/img/flags/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg" /><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change Language','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p></div>
          <div id="brands_mobile">
            <div class="btn-brandsMobile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<i class="fa-solid fa-caret-down"></i></div>
            <ul class="content_brands">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
              <li class="col-lg-3">
              <a href="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code, ENT_QUOTES, 'UTF-8');?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'brand','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');?>
">
              <img src="/img/tmp/manufacturer_mini_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8');?>
.jpg" width="100%" style="max-width: 100px;" />
              </a>
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
                  </div>
      </div>
    </div>
    <div class="linesHeaderDesktop"></div>
    <div style="border-top:4px solid #103054;border-bottom:4px solid #ee302e;padding-block:2px;background:#fff;position:absolute;width:100%;z-index:-1;"></div>
    <ul class="mainmenuDesktop">
        <li class="<?php if ($_smarty_tpl->tpl_vars['currentUrl']->value === $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true)) {?>activeLinkDesk<?php }?>" ><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true), ENT_QUOTES, 'UTF-8');?>
">Home</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['currentUrl']->value === $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products',true)) {?>activeLinkDesk<?php }?>" ><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products',true), ENT_QUOTES, 'UTF-8');?>
">News</a></li>
        <li><a style="background: #ee302e;">Your Car</a></li>
        <li class="dropdown ">
          <div class="dropbtn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<i class="fa-solid fa-caret-down"></i></div>
          <ul class="dropdown-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
            <li class="col-lg-3">
            <a href="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code, ENT_QUOTES, 'UTF-8');?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'brand','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');?>
">
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8');?>

            </a>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div style="border-top:2px solid #103054;border-bottom:2px solid #ee302e;padding-block:1px;width: 100%;
            height: 2px;
            position: absolute;
            bottom: 0;"></div>
          </ul>
        </li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['currentUrl']->value === $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true)) {?>activeLinkDesk<?php }?>" ><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8');?>
">Contact</a></li>
      </ul>
  </div>


  <div id="modalLanguage" class="modalLanguage">
  <!-- Modal content -->

    <div class="modal-content" style="display: flex;align-items:center;justify-content:space-between;flex-direction: column;position:relative;gap: 0.85rem;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
      <div style="display: flex;gap:1rem;align-items:center;width:90%;padding:0.5rem;border-radius: 4px;<?php if ($_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code === $_smarty_tpl->tpl_vars['language']->value['iso_code']) {?>background:#ee302e;<?php }?>">
        <img src="/img/flags/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg" width="16" height="11"/>
                <a href="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" data-iso="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code === $_smarty_tpl->tpl_vars['language']->value['iso_code']) {?>color:#fff;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <span class="close" style="color: #103054;opacity:1;position:absolute;top:1rem;right:1rem;">&times;</span>
    </div>
  </div>  

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
