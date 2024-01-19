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

/* __string_template__15294d6546297343fa50168db0c8ebe9 */
class __TwigTemplate_cfe1e5a09609a8200bd3e699bcc50c75 extends Template
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

<title>Products • EuroMuscle</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.3';
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
    var admin_modules_link = '/admineuromus1/index.php/improve/modules/manage?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo';
    var admin_notification_get_link = '/admineuromus1/index.php/common/notifications?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo';
    var admin_notification_push_link = adminNotificationPushLink = '/admineuromus1/index.php/common/notifications/ack?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a pro";
        // line 43
        echo "duct';
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
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ukoocompat/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admineuromus1\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admineuromus1\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###";
        // line 69
        echo "\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/multistore_dropdown.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.3\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.3\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admineuromus1/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/euromus.local\\/admineuromus1\\/index.php?controller=AdminGamification&token=1dea69481f1929dab2aa84fede1c6fd1\";
            var current_id_tab = 10;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
     ";
        // line 98
        echo " notificationGetUrl: '/admineuromus1/index.php/common/notifications?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 108
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminproducts multishop-enabled\"
  data-base-url=\"/admineuromus1/index.php\"  data-token=\"4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/admineuromus1/index.php/sell/catalog/products?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\"></a>
      <span id=\"shop_version\">8.1.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://euromus.local/admineuromus1/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8b7826c6647aa7a0840b22b1312bc54d\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://euromus.local/admineuromus1/index.php/improve/modules/manage?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://euromus.local/admineuromus1/index.php/sell/catalog/categories/new?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://euromus.local/admineuromus1/index.php/sell/catalog/products-v2/create?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item";
        // line 145
        echo " quick-row-link \"
         href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e174f0e7afffb96f08acea22799495ba\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://euromus.local/admineuromus1/index.php/sell/orders?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"26\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2\"
        data-post-link=\"http://euromus.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://euromus.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\">
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
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" plac";
        // line 185
        echo "eholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
";
        // line 201
        echo "      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
       href=\"http://euromus.local/admineuromus1/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8b7826c6647aa7a0840b22b1312bc54d\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://euromus.local/admineuromus1/index.php/improve/modules/manage?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://euromus.local/admineuromus1/index.php/sell/catalog/categories/new?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://euromus.local/admineuromus1/index.php/sell/catalog/products-v2/create?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e174f0e7afffb96f08acea22799495ba\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://euromus.local/admineuromus1/index.php/sell/orders?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divi";
        // line 242
        echo "der\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"108\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2\"
      data-post-link=\"http://euromus.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://euromus.local/admineuromus1/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\">
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
           ";
        // line 294
        echo "   id=\"customers-tab\"
              data-toggle=\"tab\"
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
              Have you checked your <strong><a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e4eccc53481f65a9e7750a73f0e98215\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
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
    </div";
        // line 341
        echo ">
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://euromus.local/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span class=\"employee_profile\">Welcome back Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admineuromus1/index.php/configure/advanced/employees/1/edit?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=euromus.local&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  ";
        // line 389
        echo "target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://euromus.local/admineuromus1/index.php?controller=AdminLogin&amp;logout=1&amp;token=ffc4ae7e97f8e3b75865d93dd9cb9242\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admineuromus1/index.php/configure/advanced/employees/toggle-navigation?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/admineuromus1/index.php/sell/catalog/products?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.3</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admineuromus1/index.php/sell/orders/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
";
        // line 434
        echo "                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admineuromus1/index.php/sell/orders/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admineuromus1/index.php/sell/orders/invoices/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admineuromus1/index.php/sell/orders/credit-slips/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                ";
        // line 465
        echo "                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admineuromus1/index.php/sell/orders/delivery-slips/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCarts&amp;token=e4eccc53481f65a9e7750a73f0e98215\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admineuromus1/index.php/sell/catalog/products?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                ";
        // line 496
        echo "                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/products?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/categories?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/monitoring/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http";
        // line 526
        echo "://euromus.local/admineuromus1/index.php?controller=AdminAttributesGroups&amp;token=9fe4414de1b2b6845144f0e41aeb26da\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admineuromus1/index.php/sell/catalog/brands/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admineuromus1/index.php/sell/attachments/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCartRules&amp;token=e174f0e7afffb96f08acea22799495ba\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
          ";
        // line 557
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admineuromus1/index.php/sell/stocks/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admineuromus1/index.php/sell/customers/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
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
                                <a href=\"/admineuromus1/index.php/sell/customers/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                             ";
        // line 588
        echo " 
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admineuromus1/index.php/sell/addresses/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCustomerThreads&amp;token=16773c544919102aed10bc6e2749bf22\" class=\"link\">
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
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCustomerThreads&amp;token=16773c544919102aed10bc6e2749bf22\" class=\"link\"> Customer Ser";
        // line 616
        echo "vice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admineuromus1/index.php/sell/customer-service/order-messages/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminReturn&amp;token=0ff3bb35eedf00ab22be553015471589\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admineuromus1/index.php/modules/metrics/legacy/stats?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyb";
        // line 649
        echo "oard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admineuromus1/index.php/modules/metrics/legacy/stats?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admineuromus1/index.php/modules/metrics?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admineuromus1/index.php/improve/modules/manage?_token=4GB";
        // line 686
        echo "TqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
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
                                <a href=\"/admineuromus1/index.php/improve/modules/manage?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admineuromus1/index.php/improve/design/themes/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                         ";
        // line 718
        echo "                                   </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admineuromus1/index.php/improve/design/themes/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admineuromus1/index.php/improve/design/mail_theme/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admineuromus1/index.php/improve/design/cms-pages/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModu";
        // line 748
        echo "lesPositions\">
                                <a href=\"/admineuromus1/index.php/improve/design/modules/positions/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminImages&amp;token=fac0c26de670849f22dab23bfb3679e0\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admineuromus1/index.php/modules/link-widget/list?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCarriers&amp;token=1270182c15534ad48a8de685ce4698f2\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
      ";
        // line 780
        echo "                </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminCarriers&amp;token=1270182c15534ad48a8de685ce4698f2\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admineuromus1/index.php/improve/shipping/preferences/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admineuromus1/index.php/improve/payment/payment_methods?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
                      <i clas";
        // line 810
        echo "s=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admineuromus1/index.php/improve/payment/payment_methods?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admineuromus1/index.php/improve/payment/preferences?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admineuromus1/index.php/improve/int";
        // line 842
        echo "ernational/localization/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
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
                                <a href=\"/admineuromus1/index.php/improve/international/localization/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admineuromus1/index.php/improve/international/zones/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                          ";
        // line 872
        echo "      <a href=\"/admineuromus1/index.php/improve/international/taxes/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admineuromus1/index.php/improve/international/translations/settings?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-Marketing\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2589397686dc7df9fc2b49304083c338\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                      
                              
                                                        ";
        // line 903
        echo "    
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2589397686dc7df9fc2b49304083c338\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"231\" id=\"subtab-AdminWmModuleHomepage\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminWmModuleHomepage&amp;token=536ec681828c080145c2e4d4dbb5263a\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Homepage editor
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admineuromus1/index.p";
        // line 941
        echo "hp/configure/shop/preferences/preferences?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
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
                                <a href=\"/admineuromus1/index.php/configure/shop/preferences/preferences?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admineuromus1/index.php/configure/shop/order-preferences/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPrefer";
        // line 970
        echo "ences\">
                                <a href=\"/admineuromus1/index.php/configure/shop/product-preferences/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admineuromus1/index.php/configure/shop/customer-preferences/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admineuromus1/index.php/configure/shop/contacts/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admineuromus1/index.php/configure/shop/seo-urls/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                   ";
        // line 1001
        echo "                                         
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminSearchConf&amp;token=7c48eb227495235b2103be48cd696cc7\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admineuromus1/index.php/configure/advanced/system-information/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\">
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
                                <a href=\"/admineuromus1/index.php/configure/advanced/system-information/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Information
                            ";
        // line 1029
        echo "    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/performance/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/administration/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/emails/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/import/?_tok";
        // line 1060
        echo "en=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/employees/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/sql-requests/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/logs/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
            ";
        // line 1092
        echo "                    <a href=\"/admineuromus1/index.php/configure/advanced/webservice-keys/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminShopGroup\">
                                <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminShopGroup&amp;token=244a81c4ca2a2469080d13de3e6282ac\" class=\"link\"> Multistore
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/feature-flags/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admineuromus1/index.php/configure/advanced/security/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"link\"> Security
                                </a>
                              </li>

                                       ";
        // line 1120
        echo "                                       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminKlaviyoPsConfig&amp;token=bbf2f41fee84507bc51de1f8560c9d92\" class=\"link\">
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
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminSelfUpgrade&amp;token=9c0ae35e3239010518b84a7c332b8e02\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyb";
        // line 1158
        echo "oard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"218\" id=\"tab-AdminUkooCompatParent\">
                <span class=\"title\">Compatibilities</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"219\" id=\"subtab-AdminUkooCompatCompat\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminUkooCompatCompat&amp;token=d983d3a100e0b39ac4a8d4639566922a\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Compatibilities
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"220\" id=\"subtab-AdminUkooCompatSearch\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminUkooCompatSearch&amp;token=63e301f9900339b06a139745a2491431\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Search
                      </span>
                                                 ";
        // line 1197
        echo "   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"221\" id=\"subtab-AdminUkooCompatFilter\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminUkooCompatFilter&amp;token=c164926ab52858d427953ae337ce720e\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Search filters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                                                                                                                        
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"225\" id=\"subtab-AdminUkooCompatImportFile\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminUkooCompatImportFile&amp;token=968c0cc738675f560c98982885510ecf\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      CSV imports
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                            ";
        // line 1228
        echo "                                        keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"226\" id=\"subtab-AdminUkooCompatAlias\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminUkooCompatAlias&amp;token=a43c3f4ee86ab2b21fd9bc9800fc1389\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Alias
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"227\" id=\"subtab-AdminUkooCompatAliasInstance\">
                    <a href=\"http://euromus.local/admineuromus1/index.php?controller=AdminUkooCompatAliasInstance&amp;token=00c34ee1e70a47d713c0d0874ddba40d\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Alias instance
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                        ";
        // line 1260
        echo "    </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
        <div
        id=\"header-multishop\"
        class=\"header-multishop header-multishop-default header-multishop-dark\"
        data-shop-id=\"1\"        data-header-color-notification=\"Customize your multistore header, &lt;a href=&quot;http://euromus.local/admineuromus1/index.php?controller=AdminShop&amp;shop_id=1&amp;updateshop=1&amp;token=2bc43f04ffbe5319017c1e0c98e6a314&quot;&gt;pick a color&lt;/a&gt; for this store context.\"        data-checkbox-notification=\"To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save. \"
    >
      <div class=\"header-multishop-top-bar\">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
                      <svg width=\"43px\" height=\"30px\" viewBox=\"0 0 43 30\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
  <defs>
    <rect id=\"path-1\" x=\"0\" y=\"0\" width=\"51\" height=\"36\"></rect>
  </defs>
  <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" opacity=\"0.599844\">
    <g id=\"storefront-24px-(1)\" transform=\"translate(-4.000000, -6.000000)\">
      <g id=\"Shape\">
        <mask id=\"mask-2\" fill=\"#fefefe\">
          <use xlink:href=\"#path-1\"></use>
        </mask>
        <g id=\"Mask\"></g>
        <path d=\"M46.787234,18.4344444 L44.5290073,9.20888889 C44.0558551,7.30888889 42.3783153,6 40.4211856,6 L10.5480733,6 C8.61245052,6 6.91340382,7.33 6.46175849,9.20888889 L4.20353187,18.4344444 C3.68736578,20.5877778 4.16051803,22.7833333 5.53696092,24.5144444 C5.70901628,24.7466667 5.94559241,24.9155556 6.13915469,25.1266667 L6.13915469,39.7777778 C6.13915469,42.1 8.07477751,44 10.4405387,44 L40.5502271,44 C42.9159883,44 44.8516111,42.1 44.8516111,39.7777778 L44.8516111,25.1266667 C45.0451734,24.9366667 45.2";
        // line 1289
        echo "817495,24.7466667 45.4538049,24.5355556 C46.8302478,22.8044444 47.324907,20.5877778 46.787234,18.4344444 Z M40.3566648,10.2011111 L42.6148914,19.4266667 C42.8299606,20.3133333 42.6363984,21.2 42.0772184,21.8966667 C41.7761215,22.2766667 41.1309139,22.8888889 40.0555679,22.8888889 C38.7436458,22.8888889 37.603779,21.8544444 37.4532306,20.4822222 L36.2058292,10.2222222 L40.3566648,10.2011111 Z M27.6460749,10.2222222 L31.8614313,10.2222222 L33.022805,19.7644444 C33.1303396,20.5877778 32.8722566,21.4111111 32.3130766,22.0233333 C31.8399244,22.5722222 31.1517029,22.8888889 30.2699192,22.8888889 C28.8289556,22.8888889 27.6460749,21.6433333 27.6460749,20.1233333 L27.6460749,10.2222222 Z M17.9464539,19.7644444 L19.1293345,10.2222222 L23.3446909,10.2222222 L23.3446909,20.1233333 C23.3446909,21.6433333 22.1618103,22.8888889 20.5702982,22.8888889 C19.8390629,22.8888889 19.1723484,22.5722222 18.6561823,22.0233333 C18.1185093,21.4111111 17.8604262,20.5877778 17.9464539,19.7644444 Z M8.37587439,19.4266667 L10.5480733,10.2222222 L14.7849366,10.2222222 L13.5375353,20.4822222 C13.3654799,21.8544444 12.24712,22.8888889 10.9351979,22.8888889 C9.88135881,22.8888889 9.21464428,22.2766667 8.93505432,21.8966667 C8.35436747,21.2211111 8.16080519,20.3133333 8.37587439,19.4266667 Z M10.4405387,39.7777778 L10.4405387,27.0477778 C10.6125941,27.0688889 10.7631425,27.1111111 10.9351979,27.1111111 C12.8063,27.1111111 14.5053467,26.3511111 15.752748,25.1055556 C17.0431633,26.3722222 18.7637169,27.1111111 20.7208466,27.1111111 C22.5919487,27.1111111 24.2694885,26.3511111 25.5168898,25.1477778 C26.7857981,26.3511111 28.5063517,27.1111111 30.4419746,27.1111111 C32.2485559,27.1111111 33.9691095,26.3722222 35.2595247,25.1055556 C36.5069261,26.3511111 38.2059728,27.1111111 40.0770748,27.1111111 C40.2491302,27.1111111 40.3996786,27.0688889 40.571734,27.0477778 L40.571734,39.7777778 L10.4405387,39.7777778 Z\" fill=\"black\" fill-rule=\"nonzero\" mask=\"url(#mask-2)\"></path>
      </g>
    </g>
  </g>
</svg>
   ";
        // line 1294
        echo "       
          <h2 class=\"header-multishop-title\">
            euromus
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

              <div class=\"header-multishop-right\">
                    <a class=\"header-multishop-view-action\" href=\"http://euromus.local/\" target=\"_blank\" rel=\"nofollow\">View my store <i class=\"material-icons\">visibility</i></a>
                  </div>
      
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
                                    <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"Search store name\" data-no-results=\"No results found for\" data-searching=\"Searching for\">
            </div>
                        
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                                <li class=\"multishop-modal-all multishop-modal-item\">
                                      <span class=\"multishop-modal-color\" style=\"background-color:#25b9d7;\"></span>
                                    <a class=\"multishop-modal-all-name\" href=\"/admineuromus1/index.php/sell/catalog/products-v2/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo&amp;setShopContext=\">
                    <span>All stores</span>
                  </a>
                </li>
                
                              <li class=\"multishop-modal-group-item multishop-modal-item first-group-item\">
                                    <span class=\"multishop-modal-color-container\">
                    <";
        // line 1327
        echo "i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\" href=\"http://euromus.local/admineuromus1/index.php?controller=AdminShopGroup&amp;id_shop_group=1&amp;updateshop_group=1&amp;token=244a81c4ca2a2469080d13de3e6282ac\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Edit color\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"/admineuromus1/index.php/sell/catalog/products-v2/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo&amp;setShopContext=g-1\">Group Default</a>
                                  </li>

                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container multishop-modal-color-check\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" href=\"http://euromus.local/admineuromus1/index.php?controller=AdminShop&amp;shop_id=1&amp;updateshop=1&amp;token=2bc43f04ffbe5319017c1e0c98e6a314\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Edit color\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admineuromus1/index.php/sell/catalog/products-v2/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo&amp;setShopContext=s-1\">euromus</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://euromus.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-i";
        // line 1343
        echo "tem-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #ff0d29;\" href=\"http://euromus.local/admineuromus1/index.php?controller=AdminShop&amp;shop_id=2&amp;updateshop=1&amp;token=2bc43f04ffbe5319017c1e0c98e6a314\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Edit color\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admineuromus1/index.php/sell/catalog/products-v2/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo&amp;setShopContext=s-2\">asm</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://asm.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #0195ff;\" href=\"http://euromus.local/admineuromus1/index.php?controller=AdminShop&amp;shop_id=3&amp;updateshop=1&amp;token=2bc43f04ffbe5319017c1e0c98e6a314\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Edit color\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admineuromus1/index.php/sell/catalog/products-v2/?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo&amp;setShopContext=s-3\">asd</a>                    </div>
                                          <a class=\"mul";
        // line 1358
        echo "tishop-modal-shop-view\" href=\"http://asd.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                          </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"/admineuromus1/themes/new-theme/public/multistore_header.bundle.js?8.1.3\"></script>
  
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admineuromus1/index.php/sell/catalog/products?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" aria-current=\"page\">Products</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Products          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary new-product-button pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admineuromus1/index.php/sell/catalog/products-v2/create?shopId=1&amp;_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\"                  title=\"New product\"                  data-modal-title=\"Add new product\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  New product
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admineuromus1/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-proje";
        // line 1403
        echo "ct.org%252Fen%252Fdoc%252FAdminProducts%253Fversion%253D8.1.3%2526country%253Den/Help?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item new-product-button  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admineuromus1/index.php/sell/catalog/products-v2/create?shopId=1&amp;_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\"              title=\"New product\"            >
              New product
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admineuromus1/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminProducts%253Fversion%253D8.1.3%2526country%253Den/Help?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1455
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
  <a href=\"/admineuromus1/index.php/sell/catalog/products?_token=4GBTqLwPH1NB3xJQdBgXmxFj_L39Kpe9PSbM60jwhLo\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1489
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 108
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1455
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

    // line 1489
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
        return "__string_template__15294d6546297343fa50168db0c8ebe9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1674 => 1489,  1653 => 1455,  1642 => 108,  1633 => 1489,  1593 => 1455,  1539 => 1403,  1492 => 1358,  1475 => 1343,  1457 => 1327,  1422 => 1294,  1415 => 1289,  1384 => 1260,  1350 => 1228,  1317 => 1197,  1276 => 1158,  1236 => 1120,  1206 => 1092,  1172 => 1060,  1139 => 1029,  1109 => 1001,  1076 => 970,  1045 => 941,  1005 => 903,  972 => 872,  940 => 842,  906 => 810,  874 => 780,  840 => 748,  808 => 718,  774 => 686,  735 => 649,  700 => 616,  670 => 588,  637 => 557,  604 => 526,  572 => 496,  539 => 465,  506 => 434,  459 => 389,  409 => 341,  360 => 294,  306 => 242,  263 => 201,  245 => 185,  203 => 145,  161 => 108,  149 => 98,  118 => 69,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__15294d6546297343fa50168db0c8ebe9", "");
    }
}
