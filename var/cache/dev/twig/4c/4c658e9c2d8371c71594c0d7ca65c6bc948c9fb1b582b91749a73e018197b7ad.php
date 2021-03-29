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

/* security/comments.html.twig */
class __TwigTemplate_764a85d8b2ae1d6e5eba9b1a14461d361c73820276bfa8d36485141f71a14e8a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/comments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/comments.html.twig"));

        $this->parent = $this->loadTemplate("basewithnav.html.twig", "security/comments.html.twig", 1);
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

        echo "Interface d'administration Apel STDA";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div id=\"comment\">
<h1 class=\"text-center my-5 text-primary\">Bienvenue dans l'interface d'administration des commentaires bloqués</h1>
<h4 class=\"mt-3\">
Commentaires bloqués
</h4    >


<table class=\"table text-center table-striped table-light\"
\t\t\t data-toggle=\"table\"
\t\t\t data-filter-control=\"true\" 
\t\t\t data-show-export=\"true\"
\t\t\t data-click-to-select=\"true\"
             >
<thead class=\"thead-dark\">
<tr>
<th data-field=\"date\" data-filter-control=\"input\" data-sortable=\"true\">Date</th>
    <th data-field=\"article\" data-filter-control=\"input\" data-sortable=\"true\">Article</th>
    <th data-field=\"de\" data-filter-control=\"input\" data-sortable=\"true\" >De</th>
    <th data-field=\"author\" data-filter-control=\"input\" data-sortable=\"true\">Auteur</th>
    <th data-field=\"comment\" data-filter-control=\"input\" data-sortable=\"true\">Commentaire</th>
    <th data-field=\"blocked\" data-filter-control=\"input\" data-sortable=\"true\">Bloqué par</th>
    <th >Roles</th>
    <th >Actions</th>
</tr>
</thead>
<tbody>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockedComments"]) || array_key_exists("blockedComments", $context) ? $context["blockedComments"] : (function () { throw new RuntimeError('Variable "blockedComments" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["comment"], "blocked", [], "any", false, false, false, 32)) {
                // line 33
                echo "<tr>
    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 34), "d/m/Y", "Europe/Paris"), "html", null, true);
                echo "</td>
    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 36), "author", [], "any", false, false, false, 36), "firstName", [], "any", false, false, false, 36), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 36), "author", [], "any", false, false, false, 36), "lastName", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 37), "firstName", [], "any", false, false, false, 37), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 37), "lastName", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
    <td>
    <p>
    ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "blocked", [], "any", false, false, false, 41), "firstName", [], "any", false, false, false, 41), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "blocked", [], "any", false, false, false, 41), "lastName", [], "any", false, false, false, 41), "html", null, true);
                echo "
    </p>
   
    </td>
<td>
    <p>
    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "blocked", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 48
                    echo "    ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\RoleExtension']->roleRenamer($context["role"]), "html", null, true);
                    echo "
    
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "    </p></td>
 
    <td>
    <div class=\"input-group\">
         <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\"> <button class=\"btn btn-small btn-danger\">Supprimer</button></a>

  
<a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_allow", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">    <button class=\"btn btn-small btn-success\">Débloquer</button></a> 
    </td>
</tr>   

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</tbody>
</table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 64,  188 => 58,  182 => 55,  176 => 51,  166 => 48,  162 => 47,  151 => 41,  145 => 38,  139 => 37,  133 => 36,  129 => 35,  125 => 34,  122 => 33,  120 => 32,  116 => 31,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basewithnav.html.twig' %}

{% block title %}Interface d'administration Apel STDA{% endblock %}
{% block body %}
<div id=\"comment\">
<h1 class=\"text-center my-5 text-primary\">Bienvenue dans l'interface d'administration des commentaires bloqués</h1>
<h4 class=\"mt-3\">
Commentaires bloqués
</h4    >


<table class=\"table text-center table-striped table-light\"
\t\t\t data-toggle=\"table\"
\t\t\t data-filter-control=\"true\" 
\t\t\t data-show-export=\"true\"
\t\t\t data-click-to-select=\"true\"
             >
<thead class=\"thead-dark\">
<tr>
<th data-field=\"date\" data-filter-control=\"input\" data-sortable=\"true\">Date</th>
    <th data-field=\"article\" data-filter-control=\"input\" data-sortable=\"true\">Article</th>
    <th data-field=\"de\" data-filter-control=\"input\" data-sortable=\"true\" >De</th>
    <th data-field=\"author\" data-filter-control=\"input\" data-sortable=\"true\">Auteur</th>
    <th data-field=\"comment\" data-filter-control=\"input\" data-sortable=\"true\">Commentaire</th>
    <th data-field=\"blocked\" data-filter-control=\"input\" data-sortable=\"true\">Bloqué par</th>
    <th >Roles</th>
    <th >Actions</th>
</tr>
</thead>
<tbody>
{% for comment in blockedComments %}
{% if comment.blocked %}
<tr>
    <td>{{comment.createdAt | date(\"d/m/Y\", \"Europe/Paris\")}}</td>
    <td>{{comment.article.title}}</td>
    <td>{{comment.article.author.firstName}} {{comment.article.author.lastName}}</td>
    <td>{{comment.author.firstName}} {{comment.author.lastName}}</td>
    <td>{{comment.content}}</td>
    <td>
    <p>
    {{comment.blocked.firstName}} {{comment.blocked.lastName}}
    </p>
   
    </td>
<td>
    <p>
    {% for role in comment.blocked.roles %}
    {{role | role}}
    
    {% endfor %}
    </p></td>
 
    <td>
    <div class=\"input-group\">
         <a href=\"{{path('comment_delete', {'id':comment.id})}}\"> <button class=\"btn btn-small btn-danger\">Supprimer</button></a>

  
<a href=\"{{path('comment_allow', {'id':comment.id})}}\">    <button class=\"btn btn-small btn-success\">Débloquer</button></a> 
    </td>
</tr>   

{% endif %}
{% endfor %}
</tbody>
</table>
</div>
{% endblock %}", "security/comments.html.twig", "/home/xaviervimj/projet/symfony/templates/security/comments.html.twig");
    }
}
