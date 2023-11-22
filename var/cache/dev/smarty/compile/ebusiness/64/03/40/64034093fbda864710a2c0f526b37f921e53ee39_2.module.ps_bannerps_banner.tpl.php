<?php
/* Smarty version 4.3.1, created on 2023-11-22 12:55:46
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655dfa527a40b8_12813925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1700589079,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655dfa527a40b8_12813925 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_banner/ps_banner.tpl --><div class="bannersContainer">
  <div class="bannerRow1">
    <a class="banner banner1 image-box" href="#" >
              <div class="banner__image-container">
          <img src="/img/banner2.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" style="object-position: right;">
        </div>
          </a>
    <a class="banner banner2 image-box" href="#" >
              <div class="banner__image-container">
          <img src="/img/banner1.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" style="object-position: left;">
        </div>
          </a>
  </div>
  <div class="bannerRow2">
    <a class="banner banner1 image-box" href="#" >
              <div class="banner__image-container">
          <img src="/img/banner3.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
        </div>
          </a>
    <a class="banner banner2 image-box" href="#" >
              <div class="banner__image-container">
          <img src="/img/banner4.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
        </div>
          </a>
    <a class="banner banner2 image-box" href="#" >
              <div class="banner__image-container">
          <img src="/img/banner5.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
        </div>
          </a>
  </div>
  <div class="bannerRow3">
    <a class="banner banner1 image-box" href="#" >
              <div class="containerVideo">
          <div class="banner__image-container">
            <img src="/img/video1.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
          </div>
          <img src="/img/youtube_play.png" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="youtube-play">
        </div>
          </a>
    <a class="banner banner2 image-box" href="#" >
              <div class="containerVideo">
          <div class="banner__image-container">
            <img src="/img/video2.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
          </div>
          <img src="/img/youtube_play.png" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="youtube-play">
        </div>
          </a>
    <a class="banner banner2 image-box" href="#" >
              <div class="containerVideo">
          <div class="banner__image-container">
            <img src="/img/video3.webp" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
          </div>
          <img src="/img/youtube_play.png" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="youtube-play">
        </div>
          </a>
  </div>
</div>
<?php echo '<script'; ?>
>
  const videosYoutube = document.querySelectorAll(".containerVideo")
  
  videosYoutube.forEach(element => {
    element.addEventListener("mouseover", () => {
      const playButton = element.querySelector('.youtube-play')
      console.log(playButton)
      playButton.setAttribute("src","/img/youtube_play_hover.png")
    })
    element.addEventListener("mouseout", () => {
      const playButton = element.querySelector('.youtube-play')
      console.log(playButton)
      playButton.setAttribute("src","/img/youtube_play.png")
    })
    if(screen.width <= 768){
      const playButton = element.querySelector('.youtube-play')
      playButton.setAttribute("src","/img/youtube_play_hover.png")
    }
  });
<?php echo '</script'; ?>
>
<!-- end C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_banner/ps_banner.tpl --><?php }
}
