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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/nav.htm */
class __TwigTemplate_d3249621b82aa69f6ef89ed3419171ac010a34fe25825f7b369e8db8a26fbcfd extends \Twig\Template
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
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 3
        echo "
";
        // line 39
        echo "
<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["docsMenu"] ?? null), "menuItems", [], "any", false, false, false, 41)) {
            // line 42
            echo "  <ul class=\"navbar-nav\">
    ";
            // line 43
            echo twig_call_macro($macros["nav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, ($context["docsMenu"] ?? null), "menuItems", [], "any", false, false, false, 43)], 43, $context, $this->getSourceContext());
            echo "
  </ul>
  ";
        }
        // line 46
        echo "  
   <ul class=\"navbar-nav ml-lg-5\">
        <li class=\"nav-item d-flex align-items-center\">
            <a href=\"#\" class=\"btn btn-primary\">Sign in</a>
        </li>
    </ul>
</div>


<!--end nav collapse-->";
    }

    // line 4
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 5
            $macros["nav"] = $this;
            // line 6
            echo "
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "
<li class=\"nav-item dropdown ";
                    // line 10
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 10)) ? ("current-menu-item") : (""));
                    echo "\">
  <a href=\"\">
  </a>
  <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\"
    data-toggle=\"dropdown\">";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 14), "html", null, true);
                    echo "</a>

  <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
    ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 17));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "    ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 18)) {
                            // line 19
                            echo "    <a class=\"dropdown-item\" href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 19), "html", null, true);
                            echo "\">
      <span class=\"mb-0\">";
                            // line 20
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 20), "html", null, true);
                            echo "</span>
    </a>
    ";
                        } else {
                            // line 23
                            echo "    <a class=\"dropdown-item\" href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 23), "html", null, true);
                            echo "\">
      <span class=\"mb-0\">";
                            // line 24
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 24), "html", null, true);
                            echo "</span>
    </a>
    <div class=\"dropdown-divider\"></div>
    ";
                        }
                        // line 28
                        echo "    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "  </div>
</li>
";
                } else {
                    // line 32
                    echo "
<li class=\"nav-item ";
                    // line 33
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 33)) ? ("current-menu-item") : (""));
                    echo "\">
  <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" class=\"nav-link\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 34), "html", null, true);
                    echo "</a>
</li>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 34,  175 => 33,  172 => 32,  167 => 29,  153 => 28,  146 => 24,  141 => 23,  135 => 20,  130 => 19,  127 => 18,  110 => 17,  104 => 14,  97 => 10,  94 => 9,  92 => 8,  88 => 7,  85 => 6,  83 => 5,  70 => 4,  57 => 46,  51 => 43,  48 => 42,  46 => 41,  42 => 39,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Custom navigation implementation that only shows 2 levels deep #}
{% import _self as nav %}

{% macro render_menu(items) %}
{% import _self as nav %}

{% for item in items %}
{% if item.items %}

<li class=\"nav-item dropdown {{ item.isActive ? 'current-menu-item' }}\">
  <a href=\"\">
  </a>
  <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\"
    data-toggle=\"dropdown\">{{ item.title }}</a>

  <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
    {% for child in item.items %}
    {% if loop.last %}
    <a class=\"dropdown-item\" href=\"{{ child.url }}\">
      <span class=\"mb-0\">{{ child.title }}</span>
    </a>
    {% else %}
    <a class=\"dropdown-item\" href=\"{{ child.url }}\">
      <span class=\"mb-0\">{{ child.title }}</span>
    </a>
    <div class=\"dropdown-divider\"></div>
    {% endif %}
    {% endfor %}
  </div>
</li>
{% else %}

<li class=\"nav-item {{ item.isActive ? 'current-menu-item' }}\">
  <a href=\"{{ item.url }}\" class=\"nav-link\"> {{ item.title }}</a>
</li>
{% endif %}
{% endfor %}
{% endmacro %}

<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
  {% if docsMenu.menuItems %}
  <ul class=\"navbar-nav\">
    {{ nav.render_menu(docsMenu.menuItems) }}
  </ul>
  {% endif %}
  
   <ul class=\"navbar-nav ml-lg-5\">
        <li class=\"nav-item d-flex align-items-center\">
            <a href=\"#\" class=\"btn btn-primary\">Sign in</a>
        </li>
    </ul>
</div>


<!--end nav collapse-->", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/nav.htm", "");
    }
}
