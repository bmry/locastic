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

/* scope/assign_scope.html.twig */
class __TwigTemplate_4c10103751e6c81ca16e520fc02656b0f46424178f4332ed375a491864b63327 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scope/assign_scope.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scope/assign_scope.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scope/assign_scope.html.twig", 1);
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
        echo "    <div class=\"table-responsive col-md-8\">
        <form method=\"post\">
        <table class=\"table responsive table-bordered\">
            <thead>
            <tr>
                <th>Scopes</th>
                <th>Claims</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["scope"] => $context["claims"]) {
            // line 16
            echo "                <tr>
                    <td>
                        ";
            // line 18
            echo twig_escape_filter($this->env, $context["scope"], "html", null, true);
            echo "
                    </td>
                    <td>
                        <ul>
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["claims"]);
            foreach ($context['_seq'] as $context["name"] => $context["uri"]) {
                // line 23
                echo "                                <li> <input class=\"form-check-input\" type=\"checkbox\" > ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                        </ul>
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['scope'], $context['claims'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>

        </table>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "scope/assign_scope.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  109 => 25,  100 => 23,  96 => 22,  89 => 18,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"table-responsive col-md-8\">
        <form method=\"post\">
        <table class=\"table responsive table-bordered\">
            <thead>
            <tr>
                <th>Scopes</th>
                <th>Claims</th>
            </tr>
            </thead>
            <tbody>

            {% for scope,claims  in scopes %}
                <tr>
                    <td>
                        {{ scope }}
                    </td>
                    <td>
                        <ul>
                            {% for name,uri in claims  %}
                                <li> <input class=\"form-check-input\" type=\"checkbox\" > {{ name }} </li>
                            {% endfor %}
                        </ul>
                    </td>

                </tr>
            {% endfor %}
            </tbody>

        </table>
        </form>
    </div>
{% endblock body %}", "scope/assign_scope.html.twig", "/var/www/app/templates/scope/assign_scope.html.twig");
    }
}
