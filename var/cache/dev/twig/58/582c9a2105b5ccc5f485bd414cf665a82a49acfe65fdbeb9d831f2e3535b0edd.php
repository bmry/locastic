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

/* app-client/list.html.twig */
class __TwigTemplate_a5ac9eb86e999614a8c485ce2e74999efcb8fe525d961c50dadc141e1e7be976 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app-client/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app-client/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app-client/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"table-responsive\">
    <table class=\"table responsive\">
        <thead>
        <tr>
            <th>Applications</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 15
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("microservice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["application"], "getId", [], "method", false, false, false, 17)]), "html", null, true);
            echo "\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["application"], "getName", [], "method", false, false, false, 18), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("microservice_edit_scope", ["microserviceId" => twig_get_attribute($this->env, $this->source, $context["application"], "getId", [], "method", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"k-button-icon\"></i> Edit Scope
                    </a>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("microservice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["application"], "getId", [], "method", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"k-button-icon\"></i> Edit Microservice
                    </a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("microservice_settings", ["microserviceId" => twig_get_attribute($this->env, $this->source, $context["application"], "getId", [], "method", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"k-button-icon\"></i> View Settings
                    </a>
                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>

    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app-client/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  111 => 28,  105 => 25,  99 => 22,  92 => 18,  88 => 17,  84 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"table-responsive\">
    <table class=\"table responsive\">
        <thead>
        <tr>
            <th>Applications</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        {% for application  in applications %}
            <tr>
                <td>
                    <a href=\"{{ path('microservice_edit', {id: application.getId() })}}\">
                        {{ application.getName() }}
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('microservice_edit_scope', {microserviceId: application.getId()} )}}\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"k-button-icon\"></i> Edit Scope
                    </a>
                    <a href=\"{{ path('microservice_edit', {id: application.getId()} )}}\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"k-button-icon\"></i> Edit Microservice
                    </a>
                    <a href=\"{{ path('microservice_settings', {microserviceId: application.getId()}) }}\" class=\"btn btn-sm btn-outline-primary\">
                        <i class=\"k-button-icon\"></i> View Settings
                    </a>
                </td>

            </tr>
        {% endfor %}
        </tbody>

    </table>
</div>
{% endblock body %}", "app-client/list.html.twig", "/var/www/app/templates/app-client/list.html.twig");
    }
}
