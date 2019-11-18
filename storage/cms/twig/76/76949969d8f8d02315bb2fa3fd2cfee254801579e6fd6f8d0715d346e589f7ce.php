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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/header.htm */
class __TwigTemplate_22b210f442ce9efb14c8414308790b675b2a8385f605604ce4af9fad0781c67d extends \Twig\Template
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
        echo "<div class=\"nav-container\">
        <div class=\"bg-white navbar-light\">
                <nav class=\"navbar navbar-expand-lg retail-nav\">
                    <a class=\"navbar-brand\" href=\"/\">
                        <img alt=\"Retailpay\" height=\"35px\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-retailpay-hc.svg");
        echo "\" />
                    </a>

                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"drawer\" data-target=\"#drawer-1\">
                        <i class=\"icon-menu h4\"></i>
                    </button>
                    
                      ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "
                </nav>
            <!--end of container-->
        </div>
    </div>



   ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/mobinav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  57 => 13,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav-container\">
        <div class=\"bg-white navbar-light\">
                <nav class=\"navbar navbar-expand-lg retail-nav\">
                    <a class=\"navbar-brand\" href=\"/\">
                        <img alt=\"Retailpay\" height=\"35px\" src=\"{{ 'assets/img/logo-retailpay-hc.svg'|theme }}\" />
                    </a>

                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"drawer\" data-target=\"#drawer-1\">
                        <i class=\"icon-menu h4\"></i>
                    </button>
                    
                      {% partial 'layouts/nav'%}

                </nav>
            <!--end of container-->
        </div>
    </div>



   {% partial 'layouts/mobinav'%}", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/header.htm", "");
    }
}
