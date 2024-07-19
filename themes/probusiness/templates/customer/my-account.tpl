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
      <img src="/img/asd/Content_pages/account/account_{$language.iso_code}.webp" alt="account_banner" />
    </div>


    <div class="col-lg-12">
    <ul class="nav nav-tabs" id="menu-client" role="tablist" style="display: flex;align-items:center;background-color: #f7f7f7; border: 1px solid #d8d8d8; height: 55px;margin-top: 20px;">
      {* <li class="nav-item" style="border-left: 0px solid #d8d8d8;">
        <a class="nav-link active" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="true" style="display: flex;padding:0.5rem 1rem;background-color: #f7f7f7;">
          <i class="fa fa-exclamation-triangle website_blue font-size-40"></i> 
        </a>
      </li> *}
      <li class="nav-item">
        <a class="nav-link active" title="{l s="Orders history" d="Shop.Theme.Statistics"}" id="order_history-tab" data-toggle="tab" href="#order_history" role="tab" aria-controls="order_history" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-list-ol website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" title="{l s="Dashboard" d="Shop.Theme.Statistics"}"  id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-dashboard website_blue font-size-40"></i></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" id="statistics-tab" title="{l s="Statistics" d="Shop.Theme.Statistics"}"  data-toggle="tab" href="#statistics" role="tab" aria-controls="statistics" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa-solid fa-chart-column"></i></a>
      </li>
      
      {* <li class="nav-item">
        <a class="nav-link" id="stats-tab" data-toggle="tab" href="#stats" role="tab" aria-controls="stats" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-bar-chart-o website_blue font-size-40"></i></a>
      </li> *}
      {* <li class="nav-item">
        <a class="nav-link" id="addresses-tab" data-toggle="tab" href="#addresses" role="tab" aria-controls="addresses" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-building website_blue font-size-40"></i></a>
      </li> *}
      <li class="nav-item">
        <a class="nav-link" id="shipping-tab" title="{l s="Shipping Rates" d="Shop.Theme.Statistics"}"  data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-truck website_blue font-size-40"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" title="{l s="Profile" d="Shop.Theme.Statistics"}" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="padding:0.5rem 1rem;"><i class="fa fa-user website_blue font-size-40"></i></a>
      </li>
      <li class="setNameTitle" style="width: 100%;display:flex;justify-content: center;font-size:30px;color:#666;font-weight:700;">
        titulo
      </li>
      <li class="nav-item" style="display:flex;justify-content: end;">
        <a class="nav-link" id="logout-tab"  href="/?mylogout="><i class="fa-solid fa-lock-open"></i></a>
      </li>

      
    </ul>

    <script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.nav-link');
    const titleElement = document.querySelector('.setNameTitle');

    tabs.forEach(tab => {
      tab.addEventListener('click', function() {
        const tabTitle = this.getAttribute('title');
        titleElement.innerText = tabTitle;
      });
    });

    // Set initial title based on the active tab
    const activeTab = document.querySelector('.nav-link.active');
    if (activeTab) {
      titleElement.innerText = activeTab.getAttribute('title');
    }
  });
</script>


    <div class="tab-content" id="myTabContent">
      {* <div class="tab-pane fade " id="messages" role="tabpanel" aria-labelledby="messages-tab">
          {include file='customer/_partials/order-messages.tpl'}
      </div> *}
      <div class="tab-pane  show active" id="order_history" role="tabpanel" title="Order History" aria-labelledby="order_history-tab">
        <div style="display: flex;margin:1rem 0;">
          <div class="col-lg-2 col-md-2 col-sm-4  card-status-myaccount card-status-myaccount" >
              <a onclick="findRowTable(24)">
                  <div class="counters_panel margin-lados-10 waiting_validation">
                      <div class="counters_label">{l s='Waiting validation' d='Shop.Theme.Customeraccount'}</div>
                      <div class="counters_value">{$counters['waiting_validation']}</div>
                  </div>
                  <div class="spacer-20"></div>
              </a>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4  card-status-myaccount">
              <a onclick="findRowTable(10)">
                  <div class="counters_panel margin-lados-10 waiting_payment">
                      <div class="counters_label">{l s='Waiting payment' d='Shop.Theme.Customeraccount'}</div>
                      <div class="counters_value">{$counters['waiting_payment']}</div>
                  </div>
                  <div class="spacer-20"></div>
              </a>
          </div> 
          <div class="col-lg-2 col-md-2 col-sm-4  card-status-myaccount">
              <a onclick="findRowTable(3)">
                  <div class="counters_panel margin-lados-10 preparation">
                      <div class="counters_label">{l s='In preparation' d='Shop.Theme.Customeraccount'}</div>
                      <div class="counters_value">{$counters['processing']}</div>
                  </div>
                  <div class="spacer-20"></div>
              </a>
          </div> 
          <div class="col-lg-2 col-md-2 col-sm-4  card-status-myaccount">
              <a onclick="findRowTable(9)">
                  <div class="counters_panel margin-lados-10 backorder">
                      <div class="counters_label">{l s='Backorder' d='Shop.Theme.Customeraccount'}</div>
                      <div class="counters_value">{$counters['backorders']}</div>
                  </div>
                  <div class="spacer-20"></div>
              </a>
          </div> 
          <div class="col-lg-2 col-md-2 col-sm-4  card-status-myaccount">
              <a onclick="findRowTable(4)">
                  <div class="counters_panel margin-lados-10 shipped">
                      <div class="counters_label">{l s='Shipped' d='Shop.Theme.Customeraccount'}</div>
                      <div class="counters_value">{$counters['shipped']}</div>
                  </div>
              </a>
          </div>    
          <div class="col-lg-2 col-md-2 col-sm-4  card-status-myaccount">
              <a onclick="findRowTable(6)">
                  <div class="counters_panel margin-lados-10 canceled">
                      <div class="counters_label">{l s='Canceled' d='Shop.Theme.Customeraccount'}</div>
                      <div class="counters_value">{$counters['canceled']}</div>
                  </div>
              </a>
          </div> 
        </div>
        <div style="margin-top: 2rem;">
          <div style="display: flex;justify-content:space-between;width:100%;">
            <h1>{l s='Order history' d='Shop.Theme.Customeraccount'}</h1>
            <a class="btn_clearfilter" onclick="cleanFilter()">{l s="Clean Filter" d="Shop.Theme.Customeraccount"}<i class="fa-solid fa-filter-circle-xmark" ></i></a>
          </div>

        {* {include file="customer/statistics_counters.tpl"} *}

        {if $orders}
          <table class="table table-striped table-bordered table-labeled hidden-sm-down">
            <thead class="thead-default">
              <tr>
                <th>{l s='Order reference' d='Shop.Theme.Customeraccount'}</th>
                <th>{l s='Date' d='Shop.Theme.Customeraccount'}</th>
                <th>{l s='Total price' d='Shop.Theme.Customeraccount'}</th>
                <th class="hidden-md-down">{l s='Payment' d='Shop.Theme.Customeraccount'}</th>
                <th class="hidden-md-down">{l s='Status' d='Shop.Theme.Customeraccount'}</th>
                <th>{l s='Invoice' d='Shop.Theme.Customeraccount'}</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
           
            {foreach from=$orders item=order}
              {* <pre>{print_r($order.history.current,1)}</pre> *}
                <tr data-state="{$order.history.current.id_order_state}">
                  <th scope="row">{$order.details.reference|escape:'html':'UTF-8'}</th>
                  <td>{$order.details.order_date|escape:'html':'UTF-8'}</td>
                  <td class="text-xs-center">{$order.totals.total.value|escape:'html':'UTF-8'}</td>
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
                    {* {if $order.details.reorder_url}
                      <a href="{$order.details.reorder_url|escape:'html':'UTF-8'}">{l s='Reorder' d='Shop.Theme.Actions'}</a>
                    {/if} *}
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
                        <a href="{$order.details.details_url|escape:'html':'UTF-8'}" data-link-action="view-order-details" title="{l s='Details'  d='Shop.Theme.Customeraccount'}">
                          <i class="material-icons">&#xE8B6;</i>
                        </a>
                      </div>
                      {if $order.details.reorder_url}
                        <div>
                          <a href="{$order.details.reorder_url|escape:'html':'UTF-8'}" title="{l s='Reorder'  d='Shop.Theme.Customeraccount'}">
                            <i class="material-icons">&#xE863;</i>
                          </a>
                        </div>
                      {/if}
                  </div>
                </div>
              </div>
            {/foreach}
          </div>
        {else}
          <div class="alert alert-warning" role="alert" style="max-width: 1350px;margin: 0 auto;text-align: center;">
            {l s='No orders yet.' d='Shop.Theme.Customeraccount'}
          </div>
        {/if}
        <script>
          function findRowTable(state_num) {
            const rows = document.querySelectorAll("#order_history tbody tr");
            rows.forEach(row => {
              if (row.getAttribute('data-state') == state_num) {
                row.style.display = ''; 
              } else {
                row.style.display = 'none'; 
              }
            });
          }

          function cleanFilter() {
            const rows = document.querySelectorAll("#order_history tbody tr");
            rows.forEach(row => {
              row.style.display = ''; 
            });
          }

        </script>
        </div>
      </div>

      <div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">  
        <div class="col-sm-12 text-center">
            <div class="row statistics_container" style="max-width: 1350px; margin: 0 auto;display:flex;">
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div>{l s='Total purchases per month' d='Shop.Theme.Customeraccount'}</div>
                    <canvas id="myChart" width="664" height="332"></canvas>
                </div>

                <div class="col-lg-4 col-md-5">
                  <div>{l s='Total purchases by brand (€)' d='Shop.Theme.Customeraccount'}</div>
                    <canvas id="chart-area" height="332" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>
      </div>

      <div class="tab-pane fade" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">  
        <div class="col-sm-8">
          <div class="col-lg-12">
            <div class="title-clientstatistics"  style="font-size: 14px;position: relative; top: 20px;text-align:center;">{l s='Best seller products' d="Shop.Theme.Statistics"}</div>
            <canvas id="myChart-statistics"></canvas>
          </div>
          <div style="border-top: 1px solid #c8c8c8;padding: 10px 0;text-align: center;color: #666;cursor: pointer;margin-top: 20px; font-weight: bolder;" onclick="$('#top_100').toggle()">{l s='Check Top 100' d="Shop.Theme.Statistics"}</div>
          <div id="top_100" style="display: none;border-top: 1px solid #c8c8c8;padding: 10px 0;text-align: left;color: #666;cursor: pointer;margin-top: 0px; font-weight: bolder;">
        	        <div style="width: 33%; float: left;">
        	        {foreach $top['top1'] AS $k => $product}
        	            <div style="padding: 5px; height: 27px;">
        	                <div style="width: 40px; float: left;">{$k+1}.</div>
        	                <div style="width: calc(100% - 40px); float: left;"><a style="color: #777;" href="/{$product['id_product']}-top100.html" target="_blank">{$product['reference']}</a></div>
        	            </div>
        	        {/foreach}
        	        </div>
        	        
        	        <div style="width: 33%; float: left;">
        	        {foreach $top['top2'] AS $k => $product}
        	            <div style="padding: 5px; height: 27px;">
        	                <div style="width: 40px; float: left;">{$k+1}.</div>
        	                <div style="width: calc(100% - 40px); float: left;"><a style="color: #777;" href="/{$product['id_product']}-top100.html" target="_blank">{$product['reference']}</a></div>
        	            </div>
        	        {/foreach}
        	        </div>
        	        
        	        <div style="width: 33%; float: left;">
        	        {foreach $top['top3'] AS $k => $product}
        	            <div style="padding: 5px; height: 27px;">
        	                <div style="width: 40px; float: left;">{$k+1}.</div>
        	                <div style="width: calc(100% - 40px); float: left;"><a style="color: #777;" href="/{$product['id_product']}-top100.html" target="_blank">{$product['reference']}</a></div>
        	            </div>
        	        {/foreach}
        	        </div>
        	    </div>
        </div>
        {* {debug} *}
        <div class="col-sm-4">
          <div id="general_information_container">
            <div class="spacer-20 visible-xs visible-sm"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label">{l s='Company name' d="Shop.Theme.Statistics"}</div>
                <div class="stats_container_value">{$company_name}</div>
            </div>
            <div class="spacer-20"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label">{l s='Client since' d="Shop.Theme.Statistics"}</div>
                <div class="stats_container_value">{$clientSince}</div>
            </div>
            <div class="spacer-20"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label">{l s='Default language' d="Shop.Theme.Statistics"}</div>
                <div class="stats_container_value">{$defaultLanguage}</div>
            </div>
            <div class="spacer-20"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label">{l s='Last purchase' d="Shop.Theme.Statistics"}</div>
                <div class="stats_container_value">{$lastOrder}</div>
            </div>
            <div class="spacer-20"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label">{l s='My addresses' d="Shop.Theme.Statistics"}</div>
                <div class="stats_container_value">{$numberAddresses}</div>
            </div>
            <div class="spacer-20"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label"><a style="color: dodgerblue;" href="#order_history">{l s='Number of orders' d="Shop.Theme.Statistics"}</a></div>
                <div class="stats_container_value">{$numberOfOrders}</div>
            </div>
            <div class="spacer-20"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label">{l s='Total orders amount' d="Shop.Theme.Statistics"}</div>
                <div class="stats_container_value">{$totalOfOrders} €</div>
            </div>
            <div class="spacer-16"></div>
            <div class="statistics_container margin-left-10">
                <div class="stats_container_label">{l s='Average value per order' d="Shop.Theme.Statistics"}</div>
                <div class="stats_container_value">{$average} €</div>
            </div>
          </div>
        </div>


        <div class="col-sm-12 last-viewed-products-container">
          <div class="statistics_container">
            {l s='Last viewed products' d="Shop.Theme.Statistics"}
          </div>
          <div class="last-viewed-products" style="display: flex;gap:0.5rem;flex-wrap:wrap;">
            {if count($lastViewedProducts) > 0}
                {foreach $lastViewedProducts As $product}
              <div class="col-lg-2 col-md-2 col-sm-4 px-0" style="border: 1px solid #d8d8d8;">
                  <div class="statistics_container" style="padding: 0; margin: 0;overflow: hidden;">
                      <a class="product_img_link"	href="https://www.all-stars-distribution.com/{$product['id_product']}-product.html" title="{$product['name']}" itemprop="url" style="width: 100%; text-align: center;">
                            <div style="background-color: white;display: flex;">
                            {* {$product|print_r} *}


                                <img style="max-height:125px;margin: 0 auto" class="replace-2x img-responsive" src="{$product.image_path}" alt="{$product['name']}" title="{$product.name}" itemprop="image"/>
                            </div>
                            <div style="border-top: 1px solid #C8C8C8; font-size: 14px; color: #666;padding: 5px;">{$product.name|truncate:25}</div>
                            <div style="font-size: 14px; color: #666;">{$product.reference|truncate:25}</div>
                        </a>
                    </div>
                </div>
                {/foreach}
            {else}
                <div style="padding: 10px;">
                    <p class="alert alert-warning" style="margin: 0">{l s='You haven\'t viewed any products yet!' d="Shop.Theme.Statistics"}</p>
                </div>
            {/if}
          </div>
        </div>

        <div class="col-sm-12 most-purchased-container">
          <div class="statistics_container">
            {l s='Most purchased products' d="Shop.Theme.Statistics"}
          </div>
          <div class="most-purchased" style="display: flex;gap:0.5rem;flex-wrap:wrap;">
          {if count($mostBoughtProducts) > 0}
            {foreach $mostBoughtProducts As $product}
          <div class="col-lg-2 col-md-2 col-sm-4 px-0" style="border: 1px solid #d8d8d8;">
              <div class="statistics_container" style="padding: 0; margin: 0px;">
                  <a class="product_img_link"	href="https://www.all-stars-distribution.com/{$product['id_product']}-product.html" title="{$product['name']}" itemprop="url" style="width: 100%; text-align: center;">
                        <div style="background-color: white;display: flex;">

                            <img style="max-height:125px;margin: 0 auto" class="replace-2x img-responsive" src="{$product.image_path}" alt="{$product['name']}" title="{$product['name']}" itemprop="image"/>
                        </div>
                        <div style="border-top: 1px solid #C8C8C8; height: 45px; font-size: 14px; color: #666;overflow: hidden;display:flex;align-items:center;">
                            <div style=" width: 50px;height: 100%;line-height: 30px;font-size: 20px;background-color: #fff;padding: 10px;border-right: 1px solid #c8c8c8; text-align: center;">{$product['number']}</div> 
                            <div style="padding: 5px;">{$product['name']|truncate:25}</div>
                        </div>
                    </a>
                </div>
            </div>
            {/foreach}
        {else}
            <div style="padding: 10px;">
                <p class="alert alert-warning">{l s='You haven\'t made any purchases yet!' d="Shop.Theme.Statistics"}</p>
            </div>
        {/if}
          </div>
        </div>

      </div>



      {* <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab">...</div> *}
      <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
        {block name='page_title'}
          <h1>{l s='Your addresses' d='Shop.Theme.Customeraccount'}</h1>
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
              <span>{l s='Create new address' d='Shop.Theme.Customeraccount'}</span>
            </a>
          </div>
      </div>

      <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
          <img src="/img/asd/Content_pages/account/ShipRates.jpg" alt="shipping_rates" style="max-width: 1000px;"/>
      </div>
      
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      {* {include file="customer/identity.tpl" } *}
      {* {render file='customer/_partials/customer-form.tpl' ui=$customer_form} *}
        <div class="form-personal-info" style="padding-top: 2rem;">
          
        {* <pre>{$customerData|print_r}</pre> *}
          <form action="{$urls.pages.my_account}" method="post" class="std">
              <div class="left-form-personal col-lg-6 col-sm-12">
                <div class="form-group col-lg-9">
                  <h1 style="text-align: center;">{l s="Your Personal Information" d='Shop.Theme.Customeraccount'}</h1>
                  <p style="text-align: center;">{l s="Please be sure to update your personal information if changed." d='Shop.Theme.Customeraccount'}</p>
                </div>
                <div class="radio-btns-form-personal  col-lg-12 col-md-6">
                {foreach from=$genders key=k item=gender}
                  <div class="form-check col-md-3 col-sm-6" style="text-align: center;">
                    <input class="form-check-input" type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id|intval}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id} checked="checked"{/if}>
                    <label class="form-check-label" for="id_gender{$gender->id}">
                      {$gender->name}
                    </label>
                  </div>
                {/foreach}
                </div>

              
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="firstname">{l s="First Name" d='Shop.Theme.Customeraccount'}</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" value="{$smarty.post.firstname}">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="lastname">{l s="Last Name" d='Shop.Theme.Customeraccount'}</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" value="{$smarty.post.lastname}">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="email">{l s="Email" d='Shop.Theme.Customeraccount'}</label>
                  <input type="email" class="form-control" id="email" name="email" value="{$smarty.post.email}">
                </div>
                <div class="form-row col-lg-9 col-md-7 ">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 px-0 m-0">
                    <label>{l s="Date of Birth" d='Shop.Theme.Customeraccount'}</label>
                  </div>
                  <div class="form-group col-lg-4 col-md-4 col-sm-4 pl-0 days">
                    <select id="days" name="days" class="form-control">
                      <option selected>{l s="Day" d='Shop.Theme.Customeraccount'}</option>
                      <option>...</option>
                      {foreach from=$days item=v}
                        <option value="{$v}" {if ($sl_day == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                      {/foreach}
                    </select>
                  </div>
                  <div class="form-group col-lg-4 col-md-4 col-sm-4 p-0 months">
                    <select id="months" name="months" class="form-control">
                      <option selected>{l s="Month" d='Shop.Theme.Customeraccount'}</option>
                      <option>...</option>
                      {foreach from=$months key=k item=v}
                          <option value="{$k}" {if ($sl_month == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>
                      {/foreach}
                    </select>
                  </div>
                  <div class="form-group col-lg-4 col-md-4 col-sm-4 pr-0 years">
                    <select id="years" name="years" class="form-control">
                      <option selected>{l s="Year" d='Shop.Theme.Customeraccount'}</option>
                      <option>...</option>
                      {foreach from=$years item=v}
                          <option value="{$v}" {if ($sl_year == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                      {/foreach}
                    </select>
                  </div>
                </div>
                {* <pre>{$smarty.post|print_r}</pre> *}
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="old_passwd">{l s="Current Password" d='Shop.Theme.Customeraccount'}</label>
                  <input type="password" class="form-control " name="old_passwd" id="old_passwd" required data-validate="isPasswd" >
                </div>
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="passwd">{l s="New Password" d='Shop.Theme.Customeraccount'}</label>
                  <input type="password" class="form-control " name="passwd" id="passwd" data-validate="isPasswd">
                </div>
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="confirmation">{l s="New Password Confirmation" d='Shop.Theme.Customeraccount'}</label>
                  <input type="password" class="form-control " name="confirmation" id="confirmation" data-validate="isPasswd">
                </div>
                {* {if $newsletter} *}
                <div class="form-group col-lg-12 col-md-7 col-sm-12">
                  <div class="form-check col-md-12">
                      <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == 1} checked="checked"{/if}>
                      <label class="form-check-label" for="newsletter">
                        <a href="{$link->getCMSLink(13)}">{l s="Sign up for our newsletter!" d='Shop.Theme.Customeraccount'}</a>
                      </label>
                    
                  </div>
                </div>
                {* {/if} *}
              {* </div> *}
            </div>
            {* </div>

            <div class="form-row company-info-personal" style="padding-top: 2rem;"> *}
            <div class="right-form-personal  col-lg-6 col-sm-12">
              <div class="form-group col-lg-12 col-md-7 col-sm-12" style="padding-top: 2rem;">
              <h1 style="text-align: center;">{l s="Your Company Information" d='Shop.Theme.Customeraccount'}</h1>
              </div>
              {* </div>

              <div class="form-row "> *}
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="company">{l s="Company Name" d='Shop.Theme.Customeraccount'}</label>
                  <input type="text" class="form-control" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" >
                </div>
                <div class="form-group col-lg-9 col-md-7 col-sm-12">
                  <label for="siret">{l s="Vat Number" d='Shop.Theme.Customeraccount'}</label>
                  <input type="text" class="form-control" id="siret" name="siret" value="{if isset($smarty.post.siret)}{$smarty.post.siret}{/if}">
                </div>
                
              {* </div>

              <div class="form-row"> *}
                <div class="form-group col-lg-12 col-md-4 col-sm-12" style="text-align: center;padding-bottom:2rem;">
                  <button class="btn btn-primary" type="submit" name="submitIdentity" data-link-action="save-customer" style="background:#0273eb;">{l s="Submit form" d='Shop.Theme.Customeraccount'}</button>
                </div>
              {* </div>

              
              
              <div class="form-row"> *}
                <div class="form-group col-lg-12" style="padding-top: 2rem;">
                  <h1 class="page-subheading" style="text-align: center;">{l s='General Data Protection Regulation' d='Shop.Theme.Customeraccount'}</h1>
                      
                  <div style="margin-top: 40px;text-align:center;">
                    <h4> {l s='Remove account' d='Shop.Theme.Customeraccount'}  </h4>
                    <p>{l s='After the account has been removed you can not go back!.' d='Shop.Theme.Customeraccount'}</p>
                    <button type="submit" name="removeIdentity" class="btn btn-default button button-medium">
                      <span>{l s='Remove Account' d='Shop.Theme.Customeraccount'}<i class="icon-chevron-right right"></i></span>
                    </button>
                  </div>
                </div>
                  
                <div class="form-group col-lg-12" style="padding-top: 2rem;">
                  <div style="margin-top: 40px;text-align:center;">
                    <h4> {l s='Portability of personal data' d='Shop.Theme.Customeraccount'}  </h4>
                    <p>{l s='Allows you to extract your personal data in a CSV document!.' d='Shop.Theme.Customeraccount'}</p>	
                    <button type="submit" name="exportIdentity" class="btn btn-default button button-medium">
                      <span>{l s='Export personal data' d='Shop.Theme.Customeraccount'}<i class="icon-chevron-right right"></i></span>
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
    {* <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> *}
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


// Simulating the embedded string data from the server
const brandsString = "{$ordersByBrand['brands']}".replace(/&quot;/g, '"');
const brandsArray = brandsString.split(",").map(brand => brand.trim());
const totalString = "{$ordersByBrand['totals']}".replace(/&quot;/g, '"');
const totalArray = totalString.split(",").map(total => total.trim());

// console.log(brandsArray)




	window.myPie = new Chart(document.getElementById('chart-area').getContext('2d'), 
	    {
    		type: 'pie',
    		data: {
    			datasets: [{
    				data: totalArray,
    				backgroundColor: '{$ordersByBrandColors}',
    				label: 'Value'
    			}],
    			labels: brandsArray
    		},
    		options: {
    			responsive: true
    		}
    	}
	);
  
  const references = "{$bestSellers['references']}";
  const values = "{$bestSellers['values']}";
  const referencesArray = references.split(",")
  const valuesArray = values.split(",")

  /** Statistics Chart**/
  var barChartData = {
    	labels: referencesArray,
    	datasets: [{
    		backgroundColor: '{$bestSellers['colors']}',
    		borderColor: '{$bestSellers['colors']}',
    		borderWidth: 1,
    		data: valuesArray,
        label: ''
    	}]
    
    };

  var ctx = document.getElementById('myChart-statistics').getContext('2d');
		window.myBar = new Chart(ctx, {
			type: 'bar',
			data: barChartData,
			options: {
				responsive: true,
				tooltips: {
                    enabled: false,
                    mode: 'index',
                    intersect: false, 
                },
				legend: {
					display: false,
				},
				title: {
					display: true,
					text: ''
				},
        
			}
		});




    document.addEventListener('DOMContentLoaded', function () {

      const urlParams = new URLSearchParams(window.location.search);
      const tab = urlParams.get('tab');
      if (tab) {
          document.querySelector("#shipping-tab").click();
      }
    });


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


{* {block name='page_footer'}
  {block name='my_account_links'}
    <div class="text-xs-center">
      <a href="{$logout_url|escape:'html':'UTF-8'}">
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
    </div>
  {/block}
{/block} *}