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
class __TwigTemplate_b05117369e6a3978dbcb7cb0b71bd90087ff1cafb5c9af35b79bda5a8d9cd29d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/mailIndex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/mailIndex.html.twig"));

        $this->parent = $this->loadTemplate("basewithnav.html.twig", "security/mailIndex.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) || array_key_exists("inbox", $context) ? $context["inbox"] : (function () { throw new RuntimeError('Variable "inbox" does not exist.', 23, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  206 => 69,  196 => 68,  183 => 63,  181 => 56,  176 => 51,  166 => 47,  160 => 44,  154 => 41,  150 => 39,  141 => 36,  138 => 35,  134 => 34,  127 => 30,  123 => 29,  117 => 26,  113 => 24,  109 => 23,  97 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basewithnav.html.twig' %}

{% block title %}Interface d'administration Apel STDA{% endblock %}

{% block body %}


<div id=\"contact\" >
<h1 class=\"text-center my-5 text-primary\">Bienvenue sur l'espace contact</h1>
    <div class=\"d-flex justify-content-around align-items-stretch flex-wrap\" >
        <div class=\"bg-light  w-100\">
            {# <h2 class=\"mb-3 text-center\">Envoyé depuis le site</h2> #}
            <table class=\"table text-center table-striped table-light\">
                <thead class=\"thead-dark\">
                    <th>Date d'envoi</th>
                    <th>Emmeteur</th>
                    <th>Role(s)</th>
                    <th>Titre</th>
                    <th>Corps</th>
                    <th>Supprimer</th>
                </thead>
                <tbody>
                    {% for mail in inbox %}
                        <tr>
                        <td>
                        {{mail.createdAt | date(\"d/m/Y H:i\")}}
                        </td>
                            <td>
                        {{mail.sender.firstName}}
                        {{mail.sender.lastName}}

                        </td>
                        <td>
                        {% for role in mail.sender.roles %}
                            <div>
                            {{role |    role}}
                            </div>
                        {% endfor %}
                        </td>
                            <td>
                        {{mail.title}}
                        </td>
                            <td>
                        {{mail.content}} 
                        </td>
                        <td>
                        <a href=\"{{path('admin_mail_delete', {'id':mail.id})}}\" class=\"btn btn-danger btn-sm\">Supprimer</a>       
                        </td>
                        </tr> 
                {% endfor %}
            </tbody>
            </table>
        </div>
        {# <div class=\"bg-light p-3 col-5\">
        <h2 class=\"mb-3\">Envoyer un email</h2> #}
        {# <div>
 
            {{form_start(form)}}
            {{form_widget(form)}}
            <button class=\"btn btn-success\" type=\"submit\">Envoyer le mail groupé</button> 
            {{form_end(form)}}
        </div> #}

    </div>
</div>
{% endblock %}

{% block javascripts %}

{% endblock %}", "security/mailIndex.html.twig", "/home/xaviervimj/projet/symfony/templates/security/mailIndex.html.twig");
    }
}
