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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/footer.htm */
class __TwigTemplate_ba73fad81a29e79755075601aa56ad5b9993081bf38913be5c3fae36893f2201 extends \Twig\Template
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
        echo "<footer class=\"bg-black-blue text-light footer-long\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-3\">
                        <img alt=\"Image\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-retailpay-white.svg");
        echo "\" class=\"mb-4\" />
                        <p class=\"text-muted\">
                            &copy; 2018 RetailPay Limited.
                            <br />All rights reserved.
                        </p>
                    </div>
                    <!--end of col-->
                    <div class=\"col-12 col-md-9\">
                        <span class=\"h5\">Value for Everyone</span>
                        <div class=\"row no-gutters\">
                            <div class=\"col-6 col-lg-3\">
                                <h6>RetailPay</h6>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">About RetailPay</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Careers</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Press and News</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">POS</a>
                                    </li>

                                    <li>
                                        <a href=\"terms-of-service.html\">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of col-->
                            <div class=\"col-6 col-lg-3\">
                                <h6>Suppliers</h6>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">Our Solution</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Benefits</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Features</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Requirements</a>
                                    </li>

                                    <li>
                                        <a href=\"#\">FAQs</a>
                                    </li>

                                </ul>
                            </div>
                            <!--end of col-->
                            <div class=\"col-6 col-lg-3\">
                                <h6>Retailers</h6>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">Our Solution</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Benefits</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Features</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Requirements</a>
                                    </li>

                                    <li>
                                        <a href=\"#\">FAQs</a>
                                    </li>

                                </ul>
                            </div>
                            <!--end of col-->
                            <div class=\"col-6 col-lg-3\">

                            </div>
                            <!--end of col-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </footer>";
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-black-blue text-light footer-long\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-3\">
                        <img alt=\"Image\" src=\"{{ 'assets/img/logo-retailpay-white.svg'|theme }}\" class=\"mb-4\" />
                        <p class=\"text-muted\">
                            &copy; 2018 RetailPay Limited.
                            <br />All rights reserved.
                        </p>
                    </div>
                    <!--end of col-->
                    <div class=\"col-12 col-md-9\">
                        <span class=\"h5\">Value for Everyone</span>
                        <div class=\"row no-gutters\">
                            <div class=\"col-6 col-lg-3\">
                                <h6>RetailPay</h6>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">About RetailPay</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Careers</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Press and News</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">POS</a>
                                    </li>

                                    <li>
                                        <a href=\"terms-of-service.html\">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of col-->
                            <div class=\"col-6 col-lg-3\">
                                <h6>Suppliers</h6>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">Our Solution</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Benefits</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Features</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Requirements</a>
                                    </li>

                                    <li>
                                        <a href=\"#\">FAQs</a>
                                    </li>

                                </ul>
                            </div>
                            <!--end of col-->
                            <div class=\"col-6 col-lg-3\">
                                <h6>Retailers</h6>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">Our Solution</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Benefits</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Features</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Requirements</a>
                                    </li>

                                    <li>
                                        <a href=\"#\">FAQs</a>
                                    </li>

                                </ul>
                            </div>
                            <!--end of col-->
                            <div class=\"col-6 col-lg-3\">

                            </div>
                            <!--end of col-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </footer>", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/footer.htm", "");
    }
}
