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
.languageimg{
  height: 75%;
  width: auto;
  align-self: center;
  margin-left: 5px;
}

.form-control {
    display: inline-flex;
    width: 50%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1;

    background-clip: padding-box;
    border: 2px solid white;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

/* Additional styling for focus state */
.form-control:focus {
    border: 2px;
    border-color: rgba(4, 30, 66, 1);
    background-color: (4, 30, 66, 1);
    outline: 1;
    box-shadow: 0 0 0 .2rem rgba(4, 30, 66, 1) !important;
}

</style>

<div id="_desktop_language_selector">
  <div style="display-flex" class="language-selector-wrapper">
    <span style="color: white;" id="language-selector-label" class="hidden-md-up">{l s='Language:' d='Shop.Theme.Global'}</span>
    <div class="language-selector dropdown js-dropdown">
      <button data-toggle="dropdown" class="hidden-sm-down btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Language dropdown' d='Shop.Theme.Global'}">
<<<<<<< HEAD
      <img src="/img/tmp/lang_mini_{$current_language.id_lang}_1.jpg?time=1699550058">
      <span class="expand-more">{$current_language.name_simple}</span>
=======
        <img src="/img/tmp/lang_mini_{$current_language.id_lang}_1.jpg" />
        <span class="expand-more">{$current_language.name_simple}</span>
>>>>>>> 18b6231d41890bd0c45eba5f4e6d67dbf23febde
        <i class="material-icons expand-more">&#xE5C5;</i>
      </button>
      <ul class="dropdown-menu hidden-sm-down" aria-labelledby="language-selector-label">
        {foreach from=$languages item=language}
          <li style="display: flex; " {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
            <img src="/img/tmp/lang_mini_{$language.id_lang}_1.jpg?time=1699550058" class="languageimg">
            <a href="{url entity='language' id=$language.id_lang}" class="dropdown-item" data-iso-code="{$language.iso_code}">{$language.name_simple}</a>
          </li>
        {/foreach}
      </ul>
      <select style="background-color: rgba(4, 30, 66, 1); color: white " class="link hidden-md-up form-control" aria-labelledby="language-selector-label">
        {foreach from=$languages item=language}
          
        <option value="{url entity='language' id=$language.id_lang}"{if $language.id_lang == $current_language.id_lang} selected="selected" class="selected-language" {/if} data-iso-code="{$language.iso_code}">
            {$language.name_simple}
          </option>
        {/foreach}
      </select>
    </div>
  </div>
</div>
