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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/sidenav.htm */
class __TwigTemplate_ff0ecb0c048cd8aba2c304c36a437aa04ba2cc1c8c056fdb4bd78eaedab6aca7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 3)) ? (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 3)) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "children", [], "any", false, false, false, 4);
        // line 5
        echo "

<nav class=\"collapse bd-links\" id=\"bd-docs-nav\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["childPage"], "navigation_hidden", [], "any", false, false, false, 8)) {
                // line 9
                echo "    <div class=\"bd-toc-item ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 9) == twig_get_attribute($this->env, $this->source, $context["childPage"], "url", [], "any", false, false, false, 9))) ? ("active") : (""));
                echo "\">
        <a class=\"bd-toc-link\" href=\"";
                // line 10
                echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["childPage"], "url", [], "any", false, false, false, 10));
                echo "\">
            ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childPage"], "title", [], "any", false, false, false, 11), "html", null, true);
                echo "
        </a>
        <ul class=\"nav bd-sidenav\">
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["childPage"], "children", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["childChildPage"]) {
                    if ( !twig_get_attribute($this->env, $this->source, $context["childChildPage"], "navigation_hidden", [], "any", false, false, false, 14)) {
                        // line 15
                        echo "            <li class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 15) == twig_get_attribute($this->env, $this->source, $context["childChildPage"], "url", [], "any", false, false, false, 15))) ? ("active bd-sidenav-active") : (""));
                        echo "\">
                <a href=\"";
                        // line 16
                        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["childChildPage"], "url", [], "any", false, false, false, 16));
                        echo "\">
                    ";
                        // line 17
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childChildPage"], "title", [], "any", false, false, false, 17), "html", null, true);
                        echo "
                </a>
            </li>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childChildPage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        </ul>
    </div>

    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/sidenav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  94 => 21,  83 => 17,  79 => 16,  74 => 15,  69 => 14,  63 => 11,  59 => 10,  54 => 9,  49 => 8,  44 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}


<nav class=\"collapse bd-links\" id=\"bd-docs-nav\">
    {% for childPage in childPages if not childPage.navigation_hidden %}
    <div class=\"bd-toc-item {{ page.url == childPage.url ? 'active' }}\">
        <a class=\"bd-toc-link\" href=\"{{ childPage.url|app }}\">
            {{ childPage.title }}
        </a>
        <ul class=\"nav bd-sidenav\">
            {% for childChildPage in childPage.children if not childChildPage.navigation_hidden %}
            <li class=\"{{ page.url == childChildPage.url ? 'active bd-sidenav-active' }}\">
                <a href=\"{{ childChildPage.url|app }}\">
                    {{ childChildPage.title }}
                </a>
            </li>
            {% endfor %}
        </ul>
    </div>

    {% endfor %}
</nav>", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/sidenav.htm", "");
    }
}
