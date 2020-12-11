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

/* app-client/edit.html.twig */
class __TwigTemplate_6b21b9d035de562bbaec82f52acc7c90e4e02d4b834239167681483e0eea2472 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app-client/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app-client/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app-client/edit.html.twig", 1);
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
        echo "
    ";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => "jquery.collection.html.twig"], true);
        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "
    <div class=\"row\">
        <div class=\"form-group\">
        <div class=\"col-md-6\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row');
        echo "
        </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group\">
        <div class=\"col-md-6\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "baseUri", [], "any", false, false, false, 19), 'row');
        echo "
        </div>
        </div>
    </div>
<div class=\"row\">
        <div class=\"form-group\">
        <div class=\"col-md-6\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "redirectUrl", [], "any", false, false, false, 26), 'row');
        echo "
        </div>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-md-6\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "clientId", [], "any", false, false, false, 34), 'widget');
        echo "
        </div>
        <div class=\"col-md-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\"  onclick=\"copy('app_client_clientId')\">Copy</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "clientSecret", [], "any", false, false, false, 42), 'widget');
        echo "
        </div>
        <div class=\"col-md-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\" onclick=\"copy('app_client_clientSecret')\">Copy</button>
        </div>
    </div>

    <div class=\"row\">
    <div class=\"col-md-6\">
        <button type=\"submit\" class=\"btn btn-small btn-primary\"> Submit</button>
        <a class=\"btn btn-outline-primary\"  href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("microservice_edit_scope", ["microserviceId" => twig_get_attribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 52, $this->source); })()), "getId", [], "method", false, false, false, 52)]), "html", null, true);
        echo "\"> Add Scope</a>
    </div>
    </div>
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$('.my-selector').collection();
    </script>

    <script>

        function copy(fieldId) {
            /* Get the text field */
            var copyText = document.getElementById(fieldId);

            copyText.select();
            copyText.setSelectionRange(0, 99999);

            document.execCommand(\"copy\");

        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app-client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  148 => 55,  142 => 52,  129 => 42,  118 => 34,  107 => 26,  97 => 19,  87 => 12,  80 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% form_theme form 'jquery.collection.html.twig' %}

    {{ form_start(form) }}
    {{ form_errors(form) }}
    <div class=\"row\">
        <div class=\"form-group\">
        <div class=\"col-md-6\">
            {{ form_row(form.name) }}
        </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group\">
        <div class=\"col-md-6\">
            {{ form_row(form.baseUri) }}
        </div>
        </div>
    </div>
<div class=\"row\">
        <div class=\"form-group\">
        <div class=\"col-md-6\">
            {{ form_row(form.redirectUrl) }}
        </div>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-md-6\">
            {{ form_widget(form.clientId) }}
        </div>
        <div class=\"col-md-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\"  onclick=\"copy('app_client_clientId')\">Copy</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_widget(form.clientSecret) }}
        </div>
        <div class=\"col-md-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\" onclick=\"copy('app_client_clientSecret')\">Copy</button>
        </div>
    </div>

    <div class=\"row\">
    <div class=\"col-md-6\">
        <button type=\"submit\" class=\"btn btn-small btn-primary\"> Submit</button>
        <a class=\"btn btn-outline-primary\"  href=\"{{ path('microservice_edit_scope', {microserviceId: application.getId()}) }}\"> Add Scope</a>
    </div>
    </div>
    {{ form_end(form) }}
    <script src=\"{{ asset('js/jquery.collection.js') }}\"></script>

    <script type=\"text/javascript\">
        \$('.my-selector').collection();
    </script>

    <script>

        function copy(fieldId) {
            /* Get the text field */
            var copyText = document.getElementById(fieldId);

            copyText.select();
            copyText.setSelectionRange(0, 99999);

            document.execCommand(\"copy\");

        }
    </script>
{% endblock body %}", "app-client/edit.html.twig", "/var/www/app/templates/app-client/edit.html.twig");
    }
}
