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

{block name='product_miniature_item'}
<style>
@media(max-width:1080px){
  .inc{
    width: 100%;
  }
}
</style>
  <div style="margin-bottom:25px;" class="col-md-6 inc">

 
    <article style="padding-left: 5px; margin: 0; display:flex" class="product-miniature js-product-miniature boxprod ps-1"
      data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">


      <div class="thumbnail-top">
        <div>

          {block name='product_thumbnail'}
            {if $product.cover}
              <a href="{$product.url}" class=" thumbnail product-thumbnail">
                <picture>
                  {if !empty($product.cover.bySize.home_default.sources.avif)}
                  <source srcset="{$product.cover.bySize.home_default.sources.avif}" type="image/avif">{/if}
                  {if !empty($product.cover.bySize.home_default.sources.webp)}
                  <source srcset="{$product.cover.bySize.home_default.sources.webp}" type="image/webp">{/if}
                  <img src="{$product.cover.bySize.home_default.url}"
                    alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                    loading="lazy" data-full-size-image-url="{$product.cover.large.url}" style="width: 150px;"
                     />
                </picture>
              </a>
            {else}
              <a href="{$product.url}" class="thumbnail product-thumbnail">
                <picture>
                  {if !empty($urls.no_picture_image.bySize.home_default.sources.avif)}
                  <source srcset="{$urls.no_picture_image.bySize.home_default.sources.avif}" type="image/avif">{/if}
                  {if !empty($urls.no_picture_image.bySize.home_default.sources.webp)}
                  <source srcset="{$urls.no_picture_image.bySize.home_default.sources.webp}" type="image/webp">{/if}
                  <img src="{$urls.no_picture_image.bySize.home_default.url}"  loading="lazy"
                />
                </picture>
              </a>
            {/if}
          {/block}
        </div>
      </div>
      <div style="margin-right: auto; display: flex; flex-direction: column;" class="text-center">
        {block name='product_name'}
          {if $page.page_name == 'index'}
            <h1 style="margin-top: 20px; margin-left: 10px "><a style="color:rgb(10, 49, 97)" href="{$product.url}"
                content="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
            <p style="margin-left: 10px ">{$product.name}{$product.reference}</p>
            <p style="margin-left:10px ;flex: auto; display: flex; align-items: end; margin-bottom: 30px">
              {$product.manufacturer_name}</p>
          {else}
            <h1 style="margin-top: 20px; margin-left:10px"><a style="color: rgb(10, 49, 97) !important"
                href="{$product.url}" content="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
            <p style="margin-left: 10px ">{$product.name}{$product.reference}</p>
            <p style="margin-left: 10px; flex: auto; display: flex; align-items: end; margin-bottom: 30px">
              {$product.manufacturer_name}</p>
          {/if}
        {/block}

      </div>
      <div class="highlighted-informations{if !$product.main_variants} no-variants{/if}">

        {block name='product_variants'}
          {if $product.main_variants}
            {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
          {/if}
        {/block}
      </div>


      <div style="display: flex; flex-direction:column" class="product-description">


        {block name='product_price_and_shipping'}
          {if $product.show_price}
            <div class="product-price-and-shipping">
              {if $product.has_discount}
                {hook h='displayProductPriceBlock' product=$product type="old_price"}

                <span class="regular-price"
                  aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">{$product.regular_price}</span>
                {if $product.discount_type === 'percentage'}
                  <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                {elseif $product.discount_type === 'amount'}
                  <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                {/if}
              {/if}

              {hook h='displayProductPriceBlock' product=$product type="before_price"}

              <span style="margin-right: 10px; display:flex ; flex: auto; margin-top: 20px;" class="price"
                aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
                {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
                {if '' !== $smarty.capture.custom_price}
                  {$smarty.capture.custom_price nofilter}
                {else}
                  {$product.price}
                {/if}
              </span>

              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

              {hook h='displayProductPriceBlock' product=$product type='weight'}
            </div>
          {/if}
        {/block}

        {block name='product_reviews'}
          {hook h='displayProductListReviews' product=$product}
        {/block}
        <div style="display: flex; align-self: center; margin-top: auto;">
          <a style="color: rgb(10, 49, 97); margin-right: 10px; display:flex ; flex: auto; align-items: end; margin-bottom: 30px;"
            href="{$product.add_to_cart_url}"><i class="material-icons shopping-cart"
              >shopping_cart</i></a>
        </div>
      </div>

      {include file='catalog/_partials/product-flags.tpl'}

    </article>
  </div>
{/block}