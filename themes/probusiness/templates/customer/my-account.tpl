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
{extends file='customer/page.tpl'}

{* {block name='page_title'}
  {l s='Your account' d='Shop.Theme.Actions'}
{/block} *}

{block name='page_content'}
  <div class="row myaccount-container">
    <div class="col-lg-12 banner-myaccount">
      <img src="https://www.allstarsmotorsport.fr/img/cms/Header_pages/myaccount.jpg" />
    </div>


    <div class="col-lg-12">
    <ul class="nav nav-tabs" id="menu-client" role="tablist" style="display: flex;align-items:center;background-color: #f7f7f7; border: 1px solid #d8d8d8; height: 55px;margin-top: 20px;">
      {* <li class="nav-item" style="border-left: 0px solid #d8d8d8;">
        <a class="nav-link active" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="true" style="display: flex;padding:0.5rem 1rem;background-color: #f7f7f7;">
          <i class="fa fa-exclamation-triangle website_blue font-size-40"></i> 
        </a>
      </li> *}
      <li class="nav-item">
        <a class="nav-link active" id="order_history-tab" data-toggle="tab" href="#order_history" role="tab" aria-controls="order_history" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-list-ol website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-dashboard website_blue font-size-40"></i></a>
      </li>
      
      {* <li class="nav-item">
        <a class="nav-link" id="stats-tab" data-toggle="tab" href="#stats" role="tab" aria-controls="stats" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-bar-chart-o website_blue font-size-40"></i></a>
      </li> *}
      <li class="nav-item">
        <a class="nav-link" id="addresses-tab" data-toggle="tab" href="#addresses" role="tab" aria-controls="addresses" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-building website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-truck website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-user website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item" style="width: 100%;display:flex;justify-content: end;">
        <a class="nav-link" id="logout-tab"  href="/?mylogout="><i class="fa-solid fa-lock-open"></i></a>
      </li>
    </ul>


    <div class="tab-content" id="myTabContent">
      {* <div class="tab-pane fade " id="messages" role="tabpanel" aria-labelledby="messages-tab">
          {include file='customer/_partials/order-messages.tpl'}
      </div> *}
      <div class="tab-pane  show active" id="order_history" role="tabpanel" aria-labelledby="order_history-tab">
        <h1>Order history</h1>

        {* {include file="customer/statistics_counters.tpl"} *}

        {if $orders}
          <table class="table table-striped table-bordered table-labeled hidden-sm-down">
            <thead class="thead-default">
              <tr>
                <th>{l s='Order reference' d='Shop.Theme.Checkout'}</th>
                <th>{l s='Date' d='Shop.Theme.Checkout'}</th>
                <th>{l s='Total price' d='Shop.Theme.Checkout'}</th>
                <th class="hidden-md-down">{l s='Payment' d='Shop.Theme.Checkout'}</th>
                <th class="hidden-md-down">{l s='Status' d='Shop.Theme.Checkout'}</th>
                <th>{l s='Invoice' d='Shop.Theme.Checkout'}</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$orders item=order}
                <tr>
                  <th scope="row">{$order.details.reference|escape:'html':'UTF-8'}</th>
                  <td>{$order.details.order_date|escape:'html':'UTF-8'}</td>
                  <td class="text-xs-right">{$order.totals.total.value|escape:'html':'UTF-8'}</td>
                  <td class="hidden-md-down">{$order.details.payment|escape:'html':'UTF-8'}</td>
                  <td>
                    <span
                      class="label label-pill {$order.history.current.contrast|escape:'html':'UTF-8'}"
                      style="background-color:{$order.history.current.color|escape:'html':'UTF-8'}"
                    >
                      {$order.history.current.ostate_name|escape:'html':'UTF-8'}
                    </span>
                  </td>
                  <td class="text-xs-center hidden-md-down">
                    {if $order.details.invoice_url}
                      <a href="{$order.details.invoice_url|escape:'html':'UTF-8'}"><i class="material-icons">&#xE415;</i></a>
                    {else}
                      -
                    {/if}
                  </td>
                  <td class="text-xs-center order-actions">
                    <a href="{$order.details.details_url|escape:'html':'UTF-8'}" data-link-action="view-order-details">
                      {l s='Details' d='Shop.Theme.Actions'}
                    </a>
                    {if $order.details.reorder_url}
                      <a href="{$order.details.reorder_url|escape:'html':'UTF-8'}">{l s='Reorder' d='Shop.Theme.Actions'}</a>
                    {/if}
                  </td>
                </tr>
              {/foreach}
            </tbody>
          </table>
      
          <div class="orders hidden-md-up">
            {foreach from=$orders item=order}
              <div class="order">
                <div class="row">
                  <div class="col-xs-10">
                    <a href="{$order.details.details_url|escape:'html':'UTF-8'}"><h3>{$order.details.reference|escape:'html':'UTF-8'}</h3></a>
                    <div class="date">{$order.details.order_date|escape:'html':'UTF-8'}</div>
                    <div class="total">{$order.totals.total.value|escape:'html':'UTF-8'}</div>
                    <div class="status">
                      <span
                        class="label label-pill {$order.history.current.contrast|escape:'html':'UTF-8'}"
                        style="background-color:{$order.history.current.color|escape:'html':'UTF-8'}"
                      >
                        {$order.history.current.ostate_name|escape:'html':'UTF-8'}
                      </span>
                    </div>
                  </div>
                  <div class="col-xs-2 text-xs-right">
                      <div>
                        <a href="{$order.details.details_url|escape:'html':'UTF-8'}" data-link-action="view-order-details" title="{l s='Details' d='Shop.Theme.Actions'}">
                          <i class="material-icons">&#xE8B6;</i>
                        </a>
                      </div>
                      {if $order.details.reorder_url}
                        <div>
                          <a href="{$order.details.reorder_url|escape:'html':'UTF-8'}" title="{l s='Reorder' d='Shop.Theme.Actions'}">
                            <i class="material-icons">&#xE863;</i>
                          </a>
                        </div>
                      {/if}
                  </div>
                </div>
              </div>
            {/foreach}
          </div>
      
        {/if}
      </div>

      <div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">  
        <div class="col-sm-12 text-center">
            <div class="row statistics_container" style="max-width: 1350px; margin: 0 auto;display:flex;">
              <div class="col-lg-5">
                    <div>{l s='Total purchases per month'}</div>
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <div class="col-lg-2"></div>
              <div class="col-lg-5">
                  <div>{l s='Total purchases by brand (€)'}</div>
                    <canvas id="chart-area" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>
      </div>



      {* <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab">...</div> *}
      <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
        {block name='page_title'}
          <h1>{l s='Your addresses' d='Shop.Theme.Actions'}</h1>
        {/block}
          <div class="row">
          {foreach $customer.addresses as $address}
            <div class="col-lg-4 col-md-6 col-sm-6" style="padding: 1rem 0;">
                {block name='customer_address'}
                  {include file='customer/_partials/block-address.tpl' address=$address}
                {/block}
            </div>
          {/foreach}
          </div>
          <div class="clearfix"></div>
          <div class="addresses-footer">
            <a class="btn btn-primary" href="{$urls.pages.address|escape:'html':'UTF-8'}" data-link-action="add-address">
              <span>{l s='Create new address' d='Shop.Theme.Actions'}</span>
            </a>
          </div>
      </div>

      <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
          <img src="https://www.allstarsmotorsport.fr/img/cms/Content_pages/shipping/ShipRates.jpg" style="max-width: 1000px;"/>
      </div>
      
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
        <div class="form-personal-info" style="padding-top: 2rem;">
          
          
          <form action="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" method="post" class="std">
              <div class="left-form-personal col-lg-6 col-xs-12">
                <div class="form-group col-lg-9">
                  <h1 style="text-align: center;">Your Personal Information</h1>
                  <p style="text-align: center;">Please be sure to update your personal information if changed.</p>
                </div>
                <div class="radio-btns-form-personal  col-lg-12">
                  <div class="form-check col-md-1 col-xs-6" style="text-align: center;">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                    Mr.
                    </label>
                  </div>
                  <div class="form-check  col-md-1 col-xs-6" style="text-align: center;">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                    Mrs.
                    </label>
                  </div>
                </div>

              {* <div class="form-row "> *}
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" value="{$smarty.post.firstname}">
                </div>
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" value="{$smarty.post.lastname}">
                </div>
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="{$smarty.post.email}">
                </div>
              <div class="form-row">
                <div class="form-group col-lg-12 col-md-2 col-xs-12">
                  <label>Date of Birth</label>
                </div>
                <div class="form-group col-lg-3 col-md-2 col-xs-4">
                  <select id="inputState" class="form-control">
                    <option selected>Day</option>
                    <option>...</option>
                    {foreach from=$days item=v}
                      <option value="{$v}" {if ($sl_day == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                    {/foreach}
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-2 col-xs-4">
                  <select id="inputState" class="form-control">
                    <option selected>Month</option>
                    <option>...</option>
                    {foreach from=$months key=k item=v}
                        <option value="{$k}" {if ($sl_month == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>
                    {/foreach}
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-2 col-xs-4">
                  <select id="inputState" class="form-control">
                    <option selected>Year</option>
                    <option>...</option>
                    {foreach from=$years item=v}
                        <option value="{$v}" {if ($sl_year == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                    {/foreach}
                  </select>
                </div>
              </div>
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="old_passwd ">Current Password</label>
                  <input type="password" class="form-control is_required validate" name="old_passwd" id="old_passwd" data-validate="isPasswd">
                </div>
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="passwd">New Password</label>
                  <input type="password" class="form-control is_required validate" name="passwd" id="passwd" data-validate="isPasswd">
                </div>
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="confirmation">New Password Confirmation</label>
                  <input type="password" class="form-control is_required validate" name="confirmation" id="confirmation" data-validate="isPasswd">
                </div>
                {* {if $newsletter} *}
                <div class="form-group col-lg-12 col-md-4 col-xs-12">
                  <div class="form-check col-md-12">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        <a href="https://www.all-stars-distribution.com/en/content/20-terms-and-conditions">Sign up for our newsletter!</a>
                      </label>
                    
                  </div>
                </div>
                {* {/if} *}
              {* </div> *}
            </div>
            {* </div>

            <div class="form-row company-info-personal" style="padding-top: 2rem;"> *}
            <div class="right-form-personal  col-lg-6 col-xs-12">
              <div class="form-group col-lg-12 col-md-4 col-xs-12" style="padding-top: 2rem;">
              <h1 style="text-align: center;">Your Company Information</h1>
              </div>
              {* </div>

              <div class="form-row "> *}
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="inputEmail4">Company Name</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-lg-9 col-md-4 col-xs-12">
                  <label for="inputPassword4">Vat Number</label>
                  <input type="text" class="form-control" id="inputPassword4">
                </div>
                
              {* </div>

              <div class="form-row"> *}
                <div class="form-group col-lg-12 col-md-4 col-xs-12" style="text-align: center;padding-bottom:2rem;">
                  <button class="btn btn-primary" type="submitIdentity" style="background:#0273eb;">Submit form</button>
                </div>
              {* </div>

              
              
              <div class="form-row"> *}
                <div class="form-group col-lg-12" style="padding-top: 2rem;">
                  <h1 class="page-subheading" style="text-align: center;">{l s='General Data Protection Regulation'}</h1>
                      
                  <div style="margin-top: 40px;text-align:center;">
                    <h4> {l s='Remove account'}  </h4>
                    <p>{l s='After the account has been removed you can not go back!.'}</p>
                    <button type="submit" name="removeIdentity" class="btn btn-default button button-medium">
                      <span>{l s='Remove Account'}<i class="icon-chevron-right right"></i></span>
                    </button>
                  </div>
                </div>
                  
                <div class="form-group col-lg-12" style="padding-top: 2rem;">
                  <div style="margin-top: 40px;text-align:center;">
                    <h4> {l s='Portability of personal data'}  </h4>
                    <p>{l s='Allows you to extract your personal data in a CSV document!.'}</p>	
                    <button type="submit" name="exportIdentity" class="btn btn-default button button-medium">
                      <span>{l s='Export personal data'}<i class="icon-chevron-right right"></i></span>
                    </button>
                  </div>
                </div>
              {* </div> *}
            </div>
            

            


            {* {hook h='displayCustomerAccount'} *}

            
          </form>
        </div>
        
      </div>

    </div>
    </div>


    

    



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    
      var myLineChart = new Chart(document.getElementById('myChart').getContext('2d'),
        {
            type: 'line',
            data: {
                    labels: [
                      {foreach from=$lastYearOrdersMonth item=month}
                        '{$month}',
                      {/foreach}
                    ],
                    datasets: [
                        {
                        data: [{foreach from=$lastYearOrdersTotal item=total key=key name=name}{$total},{/foreach}],
                        borderColor: '{$lastYearOrdersColor}',
                        backgroundColor: '{$lastYearOrdersColor}',
                        fill: false,
                        label: ' €',
                        }
                    ]
                },

        }
    );

    /** PIE CHART **/

	window.myPie = new Chart(document.getElementById('chart-area').getContext('2d'), 
	    {
    		type: 'pie',
    		data: {
    			datasets: [{
    				data: ['{foreach from=$ordersByBrand['totals'] item=totalbrand key=key name=name}{$totalbrand}{/foreach}'],
    				backgroundColor: ['{foreach from=$ordersByBrand['colors'] item=color key=key name=name}{$color}{/foreach}'],
    				label: 'Dataset 1'
    			}],
    			labels: ['{foreach from=$ordersByBrand['brands'] item=brand key=key name=name}{$brand}{/foreach}']
    		},
    		options: {
    			responsive: true
    		}
    	}
	);
    </script>


    {* <div class="links">

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="{$urls.pages.identity|escape:'html':'UTF-8'}">
        <span class="link-item">
          <i class="material-icons">&#xE853;</i>
          {l s='Information' d='Shop.Theme.Actions'}
        </span>
      </a>

      {if $customer.addresses|count}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="addresses-link" href="{$urls.pages.addresses|escape:'html':'UTF-8'}">
          <span class="link-item">
            <i class="material-icons">&#xE56A;</i>
            {l s='Addresses' d='Shop.Theme.Actions'}
          </span>
        </a>
      {else}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="address-link" href="{$urls.pages.address|escape:'html':'UTF-8'}">
          <span class="link-item">
            <i class="material-icons">&#xE567;</i>
            {l s='Add first address' d='Shop.Theme.Actions'}
          </span>
        </a>
      {/if}

      {if !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="history-link" href="{$urls.pages.history|escape:'html':'UTF-8'}">
          <span class="link-item">
            <i class="material-icons">&#xE916;</i>
            {l s='Order history and details' d='Shop.Theme.Actions'}
          </span>
        </a>
      {/if}

      {if !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="order-slips-link" href="{$urls.pages.order_slip|escape:'html':'UTF-8'}">
          <span class="link-item">
            <i class="material-icons">&#xE8B0;</i>
            {l s='Credit slips' d='Shop.Theme.Actions'}
          </span>
        </a>
      {/if}

      {if $configuration.voucher_enabled && !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="discounts-link" href="{$urls.pages.discount|escape:'html':'UTF-8'}">
          <span class="link-item">
            <i class="material-icons">&#xE54E;</i>
            {l s='Vouchers' d='Shop.Theme.Actions'}
          </span>
        </a>
      {/if}

      {if $configuration.return_enabled && !$configuration.is_catalog}
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="returns-link" href="{$urls.pages.order_follow|escape:'html':'UTF-8'}">
          <span class="link-item">
            <i class="material-icons">&#xE860;</i>
            {l s='Merchandise returns' d='Shop.Theme.Actions'}
          </span>
        </a>
      {/if}

      {block name='display_customer_account'}
        {hook h='displayCustomerAccount'}
      {/block}

    </div> *}
  </div>
{/block}


{block name='page_footer'}
  {block name='my_account_links'}
    <div class="text-xs-center">
      <a href="{$logout_url|escape:'html':'UTF-8'}">
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
    </div>
  {/block}
{/block}