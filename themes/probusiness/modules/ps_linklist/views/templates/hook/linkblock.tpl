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
    font-weight: 600;
    font-size: 16px !important;
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
<div style="padding: 20px 5.5rem 0 5.5rem;" class="col-xs-12 col-sm-10 col-md-12 links footer_linklist alignment bigalign">
  <div class="row alignment ">
    {foreach $linkBlocks as $linkBlock key=key}
      {if $key == 0}
        <div class="col-lg-2 col-md-6 col-sm-10 wrapper">
      {elseif $key == 1}
        <div class="col-lg-2 col-md-6 col-sm-10 wrapper">
      {elseif $key == 2}
        <div class="col-lg-3 col-md-6 col-sm-10 wrapper">
      {/if}

        {assign var=_expand_id value=10|mt_rand:100000}
        <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_{$_expand_id|escape:'html':'UTF-8'}"
          data-toggle="collapse">
          <span class="text h3" onclick="$('#footer_sub_menu_{$_expand_id|escape:'html':'UTF-8'}').toggle('slow')">{$linkBlock.title|escape:'html':'UTF-8'}</span>
          <span class="pull-xs-right">
            
          </span>
        </div>
        <ul id="footer_sub_menu_{$_expand_id|escape:'html':'UTF-8'}" class="collapse">
          {foreach $linkBlock.links as $link}
            
            {* <pre>{$linkBlock|print_r}</pre> *}
            <li style="list-style-type: none !important;display:flex;align-items:center;gap: 0.25rem;">
              {if $link.title == "Facebook"}
                <img class="left_icon_footer" src="/img/asd/facebook.svg" width="24" height="24" alt="facebook">
              {elseif $link.title == "Instagram"}
                <img class="left_icon_footer" src="/img/asd/instagram.svg" width="24" height="24" alt="instagram">
              {else}
                <img class="left_icon_footer" src="/img/asd/ASD_footer_ima.png" alt="Star" width="25" height="25">
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
    <div class="col-lg-4 col-md-6 col-sm-10 wrapper">
      <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_4"
        data-toggle="collapse">
        <span class="text h3">{l s="Contacts"}</span>
      </div>
      <ul id="footer_sub_menu_4" class="collapse">
        <li>
          {* <a target="_blank" href="{$homepage_footer['link_footer']}">
            <img src="/img/asd/Events/main_250x100.webp?{rand()}" width="250" height="100"
              title="{$homepage_footer['alt_footer']}" id="footer_event_image"
              style="max-width: 200px;max-height: 80px;" class="img-responsive">
          </a> *}
          <div><img class="left_icon_footer" src="/img/asd/location.png" width="24" height="24" alt="location"></i>Z.I Gandra, 4930-311 Valença,Portugal</div>
        </li>
        <li>
          <div><img class="left_icon_footer" src="/img/asd/phone.png" width="24" height="24" alt="phone"></i>+351 251 096 251</div>
        </li>
        <li>
          <div><img class="left_icon_footer" src="/img/asd/email.png" width="24" height="24" alt="email"></i>sales@all-stars-distribution.com</div>
        </li>
      </ul>
    </div>
   
  </div>
</div>
<style>
  .alignment{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 100%;
  }

  #footer_sub_menu_4{
    display: flex;
    align-items: start;
  }
  #footer_sub_menu_4 li{
    height: 27px;
  }
  #footer_sub_menu_4 li div{
    font-size: 16px;
    line-height: 18px;
    font-weight: 600;
    text-transform: uppercase;
    display: flex;
    gap: 0.25rem;
    align-items: center;
    text-wrap: nowrap;
  }

  #footer_sub_menu_4 img {
    padding: 1px;
  }

  @media screen and (max-width: 1057px){
    .alignment li a {
      font-size: 14px !important;
    }
    #footer_sub_menu_4 li div{
      font-size: 14px;
    }
  }

  @media screen and (max-width: 767px){
    .alignment li a {
      font-size: 16px !important;
    }
    #footer_sub_menu_4 li div{
      font-size: 16px;
    }
  }
  @media screen and (max-width: 544px){
    .alignment {
      flex-direction: column;
    }
    .alignment li a {
      font-size: 16px !important;
    }
    #footer_sub_menu_4.collapse{
      display: none;
    }
    #footer_sub_menu_4.collapse.in{
      display: block;
    }
    #footer_sub_menu_4 li{
      padding: 1rem 0;
    }
    #footer_sub_menu_4 li div{
      font-size: 16px;
      text-wrap:wrap;
    }
  }
</style>