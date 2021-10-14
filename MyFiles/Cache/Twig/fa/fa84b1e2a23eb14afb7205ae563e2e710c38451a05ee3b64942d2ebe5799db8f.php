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

/* POS/Layout/Navbar.html.twig */
class __TwigTemplate_10773a30c1d69646894adf9c8948182ce38a1b87d756370420406264086110db extends \Twig\Template
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
        // line 7
        echo "<nav class=\"navbar navbar-expand-md fixed-top navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"index.php\" data-background-color=\"dark2\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 8), "nombrecorto", [], "any", false, false, false, 8), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#cashupModal\">
                    <i class=\"fas fa-cash-register\"></i>&nbsp;";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cashup"], "method", false, false, false, 16), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#historyModal\">
                    <i class=\"fas fa-history\"></i>&nbsp;";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "till-session-operations"], "method", false, false, false, 20), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#pausedOpsModal\">
                    <i class=\"fas fa-pause\"></i>&nbsp;";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "till-session-pausedops"], "method", false, false, false, 24), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item dropdown hidden-caret\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"dropdown2\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-user-circle\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 28), "nick", [], "any", false, false, false, 28)), "html", null, true);
        echo "</a>
                <div class=\"dropdown-menu dropdown-menu-right hidden-caret\" aria-labelledby=\"dropdown2\">
                    <a class=\"dropdown-item\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ListSesionPOS"]), "html", null, true);
        echo "\"><i class=\"fas fa-list\"></i>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "till-sessions"], "method", false, false, false, 30), "html", null, true);
        echo "</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["EditConfiguracionPOS"]), "html", null, true);
        echo "\"><i class=\"fas fa-cogs\"></i>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 32), "html", null, true);
        echo "</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "POS/Layout/Navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  77 => 30,  72 => 28,  65 => 24,  58 => 20,  51 => 16,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Layout/Navbar.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Layout/Navbar.html.twig");
    }
}
