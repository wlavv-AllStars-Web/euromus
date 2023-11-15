{*
* 2007-2022 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
* 
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<div id="_desktop_cart">
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url|escape:'html':'UTF-8'}">
    <div class="header">
      <a rel="nofollow" href="{$cart_url|escape:'html':'UTF-8'}">
        <i class="icon icon_cart_alt"></i>
        <span class="cart-products-label">{l s='Shopping Cart' d='Shop.Theme.Checkout'}</span>
        <span class="cart-products-count">{$cart.products_count|escape:'html':'UTF-8'} {if $cart.products_count > 1}{l s=' Items' d='Shop.Theme.Checkout'}{else}{l s=' Item' d='Shop.Theme.Checkout'}{/if} - {$cart.totals.total.value|escape:'html':'UTF-8'} </span>
        <span class="cart-products-count cart-products-count-absolution">{$cart.products_count|escape:'html':'UTF-8'}</span>
      </a>

      <div class="body cart-hover-content">
        <ul>
          {foreach from=$cart.products item=product}
            <li class="cart-wishlist-item">{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
          {/foreach}
        </ul>
        {if isset($cart.subtotals)}
          <div class="cart-subtotals">
            {foreach from=$cart.subtotals item="subtotal"}
              <div class="{if isset($subtotal.type)}{$subtotal.type|escape:'html':'UTF-8'}{/if}">
                <span class="label">{if isset($subtotal.label)}{$subtotal.label|escape:'html':'UTF-8'}{/if}</span>
                <span class="value">{if isset($subtotal.value)}{$subtotal.value|escape:'html':'UTF-8'}{/if}</span>
              </div>
            {/foreach}
          </div>
          {if isset($cart.totals.total)}
            <div class="cart-total">
              <span class="label">{$cart.totals.total.label|escape:'html':'UTF-8'}</span>
              <span class="value">{$cart.totals.total.value|escape:'html':'UTF-8'}</span>
            </div>

          {/if}
        {/if}
        <div class="cart-wishlist-action">
          <a class="cart-wishlist-checkout" href="{$cart_url|escape:'html':'UTF-8'}">{l s='Check Out' d='Shop.Theme.Actions'}</a>
        </div>
      </div>
    </div>
  </div>
</div>
