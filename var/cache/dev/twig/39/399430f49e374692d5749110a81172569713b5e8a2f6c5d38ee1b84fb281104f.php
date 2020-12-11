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

/* claim/new.html.twig */
class __TwigTemplate_ec7291db7bd0c8e6b4aec9641002a52542d7482abb23679c603e9bd246db8270 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'ScopeClaimType_widget' => [$this, 'block_ScopeClaimType_widget'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "claim/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "claim/new.html.twig", 1);
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
        echo "    <form >
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "scope", [], "any", false, false, false, 7), 'row');
        echo "
        </div>
    </div>

    ";
        // line 11
        $this->displayBlock('ScopeClaimType_widget', $context, $blocks);
        // line 16
        echo "
        <ul id=\"complex_container\">
            <li class=\"nested-form\">
                <input type=\"text\" name=\"item[base_attributes][0][text]\" id=\"item_base_attributes_0_text\" style=\"width: 500px;\">
                <ul class=\"deep-container\">
                    <li class=\"deep-nested-form\">
                        <input type=\"text\" name=\"item[base_attributes][0][deep_attributes][0][scope]\" id=\"item_base_attributes_0_deep_attributes_0_scope\" style=\"width: 500px;\">
                        <ul class=\"more-deep-container\">
                            <li class=\"more-deep-nested-form\">
                                <input type=\"text\" class=\"form-control\" name=\"item[base_attributes][0][deep_attributes][0][more_deep_attributes][0][name]\" id=\"item_base_attributes_0_deep_attributes_0_more_deep_attributes_0_name\" >
                            </li>
                            <li class=\"more-deep-nested-form\">
                                <input type=\"text\" class=\"form-control\" name=\"item[base_attributes][0][deep_attributes][0][more_deep_attributes][1][uri]\" id=\"item_base_attributes_0_deep_attributes_0_more_deep_attributes_1_uri\" >
                                <button type=\"button\" class=\"more-deep-remove\">Remove</button>
                            </li>
                            <li><button type=\"button\" class=\"more-deep-add\">Add</button></li>
                        </ul>
                    </li>
                    <li><button type=\"button\" class=\"deep-add\">Add</button></li>
                </ul>
            </li>
            <li><button type=\"button\" id=\"complex_add\">Add</button></li>
        </ul>
    <div class=\"col-md-6\">
        <button type=\"submit\" class=\"btn btn-small btn-primary\"> Submit</button>
    </div>

    </form>

    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kendo/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-nested-form.js"), "html", null, true);
        echo "\"></script>

    <script>

        function afterInitialize(nestedForm) {
            onBuildForm(nestedForm.forms());
        }
        function onBuildForm(\$elem) {
            \$elem.find('input[type=\"text\"]').each(function(i, input) {
                \$(input).val(\$(input).attr('id'));
            });
        }

        \$('#complex_container').nestedForm({
            forms: '.nested-form',
            adder: '#complex_add',
            associations: ['base'],
            cloneEvents: false,
            afterInitialize: afterInitialize,
            onBuildForm: onBuildForm,
            nestedForm: {
                forms: '.deep-nested-form',
                adder: '.deep-add',
                associations: ['deep'],
                cloneEvents: false,
                afterInitialize: afterInitialize,
                onBuildForm: onBuildForm,
                nestedForm: {
                    forms: '.more-deep-nested-form',
                    adder: '.more-deep-add',
                    remover: '.more-deep-remove',
                    associations: ['more_deep'],
                    cloneEvents: false,
                    afterInitialize: afterInitialize,
                    onBuildForm: onBuildForm
                }
            }
        });
    </script>

    <script type=\"text/javascript\">
        \$('.my-selector').collection();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_ScopeClaimType_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ScopeClaimType_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ScopeClaimType_widget"));

        // line 12
        echo "        <div class=\"col-md-6\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "claim", [], "any", false, false, false, 13), 'row');
        echo "
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "claim/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 13,  182 => 12,  172 => 11,  118 => 46,  114 => 45,  83 => 16,  81 => 11,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <form >
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_row(form.scope) }}
        </div>
    </div>

    {% block ScopeClaimType_widget %}
        <div class=\"col-md-6\">
            {{ form_row(form.claim) }}
        </div>
    {% endblock %}

        <ul id=\"complex_container\">
            <li class=\"nested-form\">
                <input type=\"text\" name=\"item[base_attributes][0][text]\" id=\"item_base_attributes_0_text\" style=\"width: 500px;\">
                <ul class=\"deep-container\">
                    <li class=\"deep-nested-form\">
                        <input type=\"text\" name=\"item[base_attributes][0][deep_attributes][0][scope]\" id=\"item_base_attributes_0_deep_attributes_0_scope\" style=\"width: 500px;\">
                        <ul class=\"more-deep-container\">
                            <li class=\"more-deep-nested-form\">
                                <input type=\"text\" class=\"form-control\" name=\"item[base_attributes][0][deep_attributes][0][more_deep_attributes][0][name]\" id=\"item_base_attributes_0_deep_attributes_0_more_deep_attributes_0_name\" >
                            </li>
                            <li class=\"more-deep-nested-form\">
                                <input type=\"text\" class=\"form-control\" name=\"item[base_attributes][0][deep_attributes][0][more_deep_attributes][1][uri]\" id=\"item_base_attributes_0_deep_attributes_0_more_deep_attributes_1_uri\" >
                                <button type=\"button\" class=\"more-deep-remove\">Remove</button>
                            </li>
                            <li><button type=\"button\" class=\"more-deep-add\">Add</button></li>
                        </ul>
                    </li>
                    <li><button type=\"button\" class=\"deep-add\">Add</button></li>
                </ul>
            </li>
            <li><button type=\"button\" id=\"complex_add\">Add</button></li>
        </ul>
    <div class=\"col-md-6\">
        <button type=\"submit\" class=\"btn btn-small btn-primary\"> Submit</button>
    </div>

    </form>

    <script src=\"{{ asset('kendo/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-nested-form.js') }}\"></script>

    <script>

        function afterInitialize(nestedForm) {
            onBuildForm(nestedForm.forms());
        }
        function onBuildForm(\$elem) {
            \$elem.find('input[type=\"text\"]').each(function(i, input) {
                \$(input).val(\$(input).attr('id'));
            });
        }

        \$('#complex_container').nestedForm({
            forms: '.nested-form',
            adder: '#complex_add',
            associations: ['base'],
            cloneEvents: false,
            afterInitialize: afterInitialize,
            onBuildForm: onBuildForm,
            nestedForm: {
                forms: '.deep-nested-form',
                adder: '.deep-add',
                associations: ['deep'],
                cloneEvents: false,
                afterInitialize: afterInitialize,
                onBuildForm: onBuildForm,
                nestedForm: {
                    forms: '.more-deep-nested-form',
                    adder: '.more-deep-add',
                    remover: '.more-deep-remove',
                    associations: ['more_deep'],
                    cloneEvents: false,
                    afterInitialize: afterInitialize,
                    onBuildForm: onBuildForm
                }
            }
        });
    </script>

    <script type=\"text/javascript\">
        \$('.my-selector').collection();
    </script>
{% endblock body %}", "claim/new.html.twig", "/var/www/app/templates/claim/new.html.twig");
    }
}
