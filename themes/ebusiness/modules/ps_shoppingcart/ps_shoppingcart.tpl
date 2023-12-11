 
 {if Context::getContext()->isMobile() != 1}
 <style>
  .p3v{
  font-size: 14px;
  border-right: 1px solid #fff;
  padding-right: 14px;
}
.crt{
  padding-top: 4px;
  padding-left: 7px;
  padding-right: 7px;
  color: #fff !important;
  height: 25px;
}
.crt:hover{
  background-color: #000;
  padding-left: 7px;
  padding-right: 7px;
  color: #dd170e !important;
}
 </style>
       <div class="p3v">
            <a href="./content/6-payment">
              <span style="color: white;">PAIMENT EN 3X / 4X PAR CB - EN SAVOIR PLUS</span>
              </a>
        </div>
  {/if}
   <div id="_desktop_cart" data-refresh-url="{$refresh_url}">  
  <div class="lpp blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}" >
    <a rel="nofollow" href="{$cart_url}">
        <div class=" icon_cart crt"></div>
      {if $cart.products_count > 0}<span class="cart-products-count">{$cart.products_count}</span>{else}<span></span>{/if}
    </a>
    <!-- begin -->
    <div class="body cart-hover-content">
      <ul>
        {if isset($cart.products) && $cart.products}
          {foreach from=$cart.products item=product}
            <li class="cart-wishlist-item">{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
          {/foreach}
        {/if}
      </ul>
      <div class="cart-subtotals">
        {foreach from=$cart.subtotals item="subtotal"}
          {if $subtotal}
            <div class="{$subtotal.type|escape:'html':'UTF-8'}">
              <span class="label">{$subtotal.label|escape:'html':'UTF-8'}</span>
              <span class="value">{$subtotal.value|escape:'html':'UTF-8'}</span>
            </div>
          {/if}
        {/foreach}
      </div>
      <div class="cart-total">
        <span class="label">{$cart.totals.total.label|escape:'html':'UTF-8'}</span>
        <span class="value">{$cart.totals.total.value|escape:'html':'UTF-8'}</span>
      </div>
      <div class="cart-wishlist-action">
        {*<a class="cart-wishlist-viewcart" href="{$cart_url|escape:'html':'UTF-8'}">view cart</a>*}
        <a class="cart-wishlist-checkout"
           href="{$urls.pages.order|escape:'html':'UTF-8'}">{l s='Check Out' d='Shop.Theme.Actions'}</a>
      </div>
    </div>
      <!-- end -->
  </div>

      
</div>

