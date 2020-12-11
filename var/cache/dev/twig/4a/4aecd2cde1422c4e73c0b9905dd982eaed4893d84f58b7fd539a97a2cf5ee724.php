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

/* home.html.twig */
class __TwigTemplate_570cc36632a86738f0bca1785d1bb181eaf2f238fe21262d85951c14ce57c874 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 3);
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
           <h4>You have reached 360Alumni Gate</h4>
        </div>
    </div>
    <div class=\"row justify-content-md-center\">
        <div class=\"col col-lg-6\">
            <div class=\"card\" >
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                            <li class=\"list-group-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn  btn-primary\" >Click here to Login</a></li>
                    </ul>
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                            <li class=\"list-group-item\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_ms-owner");
        echo "\" class=\"btn btn-outline-primary\" > Register As Microservice Owner</a></li>
                            <li class=\"list-group-item\"><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_main_admin");
        echo "\" class=\"btn btn-outline-danger\" > Register As 360 Admin</a></li>
                            <li class=\"list-group-item\"><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_client_admin");
        echo "\"  class=\"btn btn-outline-success\" > Register as Client Admin</a></li>
                    </ul>
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  94 => 24,  90 => 23,  82 => 18,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row justify-content-md-center\">

        <div class=\"col col-lg-6\">
           <h4>You have reached 360Alumni Gate</h4>
        </div>
    </div>
    <div class=\"row justify-content-md-center\">
        <div class=\"col col-lg-6\">
            <div class=\"card\" >
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                            <li class=\"list-group-item\"><a href=\"{{ path('app_login') }}\" class=\"btn  btn-primary\" >Click here to Login</a></li>
                    </ul>
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                            <li class=\"list-group-item\"><a href=\"{{ path('register_ms-owner') }}\" class=\"btn btn-outline-primary\" > Register As Microservice Owner</a></li>
                            <li class=\"list-group-item\"><a href=\"{{ path('register_main_admin') }}\" class=\"btn btn-outline-danger\" > Register As 360 Admin</a></li>
                            <li class=\"list-group-item\"><a href=\"{{ path('register_client_admin') }}\"  class=\"btn btn-outline-success\" > Register as Client Admin</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

{% endblock body %}", "home.html.twig", "/var/www/app/templates/home.html.twig");
    }
}
