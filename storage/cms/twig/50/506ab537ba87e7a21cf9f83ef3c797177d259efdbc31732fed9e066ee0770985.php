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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/layouts/docs-page.htm */
class __TwigTemplate_7aa545ef7c37fee46b4748807ca67fa2c38807768961ad6433ee143675ce2cec extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>RetailPay | Value for Everyone</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Value for Everyone\">
    
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("files/css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "

</head>

<body data-spy=\"scroll\" data-offset=\"200\" data-target=\".navbar\">

    <div class=\"wrapper-1600\">

    ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "

    <div class=\"main-container\">
        <section class=\"bg-black-blue text-light height-20\">
            <div class=\"container align-self-center\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-4\">
                        <h1 class=\"h1 mb-2\">Retailers Guide</h1>
                    </div>
                    <div class=\"col-12 col-md-8\">
                        <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Search our documentation\">
                    </div>
                </div>
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->

        ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/breadcrumb"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "
        <section class=\"bg-white py-0\">
            <div class=\"container-fluid\">
                <div class=\"row flex-xl-nowrap\">
                    <div class=\"col-12 col-md-3 col-xl-2 bd-sidebar\">
                        ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/sidenav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "                    </div>
                    <!--end of col-->

                    <div class=\"col-12 col-md-8 pl-5 pt-5\">
                       
                       <h1>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), "html", null, true);
        echo "</h1>
                       ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 52
        echo "                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->


        ";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "        
    </div>
    </div>

    ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("files/js"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "


</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/layouts/docs-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 68,  136 => 67,  130 => 63,  126 => 62,  114 => 52,  112 => 51,  108 => 50,  101 => 45,  97 => 44,  90 => 39,  86 => 38,  66 => 20,  62 => 19,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>RetailPay | Value for Everyone</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Value for Everyone\">
    
    {% partial 'files/css' %}


</head>

<body data-spy=\"scroll\" data-offset=\"200\" data-target=\".navbar\">

    <div class=\"wrapper-1600\">

    {% partial 'layouts/header' %}


    <div class=\"main-container\">
        <section class=\"bg-black-blue text-light height-20\">
            <div class=\"container align-self-center\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-4\">
                        <h1 class=\"h1 mb-2\">Retailers Guide</h1>
                    </div>
                    <div class=\"col-12 col-md-8\">
                        <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Search our documentation\">
                    </div>
                </div>
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->

        {% partial 'layouts/breadcrumb' %}

        <section class=\"bg-white py-0\">
            <div class=\"container-fluid\">
                <div class=\"row flex-xl-nowrap\">
                    <div class=\"col-12 col-md-3 col-xl-2 bd-sidebar\">
                        {% partial 'layouts/sidenav'%}
                    </div>
                    <!--end of col-->

                    <div class=\"col-12 col-md-8 pl-5 pt-5\">
                       
                       <h1>{{ this.page.title }}</h1>
                       {% page %}
                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->


        {%  partial 'layouts/footer'%}
        
    </div>
    </div>

    {% partial 'files/js' %}



</body>

</html>", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/layouts/docs-page.htm", "");
    }
}
