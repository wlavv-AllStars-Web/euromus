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
<style>
@media (min-width: 900px){
  .deformula{
    display: none;
  }
}
</style>
{function name="menu" nodes=[] depth=0 parent=null}
  {if $nodes|count}
    <ul style="width:100%" class="top-menu" {if $depth == 0}id="top-menu" {/if} data-depth="{$depth}">
      {foreach from=$nodes item=node}
        <li style="width: 25%; " class="mxsz {$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
          {assign var=_counter value=$_counter+1}
          <a style="color: white; text-align:center; padding-top: 6px; font-size: 16px; font-weight: 600" class="bortextalign {if $depth >= 0}dropdown-item{/if}{if $depth === 1} dropdown-submenu{/if}"
            href="{$node.url}" data-depth="{$depth}" {if $node.open_in_new_window} target="_blank" {/if}>
            {if $node.children|count}
              {* Cannot use page identifier as we can have the same page several times *}
              {assign var=_expand_id value=10|mt_rand:100000}
              <span class="float-xs-right hidden-md-up">
                <span data-target="#top_sub_menu_{$_expand_id}" data-toggle="collapse" class="navbar-toggler collapse-icons">
                  <i class="material-icons add">&#xE313;</i>
                  <i class="material-icons remove">&#xE316;</i>
                </span>
              </span>
            {/if}
            {$node.label}
          </a>
          {if $node.children|count}
            <div {if $depth === 0} class="popover sub-menu js-sub-menu collapse" {else} class="collapse" {/if}
              id="top_sub_menu_{$_expand_id}">
              {menu nodes=$node.children depth=$node.depth parent=$node}
            </div>
          {/if}
        </li>
      {/foreach}
    </ul>
  {/if}
{/function}

<div style="width: 90vw;" class="menu js-top-menu position-static formula " id="_desktop_top_menu_desktop">
    {menu nodes=$menu.children}
    <div class="clearfix"></div>
</div>


<div style="width: 100%;" class="deformula ">
  <div style=" display:flex; flex-direction:column; padding-left: 0" class="menu js-top-menu position-static " id="_desktop_top_mobile">
    <button style="display: flex;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#_desktop_top_menu" aria-controls="_desktop_top_menu" aria-expanded="false" aria-label="Toggle mobile menu">
      <i style="color: white; float:left; font-size:xx-large;" class="material-icons">&#xE5D2;</i>
    </button>

    <div style="margin: 0; width: 70vw;" class="js-top-menu collapse navbar-collapse" id="_desktop_top_menu">
      {menu nodes=$menu.children}
      <div class="clearfix"></div>
    </div>
  </div>
</div>