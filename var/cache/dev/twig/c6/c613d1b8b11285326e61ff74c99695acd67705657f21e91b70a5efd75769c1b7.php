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

/* microservice_scope/edit.html.twig */
class __TwigTemplate_2d499f64491e10fc6c4956ac37089824afb1633c40bce81647e0bfab0973fcb8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "microservice_scope/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "microservice_scope/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "microservice_scope/edit.html.twig", 1);
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

                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 9, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["scope"]) {
            // line 10
            echo "                    ";
            $context["scopeIndex"] = (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10) - 1);
            // line 11
            echo "

                <li class=\"nested-form\" id=\"scopeList_";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["scopeIndex"]) || array_key_exists("scopeIndex", $context) ? $context["scopeIndex"] : (function () { throw new RuntimeError('Variable "scopeIndex" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\">
                    <label> Scope</label>
                    <input type=\"text\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" name=\"item[base_attributes][";
            echo twig_escape_filter($this->env, (isset($context["scopeIndex"]) || array_key_exists("scopeIndex", $context) ? $context["scopeIndex"] : (function () { throw new RuntimeError('Variable "scopeIndex" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "][scope]\" class=\"form-control\" >
                    <ul class=\"deep-container\">
                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["scope"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["uri"]) {
                // line 18
                echo "                        <li class=\"deep-nested-form\">
                            <label> Claim Name</label>
                            <input type=\"text\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"form-control\" id=\"item_base_attributes_";
                echo twig_escape_filter($this->env, (isset($context["scopeIndex"]) || array_key_exists("scopeIndex", $context) ? $context["scopeIndex"] : (function () { throw new RuntimeError('Variable "scopeIndex" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "_deep_attributes_";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) - 1), "html", null, true);
                echo "_name\" name=\"item[base_attributes][";
                echo twig_escape_filter($this->env, (isset($context["scopeIndex"]) || array_key_exists("scopeIndex", $context) ? $context["scopeIndex"] : (function () { throw new RuntimeError('Variable "scopeIndex" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "][deep_attributes][";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) - 1), "html", null, true);
                echo "][name]\" >
                            <button type=\"button\" class=\"deep-remove btn btn-outline-danger\" onclick=\"disableHiddenField('item_base_attributes_";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["scopeIndex"]) || array_key_exists("scopeIndex", $context) ? $context["scopeIndex"] : (function () { throw new RuntimeError('Variable "scopeIndex" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "_deep_attributes_";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21) - 1), "html", null, true);
                echo "_name')\">Remove Claim</button>
                        </li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        <li><button type=\"button\" class=\"deep-add btn btn-outline-primary\" >Add Claim</button></li>
                    </ul>
                    <button type=\"button\" class=\"btn btn-outline-danger\" id=\"complex_remove\"  onclick=\"removeScope('scopeList_";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["scopeIndex"]) || array_key_exists("scopeIndex", $context) ? $context["scopeIndex"] : (function () { throw new RuntimeError('Variable "scopeIndex" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "')\">Remove Scope</button>
                </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['scope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                <li><button type=\"button\" class=\"btn btn-outline-dark\" id=\"complex_add\"  >Add Scope</button></li>
            </ul>
        </div>
    </div>
    <div class=\"col-md-6\">
        <button type=\"submit\" id class=\"btn btn-small btn-primary\"> Submit</button>
    </div>

    </form>

    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kendo/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
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
        return "microservice_scope/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 40,  196 => 39,  184 => 29,  167 => 26,  163 => 24,  144 => 21,  132 => 20,  128 => 18,  111 => 17,  104 => 15,  99 => 13,  95 => 11,  92 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <form method=\"post\" id=\"scopeForm\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <ul id=\"complex_container\">

                {% for key,scope in scopes %}
                    {% set  scopeIndex = loop.index-1 %}


                <li class=\"nested-form\" id=\"scopeList_{{ scopeIndex }}\">
                    <label> Scope</label>
                    <input type=\"text\" value=\"{{ key }}\" name=\"item[base_attributes][{{ scopeIndex }}][scope]\" class=\"form-control\" >
                    <ul class=\"deep-container\">
                        {% for name,uri in scope %}
                        <li class=\"deep-nested-form\">
                            <label> Claim Name</label>
                            <input type=\"text\" value=\"{{ name }}\" class=\"form-control\" id=\"item_base_attributes_{{ scopeIndex }}_deep_attributes_{{ loop.index -1 }}_name\" name=\"item[base_attributes][{{ scopeIndex }}][deep_attributes][{{ loop.index -1 }}][name]\" >
                            <button type=\"button\" class=\"deep-remove btn btn-outline-danger\" onclick=\"disableHiddenField('item_base_attributes_{{ scopeIndex }}_deep_attributes_{{ loop.index -1 }}_name')\">Remove Claim</button>
                        </li>
                        {% endfor %}
                        <li><button type=\"button\" class=\"deep-add btn btn-outline-primary\" >Add Claim</button></li>
                    </ul>
                    <button type=\"button\" class=\"btn btn-outline-danger\" id=\"complex_remove\"  onclick=\"removeScope('scopeList_{{ scopeIndex }}')\">Remove Scope</button>
                </li>
                {% endfor %}
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
{% endblock body %}", "microservice_scope/edit.html.twig", "/var/www/app/templates/microservice_scope/edit.html.twig");
    }
}
