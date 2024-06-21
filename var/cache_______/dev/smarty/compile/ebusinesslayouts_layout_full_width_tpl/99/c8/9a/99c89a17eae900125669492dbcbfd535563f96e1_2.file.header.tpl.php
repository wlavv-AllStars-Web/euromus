<?php
/* Smarty version 4.3.4, created on 2024-06-19 12:07:09
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6672bbddb821b6_38013666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c89a17eae900125669492dbcbfd535563f96e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\_partials\\header.tpl',
      1 => 1718638383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6672bbddb821b6_38013666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('currentLanguage', Context::getContext()->language);
$_smarty_tpl->_assignInScope('currentLanguageIso', Context::getContext()->language->iso_code);
$_smarty_tpl->_assignInScope('manufacturers', Manufacturer::getManufacturers());?>


<div class="header_content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1126624076672bbddb6eaa6_98730167', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12574231226672bbddb78490_21882596', 'header_top');
?>

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLS'),$_smarty_tpl ) );?>

<?php }
/* {block 'header_nav'} */
class Block_1126624076672bbddb6eaa6_98730167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1126624076672bbddb6eaa6_98730167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav d-none d-lg-block" style="margin-bottom:0;background:linear-gradient(to bottom, #969696,#282828);">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;margin-top: -2px;">
            <div class="left-nav">
              <div style="display: flex;">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

                <a title="Whatsapp" class="social-icon" style="color: rgb(255, 255, 255); margin-right: 8px; padding-right: 8px; display: flex; align-items: center; float: left; background: unset;" href="https://wa.me/+351912201753" target="_blank" onmouseover="this.style.color='#dd170e';this.style.background='#161616'" onmouseout="this.style.color='#fff';this.style.background='unset'">
                    <img src="https://www.all-stars-motorsport.com/img/whatsapp_search.png" style="width: 24px; height: 24px;padding:3px;margin-left:1rem;" alt="Whatsapp">
                    <?php if ($_smarty_tpl->tpl_vars['currentLanguageIso']->value === 'en') {?>
                    <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:600;">+351 912 201 753</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['currentLanguageIso']->value === 'es') {?>
                    <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:600;">+34 691 16 15 70</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['currentLanguageIso']->value === 'fr') {?>
                    <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:600;">+33 0651871788</p>
                    <?php }?>

                </a>
              </div>
            </div>
            <div class="right-nav" style="display: flex;gap:1rem;align-items:center;">
              <?php if ($_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code == 'es') {?>
              <a href="/es/content/5-pagamentos" style="font-size:14px;font-weight:500;padding: 0px 10px;color: white; text-transform: uppercase; margin: 0 auto;line-height: 2;float: right;">PAGO EN 3X / 4X CON TARJETA - MAS INFO</a>
              <?php } elseif ($_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code == 'fr') {?>
              <a href="/fr/content/5-paiement" style="font-size:14px;font-weight:500;padding: 0px 10px;color: white; text-transform: uppercase; margin: 0 auto;line-height: 2;float: right;">MON COMPTEPAIEMENT EN 3X / 4X PAR CB - EN SAVOIR PLUS</a>
              <?php } elseif ($_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code == 'en') {?>  
              <a href="/en/content/5-payment" style="font-size:14px;font-weight:500;padding: 0px 10px;color: white; text-transform: uppercase; margin: 0 auto;line-height: 2;float: right;">PAY IN 3 / 4 INSTALLMENTS BY CREDIT CARD - LEARN MORE</a>
              <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
  </nav>
  
  <nav class="header-nav mobile d-lg-none" style="margin-bottom:0;background: #111111;height: 43px;">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;padding-top: 5px;">
            <div class="left-nav col-4 d-flex justify-content-start align-items-center">
              <i onclick="dropdownSearch()" class="fa-solid fa-magnifying-glass" style="cursor:pointer;padding-right: 12px;"></i>
              <span class="languageMobile" style="font-weight: 600;" onclick="dropdownFlags()"><?php echo htmlspecialchars((string) strtoupper($_smarty_tpl->tpl_vars['currentLanguageIso']->value), ENT_QUOTES, 'UTF-8');?>
</span>
              
              <a style="color: #fff;" href="https://wa.me/+351912201753" target="_blank" title="Whatsapp">
                <img src="https://www.all-stars-motorsport.com/img/whatsapp_search.png" style="width: 20px; height: 20px; margin-top: -5px;" alt="Whatsapp">
              </a>
            </div>
            <div class="col-4 d-flex justify-content-center">
              <img width="32" height="32" src="/img/eum.png" />
            </div>
            <div class="right-nav  col-4" style="display: flex;align-items:center;justify-content: end;">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2','mod'=>'ps_shoppingcart'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
  </nav>

<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_12574231226672bbddb78490_21882596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_12574231226672bbddb78490_21882596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="menu-languageselector mobile">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2','mod'=>'ps_languageselector'),$_smarty_tpl ) );?>

  </div>
  <div class="menu-searchbar">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

  </div>
  <div class="header-top" style="background:  #282828;margin:0;">
      <div class="container-fluid">
       <div class="row">
        <div class="col-xs-12 col-lg-4 d-flex justify-content-sm-center justify-content-lg-start p-0" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_url']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" style="max-width: 180px;
              padding: 0px;
              margin: 20px 45px;">
          </a>
        </div>
        <div class="col-md-4  d-none d-lg-flex justify-content-center align-items-center" >
        <img width="90" height="90" src="/img/eu.png" />
        </div>
        <div class="col-md-4 d-none d-lg-flex justify-content-end align-items-center" style="position: relative;z-index:1;padding-right: 3rem;">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

            <div class="clearfix"></div>
        </div>
      </div>
    </div>
    
    <div class="menu d-none d-lg-flex col-12 js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">  
      <ul class="list-menu-desktop">
        <li>
          <a href="/">Home</a> 
        </li>
        <li>
          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products',true), ENT_QUOTES, 'UTF-8');?>
">News</a>
        </li>
        <li><a>Your Car</a></li>
                <li class="dropdown">
          <a class="dropdown-toggle-brands"  role="button" data-toggle="dropdown" aria-expanded="false">Brands</a>
          <ul class="dropdown-menu-brands">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
            <li class="col-lg-3">
              <a href="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currentLanguage']->value->iso_code, ENT_QUOTES, 'UTF-8');?>
/brand/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8');?>

              </a>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
      
        </li>
        <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8');?>
">Contact</a></li>
      </ul>
    <div class="clearfix"></div> 
    </div>


  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
