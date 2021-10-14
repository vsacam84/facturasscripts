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

/* PrintTicketScreen.html.twig */
class __TwigTemplate_002ac8ce82922c714c06c559ddbadf25862a60b283f66823db59653b231ab132 extends \Twig\Template
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
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-12 text-center\">
       <h1><i class=\"fas fa-print\" aria-hidden=\"true\"></i></h1>
       <h4><span> ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "printing"], "method", false, false, false, 4), "html", null, true);
        echo "</span></h4>
       <h4><span>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "document", [], "any", false, false, false, 5)], "method", false, false, false, 5), "html", null, true);
        echo "</span></h4>
    </div>      
</div>\t
<div class=\"d-none\">
\t<img src='http://localhost:10080?documento=";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "document", [], "any", false, false, false, 9), "html", null, true);
        echo "' alt='remote-printer'/>
</div>";
    }

    public function getTemplateName()
    {
        return "PrintTicketScreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "PrintTicketScreen.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/PrintTicketScreen.html.twig");
    }
}
