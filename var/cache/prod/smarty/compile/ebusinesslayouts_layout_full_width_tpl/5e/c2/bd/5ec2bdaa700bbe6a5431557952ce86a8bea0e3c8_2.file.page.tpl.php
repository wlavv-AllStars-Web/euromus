<?php
/* Smarty version 4.3.4, created on 2024-06-21 14:53:56
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\cms\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667585f44612a6_92879235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec2bdaa700bbe6a5431557952ce86a8bea0e3c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\cms\\page.tpl',
      1 => 1718209075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667585f44612a6_92879235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


  
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1622634451667585f4443814_25767984', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_container'} */
class Block_1622634451667585f4443814_25767984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1622634451667585f4443814_25767984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
" style="min-height: 50dvh;">
    
    <?php if ($_smarty_tpl->tpl_vars['cms']->value['id'] === 30) {?>
      <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'es') {?>
          <?php $_smarty_tpl->_assignInScope('youtube_availability', "p3mWoXq0Sh0");?>
          <?php $_smarty_tpl->_assignInScope('youtube_compat', "1I7oxKWNk10");?>
          <?php $_smarty_tpl->_assignInScope('youtube_shipping', "zE2_e39Tdm8");?>
          <?php $_smarty_tpl->_assignInScope('youtube_newsletter', "YCXbyjBRkzI");?>
          <?php $_smarty_tpl->_assignInScope('youtube_contact', "Bv5Y-11vqmE");?>
      <?php } elseif ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'fr') {?>
          <?php $_smarty_tpl->_assignInScope('youtube_availability', "Zv8Tw8H8DGA");?>
          <?php $_smarty_tpl->_assignInScope('youtube_compat', "GgQvaNMYrrQ");?>
          <?php $_smarty_tpl->_assignInScope('youtube_shipping', "yWln2uJ52iU");?>
          <?php $_smarty_tpl->_assignInScope('youtube_newsletter', "f1TCe1q-emA");?>
          <?php $_smarty_tpl->_assignInScope('youtube_contact', "l1xwWMCqWF0");?>
      <?php } else { ?>
          <?php $_smarty_tpl->_assignInScope('youtube_availability', "3shE5Ki8ZzM");?>
          <?php $_smarty_tpl->_assignInScope('youtube_compat', "N06Rv015on4");?>
          <?php $_smarty_tpl->_assignInScope('youtube_shipping', "UVpWbaECK-0");?>
          <?php $_smarty_tpl->_assignInScope('youtube_newsletter', "ycQJs64knkk");?>
          <?php $_smarty_tpl->_assignInScope('youtube_contact', "n44oNOA8tjQ");?>
      <?php }?>
      <div id="user-help" class="row">
        <div class="user-help-header"><img src="https://www.all-stars-motorsport.com/img/cms/Mobile_pages/faqs/faq_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg?v=1" alt="faq_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg?v=1" /></div>
        <div class="user-help-content">
            <div class="card-user">
                <div class="element-to-click">
                    <a href="https://www.youtube.com/watch?v=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_availability']->value, ENT_QUOTES, 'UTF-8');?>
" class="card-link"> 
                        <img
                            id="image_thumb_tut" src="https://www.allstarsmotorsport.com/img/cms/FAQs/product_availability.jpg"
                            alt="product_availability.jpg" />
                    </a>
                    <div class="play"><img src="https://www.allstarsmotorsport.com/img/youtube_play.png"/></div>
                    <div class="card-description">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product availability','d'=>'Shop.Theme.UserHelp'),$_smarty_tpl ) );?>
</h2>
                    </div>
                </div>
                <div  class="iframeClass"  style="display:none">
                    <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_availability']->value, ENT_QUOTES, 'UTF-8');?>
?autoplay=0&mute=1&rel=0" loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="card-user">
                <div class="element-to-click">
                    <a href="https://www.youtube.com/watch?v=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_compat']->value, ENT_QUOTES, 'UTF-8');?>
" class="card-link">
                        <img
                            src="https://www.allstarsmotorsport.com/img/cms/FAQs/product_compatibility.jpg" alt="product_compatibility.jpg" />
                    </a>
                    <div class="play"><img src="https://www.allstarsmotorsport.com/img/youtube_play.png"/></div>
                    <div class="card-description">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product compatibility','d'=>'Shop.Theme.UserHelp'),$_smarty_tpl ) );?>
</h2>
                    </div>
                </div>
                <div  class="iframeClass"  style="display:none">
                    <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_compat']->value, ENT_QUOTES, 'UTF-8');?>
?autoplay=0&mute=1&rel=0" loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="card-user">
                <div class="element-to-click">
                    <a href="https://www.youtube.com/watch?v=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_shipping']->value, ENT_QUOTES, 'UTF-8');?>
" class="card-link"> <img
                            src="https://www.allstarsmotorsport.com/img/cms/FAQs/product_shipping.jpg" alt="product_shipping.jpg" />
                    </a>
                    <div class="play"><img src="https://www.allstarsmotorsport.com/img/youtube_play.png"/></div>
                    <div class="card-description">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product shipping','d'=>'Shop.Theme.UserHelp'),$_smarty_tpl ) );?>
</h2>
                    </div>
                </div>
                <div  class="iframeClass"  style="display:none">
                    <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_shipping']->value, ENT_QUOTES, 'UTF-8');?>
?autoplay=0&mute=1&rel=0" loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="card-user">
                <div class="element-to-click">
                    <a href="https://www.youtube.com/watch?v=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_newsletter']->value, ENT_QUOTES, 'UTF-8');?>
" class="card-link"> <img
                            src="https://www.all-stars-motorsport.com/img/cms/FAQs/newsletter.jpg" alt="product_shipping.jpg" />
                    </a>
                    <div class="play">
                        <img src="https://www.allstarsmotorsport.com/img/youtube_play.png"/></div>
                    <div class="card-description">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.UserHelp'),$_smarty_tpl ) );?>
</h2>
                    </div>
                </div>
                <div  class="iframeClass"  style="display:none">
                    <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_newsletter']->value, ENT_QUOTES, 'UTF-8');?>
?autoplay=0&mute=1&rel=0" loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="card-user">
                <div class="element-to-click">
                    <a href="https://www.youtube.com/watch?v=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_contact']->value, ENT_QUOTES, 'UTF-8');?>
" class="card-link"> <img
                            src="https://www.all-stars-motorsport.com/img/cms/FAQs/CONTACT.jpg" alt="product_shipping.jpg" />
                    </a>
                    <div class="play"><img src="https://www.allstarsmotorsport.com/img/youtube_play.png"/></div>
                    <div class="card-description">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','d'=>'Shop.Theme.UserHelp'),$_smarty_tpl ) );?>
</h2>
                    </div>
                </div>
                <div  class="iframeClass"  style="display:none">
                    <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['youtube_contact']->value, ENT_QUOTES, 'UTF-8');?>
?autoplay=0&mute=1&rel=0" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
      </div>
    <?php } else { ?>
      <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php }?>



<?php echo '<script'; ?>
>
function playhoverFunction(e) {
  const playDiv = e.previousElementSibling;

  if (playDiv) {
    const imageElement = playDiv.querySelector('.image_play');
    const currentSrc = imageElement.getAttribute('src');
    
      const newSrc = currentSrc.includes('hover') ? '/img/youtube_play.png' : '/img/youtube_play_hover.png';
      imageElement.setAttribute('src', newSrc);
    
  }
}

function openYoutubeLink(videoId) {
        var youtubeLink = "https://www.youtube.com/watch?v=" + videoId;
        window.open(youtubeLink, "_blank");
}

<?php echo '</script'; ?>
>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
