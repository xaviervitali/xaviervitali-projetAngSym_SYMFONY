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

/* basewithnav.html.twig */
class __TwigTemplate_283109833e55f76cb0e165f84e0417ac4b091221ceb65fadf88e36078d46a71b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
";
        // line 14
        $this->loadTemplate("nav.html.twig", "basewithnav.html.twig", 14)->display($context);
        // line 15
        echo "<main class=\"container-fluid\">
     
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "</main>

    </body>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "</html>


";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/materia/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"../assets/css/main.css\">
            <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css\">
        ";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js\"></script>

        <script src=\"../assets/js/main.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "basewithnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  106 => 22,  102 => 18,  98 => 17,  91 => 8,  87 => 7,  80 => 6,  73 => 30,  71 => 22,  66 => 19,  64 => 17,  60 => 15,  58 => 14,  54 => 12,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basewithnav.html.twig", "/home/xaviervimj/projet/symfony/templates/basewithnav.html.twig");
    }
}
