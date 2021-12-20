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

/* Error/AccessDenied.html.twig */
class __TwigTemplate_8687785abb02196e3591c962a197b20f57101f389f386450554887ad4863439c extends \Twig\Template
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
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Error/AccessDenied.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <br/><br/>
                <div class=\"jumbotron\">
                    <h1>
                        <i class=\"fas fa-lock\" aria-hidden=\"true\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "access-denied"], "method", false, false, false, 10), "html", null, true);
        echo ":
                    </h1>
                    <b>";
        // line 12
        echo twig_escape_filter($this->env, ($context["controllerName"] ?? null), "html", null, true);
        echo "</b>
                    <hr class=\"my-4\">
                    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                        <a class=\"navbar-brand\" href=\"index.php\">
                            <img src=\"Core/Assets/Images/logo.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                        </a>
                        <ul class=\"nav navbar-nav mr-auto\">
                            ";
        // line 19
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Error/AccessDenied.html.twig", 19)->unwrap();
        // line 20
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 21
            echo "                                ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 21, $context, $this->getSourceContext());
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </ul>
                        <ul class=\"navbar-nav flex-row ml-md-auto d-none d-md-flex\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"?logout=TRUE\">
                                    <i class=\"fas fa-sign-out\" aria-hidden=\"true\"></i>&nbsp; ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "logout"], "method", false, false, false, 27), "html", null, true);
        echo "
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Error/AccessDenied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  89 => 23,  80 => 21,  75 => 20,  73 => 19,  63 => 12,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Error/AccessDenied.html.twig", "C:\\xampp2\\htdocs\\facturasscripts\\Dinamic\\View\\Error\\AccessDenied.html.twig");
    }
}
