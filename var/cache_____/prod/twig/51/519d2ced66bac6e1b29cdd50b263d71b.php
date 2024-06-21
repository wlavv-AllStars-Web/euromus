<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__5b0bd502cbad6f50c7ced1eab470fcc1 */
class __TwigTemplate_142457e9df05f117ce583306bf234efb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Products • All Stars Motorsport</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = 'fe51b8678f9169ecbee597f6d17edf30';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'c14ab054a02b812e33d1ef4bbb36d7de';
    var choose_language_translate = 'Choose language:';
    var default_language = '2';
    var admin_modules_link = '/admineuromus1/index.php/improve/modules/manage?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0';
    var admin_notification_get_link = '/admineuromus1/index.php/common/notifications?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0';
    var admin_notification_push_link = adminNotificationPushLink = '/admineuromus1/index.php/common/notifications/ack?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search";
        // line 43
        echo " for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/admineuromus1/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admineuromus1/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admineuromus1/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admineuromus1/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ukoocompat/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/alma/views/css/admin/_configure/helpers/form/form.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/alma/views/css/admin/almaPage.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admineuromus1\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admineuromus1\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_sp";
        // line 71
        echo "ecifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/multistore_dropdown.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/alma/views/js/admin/alma.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/asm.local\\/admineuromus1\\/index.php?controller=AdminGamification&token=1dea69481f1929dab2aa84fede1c6fd1\";
            var current_id_tab = 10;
        </scrip";
        // line 95
        echo "t><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admineuromus1/index.php/common/notifications?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 110
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminproducts multishop-enabled\"
  data-base-url=\"/admineuromus1/index.php\"  data-token=\"OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://asm.local/admineuromus1/index.php?controller=HOME&amp;token=e8b5e2836a1292c6bd18c289842daf9d\"></a>
      <span id=\"shop_version\">8.1.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://asm.local/admineuromus1/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8b7826c6647aa7a0840b22b1312bc54d\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://asm.local/admineuromus1/index.php/improve/modules/manage?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://asm.local/admineuromus1/index.php/sell/catalog/categories/new?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://asm.local/admineuromus1/index.php/sell/catalog/products-v2/create?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-lin";
        // line 147
        echo "k \"
         href=\"http://asm.local/admineuromus1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e174f0e7afffb96f08acea22799495ba\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://asm.local/admineuromus1/index.php/sell/orders?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"80\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2/19/edit\"
        data-post-link=\"http://asm.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://asm.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admineuromus1/index.php?controller=AdminSearch&amp;token=abdd145f225e4bab46911650ff22a1a0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.:";
        // line 187
        echo " product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"b";
        // line 203
        echo "tn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://asm.local/admineuromus1/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8b7826c6647aa7a0840b22b1312bc54d\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://asm.local/admineuromus1/index.php/improve/modules/manage?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://asm.local/admineuromus1/index.php/sell/catalog/categories/new?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://asm.local/admineuromus1/index.php/sell/catalog/products-v2/create?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://asm.local/admineuromus1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e174f0e7afffb96f08acea22799495ba\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://asm.local/admineuromus1/index.php/sell/orders?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
     ";
        // line 246
        echo " class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"108\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2/19/edit\"
      data-post-link=\"http://asm.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://asm.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggl";
        // line 297
        echo "e=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://asm.local/admineuromus1/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e4eccc53481f65a9e7750a73f0e98215\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"";
        // line 347
        echo "order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://asm.local/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span class=\"employee_profile\">Welcome back Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admineuromus1/index.php/configure/advanced/employees/1/edit?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=asm.local&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
      ";
        // line 392
        echo "      <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://asm.local/admineuromus1/index.php?controller=AdminLogin&amp;logout=1&amp;token=919b480ce20819203022dd442a649cfe\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admineuromus1/index.php/configure/advanced/employees/toggle-navigation?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://asm.local/admineuromus1/index.php?controller=HOME&amp;token=e8b5e2836a1292c6bd18c289842daf9d\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.6</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admineuromus1/index.php/sell/orders/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
 ";
        // line 438
        echo "                                                   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admineuromus1/index.php/sell/orders/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admineuromus1/index.php/sell/orders/invoices/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admineuromus1/index.php/sell/orders/credit-slips/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                         ";
        // line 468
        echo "     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admineuromus1/index.php/sell/orders/delivery-slips/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminCarts&amp;token=e4eccc53481f65a9e7750a73f0e98215\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admineuromus1/index.php/sell/catalog/products?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                               ";
        // line 499
        echo "               <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/products?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/categories?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/monitoring/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminAttributesG";
        // line 528
        echo "roups&amp;token=9fe4414de1b2b6845144f0e41aeb26da\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/brands/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admineuromus1/index.php/sell/attachments/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminCartRules&amp;token=e174f0e7afffb96f08acea22799495ba\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subt";
        // line 559
        echo "ab-AdminStockManagement\">
                                <a href=\"/admineuromus1/index.php/sell/stocks/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admineuromus1/index.php/sell/customers/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admineuromus1/index.php/sell/customers/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
         ";
        // line 592
        echo "                     <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admineuromus1/index.php/sell/addresses/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminCustomerThreads&amp;token=16773c544919102aed10bc6e2749bf22\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminCustomerThreads&amp;token=16773c544919102aed10bc6e2749bf22\" class=\"link\"> Customer Service
                                </a>
                              </li>

 ";
        // line 622
        echo "                                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admineuromus1/index.php/sell/customer-service/order-messages/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminReturn&amp;token=0ff3bb35eedf00ab22be553015471589\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admineuromus1/index.php/modules/metrics/legacy/stats?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
   ";
        // line 653
        echo "                                         </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admineuromus1/index.php/modules/metrics/legacy/stats?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admineuromus1/index.php/modules/metrics?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"240\" id=\"subtab-AdminWmModuleHomepage\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminWmModuleHomepage&amp;token=7ffba9e00ee9730be2b998d6dd53069a\" class=\"link\">
                      <i class=\"material-icons mi-article\">article</i>
                      <span>
                      HomeEditor
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                ";
        // line 684
        echo "                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admineuromus1/index.php/improve/modules/manage?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admineuromus1/index.php/improve/modules/manage?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                        ";
        // line 721
        echo "                                                            </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admineuromus1/index.php/improve/design/themes/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admineuromus1/index.php/improve/design/themes/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admineuromus1/index.php/improve/design/mail_theme/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link";
        // line 750
        echo "\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admineuromus1/index.php/improve/design/cms-pages/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admineuromus1/index.php/improve/design/modules/positions/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminImages&amp;token=fac0c26de670849f22dab23bfb3679e0\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admineuromus1/";
        // line 782
        echo "index.php/modules/link-widget/list?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminCarriers&amp;token=1270182c15534ad48a8de685ce4698f2\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminCarriers&amp;token=1270182c15534ad48a8de685ce4698f2\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"lin";
        // line 814
        echo "k-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admineuromus1/index.php/improve/shipping/preferences/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admineuromus1/index.php/improve/payment/payment_methods?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admineuromus1/index.php/improve/payment/payment_methods?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                            ";
        // line 845
        echo "  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admineuromus1/index.php/improve/payment/preferences?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admineuromus1/index.php/improve/international/localization/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admineuromus1/index.php/improve/international/localization/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Localization
                                </a>
        ";
        // line 875
        echo "                      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admineuromus1/index.php/improve/international/zones/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admineuromus1/index.php/improve/international/taxes/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admineuromus1/index.php/improve/international/translations/settings?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-Marketing\">
            ";
        // line 908
        echo "        <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2589397686dc7df9fc2b49304083c338\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2589397686dc7df9fc2b49304083c338\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admineuromus1/index.php/configure/shop/preferences/preferences?_token=OrzX7LK4rddw6D";
        // line 943
        echo "vae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admineuromus1/index.php/configure/shop/preferences/preferences?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admineuromus1/index.php/configure/shop/order-preferences/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admineuromus1";
        // line 973
        echo "/index.php/configure/shop/product-preferences/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admineuromus1/index.php/configure/shop/customer-preferences/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admineuromus1/index.php/configure/shop/contacts/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admineuromus1/index.php/configure/shop/seo-urls/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                     ";
        // line 1004
        echo "         <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminSearchConf&amp;token=7c48eb227495235b2103be48cd696cc7\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admineuromus1/index.php/configure/advanced/system-information/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/system-information/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Information
                                </a>
                              </li>

                     ";
        // line 1034
        echo "                                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/performance/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/administration/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/emails/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/import/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Impor";
        // line 1062
        echo "t
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/employees/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/sql-requests/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/logs/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admineuromus1/index.php/configure/adv";
        // line 1094
        echo "anced/webservice-keys/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminShopGroup\">
                                <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminShopGroup&amp;token=244a81c4ca2a2469080d13de3e6282ac\" class=\"link\"> Multistore
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/feature-flags/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/security/?_token=OrzX7LK4rddw6Dvae8meEftYx0To1SGGBmZeeVWNrc0\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                          ";
        // line 1123
        echo "              </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminKlaviyoPsConfig&amp;token=bbf2f41fee84507bc51de1f8560c9d92\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">More</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"172\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminSelfUpgrade&amp;token=9c0ae35e3239010518b84a7c332b8e02\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i";
        // line 1161
        echo ">
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"252\" id=\"tab-AdminUkooCompatParent\">
                <span class=\"title\">Compatibilities</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"253\" id=\"subtab-AdminUkooCompatCompat\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminUkooCompatCompat&amp;token=a5954a8c63739d1fa39188c389af81e8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Compatibilities
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"254\" id=\"subtab-AdminUkooCompatSearch\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminUkooCompatSearch&amp;token=efead8ce9890bcf4734a2d2f8111a365\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Search
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                          ";
        // line 1200
        echo "                          keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"255\" id=\"subtab-AdminUkooCompatFilter\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminUkooCompatFilter&amp;token=5e18b4398dcd62a0bd6cec777a28be35\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Search filters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                                                                                                                        
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"259\" id=\"subtab-AdminUkooCompatImportFile\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminUkooCompatImportFile&amp;token=e6ee162b1a1ceefd71540a498523509a\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      CSV imports
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                   ";
        // line 1231
        echo "                         </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"260\" id=\"subtab-AdminUkooCompatAlias\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminUkooCompatAlias&amp;token=fa6e5c3da1821aa2e547f7e8771e0042\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Alias
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"261\" id=\"subtab-AdminUkooCompatAliasInstance\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminUkooCompatAliasInstance&amp;token=59365885e798cde5df61c00d1fad0d6f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Alias instance
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
      ";
        // line 1266
        echo "                
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"266\" id=\"tab-alma\">
                <span class=\"title\">Alma</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"267\" id=\"subtab-AdminAlmaConfig\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminAlmaConfig&amp;token=adc15e362ece7730ece2726df2d21879\" class=\"link\">
                      <i class=\"material-icons mi-tune\">tune</i>
                      <span>
                      Configuration
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"268\" id=\"subtab-AdminAlmaCategories\">
                    <a href=\"http://asm.local/admineuromus1/index.php?controller=AdminAlmaCategories&amp;token=7d221d0371e6c3bbdd5a2a0980dd1cd9\" class=\"link\">
                      <i class=\"material-icons mi-not_interested\">not_interested</i>
                      <span>
                      Excluded categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                  ";
        // line 1303
        echo "                      </li>
                                                                                          
          
                  </ul>
  </div>
  
</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1323
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://asm.local/admineuromus1/index.php?controller=HOME&amp;token=e8b5e2836a1292c6bd18c289842daf9d\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1357
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 110
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1323
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1357
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__5b0bd502cbad6f50c7ced1eab470fcc1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1532 => 1357,  1511 => 1323,  1500 => 110,  1491 => 1357,  1451 => 1323,  1429 => 1303,  1390 => 1266,  1353 => 1231,  1320 => 1200,  1279 => 1161,  1239 => 1123,  1208 => 1094,  1174 => 1062,  1144 => 1034,  1112 => 1004,  1079 => 973,  1047 => 943,  1010 => 908,  975 => 875,  943 => 845,  910 => 814,  876 => 782,  842 => 750,  811 => 721,  772 => 684,  739 => 653,  706 => 622,  674 => 592,  639 => 559,  606 => 528,  575 => 499,  542 => 468,  510 => 438,  462 => 392,  415 => 347,  363 => 297,  310 => 246,  265 => 203,  247 => 187,  205 => 147,  163 => 110,  146 => 95,  120 => 71,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5b0bd502cbad6f50c7ced1eab470fcc1", "");
    }
}
