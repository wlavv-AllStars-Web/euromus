<style>
.clearFilter_button{
  color: #fff;
  font-size: 18px;
    padding: 7px 15px;
    margin: 15px 0 0 0;
    border: 1px solid red;
}
.show{
  display: flex !important;
  height: 121px !important;
  margin-bottom: 1rem !important;
}
.sss{
color: #444 !important;
cursor: pointer;
font-size: 16px !important;
text-align: left!important;
}
.sss:hover{
color: #dd170e !important;
cursor: pointer;
}
.dropdownMenuMobile{
  display: flex !important;
  margin-bottom: 0;
  background: #282828;
  border-radius: 5px;
  flex-direction: column;
  width: 100%;
  align-items: center;
  height:0;
  overflow: hidden;
  transition: height ease-in-out 1s, margin-bottom ease-in-out 1s;
}
.dropdownMenuDesktop{
  margin-bottom: 0;
  background: #282828;
  border-radius: 5px;
  flex-direction: column;
  width: 100%;
  align-items: center;
  height:0;
  overflow: hidden;
  transition: height ease-in-out 1s, margin-bottom ease-in-out 1s;
}
.bb {
  font-weight: bolder !important;
  font-size: 1.2rem;
  padding: 0px !important;
}
#_desktop_top_menu{
  position: relative !important;
  z-index: 2;
  padding: 0;
  border-bottom: 1px solid #fff;
  background-color: #000;
}
#top-menu {
  display: flex;
  justify-content: space-evenly;
  margin: 0;
  width: 100%;

}
#top-menu li a{
  text-transform: uppercase;
  color: #fff;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
#top-menu li a:hover{
    background: #fff;
    color: #000000!important;
}

#lnk-your-car{
  background: red;
}
#lnk-your-car:hover{
  background: #fff;
}
#lnk-your-car:hover a{
  color: red !important;
}

#lnk-su-coche{
  background: red;
}
#lnk-su-coche:hover{
  background: #fff;
}
#lnk-su-coche:hover a{
  color: red !important;
}

#lnk-votre-vehicule{
  background: red;
}
#lnk-votre-vehicule:hover{
  background: #fff;
}
#lnk-votre-vehicule:hover a{
  color: red !important;
}
.title-sc{
  font-size: 33px;
  margin-top: 20px;
  margin-bottom: 10px;
  color: #fff;
  font-weight: normal;
  line-height: 1.1;
}
</style>
{if Context::getContext()->isMobile() != 1}
<script>
  function toggleDisplay() {
    var element = document.getElementById("sl");
    var altura = element.offsetHeight; // Obtém a altura do elemento

  if(altura == '0'){
  $(".dropdownMenuDesktop").css('height','259px');
  }else
  {
  $(".dropdownMenuDesktop").css('height','0');
  }
  }
</script>
{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      <ul class="top-menu" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}" {if $depth === 1}style="display:flex;flex-wrap: wrap;"{/if}>
        {foreach from=$nodes item=node} 
            <li class="{$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}" style="width: 25%;"
             {if $node.url == 'car'}onclick="toggleDisplay()"{/if}>
            {assign var=_counter value=$_counter+1}
              <a
                class="{if $depth >= 0}bb{/if}{if $depth === 1} dropdown-submenu sss{/if}"
                {if $node.url == 'car'}onclick="toggleDisplay()" style="cursor: pointer;"{/if}
                {if $node.url != 'car'}href="{$node.url}" data-depth="{$depth}"{/if}
                {if $node.open_in_new_window} target="_blank" {/if}
              >
                {if $node.children|count}
                  {* Cannot use page identifier as we can have the same page several times *}
                  {assign var=_expand_id value=10|mt_rand:100000}
                  <span class="pull-xs-right hidden-md-up">
                    <span data-target="#top_sub_menu_{$_expand_id}" data-toggle="collapse" class="navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                    </span>
                  </span>
                {/if}
                {$node.label}
              </a>
              {if $node.children|count}
              <div {if $depth === 0} class="popover sub-menu js-sub-menu collapse"{else} class="collapse"{/if} id="top_sub_menu_{$_expand_id}">
                {menu nodes=$node.children depth=$node.depth parent=$node}
              </div>
              {/if}
            </li>
        {/foreach}
      </ul>
    {/if}
{/function}

<div class="menu d-none d-lg-flex col-12 js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    {menu nodes=$menu.children}
    <div class="clearfix"></div> 
</div>
<div class="dropdownMenuDesktop" id="sl" align="center">
    <h2 class="title-sc">{l s='Select a vehicle' d='Shop.Theme.Actions'}</h2>
    <div class="clearFilter_button" style="width: 188px;   margin-bottom: 33px;   text-transform: uppercase;">
      {l s='CLEAR FILTER' d='Shop.Theme.Actions'}
    </div>
    <div>
      <img src="/img/103.png" style="width: 70px;height:70px"/>
    </div>
  </div>

{/if}
{if $language.iso_code == 'es'}
   {assign var="newss" value="/es/nuevos-productos"}
   {assign var="bbrand" value="/es/marcas"}
{elseif $language.iso_code == 'fr'}
   {assign var="newss" value="/fr/nouveaux-produits"}
   {assign var="bbrand" value="/fr/marques"}
{else}
   {assign var="newss" value="/en/new-products"}
   {assign var="bbrand" value="/en/brands"}
{/if}
{if Context::getContext()->isMobile() == 1}
{if $page.page_name == 'index'}
<div class="menu-mobile d-lg-none" style="background-color: #595959;   padding: 13px 16px 0px 16px;   margin-bottom: -18px;">
  <div class="col-12 p-0 image-box" style="margin-bottom:1rem;border:1px solid #fff;">
    <div onclick="openCarsMenu()" style="cursor: pointer;">
      <img src="/img/yourcar_{$language.iso_code}.webp" style="width: 100%;border-radius:5px;"/>
    </div>
  </div>
  <div class="dropdownMenuMobile">
    <div class="clearFilter_button" style="text-transform: uppercase;">
      {l s='CLEAR FILTER' d='Shop.Theme.Actions'}
    </div>
    <div>
      <img src="/img/103.png" style="width: 70px;height:70px"/>
    </div>
  </div>
  <div class="col-12 d-flex p-0" style="margin-bottom: 1rem;gap:1rem">
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <a href="{$newss}">
    <img src="/img/news_{$language.iso_code}.webp" style="width: 100%;border-radius:5px;"/>
    </a>
    </div>
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <a href="{$bbrand}">
    <img src="/img/brands_{$language.iso_code}.webp" style="width: 100%;border-radius:5px;"/>
    </a>
    </div>
  </div>
</div>
<script>
function openCarsMenu() {
  const dropdownMenuMobile = document.querySelector(".dropdownMenuMobile")
  if(dropdownMenuMobile){
  dropdownMenuMobile.classList.toggle("show")
  }
}
</script>
{/if}
{/if}