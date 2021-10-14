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

/* EditConfiguracionPOS.html.twig */
class __TwigTemplate_feaf58bb2cd2f7f2c6bdef8f93b4038b30738b39adbc453c4f0c3e78322051fc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "EditConfiguracionPOS.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 10);
        // line 11
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-1\">
                <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 14), "html", null, true);
        echo "\">
                    <i class=\"fas fa-sync\" aria-hidden=\"true\"></i>
                </a>
            </div>
            <div class=\"col-11 text-right\">
                <h1 class=\"h3\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "
                    <i class=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 21), "html", null, true);
        echo " fa-fw\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <hr/>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EditConfiguracionPOS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  67 => 20,  58 => 14,  53 => 11,  50 => 10,  46 => 9,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "EditConfiguracionPOS.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/EditConfiguracionPOS.html.twig");
    }
}
