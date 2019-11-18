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

/* /Users/ogare/Projects/RetailpayDocs/plugins/rainlab/pages/components/childpages/default.htm */
class __TwigTemplate_4722b5ad8f11723d58f1e2ca4e062724ea4cbb0991fcf19cd30a51745899e3a0 extends \Twig\Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pages", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pages", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 5));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/plugins/rainlab/pages/components/childpages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.pages is not empty %}
    <ul>
        {% for page in __SELF__.pages %}
            <li>
                <a href=\"{{ page.url | app }}\">{{ page.title }}</a>
            </li>
        {% endfor %}
    </ul>
{% endif %}", "/Users/ogare/Projects/RetailpayDocs/plugins/rainlab/pages/components/childpages/default.htm", "");
    }
}
