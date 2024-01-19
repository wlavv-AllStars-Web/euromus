<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:14:56
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a173903136f6_38989619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8329daa37a68f83d36984e73819c6e19fee89bcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a173903136f6_38989619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <div class="hidden-md-up" style="border-top:4px solid #103054;border-bottom:4px solid #ee302e;padding-block:2px;width: 100%;background:#fff;"></div>
<div class="container">
<div id="scrollToTopBtn" onclick="scrollToTop()" >
            <i class="fa-solid fa-arrow-up"></i>
    </div>
  <div class="row" style="display: none;">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194909303965a1739030fac5_15027150', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
    <div class="lines">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
  <div class="container-md container-fluid">
    <div class="row footer-row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68762567765a173903106b3_19056728', 'hook_footer');
?>

      <div class="socials hidden-md-down">
        <a aria-label="Facebook" id="footer_facebook" class="social-icon" style="margin-right: 5px;" href="https://www.facebook.com/allstarsmotorsport" target="_NEW">
          <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a aria-label="Instagram" id="footer_insta" class="social-icon" style="margin-right: 5px;" href="https://instagram.com/allstarsmotorsport" target="_NEW">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a aria-label="Flickr" id="footer_flickr" class="social-icon" style="margin-right: 5px;" href="https://www.flickr.com/photos/allstarsmotorsport/" target="_NEW">
          <i class="fa-brands fa-flickr"></i>
        </a>
        <a aria-label="Youtube" id="footer_youtube" class="social-icon" style="margin-right: 5px;" href="https://www.youtube.com/user/allstarsmotorsport" target="_NEW">
          <i class="fa-brands fa-youtube"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152306195465a173903111a7_12249462', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12 socialsMobile">
      <a aria-label="Facebook" id="footer_facebook" class="social-icon" style="margin-right: 5px;" href="https://www.facebook.com/allstarsmotorsport" target="_NEW">
        <i class="fa-brands fa-square-facebook"></i>
      </a>
      <a aria-label="Instagram" id="footer_insta" class="social-icon" style="margin-right: 5px;" href="https://instagram.com/allstarsmotorsport" target="_NEW">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a aria-label="Flickr" id="footer_flickr" class="social-icon" style="margin-right: 5px;" href="https://www.flickr.com/photos/allstarsmotorsport/" target="_NEW">
        <i class="fa-brands fa-flickr"></i>
      </a>
      <a aria-label="Youtube" id="footer_youtube" class="social-icon" style="margin-right: 5px;" href="https://www.youtube.com/user/allstarsmotorsport" target="_NEW">
        <i class="fa-brands fa-youtube"></i>
      </a>
      </div>
      <div class="col-md-12 copyrights">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69187079265a17390311af4_93082104', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
>
document.addEventListener("scroll", (event) => {
  const buttonTop = document.querySelector('#scrollToTopBtn')
  const currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
  if(currentScroll > 0){
    buttonTop.style.display = "flex";
  } else {
    buttonTop.style.display = "none";
  }
})

function scrollToTop() {
        window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    }

  window.addEventListener('load', () => {
  const footer = document.querySelector('#footer.js-footer');
  const menuMobile = document.querySelector('#mobile_top_menu_wrapper');
  
  if(menuMobile.style.display === "none"){
    footer.style.display = "block"
  
  } else {
    footer.style.display = "none"

  }
})





<?php echo '</script'; ?>
><?php }
/* {block 'hook_footer_before'} */
class Block_194909303965a1739030fac5_15027150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_194909303965a1739030fac5_15027150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_68762567765a173903106b3_19056728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_68762567765a173903106b3_19056728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_152306195465a173903111a7_12249462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_152306195465a173903111a7_12249462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_69187079265a17390311af4_93082104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_69187079265a17390311af4_93082104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a href="/" target="_blank" rel="noopener noreferrer nofollow" style="color: #fff;text-decoration:underline;text-decoration-color:#ee302e">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Euro Muscle Parts','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </a>
            <p style="color: #fff;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Rights Reserved','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
          <?php
}
}
/* {/block 'copyright_link'} */
}
