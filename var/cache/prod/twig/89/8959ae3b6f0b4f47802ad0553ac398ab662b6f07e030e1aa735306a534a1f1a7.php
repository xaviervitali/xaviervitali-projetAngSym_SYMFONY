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

/* security/index.html.twig */
class __TwigTemplate_431e279154b55e0d1bf4039500587a8e1932342d3a976e6583548e494975a169 extends Template
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
        $this->parent = $this->loadTemplate("basewithnav.html.twig", "security/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Interface d'administration Apel STDA
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div id=\"admin\">
\t\t<h1 class=\"text-center my-5 text-primary\">Bienvenue dans l'interface d'administration de l'APEL STDA</h1>
\t\t";
        // line 8
        if (($context["usersAwaiting"] ?? null)) {
            // line 9
            echo "\t\t\t<h4 class=\"m-3\">
\t\t\t\tUtilisateurs en Attente d'accrédidaton (";
            // line 10
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["usersAwaiting"] ?? null)), "html", null, true);
            echo ")
\t\t\t</h4>


\t\t\t<table class=\"table text-center table-striped table-light\" data-toggle=\"table\" data-filter-control=\"true\" data-show-export=\"true\" data-click-to-select=\"true\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th data-field=\"date\" data-filter-control=\"input\" data-sortable=\"true\">Date d'inscription</th>
\t\t\t\t\t\t<th data-field=\"email\" data-filter-control=\"input\" data-sortable=\"true\">Adresse Email</th>
\t\t\t\t\t\t<th data-field=\"gender\" data-filter-control=\"input\" data-sortable=\"true\">Genre</th>
\t\t\t\t\t\t<th data-field=\"lastName\" data-filter-control=\"input\" data-sortable=\"true\">Nom de famille</th>
\t\t\t\t\t\t<th data-field=\"firstName\" data-filter-control=\"input\" data-sortable=\"true\">Prénom</th>
\t\t\t\t\t\t<th>Classe des enfants</th>
\t\t\t\t\t\t<th>Présentation</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["usersAwaiting"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 29
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "registeredAt", [], "any", false, false, false, 30), "d/m/Y", "Europe/Paris"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "gender", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "children", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t<div>";
                    echo twig_escape_filter($this->env, $context["child"], "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "about", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_allow_acces", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-success\">Autoriser</button>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-primary\">Modifer</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\">Supprimer</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<hr class=\"mb-2\">
\t\t";
        }
        // line 59
        echo "

\t\t<h4 class=\"m-3  \">
\t\t\tListe des utilisateurs  (";
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["users"] ?? null)), "html", null, true);
        echo ")
\t\t</h4>


\t\t<table class=\"table text-center table-striped table-light\" data-toggle=\"table\" data-filter-control=\"true\" data-show-export=\"true\" data-click-to-select=\"true\" data-search=\"true\">
\t\t\t<thead class=\"thead-dark\">
\t\t\t\t<tr>
\t\t\t\t\t<th data-field=\"date\" data-filter-control=\"input\" data-sortable=\"true\">Date d'inscription</th>
\t\t\t\t\t<th data-field=\"email\" data-filter-control=\"input\" data-sortable=\"true\">Adresse Email</th>
\t\t\t\t\t<th data-field=\"gender\" data-filter-control=\"input\" data-sortable=\"true\">Genre</th>
\t\t\t\t\t<th data-field=\"lastName\" data-filter-control=\"input\" data-sortable=\"true\">Nom de famille</th>
\t\t\t\t\t<th data-field=\"firstName\" data-filter-control=\"input\" data-sortable=\"true\">Prénom</th>
\t\t\t\t\t<th>Classe des enfants</th>
\t\t\t\t\t<th>Roles</th>
\t\t\t\t\t<th>Actions</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "registeredAt", [], "any", false, false, false, 83), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "gender", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "children", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 90
                echo "\t\t\t\t\t\t\t\t<div>";
                echo twig_escape_filter($this->env, $context["child"], "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 95
                echo "

\t\t\t\t\t\t\t\t<div>";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\RoleExtension']->roleRenamer($context["role"]), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-primary\">Modifer</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\">Supprimer</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t</tbody>

\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "security/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 113,  268 => 105,  262 => 102,  257 => 99,  249 => 97,  245 => 95,  241 => 94,  237 => 92,  228 => 90,  224 => 89,  219 => 87,  215 => 86,  211 => 85,  207 => 84,  203 => 83,  200 => 82,  196 => 81,  174 => 62,  169 => 59,  163 => 55,  151 => 49,  145 => 46,  138 => 42,  133 => 40,  130 => 39,  121 => 37,  117 => 36,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  93 => 29,  89 => 28,  68 => 10,  65 => 9,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/index.html.twig", "/home/xaviervimj/projet/symfony/templates/security/index.html.twig");
    }
}
