{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 
{block name='product_miniature_item'}
  <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product|escape:'html':'UTF-8'}" data-id-product-attribute="{$product.id_product_attribute|escape:'html':'UTF-8'}" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      {block name='product_thumbnail'}
        <a href="{$product.url|escape:'html':'UTF-8'}" class="thumbnail product-thumbnail">
          <img
            src = "{$product.cover.bySize.home_default.url|escape:'html':'UTF-8'}"
            alt = "{$product.cover.legend|escape:'html':'UTF-8'}"
            data-full-size-image-url = "{$product.cover.large.url|escape:'html':'UTF-8'}"
          >
        </a>
      {/block}

      <div class="product-description">
        {block name='product_name'}
          <h3 class="h3 product-title" itemprop="name"><a href="{$product.url|escape:'html':'UTF-8'}">{$product.name|truncate:30:'...'}</a></h3>
        {/block}

        {block name='product_price_and_shipping'}
          {if $product.show_price}
            <div class="product-price-and-shipping">
              
              {hook h='displayProductPriceBlock' product=$product type="before_price"}
              <span itemprop="price" class="price">{$product.price|escape:'html':'UTF-8'}</span>
              {if $product.has_discount}
                {hook h='displayProductPriceBlock' product=$product type="old_price"}
                <span class="regular-price">{$product.regular_price|escape:'html':'UTF-8'}</span>
                {if $product.discount_type === 'percentage'}
                  <span class="discount-percentage">{$product.discount_percentage|escape:'html':'UTF-8'}</span>
                {/if}
              {/if}
              {hook h='displayProductPriceBlock' product=$product type='unit_price'}
            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}

      {*block name='product_reviews'}
        {hook h='displayProductListReviews' product=$product}
      {/block*}
    </div>

    {*block name='product_flags'}
      <ul class="product-flags">
        {foreach from=$product.flags item=flag}
          <li class="{$flag.type|escape:'html':'UTF-8'}">{$flag.label|escape:'html':'UTF-8'}</li>
        {/foreach}
      </ul>
    {/block*}
{*
    <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
      {block name='quick_view'}
        <a class="quick-view" href="#" data-link-action="quickview">
          <i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'}
        </a>
      {/block}

      {block name='product_variants'}
        {if $product.main_variants}
          {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
        {/if}
      {/block}
    </div>*}
        {if isset($product.specific_prices.to) && $product.specific_prices.to }
    <div id="ets_clock_{$product.id_product|intval}" data-id-product="{$product.id_product|intval}" data-date-to="{$product.specific_prices.to|escape:'html':'UTF-8'}" class="ets_clock"></div>
 
    </div>
      {/if}
     </article>
{/block}
