{if Context::getContext()->isMobile() == 1}
<style>
.dropdown-menu {
 position: absolute;
 top: 100%;
 left: 0;
 z-index: 1000;
 display: none;
 float: left;
 min-width: 116px;
 padding: 4px 13px;
 margin: 5px 0 0;
   margin-left: 0px;
 font-size: 1rem;
 color: #878787;
 text-align: left;
 list-style: none;
 background-color: #fff;
 background-clip: padding-box;
 border: 1px solid rgba(0, 0, 0, 0.15);
 border-radius: 0;
}
@media (max-width: 767px) {
  .header-nav .dropdown-menu {
    font-size: 13px;
    width: 940%;
    overflow: 900%;
  }
}
.dropdown-item {
  display: block;
  width: auto;
  padding: 0px 0px;
  clear: both;
  font-weight: normal;
  color: #fff !important;
  text-align: inherit;
  white-space: nowrap;
  background: none;
  border: 0;
  font-size: 13px;
  line-height: 23px;
}
.lgss {
display: none;flex-wrap: inherit;   padding-top: 7px;   position: absolute;   margin-top: 87px;   width: 100%;   margin-left: -15px;   background: #fff;   padding-bottom: 7px;   justify-content: center;   gap: 1rem; padding-left: 150%;
  padding-right: 150%;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
  width: 1px;
  height: 1px;
}
</style>
 <div id="_desktop_language_selector" style="padding-right: 133px;">
   <div style="display-flex;" class="language-selector-wrapper">
  {*   <span style="color: white;" id="language-selector-label" class="hidden-md-up">{l s='Language:' d='Shop.Theme.Global'}</span> *}
     <div class="language-selector dropdown js-dropdown"  onclick="alternarDisplay()" style="border-left: 1px solid #444;" >
       <div data-toggle="dropdown" class=" btn-unstyle lang lgh" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Language dropdown' d='Shop.Theme.Global'}">
       <span>{strtoupper($current_language.iso_code)}</span>
       </div>
     </div>
   </div>
 </div>
       <div class="lgss" id="lgm">
          {foreach from=$languages item=language}
            <a href="{url entity='language' id=$language.id_lang}" class="dropdown-item" style="display: flex;
  justify-content: center;" data-iso-code="{$language.iso_code}">
             <img src="/img/tmp/lang_mini_{$language.id_lang}_3.jpg?time=1699550058" style="width:48px; height:30px; border-radius: 5px;
  border: 1px solid #000;" class="languageimg">
            </a>
         {/foreach}
                </div> 
              
<script>

function alternarDisplay() {

			var idd = document.getElementById('searchbar');
			var idds = window.getComputedStyle(idd);
			var iddss = idds.getPropertyValue('display');

			if(iddss == 'block'){
					dropdownSearch();
			}

var elementoLgm = document.getElementById('lgm');

var estiloComputado = window.getComputedStyle(elementoLgm);

var displayAtual = estiloComputado.getPropertyValue('display');

if (displayAtual == 'none'){
    var elementos = document.getElementsByClassName('lgss');
    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style.display = 'flex';
    }
}
if (displayAtual == 'flex'){
    var elementos = document.getElementsByClassName('lgss');
    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style.display = 'none';
    }
}
			var logoDesktop = document.getElementById('_desktop_logo');
			var estiloComputado = window.getComputedStyle(logoDesktop);
			var paddingTop = estiloComputado.getPropertyValue('padding-top');

			if(paddingTop == '0px'){
			logoDesktop.style.paddingTop = '47px';
			logoDesktop.style.setProperty('padding-top', '47px', 'important');
				}else
				{
			logoDesktop.style.paddingTop = '0px';
			logoDesktop.style.setProperty('padding-top', '0px', 'important');		
				}
}
</script>
   
{else}

 <div id="_desktop_language_selector" style="padding-right: 133px;">
   <div style="display-flex;" class="language-selector-wrapper">
  {*   <span style="color: white;" id="language-selector-label" class="hidden-md-up">{l s='Language:' d='Shop.Theme.Global'}</span> *}
     <div class="language-selector dropdown js-dropdown">
       <div data-toggle="dropdown" class=" btn-unstyle lang lgh" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Language dropdown' d='Shop.Theme.Global'}">
       <img style="width:16px; height:11px;vertical-align: inherit;" src="/img/tmp/lang_mini_{$current_language.id_lang}_3.jpg?time=1699550058">
       <span style="font-weight: bold;">{strtoupper($current_language.iso_code)}</span>
         <i class="material-icons expand-more">&#xE5C5;</i>
       </div>
       <ul class="dropdown-menu" style="margin-top: -1px;margin-left: -46px; background-color:#000; color: white " aria-labelledby="language-selector-label ">
         {foreach from=$languages item=language}
           <li style="display: flex; " class=" selector {if $language.id_lang == $current_language.id_lang} current  {/if}">
             <img src="/img/tmp/lang_mini_{$language.id_lang}_3.jpg?time=1699550058" style="width:16px; height:11px" class="languageimg">
             <a style="margin-left: 8px; " href="{url entity='language' id=$language.id_lang}" class="dropdown-item" data-iso-code="{$language.iso_code}">{$language.name_simple}</a>
           </li>
         {/foreach}
       </ul>
     </div>
   </div>
 </div>
{/if}
