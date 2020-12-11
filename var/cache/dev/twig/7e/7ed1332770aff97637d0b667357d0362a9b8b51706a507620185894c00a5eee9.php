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

/* user/profile.html.twig */
class __TwigTemplate_682522a443623e44991a39b72f90fdf24241acb59e8942fa68e9a58d7f980b21 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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
        echo "    User:
    <div class=\"table-responsive col-md-8\">

        <table class=\"table responsive table-bordered\">
            <thead>
            <tr>
                <th>Scopes</th>
                <th>Claims</th>
            </tr>
            </thead>
            <tbody>
            <form method=\"post\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["scope"] => $context["claims"]) {
            // line 17
            echo "
                <tr>
                    <td>
                        ";
            // line 20
            echo twig_escape_filter($this->env, $context["scope"], "html", null, true);
            echo "
                    </td>
                    <td>
                        <ul>
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["claims"]);
            foreach ($context['_seq'] as $context["name"] => $context["uri"]) {
                // line 25
                echo "                                <li> <input class=\"form-check-input\"  name=\"scope[";
                echo twig_escape_filter($this->env, $context["scope"], "html", null, true);
                echo "][]\" value=\"";
                echo twig_escape_filter($this->env, $context["uri"], "html", null, true);
                echo "\" type=\"checkbox\" ";
                if (twig_in_filter($context["uri"], (isset($context["userCurrentClaims"]) || array_key_exists("userCurrentClaims", $context) ? $context["userCurrentClaims"] : (function () { throw new RuntimeError('Variable "userCurrentClaims" does not exist.', 25, $this->source); })()))) {
                    echo " checked=\"checked\" ";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                        </ul>
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['scope'], $context['claims'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>

        </table>
           <div class=\"row\">
               <button class=\"btn btn-primary\" type=\"submit\">Update Profile</button>
           </div>
        </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  119 => 27,  102 => 25,  98 => 24,  91 => 20,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    User:
    <div class=\"table-responsive col-md-8\">

        <table class=\"table responsive table-bordered\">
            <thead>
            <tr>
                <th>Scopes</th>
                <th>Claims</th>
            </tr>
            </thead>
            <tbody>
            <form method=\"post\">
            {% for scope,claims  in scopes %}

                <tr>
                    <td>
                        {{ scope }}
                    </td>
                    <td>
                        <ul>
                            {% for name,uri in claims  %}
                                <li> <input class=\"form-check-input\"  name=\"scope[{{ scope }}][]\" value=\"{{ uri }}\" type=\"checkbox\" {% if uri in userCurrentClaims %} checked=\"checked\" {% endif %}> {{ name }} </li>
                            {% endfor %}
                        </ul>
                    </td>

                </tr>
            {% endfor %}
            </tbody>

        </table>
           <div class=\"row\">
               <button class=\"btn btn-primary\" type=\"submit\">Update Profile</button>
           </div>
        </form>
    </div>

{% endblock body %}", "user/profile.html.twig", "/var/www/app/templates/user/profile.html.twig");
    }
}
