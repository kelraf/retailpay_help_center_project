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

/* /Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/content/static-pages/home.htm */
class __TwigTemplate_ba5dc3a8d64cc6f6651de4430db654cf026b78a4d62392f93d77698459cbc3c9 extends \Twig\Template
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
    }

    public function getTemplateName()
    {
        return "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/content/static-pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/ogare/Projects/RetailpayDocs/themes/retailpay-docs/content/static-pages/home.htm", "");
    }
}
