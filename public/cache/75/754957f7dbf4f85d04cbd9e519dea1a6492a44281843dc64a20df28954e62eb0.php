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

/* indexPage/home.html.twig */
class __TwigTemplate_2f7befad12015434d7d5fc4426483f6e1dd637e1da1dc3537148a976440fc473 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "indexPage/home.html.twig", 1);
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<main>
\t\t<h1>Homepage</h1>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
\t\t\tlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>
\t\t\tlaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
\t\t\tvoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat<br>
\t\t\tnon proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
\t</main>
";
    }

    public function getTemplateName()
    {
        return "indexPage/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  61 => 7,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}
{% block stylesheets %}
{% endblock %}

{% block body %}
\t<main>
\t\t<h1>Homepage</h1>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
\t\t\tlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>
\t\t\tlaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
\t\t\tvoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat<br>
\t\t\tnon proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
\t</main>
{% endblock %}", "indexPage/home.html.twig", "C:\\Users\\31638\\GO-project\\project\\Views\\indexPage\\home.html.twig");
    }
}
