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
{extends file='page.tpl'}

{* {block name='page_title'} *}
  {* {$cms.meta_title} *}
{* {/block} *}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id}" style="min-height: 50dvh;">
    {* <pre>{print_r($cms,1)}</pre> *}

  {$cms.content nofilter}


  <style>
  


.cms-id-28 .container {
  max-width: none !important;
  margin: 0;
}

.hover_for_text:hover div{
  opacity: 1 !important;
}

.hover_for_text:hover div h2 {
  color: var(--white);
}

.car-container strong {
  font-weight: 600 !important;
}

.button_partners {
    color: white;
    background-color: #dd170e;
    text-transform: uppercase;
    padding: 10px;
    text-decoration: none;
    font-size: 18px;
}

.button_partners:hover {
  color: #dd170e;
  background-color: #FFF;
  text-transform: uppercase;
  padding: 10px;
  text-decoration: none;
}

.card_partners {
  box-shadow: 3px 3px 5px 6px #ccc;
  height: auto;
  background-color: #333;
  color: white;
  min-height: 465px;
}

.card_partners .image_partners {
  width: 100%;
}
.text_partners {
    padding: 20px;
    min-height: 295px;
    line-height: 1.4;
    font-size: 14px;
    text-align: center;
    hyphens: auto;
    -ms-hyphens: auto;
    -webkit-hyphens: auto;
    text-align: center;
}

.button_container_partners {
  padding: 0 20px 20px 20px;
  margin: 20px auto 20px auto;
  text-align: center;
  display: grid;
}


</style>

<script>
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

</script>

  {hook h='displayCMSDisputeInformation'}

  {hook h='displayCMSPrintButton'}
  </section>
{/block}