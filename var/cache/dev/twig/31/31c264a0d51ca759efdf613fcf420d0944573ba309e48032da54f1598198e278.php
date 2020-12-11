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

/* microservice_scope/new.html.twig */
class __TwigTemplate_10eb7fa5c73709c22a882387998c4665b39381f9c8911d05e38961edcc257901 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "microservice_scope/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "microservice_scope/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "microservice_scope/new.html.twig", 1);
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
        echo "    <form method=\"post\" id=\"scopeForm\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <ul id=\"complex_container\">
                        <li class=\"nested-form\" id=\"scopeList_0\">
                            <label> Scope</label>
                            <input type=\"text\" name=\"item[base_attributes][0][scope]\" class=\"form-control\" >
                            <ul class=\"deep-container\">
                                    <li class=\"deep-nested-form\">
                                        <label> Claim Name</label>
                                        <input type=\"text\"  class=\"form-control\" id=\"item_base_attributes_0_deep_attributes_0_name\" name=\"item[base_attributes][0][deep_attributes][0][name]\" >
                                        <button type=\"button\" class=\"deep-remove btn btn-outline-danger\" onclick=\"disableHiddenField('item_base_attributes_0_deep_attributes_0_name')\">Remove Claim</button>
                                    </li>
                                <li><button type=\"button\" class=\"deep-add btn btn-outline-primary\" >Add Claim</button></li>
                            </ul>
                            <button type=\"button\" class=\"btn btn-outline-danger\" id=\"complex_remove\"  onclick=\"removeScope('scopeList_0')\">Remove Scope</button>
                        </li>
                    <li><button type=\"button\" class=\"btn btn-outline-dark\" id=\"complex_add\"  >Add Scope</button></li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <button type=\"submit\" id class=\"btn btn-small btn-primary\"> Submit</button>
        </div>

    </form>

    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kendo/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-nested-form.js"), "html", null, true);
        echo "\"></script>
    <script>

        function disableHiddenField(id) {
            \$(\"#\"+id).attr(\"disabled\", \"disabled\");
        }

        function removeScope(id) {
            \$(\"#\"+id).remove();
        }

        function afterInitialize(nestedForm) {
            onBuildForm(nestedForm.forms());
        }
        function onBuildForm(\$elem) {
            // \$elem.find('input[type=\"text\"]').each(function(i, input) {
            //     \$(input).val(\$(input).attr('id'));
            // });
        }

        \$('#complex_container').nestedForm({
            forms: '.nested-form',
            adder: '#complex_add',
            remover: '#complex_remove',
            associations: ['base'],
            cloneEvents: false,
            increment: 1,
            startIndex: 0,
            afterInitialize: afterInitialize,
            onBuildForm: onBuildForm,
            nestedForm: {
                forms: '.deep-nested-form',
                adder: '.deep-add',
                remover: '.deep-remove',
                associations: ['deep'],
                cloneEvents: false,
                increment: 1,
                startIndex: 0,
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "microservice_scope/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <form method=\"post\" id=\"scopeForm\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <ul id=\"complex_container\">
                        <li class=\"nested-form\" id=\"scopeList_0\">
                            <label> Scope</label>
                            <input type=\"text\" name=\"item[base_attributes][0][scope]\" class=\"form-control\" >
                            <ul class=\"deep-container\">
                                    <li class=\"deep-nested-form\">
                                        <label> Claim Name</label>
                                        <input type=\"text\"  class=\"form-control\" id=\"item_base_attributes_0_deep_attributes_0_name\" name=\"item[base_attributes][0][deep_attributes][0][name]\" >
                                        <button type=\"button\" class=\"deep-remove btn btn-outline-danger\" onclick=\"disableHiddenField('item_base_attributes_0_deep_attributes_0_name')\">Remove Claim</button>
                                    </li>
                                <li><button type=\"button\" class=\"deep-add btn btn-outline-primary\" >Add Claim</button></li>
                            </ul>
                            <button type=\"button\" class=\"btn btn-outline-danger\" id=\"complex_remove\"  onclick=\"removeScope('scopeList_0')\">Remove Scope</button>
                        </li>
                    <li><button type=\"button\" class=\"btn btn-outline-dark\" id=\"complex_add\"  >Add Scope</button></li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <button type=\"submit\" id class=\"btn btn-small btn-primary\"> Submit</button>
        </div>

    </form>

    <script src=\"{{ asset('kendo/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-nested-form.js') }}\"></script>
    <script>

        function disableHiddenField(id) {
            \$(\"#\"+id).attr(\"disabled\", \"disabled\");
        }

        function removeScope(id) {
            \$(\"#\"+id).remove();
        }

        function afterInitialize(nestedForm) {
            onBuildForm(nestedForm.forms());
        }
        function onBuildForm(\$elem) {
            // \$elem.find('input[type=\"text\"]').each(function(i, input) {
            //     \$(input).val(\$(input).attr('id'));
            // });
        }

        \$('#complex_container').nestedForm({
            forms: '.nested-form',
            adder: '#complex_add',
            remover: '#complex_remove',
            associations: ['base'],
            cloneEvents: false,
            increment: 1,
            startIndex: 0,
            afterInitialize: afterInitialize,
            onBuildForm: onBuildForm,
            nestedForm: {
                forms: '.deep-nested-form',
                adder: '.deep-add',
                remover: '.deep-remove',
                associations: ['deep'],
                cloneEvents: false,
                increment: 1,
                startIndex: 0,
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
{% endblock body %}
", "microservice_scope/new.html.twig", "/var/www/app/templates/microservice_scope/new.html.twig");
    }
}
