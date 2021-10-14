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

/* POS/Modal/History.html.twig */
class __TwigTemplate_25e56114293e49dfda7d36faed27ba8ecd0ba0b02e430766b2b426af87394fe1 extends \Twig\Template
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
        echo "<!-- History Modal -->
<div class=\"modal fade\" id=\"historyModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "till-session-operations"], "method", false, false, false, 12), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"btn btn-icon btn-round btn-danger\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    <table class=\"table search-table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"w-20\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "code"], "method", false, false, false, 22), "html", null, true);
        echo "</th>
                            <th scope=\"col\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "doc-type"], "method", false, false, false, 23), "html", null, true);
        echo "</th>
                            <th scope=\"col\" class=\"w-20\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "date"], "method", false, false, false, 24), "html", null, true);
        echo "</th>
                            <th scope=\"col\" class=\"w-20\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "time"], "method", false, false, false, 25), "html", null, true);
        echo "</th>
                            <th scope=\"col\" class=\"w-20\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 26), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "session", [], "any", false, false, false, 30), "loadHistory", [], "method", false, false, false, 30));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 31
            echo "                            <tr>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "codigo", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["operation"], "tipodoc", [], "any", false, false, false, 33)], "method", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "fecha", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "hora", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td class=\"text-right\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 36), "coins", [], "method", false, false, false, 36), "format", [0 => twig_get_attribute($this->env, $this->source, $context["operation"], "total", [], "any", false, false, false, 36)], "method", false, false, false, 36), "html", null, true);
            echo "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                            <div class=\"alert alert-info\" role=\"alert\">
                                Ninguna operacion registrada
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "POS/Modal/History.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  112 => 39,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  85 => 31,  80 => 30,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  44 => 12,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Modal/History.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Modal/History.html.twig");
    }
}
