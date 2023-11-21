{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      <ul class="top-menu" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}">
        {foreach from=$nodes item=node}
            <li class="{$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
            {assign var=_counter value=$_counter+1}
              <a
                class="{if $depth >= 0}dropdown-item{/if}{if $depth === 1} dropdown-submenu{/if}"
                href="{$node.url}" data-depth="{$depth}"
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
<div class="menu-mobile d-lg-none ">
  <div class="col-12 p-0 image-box" style="margin-bottom:1rem;border:1px solid #fff;">
    <div onclick="openCarsMenu()">
      <img src="/img/yourcar_es.webp" style="width: 100%;border-radius:5px;"/>
    </div>
  </div>
  <div class="dropdownMenuMobile">
    <div class="clearFilter_button">
      CLEAR FILTER
    </div>
    <div>
      <img src="/img/103.png" style="width: 70px;height:70px"/>
    </div>
  </div>
  <div class="col-12 d-flex p-0" style="margin-bottom: 1rem;gap:1rem">
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <img src="/img/news_es.webp" style="width: 100%;border-radius:5px;"/>
    </div>
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <img src="/img/brands_es.webp" style="width: 100%;border-radius:5px;"/>
    </div>
  </div>
</div>
<script>
function openCarsMenu() {
  const dropdownMenuMobile = document.querySelector(".dropdownMenuMobile")
  dropdownMenuMobile.classList.toggle("show")
}
</script>

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

#_desktop_top_menu{
  position: relative !important;
  z-index: 2;
  padding: 0;
  border-bottom: 2px solid #fff;
}
#top-menu {
  display: flex;
  justify-content: space-evenly;
  margin: 0;
  width: 100%;

}
#top-menu li{
  flex: 1;
  text-transform: uppercase;
  text-align: center;

}
#top-menu li a{
  color: #fff;
}
#top-menu li a:hover{
  color: #000000;
}
#top-menu li:hover{
  background: #fff;
  color: #000000;
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
</style>