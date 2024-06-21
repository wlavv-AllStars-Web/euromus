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

/* @PrestaShop/Admin/Sell/Catalog/Product/pre_select_shop.html.twig */
class __TwigTemplate_0423842d6c8a4bede11f310b3398bb39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/pre_select_shop.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<div class=\"product-page-v2\">
  <div class=\"header-toolbar d-print-none\">
    ";
        // line 30
        echo $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension']->getMultistoreProductHeader(($context["productId"] ?? null));
        echo "
  </div>

  <div
    class=\"multi-shop-context-warning alert alert-warning d-print-none mt-4\"
    role=\"alert\"
    data-modal-title=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["modalTitle"] ?? null), "html", null, true);
        echo "\"
    data-shop-selector=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["shopSelector"] ?? null), "createView", [], "method", false, false, false, 37), 'row'), "html_attr");
        echo "\"
    data-shop-ids=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_join_filter(($context["productShopIds"] ?? null), ","), "html", null, true);
        echo "\"
    href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_edit", ["productId" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\"
  >
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
    </button>
    <div class=\"alert-text\">
      <p>";
        // line 45
        echo ($context["warningMessage"] ?? null);
        echo "</p>
    </div>
  </div>
</div>
";
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/pre_select_product_shop.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/pre_select_shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  98 => 52,  94 => 51,  85 => 45,  76 => 39,  72 => 38,  68 => 37,  64 => 36,  55 => 30,  51 => 28,  47 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/pre_select_shop.html.twig", "C:\\xampp\\htdocs\\euromus\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\pre_select_shop.html.twig");
    }
}
