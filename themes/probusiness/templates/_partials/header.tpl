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
{* {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'layouthome2'}
    {include file='_partials/header/header2.tpl'}
{else if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'layouthome3'}
    {include file='_partials/header/header3.tpl'}
{else} *}
<style>
.whtbl{
  background-color: white;
  color:#0273eb;
  border: 1px solid #d8d8d8;
}
.form-control:focus {
    color: black;
    border-color: black;
    outline: 0;
}
</style>
<div class="header_content">
{block name='header_nav'}
  <nav style="background-color: #333333; display: flex; justify-content: center " class="header-nav">
    <div style="width: 80%; display: flex; justify-content : end ">
      {hook h='displayNav1'}
    </div>
            {*
             <div class="left-nav">
              {hook h='ybcCustom4'}
            </div> 
            
           <div class="toogle_nav_button">
                <span class="toogle_nav">
                    <i class="fa fa-cog"></i>
                    
                    {l s='Settings' d='Shop.Theme.Action'}
                </span>
                <div class="toogle_nav_content">
                   {hook h='displayNav2'}
                </div>
            </div> 
             <div class="ybc_myaccout">
                <div class="toogle_user">
                    <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='My account' d='Shop.Theme.Actions'}" rel="nofollow" >
                        <i class="fa fa-user"></i>
                        <span>{l s='Account' d='Shop.Theme.Actions'}</span>
                    </a>
                </div>
            </div> 

            {if $customer.is_logged}
              <a class="logout userinfor" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" >
                <i class="fa fa-unlock"></i>
                {l s='Sign out' d='Shop.Theme.Actions'}
              </a>
            {else}
              <a class="login userinfor" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='Log in to your customer account' d='Shop.Theme.Actions'}" rel="nofollow" >
                <i class="fa fa-key"></i>
                <span>{l s='Sign in' d='Shop.Theme.Actions'}</span>
              </a>
            {/if}*}  
      
    
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div style="padding: 0" class="container">
       <div style="margin:0;  display: flex; align-items: center;" class="row">
        <div style="margin-top: 0px;" id="_desktop_logo" class="col-md-4">
          <a href="{$urls.base_url|escape:'html':'UTF-8'}">
            <img style="height: 200px;" class="logo img-fluid" src="{if isset($tc_dev_mode) && $tc_dev_mode && isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}" alt="{$shop.name|escape:'html':'UTF-8'}">
          </a>
        </div>
       
        <div class="col-md-9" style="display: flex; ">
          <form style="display:flex; flex-direction: row ; justify-content:space-around; width: -webkit-fill-available;">
            <div style="display:flex; width:30%" class="form-group col">
            <i class="fa fa-user" style="font-size: 25px; padding: 5px 7px; background-color: #0273eb; color: white"></i>
              <input type="text" class="form-control whtbl" id="username" placeholder="Enter your username">
            </div>
            <div style="display: flex; width: 30%" class="form-group col">
            <i class="fa fa-user" style="font-size: 25px; padding: 5px 7px;  background-color: #0273eb; color: white "></i>
              <input type="password" class="form-control whtbl" id="password" placeholder="Enter your password">
            </div>
            <div style="width: 30%" class="form-group col" >
              <button style=" width: -webkit-fill-available; " type="submit" class="btn whtbl">Login</button>
            </div>
          </form>
        </div>
       
       {*  {hook h='displayNav1'}
        {hook h='displayTop'} *}
      </div>
    </div>
  </div>
  {*
  {hook h='displayNavFullWidth'}
  {hook h='displayMegaMenu'} *}
{/block}
</div>

{* {if $page.page_name == 'index'}
    <div id="slider_row">
        <div id="top_column" class="container">
            <div id="ybc-nivo-slider-wrapper" class="theme-default">
                {hook h='displayMLS'}
            </div>
            {hook h='displaytopcolumn'}
        </div>
    </div>
{/if} 
{/if} *}
