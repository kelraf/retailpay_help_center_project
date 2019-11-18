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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/layouts/index.htm */
class __TwigTemplate_0319ab044eac1584f02214c10234f7661dccca07e9076701273563810af8893c extends \Twig\Template
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
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("files/css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "

</head>

<body>

    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "
    <div class=\"main-container wrapper-1600\">
        <section class=\"bg-black-blue text-light height-30\">
            <div class=\"container align-self-center\">

                <h1 class=\"h1 mb-2\">RetailPay Help Center</h1>
                <p>Hello. What can we help you with?</p>

                <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Search our documentation\">

            </div>
            <!--end of container-->
        </section>
        <!--end of section-->


        <section class=\"bg-white pb-1\">
            <div class=\"container\">
                <div class=\"row justify-content-start text-left section-intro\">
                    <div class=\"col-12 col-md-9 col-lg-8\">
                        <h2 class=\"display-5 mb-0\">RetailPay brings everyone together</h2>
                        <p>Learn how to use retailpay as a</p>
                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->


        <section class=\"bg-white pb-1 pt-1\">
            <div class=\"container\">
                <div class=\"row justify-content-start text-left section-intro\">
                    <div class=\"col-12 col-md-6\">

                        <a href=\"\" class=\"card p-4\">
                            <h2>Retailers</h2>
                            <p class=\"text-dark\">Learn how to use RetailPay to manage your store, Inventory, sell
                                and so much more</p>
                            <span>Learn More ›<span>
                        </a>

                    </div>
                    <!--end of col-->

                    <div class=\"col-12 col-md-6\">

                        <a href=\"\" class=\"card p-4\">
                            <h2>Supplier</h2>
                            <p class=\"text-dark\">Learn how track your goods that are on consignment, distribution and
                                sales and profits
                            </p>
                            <span>Learn More ›<span>
                        </a>

                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->

    ";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "    </div>

       ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("files/js"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/layouts/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 87,  139 => 86,  135 => 84,  131 => 83,  63 => 17,  59 => 16,  51 => 10,  47 => 9,  37 => 1,);
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

<body>

    {% partial 'layouts/header' %}

    <div class=\"main-container wrapper-1600\">
        <section class=\"bg-black-blue text-light height-30\">
            <div class=\"container align-self-center\">

                <h1 class=\"h1 mb-2\">RetailPay Help Center</h1>
                <p>Hello. What can we help you with?</p>

                <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Search our documentation\">

            </div>
            <!--end of container-->
        </section>
        <!--end of section-->


        <section class=\"bg-white pb-1\">
            <div class=\"container\">
                <div class=\"row justify-content-start text-left section-intro\">
                    <div class=\"col-12 col-md-9 col-lg-8\">
                        <h2 class=\"display-5 mb-0\">RetailPay brings everyone together</h2>
                        <p>Learn how to use retailpay as a</p>
                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->


        <section class=\"bg-white pb-1 pt-1\">
            <div class=\"container\">
                <div class=\"row justify-content-start text-left section-intro\">
                    <div class=\"col-12 col-md-6\">

                        <a href=\"\" class=\"card p-4\">
                            <h2>Retailers</h2>
                            <p class=\"text-dark\">Learn how to use RetailPay to manage your store, Inventory, sell
                                and so much more</p>
                            <span>Learn More ›<span>
                        </a>

                    </div>
                    <!--end of col-->

                    <div class=\"col-12 col-md-6\">

                        <a href=\"\" class=\"card p-4\">
                            <h2>Supplier</h2>
                            <p class=\"text-dark\">Learn how track your goods that are on consignment, distribution and
                                sales and profits
                            </p>
                            <span>Learn More ›<span>
                        </a>

                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end of section-->

    {% partial 'layouts/footer' %}
    </div>

       {% partial 'files/js' %}


</body>

</html>", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/layouts/index.htm", "");
    }
}
