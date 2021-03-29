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
class __TwigTemplate_9b4341d35203ca4e17adfc70ef97526d7768ff4be1a5047a676042e318903f4e extends Template
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
        $this->parent = $this->loadTemplate("basewithnav.html.twig", "security/upload.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Interface d'administration Apel STDA
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["uploads"] ?? null));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 54), 'widget');
        echo "
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uploadedFile", [], "any", false, false, false, 55), 'widget');
        echo "

\t\t\t\t<button class=\"btn btn-success btn-sm float-right\" type=\"submit\">Valider les modifications</button>
\t\t\t\t";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
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
        return array (  152 => 58,  146 => 55,  142 => 54,  138 => 53,  128 => 45,  118 => 41,  112 => 38,  108 => 37,  101 => 33,  97 => 32,  91 => 29,  85 => 26,  81 => 24,  77 => 23,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/upload.html.twig", "/home/xaviervimj/projet/symfony/templates/security/upload.html.twig");
    }
}
