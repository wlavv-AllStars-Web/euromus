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

{capture assign="productClasses"}{if !empty($productClass)}{$productClass}{else}col-xs-12 col-sm-6 col-lg-3 col-xl-3{/if}{/capture}
    
<div class="products{if !empty($cssClass)} {$cssClass}{/if}">
    {if isset($search)}
        {$filter1 = Tools::getValue('filters1')}
        {$filter2 = Tools::getValue('filters2')}
        {$filter3 = Tools::getValue('filters3')}
        {$filter4 = Tools::getValue('filters4')}

        {assign var="compatvalues" value=IndexControllerCore::getBrandAndModel($filter1,$filter2,$filter3,$filter4,2)}

        {foreach from=$compatvalues item=item}
            {foreach from=$item.name_brand item=brand}
            {assign var="brand" value=$brand.value}
            {/foreach}
            {foreach from=$item.name_model item=model}
            {assign var="model" value=$model.value}
            {/foreach}
            {foreach from=$item.name_type item=type}
            {assign var="type" value=$type.value}
            {/foreach}
            {foreach from=$item.name_version item=version}
            {assign var="version" value=$version.value}
            {/foreach}
        {/foreach}

        <div class="js-product product{if !empty($productClasses)} {$productClasses}{/if}" style="display: flex;justify-content:center;">
            <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
                <div class="thumbnail-container" style="background:#1030543d;">
                    <div class="thumbnail-top">
                        <picture>
                            <img src="/img/eurmuscle/cardCarsHome/{$brand}{$model}.png" style="width: 100%;background:transparent;max-height: 175px;
                            object-fit: cover;"/>
                        </picture>
                    </div>
                    <div class="product-description" style="background: transparent;display: flex;flex-direction: column;align-items: center;color:#fff;gap:0.5rem;">
                        <div style="display: flex;gap:1rem;font-size: 1.25rem;font-weight: 600;color:#103054;">
                            <span>{$brand}</span>|<span>{$model}</span>
                        </div>
                        <div style="display: flex;flex-direction:column;align-items: center;gap:1rem;color:#ee302e;font-weight: 600;">
                        <span>{$type}</span>
                        <span>{$version}</span>
                        </div>
                    </div>
                </div>
        </div>
        
    {/if}
    {foreach from=$products item="product" key="position"}
        {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
    {/foreach}
</div>

