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

/* POS/Modal/Cashup.html.twig */
class __TwigTemplate_832485428b36be25c02edece0b2209f266deafe567dade0d2a59f09a86df4f0d extends \Twig\Template
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
        echo "<!-- Cashup Modal -->
<div class=\"modal fade\" id=\"cashupModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <div class=\"d-flex w-100\">
                    <div class=\"pr-2 flex-grow-1\">
                        <h5 class=\"modal-title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cashup"], "method", false, false, false, 14), "html", null, true);
        echo "</h5>
                    </div>
                    <form method=\"post\">
                        <input type=\"hidden\" name=\"action\" value=\"print-cashup\">
                        <button type=\"submit\" class=\"mr-2 btn btn-icon btn-round btn-primary\"
                                title=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "print-z"], "method", false, false, false, 19), "html", null, true);
        echo "\">
                            <i class=\"fa fa-print\"></i>
                        </button>
                    </form>
                    <button type=\"button\" class=\"btn btn-icon btn-round btn-danger\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                </div>
            </div>
            <form id=\"cashupForm\" name=\"cashupForm\" method=\"POST\">
                <input type=\"hidden\" name=\"action\" value=\"close-session\">
                <div class=\"modal-body\">
                    <div class=\"form-group row\">
                        <label class=\"col-sm-8 col-form-label\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "amount-counted"], "method", false, false, false, 32), "html", null, true);
        echo "</label>
                        <label class=\"col-sm-4 col-form-label\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "currency-denomination"], "method", false, false, false, 33), "html", null, true);
        echo "</label>
                    </div>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getDenominations", [], "method", false, false, false, 35));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["denominacion"]) {
            // line 36
            echo "                        <div class=\"form-group row\">
                            <div class=\"col-sm-8\">
                                <input type=\"number\" class=\"form-control\" name=\"cash[";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["denominacion"], "valor", [], "any", false, false, false, 38), "html", null, true);
            echo "]\"
                                       placeholder=\"0\">
                            </div>
                            <label class=\"col-sm-4 col-form-label\"> x ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["denominacion"], "valor", [], "any", false, false, false, 41), "html", null, true);
            echo "</label>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            No hay denominaciones registradas, registralas en.
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "EditConfiguracionPOS"], "method", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "pos-settings"], "method", false, false, false, 46), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['denominacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary btn-round\"
                            data-dismiss=\"modal\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 52), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-warning btn-round\"
                            id=\"saveCashupButton\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 54), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "POS/Modal/Cashup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 54,  122 => 52,  117 => 49,  106 => 46,  102 => 44,  94 => 41,  88 => 38,  84 => 36,  79 => 35,  74 => 33,  70 => 32,  54 => 19,  46 => 14,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Modal/Cashup.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Modal/Cashup.html.twig");
    }
}
