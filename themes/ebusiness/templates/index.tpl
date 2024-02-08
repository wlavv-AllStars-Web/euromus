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

 {assign var="currentLanguageIso" value=Context::getContext()->language->iso_code}
{assign var="currentLanguage" value=Context::getContext()->language->id}
{assign var="categories" value=Category::getCategories($currentLanguage)}
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home" style="">
        {block name='page_content_top'}{/block}
        {block name='page_content'}
            {hook h='ybcCustom3'}
          {$HOOK_HOME nofilter}

          <div class="videosContainer">
              {foreach $desktop['icones_videos'] AS $key => $icon}
                <div class="video3 video">
                  <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                  <img src="{$icon["image_{$currentLanguageIso}"]}" style="min-width: 32vw;"/>
                    <div class="play">
                      <img class="image_play" alt="video player" src="/img/youtube_play.png" />
                    </div>
                  </div>
                  <div  class="iframeClass"  style="display:none">
                    <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/{$icon.youtube_code}?autoplay=0&mute=1&rel=0" loading="lazy">
                    </iframe>
                  </div>
                </div>
              {/foreach}
                </div>
        {/block}
      </section>
      <style>

      /* @media screen and (max-width:560px) {
        #content{
          display: flex;justify-content:center;width:100%;padding:1rem;
        }
      } */
      </style>
    {/block}

