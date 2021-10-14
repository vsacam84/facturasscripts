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

/* POS/Modal/ResetData.html.twig */
class __TwigTemplate_7f6ca2ee5a85c56c830094802b8c58c8f6d61ba706587dd61449d2998239720a extends \Twig\Template
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
        echo "<!-- Reset Data Modal -->
<div class=\"modal fade\" id=\"resetModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"resetModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"resetModalLabel\">Reiniciar la venta</h5>
            </div>
            <div class=\"modal-body\">
                <p>Se reiniciara la información</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-rounded btn-secondary\" data-dismiss=\"modal\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 18), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn btn-rounded btn-danger\" onclick=\"location.reload();\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 19), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "POS/Modal/ResetData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  50 => 18,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Modal/ResetData.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Modal/ResetData.html.twig");
    }
}
