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

/* security/login.html.twig */
class __TwigTemplate_d74742268d997886b00adbeed672c354daa7d6415d68e2536a6f51fa0c2497bf extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <a class=\"offline-button\" href=\"#\">Back</a>
    <div id=\"example\">
        <div class=\"demo-section k-content\">
            <div id=\"validation-success\"></div>

            <form id=\"exampleform\"></form>
        </div>

        <script>
            \$(document).ready(function () {
                var validationSuccess = \$(\"#validation-success\");

                \$(\"#exampleform\").kendoForm({
                    orientation: \"vertical\",
                    formData: {

                    },
                    layout: \"grid\",
                    grid: {
                        cols: 3,
                        gutter: 20
                    },
                    items: [{
                        type: \"group\",
                        label: \"Login Form\",
                        items: [
                            { field: \"Username\", label: \"Email:\", validation: { required: true } },
                            {
                                field: \"Password\",
                                label: \"Password:\",
                                validation: { required: true },
                                hint: \"Hint: enter alphanumeric characters only.\",
                                editor: function(container, options) {
                                    container.append(\$(\"<input type='password' class='k-textbox k-valid' id='Password' name='Password' title='Password' required='required' autocomplete='off' aria-labelledby='Password-form-label' data-bind='value:Password' aria-describedby='Password-form-hint'>\"));
                                }
                            }
                        ]
                    }],
                    validateField: function(e) {
                        validationSuccess.html(\"\");
                    },
                    submit: function(e) {
                        e.preventDefault();
                        validationSuccess.html(\"<div class='k-messagebox k-messagebox-success'>Form data is valid!</div>\");
                    },
                    clear: function(ev) {
                        validationSuccess.html(\"\");
                    }
                });
            });
        </script>
    </div>


<form method=\"post\">
    ";
        // line 62
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageKey", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageData", [], "any", false, false, false, 63), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 71
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <div class=\"row\">
    <div class=\"col-md-6\">
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
    </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
        </div>
    </div>
    
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    <button class=\"btn btn-small btn-primary\" type=\"submit\">
        Sign in
    </button>

    <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"btn btn-outline-primary\" >
       Register
    </a>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 95,  191 => 88,  176 => 76,  169 => 71,  161 => 68,  158 => 67,  156 => 66,  153 => 65,  147 => 63,  145 => 62,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Log in!{% endblock %}

{% block body %}
    <a class=\"offline-button\" href=\"#\">Back</a>
    <div id=\"example\">
        <div class=\"demo-section k-content\">
            <div id=\"validation-success\"></div>

            <form id=\"exampleform\"></form>
        </div>

        <script>
            \$(document).ready(function () {
                var validationSuccess = \$(\"#validation-success\");

                \$(\"#exampleform\").kendoForm({
                    orientation: \"vertical\",
                    formData: {

                    },
                    layout: \"grid\",
                    grid: {
                        cols: 3,
                        gutter: 20
                    },
                    items: [{
                        type: \"group\",
                        label: \"Login Form\",
                        items: [
                            { field: \"Username\", label: \"Email:\", validation: { required: true } },
                            {
                                field: \"Password\",
                                label: \"Password:\",
                                validation: { required: true },
                                hint: \"Hint: enter alphanumeric characters only.\",
                                editor: function(container, options) {
                                    container.append(\$(\"<input type='password' class='k-textbox k-valid' id='Password' name='Password' title='Password' required='required' autocomplete='off' aria-labelledby='Password-form-label' data-bind='value:Password' aria-describedby='Password-form-hint'>\"));
                                }
                            }
                        ]
                    }],
                    validateField: function(e) {
                        validationSuccess.html(\"\");
                    },
                    submit: function(e) {
                        e.preventDefault();
                        validationSuccess.html(\"<div class='k-messagebox k-messagebox-success'>Form data is valid!</div>\");
                    },
                    clear: function(ev) {
                        validationSuccess.html(\"\");
                    }
                });
            });
        </script>
    </div>


<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <div class=\"row\">
    <div class=\"col-md-6\">
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
    </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
        </div>
    </div>
    
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    <button class=\"btn btn-small btn-primary\" type=\"submit\">
        Sign in
    </button>

    <a href=\"{{  path('app_home') }}\" class=\"btn btn-outline-primary\" >
       Register
    </a>
</form>
{% endblock %}
", "security/login.html.twig", "/var/www/app/templates/security/login.html.twig");
    }
}
