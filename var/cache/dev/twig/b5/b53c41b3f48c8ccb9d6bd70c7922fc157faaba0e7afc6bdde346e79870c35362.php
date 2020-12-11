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

/* app-client/settings.html.twig */
class __TwigTemplate_54cd3ab4105bf8b43bb823ab7bfb9c0b1025d20e5d8c17c0c79ce607034b93f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app-client/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app-client/settings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app-client/settings.html.twig", 1);
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
        <table class=\"table responsive table-bordered\">
            <thead>
            <tr>
                <th>Scopes</th>
                <th>Claims</th>
                <th>Claim Uri</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["scope"] => $context["claims"]) {
            // line 18
            echo "                <tr>

                    <td>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $context["scope"], "html", null, true);
            echo "
                    </td>
                    <td>
                        <ul>

                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["claims"]);
            foreach ($context['_seq'] as $context["name"] => $context["uri"]) {
                // line 27
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        </ul>
                    </td> <td>
                        <ul>

                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["claims"]);
            foreach ($context['_seq'] as $context["name"] => $context["uri"]) {
                // line 34
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["uri"], "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                        </ul>
                    </td>
                    <td></td>
                    <td>

                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["claims"]);
            foreach ($context['_seq'] as $context["name"] => $context["uri"]) {
                // line 42
                echo "                            <li> <button type=\"button\" class=\"btn btn-sm btn-outline-primary\">Enable</button></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['scope'], $context['claims'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>

        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app-client/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  150 => 44,  143 => 42,  139 => 41,  132 => 36,  123 => 34,  119 => 33,  113 => 29,  104 => 27,  100 => 26,  92 => 21,  87 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"table-responsive col-md-8\">
        <table class=\"table responsive table-bordered\">
            <thead>
            <tr>
                <th>Scopes</th>
                <th>Claims</th>
                <th>Claim Uri</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <
            {% for scope,claims  in scopes %}
                <tr>

                    <td>
                            {{ scope }}
                    </td>
                    <td>
                        <ul>

                            {% for name,uri in claims  %}
                                <li>{{ name }}</li>
                            {% endfor %}
                        </ul>
                    </td> <td>
                        <ul>

                            {% for name,uri in claims  %}
                                <li>{{ uri }}
                            {% endfor %}
                        </ul>
                    </td>
                    <td></td>
                    <td>

                        {% for name,uri in claims  %}
                            <li> <button type=\"button\" class=\"btn btn-sm btn-outline-primary\">Enable</button></li>
                        {% endfor %}
                    </td>

                </tr>
            {% endfor %}
            </tbody>

        </table>
    </div>
{% endblock body %}", "app-client/settings.html.twig", "/var/www/app/templates/app-client/settings.html.twig");
    }
}
