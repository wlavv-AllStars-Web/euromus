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
.logtext{
 
 text-transform: uppercase;
 font-size: 18px;
 font-weight: 600;

}

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
.linkref{
    color: #FFF;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
    width: 100%;
    display: block;
    line-height: 50px;
    cursor: pointer;
}
.headerline{
  width: 100%;
  margin: 0 ;
  background-color:#333333;
  line-height: 45px; 
  text-align: center; 
  border-bottom: 4px solid #0273eb;
  display: flex ;
  justify-content: center;
 
}

.headerline a:hover{
  color: #FFF !important;
  background-color: #0273eb;
}

@media (min-width: 900px){
  
  .margbot{
    margin-bottom: -5px;
  }
}

@media (max-width: 900px){

  .formula{
    display: none !important;
  }
  .centrar{
    justify-content: center;
  }
  .img-big{
    max-width: 100vw !important;
    height: 130px;
    width: 350px;
  }

  .bortextalign{
    text-align: start !important;
    border-top: 1px solid gray;
    
  }

  .mxsz{
    width: 100vw !important;
  }

  .hlfsz{
    justify-content: space-between;
  }
 
}
</style>
<div class="header_content">
  {block name='header_nav'}
    <nav style="background-color: #333333; display: flex; justify-content: center " class="header-nav">
      <div style="width: 80%; display: flex; justify-content : end ">
        {hook h='displayNav1'}
      </div>
    </nav>
  {/block}
  
  {block name='header_top'}
    <div class="header-top">
      <div style="padding-bottom: 15px; width: 90vw !important; max-width: 90vw !important" class="container">
        <div style="margin:0;  display: flex; align-items: center;" class="row centrar">
          <div style="margin: 0; padding: 0; width:30%" id="_desktop_logo" class="col-md-4 col-sm-12">
            <a style="display: flex; justify-content:center" href="{$urls.base_url|escape:'html':'UTF-8'}">
              <img style="width: 250px; margin: 0 " class="logo img-flud img-big" src="{if isset($tc_dev_mode) && $tc_dev_mode && isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}" alt="{$shop.name|escape:'html':'UTF-8'}">
            </a>
          </div>
          <div  class=" formula" style="display: flex; width: 100% ; justify-content:center; margin-left: 50px; width:70%">
            <form style="display:flex; flex-direction: row ; justify-content:space-around; width: -webkit-fill-available;" id="login-form" action="{block name='login_form_actionurl'}{$action|escape:'html':'UTF-8'}{/block}" method="post">
              <div style="display:flex; width:30%; height: min-content;" class="form-group col">
                <i class="fa fa-user" style="font-size: 25px; padding: 5px 7px; background-color: #0273eb; color: white"></i>
                <input type="text" class="form-control whtbl" id="username" placeholder="{l s="Enter your username"}">
                
              </div>
              <div style="margin-bottom:0 ;  display: flex; flex-direction: column ; width: 30%" class="form-group col">
                <div style="display:flex; flex-direction: row">
                  <i class="fa fa-unlock" style="font-size: 25px; padding: 5px 7px;  background-color: #0273eb; color: white "></i>
                  <input type="password" class="form-control whtbl" id="password" placeholder="{l s="Enter your password"}">
                </div>
                <div>
                  {hook h='displayPaCaptcha' posTo='login'}
                  <a href="{$urls.pages.password|escape:'html':'UTF-8'}" rel="nofollow" style="color: #0273EB">
                    {l s='Forgot your password?' d='Shop.Theme.Actions'}
                  </a>
                </div>



              </div>
              <div style="width: 30%" class="form-group col" >
                <button style=" width: -webkit-fill-available; " type="submit" class="btn whtbl">{l s="Login"}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div style="padding-left: 0; line-height: normal"  class="row headerline alinhamento-mobile hlfsz">
        <div class="margbot">
            {hook h='displayNav2'}
        </div>
        {* Login Dropdown Menu *}
        <div style="text-align: end; padding-top: 12px" id="_desktop_user_info" class="deformula mxsz">
          <div>
            {if $logged}
              <a style="margin-right: 20px; color: white" class="logout" href="{$logout_url|escape:'html':'UTF-8'}" rel="nofollow" >
                <i class="fa fa-unlock"></i>
                {l s='Sign out' d='Shop.Theme.Actions'}
              </a>
            {else}
              <a style="margin-right: 20px; color: white" title="{l s='Log in to your customer account' d='Shop.Theme.Actions'}" rel="nofollow" >
                <span class="logtext">{l s='Login' d='Shop.Theme.Actions'}</span>
              </a>
            {/if}
          </div>
          <div>
            {hook h="displayTop"}
          </div>
        </div>


      </div>    
    </div>
  {/block}
</div>


