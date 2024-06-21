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

/* @PrestaShop/Admin/Multistore/dropdown.html.twig */
class __TwigTemplate_a418bf8c3f5b6766d285843808678af2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'multistore_dropdown' => [$this, 'block_multistore_dropdown'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $this->displayBlock('multistore_dropdown', $context, $blocks);
    }

    public function block_multistore_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "  <div class=\"btn-group multistore-dropdown js-multistore-dropdown\">
    <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton4\" data-toggle=\"dropdown\" data-flip=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <i class=\"material-icons\">storefront</i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton4\">
      <div class=\"multistore-dropdown-search-container\">
        <i class=\"material-icons\">search</i>
        <input type=\"text\" class=\"form-control multistore-dropdown-search js-multistore-dropdown-search\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search store name", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-no-results=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
        echo "\" data-searching=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
        echo "\">
      </div>

      <div class=\"multistore-dropdown-content js-multistore-scrollbar\">
        <ul class=\"multistore-dropdown-group\">
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 39
            echo "          <li class=\"multistore-dropdown-group-item\">
            <a class=\"multistore-dropdown-group-name\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl($context["group"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 40)), "html", null, true);
            echo "</a>

            <ul class=\"multistore-dropdown-shops\">
              ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                // line 44
                echo "                <li class=\"multistore-dropdown-shop\">
                  <a class=\"multistore-dropdown-shop-name";
                // line 45
                if ((twig_get_attribute($this->env, $this->source, $context["shop"], "hasMainUrl", [], "method", false, false, false, 45) == false)) {
                    echo " multistore-dropdown-no-url\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "</a>";
                } else {
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl($context["shop"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "</a>";
                }
                // line 46
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, ($context["shopCustomizationChecker"] ?? null), "isConfigurationCustomizedForThisShop", [0 => ($context["configurationKey"] ?? null), 1 => $context["shop"], 2 => ($context["isGroupShopContext"] ?? null)], "method", false, false, false, 46) == true)) {
                    // line 47
                    echo "                    <p class=\"multistore-dropdown-shop-status multistore-dropdown-shop-status-locked\">
                      <i class=\"material-icons\">https</i>
                      ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customized", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 51
                    echo "                    <p class=\"multistore-dropdown-shop-status\">
                      ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inherited", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                    </p>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </ul>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </ul>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Multistore/dropdown.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 60,  128 => 57,  120 => 54,  115 => 52,  112 => 51,  107 => 49,  103 => 47,  100 => 46,  88 => 45,  85 => 44,  81 => 43,  73 => 40,  70 => 39,  66 => 38,  54 => 33,  45 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Multistore/dropdown.html.twig", "C:\\xampp\\htdocs\\euromus\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Multistore\\dropdown.html.twig");
    }
}
