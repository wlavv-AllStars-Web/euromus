{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="block_myaccount_infos" class="links wrapper">
  <h3 class="myaccount-title hidden-sm-down" style="margin: 0;">
    <a class="text-uppercase" href="{$urls.pages.my_account}" rel="nofollow">
    <span style="color: #fff;font-size:14px;font-weight:600;"><i class="icon_profile" style="font-size: 16px;"></i>{l s='Your account' d='Shop.Theme.CustomerAccount'}
    </span>
  
    </a>
  </h3>
  <div class="title clearfix hidden-xs-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">{l s='Your account' d='Shop.Theme.CustomerAccount'}</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
         <i class="material-icons add">expand_more</i>
         <i class="material-icons remove">expand_less</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
        <li>
            <a href="{$link->getPageLink('my-account', true)}" title="{l s='my account' d='Shop.Theme.CustomerAccount'}"> {l s='My account' d='Shop.Theme.CustomerAccount'}</a>
        </li>
    {foreach from=$my_account_urls item=my_account_url}
        <li>
          <a href="{$my_account_url.url}" title="{$my_account_url.title}" rel="nofollow">
            {$my_account_url.title}
          </a>
        </li>
    {/foreach}
   
    {*hook h='displayMyAccountBlock'*}
	</ul>
</div>
