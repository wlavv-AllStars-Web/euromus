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
<style>
 .boxprod {
    
  --b: 2px;   /* thickness of the border */
  --c: rgb(10, 49, 97);   /* color of the border */
  --w: 70%;  /* width of border */
  

  border: var(--b) solid #0000; /* space for the border */
  --_g: #0000 90deg,var(--c) 0;
  --_p: var(--w) var(--w) border-box no-repeat;
  background:
  conic-gradient(from 90deg  at top    var(--b) left  var(--b),var(--_g)) 0    0    / var(--_p),
    conic-gradient(from -90deg at bottom var(--b) right var(--b),var(--_g)) 100% 100% / var(--_p);

  
}
.boxout{
    --b: 2px;   /* thickness of the border */
  --c: rgb(10, 49, 97);   /* color of the border */
  --w: 70%;  /* width of border */
  

  border: var(--b) solid #0000; /* space for the border */
  --_g: #0000 90deg,var(--c) 0;
  --_p: var(--w) var(--w) border-box no-repeat;
  background:
  conic-gradient(from 0deg  at bottom    var(--b) left  var(--b),var(--_g)) 0    100%    / var(--_p),
    conic-gradient(from 180deg at top var(--b) right var(--b),var(--_g)) 100% 0% / var(--_p)
 }
 
 .boxoutrd{
    --b: 2px;   /* thickness of the border */
  --c: rgb(179, 25, 66);   /* color of the border */
  --w: 75%;  /* width of border */
  

  border: var(--b) solid #0000; /* space for the border */
  --_g: #0000 90deg,var(--c) 0;
  --_p: var(--w) var(--w) border-box no-repeat;
  background:
  conic-gradient(from 0deg  at bottom    var(--b) left  var(--b),var(--_g)) 0    100%    / var(--_p),
    conic-gradient(from 180deg at top var(--b) right var(--b),var(--_g)) 100% 0% / var(--_p)

 }
 
  #smallscreen{
    display: none;
  }
  @media(max-width:1080px) {
    #inc {
      width: 100%;
    }

    #smallscreen {
      display: flex;
    }

    #bigscreen {
      display: none;
    }
  }

</style>
{capture assign="productClasses"}{if !empty($productClass)}{$productClass}{else}{/if}{/capture}

<div style="display: flex; justify-content: center" class="products{if !empty($cssClass)} {$cssClass}{/if}">
    {foreach from=$products item="product" key="position"}
        {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
    {/foreach}
</div>
