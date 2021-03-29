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

/* mailer/index.html.twig */
class __TwigTemplate_ef1be9cc262d174e8f4e0b0d8be37e1cbbe4cc606131396a69210b335f0896e5 extends Template
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
        echo "<h1>Un article a été ajouté !</h1>

<p>Bonjour  ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "gender", [], "any", false, false, false, 3), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 3)), "html", null, true);
        echo ".</p>

<p>Comme vous l'avez souhaité, nous vous informons qu'un nouel article vient d'être publié par ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 5), "firstName", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 5), "lastName", [], "any", false, false, false, 5), "html", null, true);
        echo ".</p>

<p>Il s'agit de  <a href=\"localhost:4200/article/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</a> dans la categorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo ".</p>";
    }

    public function getTemplateName()
    {
        return "mailer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  50 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailer/index.html.twig", "/home/xaviervimj/projet/symfony/templates/mailer/index.html.twig");
    }
}
