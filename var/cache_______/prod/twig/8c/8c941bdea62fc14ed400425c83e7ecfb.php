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

/* @PrestaShop/Admin/Sell/Catalog/Product/shops.html.twig */
class __TwigTemplate_810239be5a658aa99c9483036150ba77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'product_creation_form' => [$this, 'block_product_creation_form'],
            'product_rest' => [$this, 'block_product_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["legacyBaseLayout"] = ((((array_key_exists("lightDisplay", $context)) ? (_twig_default_filter(($context["lightDisplay"] ?? null), false)) : (false))) ? ("light_display_layout.tpl") : ("layout.tpl"));
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/shops.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productShopsForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal product-shops-form product-page-v2 justify-content-md-center", "novalidate" => "novalidate", "data-product-id" =>         // line 36
($context["productId"] ?? null)]]);
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('product_creation_form', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('product_rest', $context, $blocks);
    }

    // line 38
    public function block_product_creation_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["productShopsForm"] ?? null), 'row');
        echo "
  ";
    }

    // line 42
    public function block_product_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productShopsForm"] ?? null), 'form_end');
        echo "
  ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_shops.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/shops.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 50,  110 => 48,  106 => 47,  99 => 43,  95 => 42,  88 => 39,  84 => 38,  80 => 42,  77 => 41,  75 => 38,  72 => 37,  70 => 36,  68 => 33,  64 => 32,  57 => 29,  53 => 28,  48 => 26,  46 => 25,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/shops.html.twig", "C:\\xampp\\htdocs\\euromus\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\shops.html.twig");
    }
}
