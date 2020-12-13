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

/* base.html.twig */
class __TwigTemplate_a30b2a1cb0826cb406d903ce15a027629e0c0c3dffff9d2743c20c96856c6895 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'basestylesheets' => [$this, 'block_basestylesheets'],
            'styling' => [$this, 'block_styling'],
            'navigatie' => [$this, 'block_navigatie'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 6
        $this->displayBlock('basestylesheets', $context, $blocks);
        // line 11
        echo "\t<style>

\t\t/* you can start styling here */
\t\t/* you can start styling here */
\t\thtml, body {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}

\t\t/* Sidebar Styles */
\t\t#sidebar {
\t\t\tz-index: 1000;
\t\t\tposition: fixed;
\t\t\tleft: 250px;
\t\t\twidth: 250px;
\t\t\theight: 100%;
\t\t\tmargin-left: -250px;
\t\t\toverflow-y: auto;
\t\t\tbackground: #56baed; /* of blue, voor een donkere tint*/
\t\t\t-webkit-transition: all 0.5s ease;
\t\t\t-moz-transition: all 0.5s ease;
\t\t\t-o-transition: all 0.5s ease;
\t\t\ttransition: all 0.5s ease;
\t\t\t-webkit-box-shadow: 9px -6px 9px -5px rgba(0,0,0,0.45);
\t\t\t-moz-box-shadow: 9px -6px 9px -5px rgba(0,0,0,0.45);
\t\t\tbox-shadow: 9px -6px 9px -5px rgba(0,0,0,0.45);
\t\t}
\t\t.nav{
\t\t\tdisplay: block;
\t\t}

\t\t#sidebar h1 {
\t\t\tcolor: white;
\t\t\tmargin-left: 10%;
\t\t}

\t\t#sidebar ul {
\t\t\tlist-style: none;
\t\t}
\t\t#sidebar ul li {
\t\t\tlist-style: none;
\t\t\tcolor: white;
\t\t}
\t\tmain {
\t\t\tmargin-left: 300px;
\t\t\tcolor: black;
\t\t\tdisplay: block;
\t\t}
\t";
        // line 59
        $this->displayBlock('styling', $context, $blocks);
        // line 62
        echo "\t</style>
</head>
<body>
<div id=\"viewport\">
\t";
        // line 66
        $this->displayBlock('navigatie', $context, $blocks);
        // line 80
        echo "\t";
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "</div>
";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_basestylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">
\t\t";
        // line 9
        echo "\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t";
    }

    // line 59
    public function block_styling($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
\t";
    }

    // line 66
    public function block_navigatie($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "\t\t<div id=\"sidebar\">
\t\t\t<header>
\t\t\t</header>
\t\t\t<ul class=\"nav\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/exel/importstory\">import exel</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/exel/storys\">imported files</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t";
    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 82,  177 => 80,  161 => 67,  157 => 66,  152 => 60,  148 => 59,  143 => 9,  140 => 7,  136 => 6,  129 => 5,  123 => 83,  121 => 82,  118 => 81,  115 => 80,  113 => 66,  107 => 62,  105 => 59,  55 => 11,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>{% block title %}Welcome!{% endblock %}</title>
\t{% block basestylesheets %}
\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">
\t\t{#        <!-- bootstrap css include -->#}
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t{% endblock %}
\t<style>

\t\t/* you can start styling here */
\t\t/* you can start styling here */
\t\thtml, body {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}

\t\t/* Sidebar Styles */
\t\t#sidebar {
\t\t\tz-index: 1000;
\t\t\tposition: fixed;
\t\t\tleft: 250px;
\t\t\twidth: 250px;
\t\t\theight: 100%;
\t\t\tmargin-left: -250px;
\t\t\toverflow-y: auto;
\t\t\tbackground: #56baed; /* of blue, voor een donkere tint*/
\t\t\t-webkit-transition: all 0.5s ease;
\t\t\t-moz-transition: all 0.5s ease;
\t\t\t-o-transition: all 0.5s ease;
\t\t\ttransition: all 0.5s ease;
\t\t\t-webkit-box-shadow: 9px -6px 9px -5px rgba(0,0,0,0.45);
\t\t\t-moz-box-shadow: 9px -6px 9px -5px rgba(0,0,0,0.45);
\t\t\tbox-shadow: 9px -6px 9px -5px rgba(0,0,0,0.45);
\t\t}
\t\t.nav{
\t\t\tdisplay: block;
\t\t}

\t\t#sidebar h1 {
\t\t\tcolor: white;
\t\t\tmargin-left: 10%;
\t\t}

\t\t#sidebar ul {
\t\t\tlist-style: none;
\t\t}
\t\t#sidebar ul li {
\t\t\tlist-style: none;
\t\t\tcolor: white;
\t\t}
\t\tmain {
\t\t\tmargin-left: 300px;
\t\t\tcolor: black;
\t\t\tdisplay: block;
\t\t}
\t{% block styling %}

\t{% endblock %}
\t</style>
</head>
<body>
<div id=\"viewport\">
\t{% block navigatie %}
\t\t<div id=\"sidebar\">
\t\t\t<header>
\t\t\t</header>
\t\t\t<ul class=\"nav\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/exel/importstory\">import exel</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/exel/storys\">imported files</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t{% endblock %}
\t{% block body %}{% endblock %}
</div>
{% block javascripts %}{% endblock %}

</body>
</html>", "base.html.twig", "C:\\Users\\31638\\GO-project\\project\\src\\Views\\base.html.twig");
    }
}
