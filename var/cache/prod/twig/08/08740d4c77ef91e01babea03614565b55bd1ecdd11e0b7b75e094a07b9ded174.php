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

/* security/mailIndex.html.twig */
class __TwigTemplate_1ae618eef1aa16ba13e6588f67a03767393125b323c26a95794c53eb789d8d65 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("basewithnav.html.twig", "security/mailIndex.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Interface d'administration Apel STDA";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<div id=\"contact\" >
<h1 class=\"text-center my-5 text-primary\">Bienvenue sur l'espace contact</h1>
    <div class=\"d-flex justify-content-around align-items-stretch flex-wrap\" >
        <div class=\"bg-light  w-100\">
            ";
        // line 13
        echo "            <table class=\"table text-center table-striped table-light\">
                <thead class=\"thead-dark\">
                    <th>Date d'envoi</th>
                    <th>Emmeteur</th>
                    <th>Role(s)</th>
                    <th>Titre</th>
                    <th>Corps</th>
                    <th>Supprimer</th>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inbox"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 24
            echo "                        <tr>
                        <td>
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "createdAt", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
            echo "
                        </td>
                            <td>
                        ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], "sender", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29), "html", null, true);
            echo "
                        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], "sender", [], "any", false, false, false, 30), "lastName", [], "any", false, false, false, 30), "html", null, true);
            echo "

                        </td>
                        <td>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], "sender", [], "any", false, false, false, 34), "roles", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 35
                echo "                            <div>
                            ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\RoleExtension']->roleRenamer($context["role"]), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        </td>
                            <td>
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "
                        </td>
                            <td>
                        ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "content", [], "any", false, false, false, 44), "html", null, true);
            echo " 
                        </td>
                        <td>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mail"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Supprimer</a>       
                        </td>
                        </tr> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
            </table>
        </div>
        ";
        // line 56
        echo "        ";
        // line 63
        echo "
    </div>
</div>
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "security/mailIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 69,  160 => 68,  153 => 63,  151 => 56,  146 => 51,  136 => 47,  130 => 44,  124 => 41,  120 => 39,  111 => 36,  108 => 35,  104 => 34,  97 => 30,  93 => 29,  87 => 26,  83 => 24,  79 => 23,  67 => 13,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/mailIndex.html.twig", "/home/xaviervimj/projet/symfony/templates/security/mailIndex.html.twig");
    }
}
