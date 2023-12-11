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

.cart_total_header {
  width: calc(100% - 70px);
  background-color: #FFFFFF;
  float: left;
  height: 35px;
  border-top: 1px solid #777;
  border-bottom: 1px solid #777;
  text-align: center;
  color: #333;
  font-size: 22px;
  padding: 5px 8px;
}

#searchbox #search_query_top {
  margin: 0px;
  height: 34px;
  line-height: 20px;
  background: none;
  padding: 0 0 0px 12px;
  width: 100%;
  position: relative;
  vertical-align: middle;
  border: none;
  box-shadow: none;
  outline: none;
  -webkit-tap-highlight-color: transparent;
  -webkit-user-modify: read-write-plaintext-only;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}


#searchbox .btn.button-search {
  background: #0273EB;
  color: white;
  -moz-box-shadow: inset 0 3px 4px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: inset 0 3px 4px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 3px 4px rgba(0, 0, 0, 0.1);
  -moz-border-radius: 0 20px 20px 0;
  -webkit-border-radius: 0;
  border-radius: 0 20px 20px 0;
  display: block;
  width: 37px;
  height: 34px;
  text-align: center;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  padding: 0;
  border: none;
}

#navigation > a > i {
    font-size: 20px;
    color: white;
    line-height: 22px;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#sender:hover{
  color: white !important;
  background-color: #0273EB !important;
  font-weight: 600;
}

@media (max-width: 1200px){
  .wdth{
    width: 80% !important;
  }

  .wdth .cart_total_header{
    width: 65% !important;
  }

  .wdth .search_query{
    width:65% !important;
  }  
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
      <div  style="width: 80%; display: flex;">
        <div id="navigation" style="width: 50%; display: flex; justify-content: start; align-self: self-end">
        {if Context::getContext()->customer->logged}
          <a class="logout" href="/?mylogout=" rel="nofollow" title="Log me out"> <i class="fa fa-unlock"></i> </a>
        {/if}
        </div>
        <div style="width: 50%; display: flex; justify-content: end ;">
          {hook h='displayNav1'}
        </div>
    </nav>
  {/block}
  
  {block name='header_top'}
    <div class="header-top">
      <div style="padding-bottom: 15px;max-width: 1337px !important; width: 90vw !important; " class="container">
        <div style="margin:0;  display: flex; align-items: center;" class="row centrar">
          <div style="margin: 0; padding: 0; width:30%" id="_desktop_logo" class="col-md-4 col-sm-12">
            <a style="display: flex; justify-content:center" href="{$urls.base_url|escape:'html':'UTF-8'}">
              <img style="width: 250px; margin: 0 " class="logo img-flud img-big" src="{if isset($tc_dev_mode) && $tc_dev_mode && isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}" alt="{$shop.name|escape:'html':'UTF-8'}">
            </a>
          </div>
          <div  class=" formula" style="display: flex; justify-content:center; margin-left: 50px; width:70%">
           {if Context::getContext()->customer->logged}  
            {* shooping cart bar*}
            <div class="wdth" style="width: 50%;">
            <a href="/order">
              <div  style="cursor: pointer; width: 100%">
                <div style=" display: flex; flex-direction: row; justify-content:center" class="cart-container ">
                  <div style="width:33px; background-color: #0273eb;float: left;border-radius: 20px 0 0 20px;border: 1px solid #777; color: white;"> 
                    <i class="fa fa-shopping-cart" style="font-size: 21px; padding: 6px 6px;"></i>
                  </div>
                  <div style="width:40%; height:35px; border: 1px solid #777" class="cart_total_header"> {l s="Total"} <span class="productsValue">{$cart.totals.total_excluding_tax.value}</span></div>
                  <div class="products_total_header">
                    <div style="width:33px; height:35px; background-color: #0273eb;float: left;border-radius: 0px 20px 20px 0px;border: 1px solid #777; color: white; font-size: 20px; padding: 4px 5px 4px 5px;text-align:center;" >{$cart.products_count}</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            {* search bar *}
            <div class="wdth" style="width: 50%">
              <form style="display:flex; justify-content:center" method="get" action="{$search_controller_url|escape:'html':'UTF-8'}" id="searchbox">
    		        <input type="hidden" name="controller" value="search">
    		        <input style="border: 1px solid #777; width:50%; border-radius: 20px 0px 0px 20px;" class="search_query form-control" type="text" id="search_query_top" name="s" value="{$search_string|escape:'html':'UTF-8'}" placeholder="{l s='Search' d='Shop.Theme.Catalog'}">
    		        <button type="submit" name="submit_search" class="btn btn-default button-search">
    			        <i class="material-icons material-icons-search"></i>
    		        </button>
    	        </form>
            </div>
            
             {else} 

            <form style="display:flex; flex-direction: row ; justify-content:space-around; width:100%; gap:20px" id="login-form" action="/login" method="post">   
                <div style="display:flex; width:30%; height: min-content;" class="form-group col">
                <input type="hidden" name="back" value="my-account">
                  <i class="fa fa-user" style="font-size: 25px; padding: 5px 7px; background-color: #0273eb; color: white"></i>
                  <input class="form-control whtbl" name="email" type="email" value="" required placeholder="{l s="Email"}">
                </div>
                <div style="margin-bottom:0 ;  display: flex; flex-direction: column ; width: 30%" class="form-group col">
                  <div style="display:flex; flex-direction: row">
                    <i class="fa fa-unlock" style="font-size: 25px; padding: 5px 7px;  background-color: #0273eb; color: white "></i>
                    <input class="form-control js-child-focus js-visible-password whtbl" name="password" type="password" value="" required placeholder="{l s="Password"}">                 
                  </div>
                  <div>
                    <a href="/forgotpassword" rel="nofollow" style="color: #0273EB">
                      {l s='Forgot your password?' d='Shop.Theme.Actions'}
                    </a>
                  </div>
                </div>             
                <div style="width: 50%" class="form-group col" >
                  <input type="hidden" name="submitLogin" value="1">           
                  <button id="sender" style=" width: 50%; " class="btn btn-primary form-control-submit whtbl" data-link-action="sign-in" type="submit">
                  {l s="Login"}
                  </button>                
                </div>          
              </form>   
           {/if}  
          </div>
        </div>
      </div>
      <div style="padding-left: 0; line-height: normal"  class="row headerline alinhamento-mobile hlfsz">
        <div class="margbot">
            {hook h='displayNav2'}
        </div>
      </div>    
    </div>
  {/block}
</div>


