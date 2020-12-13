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
class __TwigTemplate_704c4d803d5e91923970c3a505ee184f8865da4bdd0100fb9f011ad57e3c297f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        echo "\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>
<div id=\"viewport\">
\t";
        // line 16
        $this->displayBlock('navigatie', $context, $blocks);
        // line 30
        echo "\t";
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "</div>
";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
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
        echo "\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\" type=\"text/css\">
\t\t";
        // line 9
        echo "\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t";
    }

    // line 16
    public function block_navigatie($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t<div id=\"sidebar\">
\t\t\t<header>
\t\t\t</header>
\t\t\t<ul class=\"nav\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">import exel</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">imported files</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t";
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
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
        return array (  132 => 32,  126 => 30,  110 => 17,  106 => 16,  102 => 12,  98 => 11,  93 => 9,  90 => 7,  86 => 6,  79 => 5,  73 => 33,  71 => 32,  68 => 31,  65 => 30,  63 => 16,  58 => 13,  55 => 11,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>{% block title %}Welcome!{% endblock %}</title>
\t{% block basestylesheets %}
\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\" type=\"text/css\">
\t\t{#        <!-- bootstrap css include -->#}
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t{% endblock %}
\t{% block stylesheets %}
\t{% endblock %}
</head>
<body>
<div id=\"viewport\">
\t{% block navigatie %}
\t\t<div id=\"sidebar\">
\t\t\t<header>
\t\t\t</header>
\t\t\t<ul class=\"nav\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">import exel</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">imported files</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t{% endblock %}
\t{% block body %}{% endblock %}
</div>
{% block javascripts %}{% endblock %}

</body>
</html>", "base.html.twig", "C:\\Users\\31638\\GO-project\\project\\Views\\base.html.twig");
    }
}
