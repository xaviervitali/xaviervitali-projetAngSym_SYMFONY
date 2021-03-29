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

/* security/upload.html.twig */
class __TwigTemplate_225bfaafbb636628bfc021fca6211ca849d3767b6bbf40522c39683acde6161b extends Template
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
        return "basewithnav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/upload.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/upload.html.twig"));

        $this->parent = $this->loadTemplate("basewithnav.html.twig", "security/upload.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Interface d'administration Apel STDA
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

\t<div id=\"upload\">
\t\t<h1 class=\"text-center my-5 text-primary\">Bienvenue sur l'espace telechargement</h1>
\t\t<div class=\"d-flex justify-content-around  align-items-stretch flex-wrap\">
\t\t\t<div id=\"uploadFile\" class=\"col-lg-8 col-md-12\">
\t\t\t\t<h2 class=\"text-center\">Fichiers déjà présent</h2>
\t\t\t\t<table class=\"table text-center table-striped table-light\">
\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t<th>Date de mise en ligne</th>
\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t<th>Nom du fichier</th>
\t\t\t\t\t\t<th>Ajouter par</th>
\t\t\t\t\t\t<th>Supprimer</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uploads"]) || array_key_exists("uploads", $context) ? $context["uploads"] : (function () { throw new RuntimeError('Variable "uploads" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["upload"]) {
            // line 24
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upload"], "updatedAt", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upload"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"../assets/files/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upload"], "fileUploadedName", [], "any", false, false, false, 32), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upload"], "fileUploadedName", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["upload"], "addedBy", [], "any", false, false, false, 37), "firstName", [], "any", false, false, false, 37), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["upload"], "addedBy", [], "any", false, false, false, 38), "lastName", [], "any", false, false, false, 38), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_file", ["id" => twig_get_attribute($this->env, $this->source, $context["upload"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upload'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t</tbody>

\t\t\t\t</table>

\t\t\t</div>
\t\t\t<div id=\"uploadFile\" class=\"col-lg-4 col-md-12\">
\t\t\t\t<h2 class=\"text-center\">Televerser un fichier</h2>
\t\t\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "title", [], "any", false, false, false, 54), 'widget');
        echo "
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "uploadedFile", [], "any", false, false, false, 55), 'widget');
        echo "

\t\t\t\t<button class=\"btn btn-success btn-sm float-right\" type=\"submit\">Valider les modifications</button>
\t\t\t\t";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 58,  176 => 55,  172 => 54,  168 => 53,  158 => 45,  148 => 41,  142 => 38,  138 => 37,  131 => 33,  127 => 32,  121 => 29,  115 => 26,  111 => 24,  107 => 23,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basewithnav.html.twig' %}

{% block title %}Interface d'administration Apel STDA
{% endblock %}

{% block body %}


\t<div id=\"upload\">
\t\t<h1 class=\"text-center my-5 text-primary\">Bienvenue sur l'espace telechargement</h1>
\t\t<div class=\"d-flex justify-content-around  align-items-stretch flex-wrap\">
\t\t\t<div id=\"uploadFile\" class=\"col-lg-8 col-md-12\">
\t\t\t\t<h2 class=\"text-center\">Fichiers déjà présent</h2>
\t\t\t\t<table class=\"table text-center table-striped table-light\">
\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t<th>Date de mise en ligne</th>
\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t<th>Nom du fichier</th>
\t\t\t\t\t\t<th>Ajouter par</th>
\t\t\t\t\t\t<th>Supprimer</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for upload in uploads %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{upload.updatedAt | date(\"d/m/Y H:i\")}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{upload.title}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"../assets/files/{{upload.fileUploadedName}}\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t{{upload.fileUploadedName}}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{upload.addedBy.firstName}}
\t\t\t\t\t\t\t\t\t{{upload.addedBy.lastName}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('admin_delete_file', {'id':upload.id})}}\" class=\"btn btn-danger btn-sm\">Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t</tbody>

\t\t\t\t</table>

\t\t\t</div>
\t\t\t<div id=\"uploadFile\" class=\"col-lg-4 col-md-12\">
\t\t\t\t<h2 class=\"text-center\">Televerser un fichier</h2>
\t\t\t\t{{form_start(form)}}
\t\t\t\t{{form_widget(form.title)}}
\t\t\t\t{{form_widget(form.uploadedFile)}}

\t\t\t\t<button class=\"btn btn-success btn-sm float-right\" type=\"submit\">Valider les modifications</button>
\t\t\t\t{{form_end(form)}}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "security/upload.html.twig", "/home/xaviervimj/projet/symfony/templates/security/upload.html.twig");
    }
}
