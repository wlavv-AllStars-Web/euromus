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
<style>
.thumbnail-container{
  width: 456px !important;
  border: 2px solid white; 
}

.thumbnail-container:hover {
  border: 2px solid var(--color-red)!important;
}

.add_to_cart_button .btn-primary i {
  transform: rotate(0);
  color: var(--color-red);
}

.add_to_cart_button .btn.btn-primary {
  transform: rotate(0);
  border-color: var(--color-red);
  width: 40px;
  height: 40px;
  margin-bottom: 0;
  margin-top: 1rem;
}

.add_to_cart_button .btn.btn-primary:hover{
  background: var(--color-red);
  border-color: var(--color-red);
}

.add_to_cart_button .btn.btn-primary:hover ~ .add_to_cart i::before {
  color: white !important;
}


.add_to_cart i::before{
font-size: 24px !important;
}

.product-miniature {
  width: fit-content;
  padding: 0 !important;
}

#products .products{
  display: flex;
  justify-content: center;
}

#products .product-title{
  margin-bottom: 0;
}

</style>
{* <pre>{print_r($product,1)}</pre> *}
<article class="product-miniature js-product-miniature d-flex justify-content-center mr-auto col-lg-3" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">

  <div class="thumbnail-container" style="width: 526px;height:349px;display:flex;flex-direction:column;justify-content:center;align-items:center;">
    <div class="image_item_product" style="border: 0;">
        {block name='product_thumbnail'}
          <a href="{$product.url}" class="thumbnail product-thumbnail">
            <img src = "{$product.cover.bySize.home_default.url}" alt = "{$product.cover.legend}"
              data-full-size-image-url = "{$product.cover.large.url}" width="300" height="200" />
          </a>
        {/block}
        {* <div class="highlighted-informationsif !$product.main_variants} no-variants{/if"> *}
          {* <div class="add_to_cart_button"> *}
{*              <form action="{$urls.pages.cart}" method="post">*}
              {* <div> *}
                    {* <input type="hidden" name="token" value="{$static_token}" /> *}
                    {* <input type="hidden" value="{$product.id_product}" name="id_product" /> *}
                    {* <input type="hidden" class="input-group form-control atc_qty" name="qty" value="1"> *}
{*                    <button data-button-action="add-to-cart" class="btn btn-primary" {if $product.quantity <= 0}disabled="disabled"{/if}>*}
                  {* <button class="add_to_cart btn btn-primary" onclick="mypresta_productListCart.add({literal}$(this){/literal});"> *}
                        {*l s='Buy Now' d='Shop.Theme.Actions'*}
                        {* <i class="fa fa-shopping-cart"></i> *}
                    {* </button> *}
              {* </div> *}
{*             </form>*}
         {* </div> *}
         {* {hook h='displayProductListFunctionalButtons' product=$product} *}
          {* <a href="#" class="quick-view" data-link-action="quickview"> *}
            {* <i class="material-icons search">search</i> {l s='Quick view' d='Shop.Theme.Actions'} *}
          {* </a> *}
        {* </div> *}
        {block name='product_variants'}
            {if $product.main_variants}
              {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
            {/if}
        {/block}
    </div>
    
    {block name='product_price_and_shipping'}
      {if $product.show_price}
        <div class="product_pricebox" style="width: 100%;display:flex;">
          <div class="product-price-and-shipping" style="width: fit-content;height:30px;background:var(--color-red);border-radius:0 50px 50px 0;display:flex;align-items:center;min-width:150px;">
            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            <span itemprop="price" class="price" style="color: white;font-size:18px;padding:0 0rem 0 1rem;">{$product.price}</span>
            
            {if $product.has_discount}
              {hook h='displayProductPriceBlock' product=$product type="old_price"}

              <span class="regular-price" style="color: black;">{$product.regular_price}</span>
              {*if $product.discount_type === 'percentage'}
                <span class="discount-percentage">{$product.discount_percentage}</span>
              {/if*}
            {/if}
            
            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        </div>
      {/if}
    {/block}

    <div class="product-description" style="color: black;">
    
      {block name='product_name'}
        {* <h4 class="h3 product-title"  itemprop="name"><a style="color: black;" href="{$product.url}">{$product.name|truncate:30:'...'}</a></h4> *}
        <div style="display:flex;align-items:center;justify-content: space-between;">
          <h4 class="h3 product-title"  itemprop="name" style="max-width: 450px;text-align:start;padding:0 1rem"><a style="color:var(--color-text);font-size:14px" href="{$product.url}">{$product.name}</a></h4>
          <div class="add_to_cart_button" style="margin-right: 1rem;">
  {*              <form action="{$urls.pages.cart}" method="post">*}
                <div>
                      <input type="hidden" name="token" value="{$static_token}" />
                      <input type="hidden" value="{$product.id_product}" name="id_product" />
                      <input type="hidden" class="input-group form-control atc_qty" name="qty" value="1">
  {*                    <button data-button-action="add-to-cart" class="btn btn-primary" {if $product.quantity <= 0}disabled="disabled"{/if}>*}
                    <button class="add_to_cart btn btn-primary" onclick="mypresta_productListCart.add({literal}$(this){/literal});">
                          {*l s='Buy Now' d='Shop.Theme.Actions'*}
                          <i class="fa fa-shopping-cart"></i>
                      </button>
                </div>
  {*             </form>*}
          </div>
         </div>
      {/block}
      {if isset($product.description_short) && $product.description_short !=''}
        <div class="short_description" style="color: black;">{$product.description_short|truncate:100:'...' nofilter}</div>
      {/if}
      
      <div class="hook-reviews">
	      {hook h='displayProductListReviews' product=$product}
	  </div>
      
      
      
    </div>
    {* {block name='product_flags'}
      <ul class="product-flags">
        {foreach from=$product.flags item=flag}
            {if $flag.type != 'discount'}
              <li class="{$flag.type}">
                {$flag.label}
              </li>
            {/if}
        {/foreach}
        {if $product.show_price}
            {if $product.has_discount}
              {if $product.discount_type === 'percentage'}
                <li class="product-discount">
                    <span class="discount-percen">{$product.discount_percentage}</span>
                </li>
              {/if}
            {/if}
        {/if}
      </ul>
    {/block} *}
  </div>

</article>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var addButton = document.querySelectorAll('.add_to_cart_button .btn.btn-primary');
  

  addButton.forEach((item) => {
    var icon = item.querySelector('.add_to_cart i');

    item.addEventListener('mouseover', function() {
      icon.style.color = 'white';
    });

    item.addEventListener('mouseout', function() {
      icon.style.color = ''; // Revert to the default color or remove this line if not needed
    });
  })

  
});

</script>
