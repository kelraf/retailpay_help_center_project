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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/breadcrumb.htm */
class __TwigTemplate_12013d3f760446029ed05d159492a4f6213c9b59c4852e2c5cf47b5ea4b7a3ce extends \Twig\Template
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
        // line 1
        echo "<section class=\"bg-white border-bottom mb-0 py-0\">
    <nav aria-label=\"breadcrumb\" role=\"navigation\" class=\"bg-white\">
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col\">
                    ";
        // line 6
        if (($context["breadcrumbs"] ?? null)) {
            // line 7
            echo "                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\">Help Center</a></li>
                            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 10
                echo "                            
                                ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, false, 13), "html", null, true);
                    echo "
                                    </li>
                                ";
                } else {
                    // line 16
                    echo "                                
                                <li class=\"breadcrumb-item\">
                                        <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 18), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, false, 18), "html", null, true);
                    echo "</a>
                                </li>
                                    
                                ";
                }
                // line 22
                echo "                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        </ol>
                    ";
        }
        // line 26
        echo "                  </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </nav>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/breadcrumb.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  88 => 24,  81 => 22,  72 => 18,  68 => 16,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"bg-white border-bottom mb-0 py-0\">
    <nav aria-label=\"breadcrumb\" role=\"navigation\" class=\"bg-white\">
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col\">
                    {% if breadcrumbs %}
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\">Help Center</a></li>
                            {% for breadcrumb in breadcrumbs %}
                            
                                {% if breadcrumb.isActive %}
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        {{ breadcrumb.title }}
                                    </li>
                                {% else %}
                                
                                <li class=\"breadcrumb-item\">
                                        <a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }}</a>
                                </li>
                                    
                                {% endif %}
                            
                            {% endfor %}
                        </ol>
                    {% endif %}
                  </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </nav>
</section>", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/breadcrumb.htm", "");
    }
}
