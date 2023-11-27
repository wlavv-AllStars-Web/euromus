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
  .text {
    color: white !important;
    text-transform: uppercase;
    font-weight: bold !important;
    font-size: 16px !important;
    font-family: "Open Sans", sans-serif;
  }

  .footer-container .links li a:before {
    display: none;
  }

  @media (max-width: 760px) {
    .alignment {
      width: 100%;
    }

    .bigalign {
      display: flex;
      flex-direction: row-reverse;


    }
  }

  .links.footer_linklist div.wrapper:nth-child(n+2) {
    display: unset;
  }
</style>
<div style="padding-top: 25px;" class="col-xs-12 col-sm-10 col-md-12 links footer_linklist alignment bigalign">
  <div class="row alignment ">
    {foreach $linkBlocks as $linkBlock}
      <div class="col-md-3 col-sm-10 wrapper">

        {assign var=_expand_id value=10|mt_rand:100000}
        <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_{$_expand_id|escape:'html':'UTF-8'}"
          data-toggle="collapse">
          <span class="text h3">{$linkBlock.title|escape:'html':'UTF-8'}</span>
          <span class="pull-xs-right">
            <span class="navbar-toggler collapse-icons">
              <i class="material-icons material-icons-add add"></i>
              <i class="material-icons material-icons-remove remove"></i>
            </span>
          </span>
        </div>
        <ul id="footer_sub_menu_{$_expand_id|escape:'html':'UTF-8'}" class="collapse">
          {foreach $linkBlock.links as $link}

            <li style="list-style-type: none !important;">
              {if $link.title == "Facebook"}
                <i style="font-size:large; margin-right: 5px; margin-left: 5px"
                  class="footer_link_list_a fa fa-facebook-square"></i>
              {elseif $link.title == "Instagram"}
                <i style="font-size:large; margin-right: 5px; margin-left: 5px"
                  class="footer_link_list_a fa fa-instagram "></i>
              {else}
                <img class="left_icon_footer" src="/img/ASD_footer_ima.png" alt="Star">
              {/if}
              <a id="{$link.id|escape:'html':'UTF-8'}-{$linkBlock.id|escape:'html':'UTF-8'}"
                class="text {$link.class|escape:'html':'UTF-8'}" href="{$link.url|escape:'html':'UTF-8'}"
                title="{$link.description|escape:'html':'UTF-8'}">
                {$link.title|escape:'html':'UTF-8'}
              </a>
            </li>
          {/foreach}
        </ul>

      </div>
    {/foreach}
    <div class="col-md-3 col-sm-10 wrapper">
      <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_4"
        data-toggle="collapse">
        <span class="text h3">{l s="Event"}</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons material-icons-add add"></i>
            <i class="material-icons material-icons-remove remove"></i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_4" class="collapse">
        <li>
          <a target="_blank" href="{$homepage_footer['link_footer']}">
            <img src="/img/media_images/Events/main_250x100.webp?updated={rand()}"
              title="{$homepage_footer['alt_footer']}" id="footer_event_image"
              style="max-width: 200px;max-height: 80px;" class="img-responsive">
          </a>
        </li>
      </ul>
    </div>
    {*       <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12 event_div">
        <div class="footer_title hidden-sm-down">{l s='Event'}</div>
        <div class="footer_title hidden-md-up" onclick="$('#block_4').toggle('slow')">{l s='Event'}</div> 
      </div> *}
  </div>
</div>