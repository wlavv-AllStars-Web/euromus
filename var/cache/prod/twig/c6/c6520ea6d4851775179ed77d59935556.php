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

/* __string_template__fc2ed41af44c8e1e4e5e8f9ca338b8fa */
class __TwigTemplate_91d495d5e9b18ccdcbdd5995b3d83d26 extends Template
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
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Home • euromus</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Foi efectuada uma nova encomenda na sua loja.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'Um novo cliente registou-se na sua loja.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Foi publicada uma nova mensagem na sua loja.';
    var see_msg = 'Ler esta mensagem';
    var token = 'e8b5e2836a1292c6bd18c289842daf9d';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = 'c14ab054a02b812e33d1ef4bbb36d7de';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/adminEuromus/index.php/improve/modules/manage?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA';
    var admin_notification_get_link = '/adminEuromus/index.php/common/notifications?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA';
    var admin_notification_push_link = adminNotificationPushLink = '/adminEuromus/index.php/common/notifications/ack?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var search_product_msg = 'Pesquisar um produto";
        // line 43
        echo "';
  </script>



<link
      rel=\"preload\"
      href=\"/adminEuromus/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adminEuromus/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminEuromus/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminEuromus/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminEuromus\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminEuromus\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSiz";
        // line 70
        echo "e\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/adminEuromus/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/adminEuromus/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/adminEuromus/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adminEuromus/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.5.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"";
        // line 92
        echo "></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/192.168.1.64:85\\/adminEuromus\\/index.php?controller=AdminGamification&token=1dea69481f1929dab2aa84fede1c6fd1\";
            var current_id_tab = 131;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/adminEuromus/index.php/common/notifications?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'pt';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

";
        // line 116
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt home\"
  data-base-url=\"/adminEuromus/index.php\"  data-token=\"mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/adminEuromus/index.php/modules/pseditionbasic/homepage?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8b7826c6647aa7a0840b22b1312bc54d\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:85/adminEuromus/index.php/sell/orders?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:85/adminEuromus/index.php/improve/modules/manage?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:85/adminEuromus/index.php/sell/catalog/categories/new?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item quick-row-link new-product-butto";
        // line 153
        echo "n\"
         href=\"http://192.168.1.64:85/adminEuromus/index.php/sell/catalog/products-v2/create?token=a7e542a0ce10937856159793dba25592\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e174f0e7afffb96f08acea22799495ba\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"44\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage?-n9ORmjn2oKA\"
        data-post-link=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Welcome - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
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
      action=\"/adminEuromus/index.php?controller=AdminSearch&amp;token=abdd145f225e4bab46911650ff22a1a0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-searc";
        // line 193
        echo "h\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeho";
        // line 207
        echo "lder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8b7826c6647aa7a0840b22b1312bc54d\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:85/adminEuromus/index.php/sell/orders?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Encomendas\"
    >Encomendas</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:85/adminEuromus/index.php/improve/modules/manage?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:85/adminEuromus/index.php/sell/catalog/categories/new?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Nova Categoria\"
    >Nova Categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:85/adminEuromus/index.php/sell/catalog/products-v2/create?token=a7e542a0ce10937856159793dba25592\"
             data-item=\"Novo produto\"
    >Novo produto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=A";
        // line 247
        echo "dminCartRules&amp;addcart_rule&amp;token=e174f0e7afffb96f08acea22799495ba\"
             data-item=\"Novo Voucher\"
    >Novo Voucher</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"52\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage?-n9ORmjn2oKA\"
      data-post-link=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"Welcome - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminQuickAccesses&token=cc28983a382ac8ce25e4a5b6d5199945\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;A sua loja está em modo de manutenção.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Os seus visitantes e clientes não podem aceder à sua loja quando esta se encontra em modo de manutenção.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Para gerir as definições de manutenção, vá a Parâmetros da loja &amp;gt; Geral &amp;gt; separador Manutenção.
          &lt;/p&gt;
                      &lt;p class=&quot;";
        // line 291
        echo "text-left&quot;&gt;
              Os administradores podem aceder ao escritório da loja sem guardar o seu IP.
            &lt;/p&gt;
                  \"
             href=\"/adminEuromus/index.php/configure/shop/maintenance/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Modo de manutenção</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://192.168.1.64:85/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver a minha loja</span>
    </a>
  </div>
          </div>
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
              Encomendas<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notif";
        // line 340
        echo "ications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e4eccc53481f65a9e7750a73f0e98215\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\"";
        // line 388
        echo " id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://192.168.1.64:85/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span class=\"employee_profile\">Bem-vindo de volta Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminEuromus/index.php/configure/advanced/employees/1/edit?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=192.168.1.64%3A85&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferr";
        // line 432
        echo "er nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gerir a sua conta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Treinamento
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/pt/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encontre um especialista
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://addons.prestashop.com/pt/?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Central de Ajuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminLogin&amp;logout=1&amp;token=ffc4ae7e97f8e3b75865d93dd9cb9242\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </h";
        // line 458
        echo "eader>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminEuromus/index.php/configure/advanced/employees/toggle-navigation?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/adminEuromus/index.php/modules/pseditionbasic/homepage?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"131\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/adminEuromus/index.php/modules/pseditionbasic/homepage?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li ";
        // line 500
        echo "class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminDashboard&amp;token=9d7f9be73bf346ebc8ba82489d81ef2e\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Painel de controlo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminEuromus/index.php/sell/orders/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                        ";
        // line 536
        echo "              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminEuromus/index.php/sell/orders/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminEuromus/index.php/sell/orders/invoices/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminEuromus/index.php/sell/orders/credit-slips/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminEuromus/index.php/sell/orders/delivery-slips/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

       ";
        // line 568
        echo "                                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCarts&amp;token=e4eccc53481f65a9e7750a73f0e98215\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adminEuromus/index.php/sell/catalog/products?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminEuromus/index.php/sell/catalog/products?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Produtos
 ";
        // line 598
        echo "                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminEuromus/index.php/sell/catalog/categories?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adminEuromus/index.php/sell/catalog/monitoring/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminAttributesGroups&amp;token=9fe4414de1b2b6845144f0e41aeb26da\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                             ";
        // line 629
        echo "   <a href=\"/adminEuromus/index.php/sell/catalog/brands/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/adminEuromus/index.php/sell/attachments/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCartRules&amp;token=e174f0e7afffb96f08acea22799495ba\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/adminEuromus/index.php/sell/stocks/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Inventário
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                      ";
        // line 661
        echo "                                
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminEuromus/index.php/sell/customers/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminEuromus/index.php/sell/customers/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adminEuromus/index.php/sell/addresses/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
          ";
        // line 691
        echo "                              </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCustomerThreads&amp;token=16773c544919102aed10bc6e2749bf22\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCustomerThreads&amp;token=16773c544919102aed10bc6e2749bf22\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminEuromus/index.php/sell/customer-service/order-messages/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Mensagens de En";
        // line 719
        echo "comendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminReturn&amp;token=0ff3bb35eedf00ab22be553015471589\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/adminEuromus/index.php/modules/metrics/legacy/stats?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminMetricsLegacyStatsController\">
                          ";
        // line 752
        echo "      <a href=\"/adminEuromus/index.php/modules/metrics/legacy/stats?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Estatísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/adminEuromus/index.php/modules/metrics?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adminEuromus/index.php/modules/mbo/modules/catalog/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            ";
        // line 789
        echo "</a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/adminEuromus/index.php/modules/mbo/modules/catalog/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminEuromus/index.php/improve/modules/manage?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Gestor de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminEuromus/index.php/improve/design/themes/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                      ";
        // line 819
        echo "                              <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/adminEuromus/index.php/improve/design/themes/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/adminEuromus/index.php/modules/mbo/themes/catalog/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminEuromus/index.php/improve/design/mail_theme/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Template de e-mail
                                </a>
                              </li>

                                                           ";
        // line 848
        echo "                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminEuromus/index.php/improve/design/cms-pages/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminEuromus/index.php/improve/design/modules/positions/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminImages&amp;token=fac0c26de670849f22dab23bfb3679e0\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminEuromus/index.php/modules/link-widget/list?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Lista de ligações
             ";
        // line 877
        echo "                   </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCarriers&amp;token=1270182c15534ad48a8de685ce4698f2\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminCarriers&amp;token=1270182c15534ad48a8de685ce4698f2\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adminEuromu";
        // line 909
        echo "s/index.php/improve/shipping/preferences/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminMbeConfiguration&amp;token=3cfa4c2b82a2a07b48807d010798a63f\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminMbeShipping&amp;token=0521feeba3db77b590bbffa527f15403\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminEuromus/index.php/improve/payment/payment_methods?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      P";
        // line 939
        echo "agamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminEuromus/index.php/improve/payment/payment_methods?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminEuromus/index.php/improve/payment/preferences?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminEuromus/index.php/improve/international/localization/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"lin";
        // line 969
        echo "k\">
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
                                <a href=\"/adminEuromus/index.php/improve/international/localization/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminEuromus/index.php/improve/international/zones/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminEuromus/index.php/improve/international/taxes/?_token=mGMfZpHQ";
        // line 999
        echo "xq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adminEuromus/index.php/improve/international/translations/settings?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-Marketing\">
                    <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2589397686dc7df9fc2b49304083c338\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"sub";
        // line 1031
        echo "tab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2589397686dc7df9fc2b49304083c338\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminPsfacebookModule&amp;token=2a84e366106d50a50ad3383b0d744b66\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"133\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/adminEuromus/index.php/modules/pseditionbasic/settings?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    key";
        // line 1067
        echo "board_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminEuromus/index.php/configure/shop/preferences/preferences?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminEuromus/index.php/configure/shop/preferences/preferences?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminEuromus/in";
        // line 1098
        echo "dex.php/configure/shop/order-preferences/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adminEuromus/index.php/configure/shop/product-preferences/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adminEuromus/index.php/configure/shop/customer-preferences/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminEuromus/index.php/configure/shop/contacts/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
         ";
        // line 1129
        echo "                     <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adminEuromus/index.php/configure/shop/seo-urls/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminSearchConf&amp;token=7c48eb227495235b2103be48cd696cc7\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminEuromus/index.php/configure/advanced/system-information/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu p";
        // line 1158
        echo "anel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/system-information/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/performance/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/administration/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/emails/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9OR";
        // line 1187
        echo "mjn2oKA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/import/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/employees/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/sql-requests/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/";
        // line 1219
        echo "adminEuromus/index.php/configure/advanced/logs/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/webservice-keys/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/feature-flags/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Características novas e experimentais
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminEuromus/index.php/configure/advanced/security/?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"link\"> Segurança
                                </a>
                              </li>

                        ";
        // line 1247
        echo "                                                      </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://192.168.1.64:85/adminEuromus/index.php?controller=AdminKlaviyoPsConfig&amp;token=bbf2f41fee84507bc51de1f8560c9d92\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/adminEuromus/index.php/modules/pseditionbasic/homepage?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" aria-current=\"page\">Welcome</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Home          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
";
        // line 1303
        echo "                   data-url=\"https://help.prestashop-project.org/pt/doc/HOME?version=8.1.1&amp;country=pt\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
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
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/pt/doc/HOME?version=8.1.1&amp;country=pt\"
            >
              Ajuda
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
        // line 1350
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"/adminEuromus/index.php/modules/pseditionbasic/homepage?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Ligar com o Addons Marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Ligue a sua loja à sua conta Addons para receber automaticamente actualizações importantes para os módulos que adquiriu. Ainda não tem uma conta?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Inscreva-se agora</a>
                  </p>
                  <p>
                      Se criou a sua conta utilizando o Google, por favor siga o procedimento de esquecimento de palavra-passe do Addons Marketplace para criar a sua palavra-passe : 
                      <a href=\"https://";
        // line 1393
        echo "authv2.prestashop.com/password/request \" target=\"_blank\">Redefinir a sua palavra-passe</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/adminEuromus/index.php/modules/mbo/addons/login?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Endereço de email</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Palavra-passe</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Lembrar-me
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Continuar!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Esqueceu-se da sua palavra-passe?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <d";
        // line 1430
        echo "iv class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmar encerramento de sessão</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Está prestes a encerrar sessão na sua conta Addons. Pode perder atualizações importantes de Addons que comprou.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancelar\">
          <a class=\"btn btn-primary uppercase\" href=\"/adminEuromus/index.php/modules/mbo/addons/logout?_token=mGMfZpHQxq9njqaM2hgh1hWTnpjXTtp-n9ORmjn2oKA\" id=\"module-modal-addons-logout-ack\">Sim, encerrar sessão</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1462
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 116
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1350
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

    // line 1462
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
        return "__string_template__fc2ed41af44c8e1e4e5e8f9ca338b8fa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1641 => 1462,  1620 => 1350,  1609 => 116,  1600 => 1462,  1566 => 1430,  1527 => 1393,  1478 => 1350,  1429 => 1303,  1371 => 1247,  1341 => 1219,  1307 => 1187,  1276 => 1158,  1245 => 1129,  1212 => 1098,  1179 => 1067,  1141 => 1031,  1107 => 999,  1075 => 969,  1043 => 939,  1011 => 909,  977 => 877,  946 => 848,  915 => 819,  883 => 789,  844 => 752,  809 => 719,  779 => 691,  747 => 661,  713 => 629,  680 => 598,  648 => 568,  614 => 536,  576 => 500,  532 => 458,  504 => 432,  458 => 388,  408 => 340,  357 => 291,  311 => 247,  269 => 207,  253 => 193,  211 => 153,  169 => 116,  143 => 92,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fc2ed41af44c8e1e4e5e8f9ca338b8fa", "");
    }
}
