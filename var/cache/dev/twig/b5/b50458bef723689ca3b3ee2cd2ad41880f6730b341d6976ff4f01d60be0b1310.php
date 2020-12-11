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

/* dashboard/dashboard.html.twig */
class __TwigTemplate_e8c60d17cba8670f30cd9f1ad2c7d36803ecfcfbf3ef0149b7862be1865fba07 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/dashboard.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
    <div class=\"row justify-content-md-center\">

        <div class=\"col col-lg-6\">
            <h4>Welcome ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "</h4>
        </div>
    </div>
    <div class=\"row justify-content-md-center\">
        <div class=\"col col-lg-6\">
            <div class=\"card\" >
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                        ";
        // line 18
        if ((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MS_OWNER"), true))) {
            // line 19
            echo "                            <li class=\"list-group-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("microservice_new");
            echo "\" class=\"btn btn-outline-primary\" >Register Microservice</a></li>
                            <li class=\"list-group-item\"><a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("microservice_list");
            echo "\" class=\"btn btn-outline-primary\" >List Microservice</a></li>

                        ";
        }
        // line 23
        echo "
                        ";
        // line 24
        if ((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT_ADMIN"), true))) {
            // line 25
            echo "                            <li class=\"list-group-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
            echo "\" class=\"btn btn-outline-primary\" >List Client</a></li>
                        ";
        }
        // line 27
        echo "
                        ";
        // line 28
        if ((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_360_ADMIN"), true))) {
            // line 29
            echo "                            <li class=\"list-group-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
            echo "\" class=\"btn btn-outline-primary\" >List Client</a></li>
                        ";
        }
        // line 31
        echo "                    </ul>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  114 => 29,  112 => 28,  109 => 27,  103 => 25,  101 => 24,  98 => 23,  92 => 20,  87 => 19,  85 => 18,  74 => 10,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row justify-content-md-center\">

        <div class=\"col col-lg-6\">
            <h4>Welcome {{ app.user.email }}</h4>
        </div>
    </div>
    <div class=\"row justify-content-md-center\">
        <div class=\"col col-lg-6\">
            <div class=\"card\" >
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                        {% if  is_granted('ROLE_MS_OWNER') == true %}
                            <li class=\"list-group-item\"><a href=\"{{ path('microservice_new') }}\" class=\"btn btn-outline-primary\" >Register Microservice</a></li>
                            <li class=\"list-group-item\"><a href=\"{{ path('microservice_list') }}\" class=\"btn btn-outline-primary\" >List Microservice</a></li>

                        {% endif %}

                        {% if  is_granted('ROLE_CLIENT_ADMIN') == true %}
                            <li class=\"list-group-item\"><a href=\"{{ path('user_list') }}\" class=\"btn btn-outline-primary\" >List Client</a></li>
                        {% endif %}

                        {% if  is_granted('ROLE_360_ADMIN') == true %}
                            <li class=\"list-group-item\"><a href=\"{{ path('user_list') }}\" class=\"btn btn-outline-primary\" >List Client</a></li>
                        {% endif %}
                    </ul>
                </div>
            </div>

        </div>
    </div>

{% endblock body %}", "dashboard/dashboard.html.twig", "/var/www/app/templates/dashboard/dashboard.html.twig");
    }
}
