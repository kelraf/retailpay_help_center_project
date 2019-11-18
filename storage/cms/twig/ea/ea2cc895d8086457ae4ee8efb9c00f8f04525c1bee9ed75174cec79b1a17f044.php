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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/mobinav.htm */
class __TwigTemplate_a1365ad48b0f1d68f657243bafe5dc3d5a84f0c78d8cfe85121f9c799b4df349 extends \Twig\Template
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
        echo "<!--Mobile Vertical Navigation-->


    <div class=\"drawer drawer-left slide\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"drawer-1-title\"
        aria-hidden=\"true\" id=\"drawer-1\">
        <div class=\"drawer-content drawer-content-scrollable\" role=\"document\">
            <div class=\"drawer-header\">
                <div class=\"d-flex justify-content-between\">
                    <img alt=\"RetailPay\" class=\"retail-color\" height=\"35px\" src=\"assets/img/logo-retailpay.svg\" />
                    <div>
                        <a href=\"<%= session_path(@conn, :signin) %>\" class=\"btn btn-primary\">Sign in</a>
                    </div>
                </div>
            </div>
            <div class=\"drawer-body\">
                <ul class=\"retail-nav navbar-nav border-bottom\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"supplier.html\">Supplier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"retailer.html\">Retailers</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link disabled\">Distributors</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a href=\"help-center.html\" target=\"_blank\" class=\"nav-link\">Help Center</a>
                    </li>
                </ul>
            </div>
            <div class=\"drawer-footer\">
                <ul class=\"navbar-nav wd-100p\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"<%= page_path(@conn, :suppliers) %>\">Terms and conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--End Vertical Mobile Nav-->";
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/mobinav.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Mobile Vertical Navigation-->


    <div class=\"drawer drawer-left slide\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"drawer-1-title\"
        aria-hidden=\"true\" id=\"drawer-1\">
        <div class=\"drawer-content drawer-content-scrollable\" role=\"document\">
            <div class=\"drawer-header\">
                <div class=\"d-flex justify-content-between\">
                    <img alt=\"RetailPay\" class=\"retail-color\" height=\"35px\" src=\"assets/img/logo-retailpay.svg\" />
                    <div>
                        <a href=\"<%= session_path(@conn, :signin) %>\" class=\"btn btn-primary\">Sign in</a>
                    </div>
                </div>
            </div>
            <div class=\"drawer-body\">
                <ul class=\"retail-nav navbar-nav border-bottom\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"supplier.html\">Supplier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"retailer.html\">Retailers</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link disabled\">Distributors</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a href=\"help-center.html\" target=\"_blank\" class=\"nav-link\">Help Center</a>
                    </li>
                </ul>
            </div>
            <div class=\"drawer-footer\">
                <ul class=\"navbar-nav wd-100p\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"<%= page_path(@conn, :suppliers) %>\">Terms and conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--End Vertical Mobile Nav-->", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/partials/layouts/mobinav.htm", "");
    }
}
