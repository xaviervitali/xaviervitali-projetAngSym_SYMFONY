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
class __TwigTemplate_c98f18cafae1d8a44c8e2d28ff14f0be6c56b0f2bc9909a088531080cf6e3ca1 extends Template
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
        $this->parent = $this->loadTemplate("basewithnav.html.twig", "security/comments.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(($context["blockedComments"] ?? null));
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
        return array (  170 => 64,  158 => 58,  152 => 55,  146 => 51,  136 => 48,  132 => 47,  121 => 41,  115 => 38,  109 => 37,  103 => 36,  99 => 35,  95 => 34,  92 => 33,  90 => 32,  86 => 31,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/comments.html.twig", "/home/xaviervimj/projet/symfony/templates/security/comments.html.twig");
    }
}
