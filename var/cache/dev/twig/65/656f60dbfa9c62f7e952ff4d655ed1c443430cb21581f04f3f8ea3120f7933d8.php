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

/* verification_request/decline_email.html.twig */
class __TwigTemplate_dbf1af06fe2ddce58c2afd3c5f3ce3ed13795ab8550de8f47a04c0a988cadecd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verification_request/decline_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verification_request/decline_email.html.twig"));

        // line 1
        echo "<h1>Hi! ";
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " </h1>

    <p>
        Sorry, your verification has  been declined.<br>
    </p>
    ";
        // line 6
        if ((isset($context["decline_reason"]) || array_key_exists("decline_reason", $context) ? $context["decline_reason"] : (function () { throw new RuntimeError('Variable "decline_reason" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <p>
       <strong> Reason:</strong><br>
        ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["decline_reason"]) || array_key_exists("decline_reason", $context) ? $context["decline_reason"] : (function () { throw new RuntimeError('Variable "decline_reason" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "
    </p>
    ";
        }
        // line 12
        echo "    <p>
        Kind Regards,
        Locastic Admin
    </p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "verification_request/decline_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  58 => 9,  54 => 7,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Hi! {{ user }} </h1>

    <p>
        Sorry, your verification has  been declined.<br>
    </p>
    {% if decline_reason %}
    <p>
       <strong> Reason:</strong><br>
        {{ decline_reason }}
    </p>
    {% endif %}
    <p>
        Kind Regards,
        Locastic Admin
    </p>
", "verification_request/decline_email.html.twig", "/var/www/app/templates/verification_request/decline_email.html.twig");
    }
}
