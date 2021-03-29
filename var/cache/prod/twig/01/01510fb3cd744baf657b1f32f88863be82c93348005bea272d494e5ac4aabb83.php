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

/* security/login.html.twig */
class __TwigTemplate_8e7e2b732a39130a1b36a4bd6f3361b33374261d4bc1fc51e96d7c47774f9e86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Interface d'administration Apel STDA";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"d-flex justify-content-center flex-column align-items-center\" id=\"login\">
<form action=\"\" method=\"post\">
<h2 class=\"mb-3 text-center\">Interface d'administration Apel STDA</h2>
            <div class=\"form-group\"><input type=\"email\" class=\"form-control\"  placeholder=\"adresse email\" name=\"_username\"><input type=\"password\" class=\"form-control\" placeholder=\"password\" name=\"_password\"></div>
       
            <button type=\"submit\" class=\"btn btn-primary float-right\">connexion</button>
       
        </form>
</div>    
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/xaviervimj/projet/symfony/templates/security/login.html.twig");
    }
}
