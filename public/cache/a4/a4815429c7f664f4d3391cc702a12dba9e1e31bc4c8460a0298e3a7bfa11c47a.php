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

/* exels/import_exel.html.twig */
class __TwigTemplate_7d1b0e4894a3270cdd301111475fb317dad7ec0840b50d7a7399435424b66271 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'styling' => [$this, 'block_styling'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "exels/import_exel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_styling($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<main>
\t\t<form action=\"/exel/processexel\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<input type=\"file\" name=\"files\" id=\"files\">
\t\t\t<input type=\"submit\">
\t\t</form>
\t</main>
";
    }

    public function getTemplateName()
    {
        return "exels/import_exel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  71 => 11,  66 => 8,  62 => 7,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}
{% block stylesheets %}
{% endblock %}

{% block styling %}

{% endblock %}

{% block body %}
\t<main>
\t\t<form action=\"/exel/processexel\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<input type=\"file\" name=\"files\" id=\"files\">
\t\t\t<input type=\"submit\">
\t\t</form>
\t</main>
{% endblock %}", "exels/import_exel.html.twig", "C:\\Users\\31638\\GO-project\\project\\src\\Views\\exels\\import_exel.html.twig");
    }
}
