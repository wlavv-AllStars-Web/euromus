{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}

{block name='page_title'}
  {l s='Your account' d='Shop.Theme.CustomerAccount'}
{/block}

{block name='page_content'}

  <p>{l s='Welcome to your account. Here you can manage all of your personal information and orders.' d='Shop.Theme.CustomerAccount'}</p>
  <div class="row">
    <div class="links">

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="identity-link" href="{$urls.pages.identity}">
        <span class="link-item">
          <i class="material-icons">&#xE853;</i>
          {l s='Information' d='Shop.Theme.CustomerAccount'}
        </span>
      </a>

      {if $customer.addresses|count}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="addresses-link" href="{$urls.pages.addresses}">
          <span class="link-item">
            <i class="fa-solid fa-house"></i>
            {l s='My Addresses' d='Shop.Theme.CustomerAccount'}
          </span>
        </a>
      {else}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="address-link" href="{$urls.pages.address}">
          <span class="link-item">
            <i class="fa-solid fa-house"></i>
            {l s='Add first address' d='Shop.Theme.CustomerAccount'}
          </span>
        </a>
      {/if}

      {if !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="history-link" href="{$urls.pages.history}">
          <span class="link-item">
            <i class="fa-solid fa-list"></i>
            {l s='Order history and details' d='Shop.Theme.CustomerAccount'}
          </span>
        </a>
      {/if}

      {if !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="order-slips-link" href="{$urls.pages.order_slip}">
          <span class="link-item">
            <i class="material-icons">&#xE8B0;</i>
            {l s='Credit slips' d='Shop.Theme.CustomerAccount'}
          </span>
        </a>
      {/if}

      {if $configuration.voucher_enabled && !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="discounts-link" href="{$urls.pages.discount}">
          <span class="link-item">
            <i class="material-icons">&#xE54E;</i>
            {l s='Vouchers' d='Shop.Theme.CustomerAccount'}
          </span>
        </a>
      {/if}

      {if $configuration.return_enabled && !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="returns-link" href="{$urls.pages.order_follow}">
          <span class="link-item">
            <i class="material-icons">&#xE860;</i>
            {l s='Merchandise returns' d='Shop.Theme.CustomerAccount'}
          </span>
        </a>
      {/if}

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="identity-link" href="{$urls.pages.identity}">
        <span class="link-item">
          <i class="fa-solid fa-car"></i>
          {l s='My Cars' d='Shop.Theme.CustomerAccount'}
        </span>
      </a>

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-6" id="identity-link" href="{$logout_url}">
        <span class="link-item">
          <i class="fa-solid fa-lock"></i>
          {l s='Logout' d='Shop.Theme.CustomerAccount'}
        </span>
      </a>

      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 d-flex">
      
      <div class="tvaNumber" style="display: flex;flex-direction: column;margin-bottom: 1.875rem !important;justify-content: center;padding:0 1rem;
      align-items: center;
      box-shadow: 2px 2px 11px 0px rgba(0, 0, 0, 0.1);width:100%;">
        <h3>{l s='TVA number (Only for companies)' d='Shop.Theme.CustomerAccount'} :</h3>
        <div class="input-group" style="display:flex;flex-wrap: nowrap;padding-left: 0px;padding-right:0px;">
          <input type="text" class="form-control" placeholder="TVA number" aria-label="TVA number" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button">{l s='Save' d='Shop.Theme.CustomerAccount'}</button>
          </div>
        </div>
        <small style="text-align: start;">{l s='(Ex: FR99999999999 / GR999999999)' d='Shop.Theme.CustomerAccount'}</small>
      </div>
      </div>
      

      {block name='display_customer_account'}
        {hook h='displayCustomerAccount'}
      {/block}

      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="display:flex;justify-content:center;align-items:center;margin-bottom: 1.875rem;">
        <button type="button" class="btn btn-outline-danger" style="width: 200px;height:60px">{l s='Back to homepage' d='Shop.Theme.CustomerAccount'}</button>
      </div>

    </div>
  </div>
 
{/block}


{block name='page_footer'}
  {block name='my_account_links'}
    <div class="text-xs-center">
      <a href="{$logout_url}" >
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
    </div>
  {/block}
{/block}

