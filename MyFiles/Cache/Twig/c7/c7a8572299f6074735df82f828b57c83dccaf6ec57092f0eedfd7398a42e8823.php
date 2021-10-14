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

/* POS/Modal/PausedOperations.html.twig */
class __TwigTemplate_7b75aeae4ca3413a53feaddcdd8d883867481f6fc856ae884e8646324a77c32a extends \Twig\Template
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
        echo "<!-- Paused Operations Modal -->
<div class=\"modal fade\" id=\"pausedOpsModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <div class=\"d-flex w-100\">
                    <div class=\"pr-2 flex-grow-1\">
                        <h5 class=\"modal-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "till-session-pausedops"], "method", false, false, false, 8), "html", null, true);
        echo "</h5>
                    </div>
                    <button type=\"button\" class=\"btn btn-icon btn-round btn-danger\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                </div>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    <table class=\"table search-table table-striped\" id=\"pausedOperations\">
                        <colgroup>
                            <col class=\"w-15\">
                            <col>
                            <col class=\"w-15\">
                            <col class=\"w-15\">
                            <col class=\"w-15\">
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope=\"col\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "code"], "method", false, false, false, 28), "html", null, true);
        echo "</th>
                            <th scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "customer"], "method", false, false, false, 29), "html", null, true);
        echo "</th>
                            <th scope=\"col\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "date"], "method", false, false, false, 30), "html", null, true);
        echo "</th>
                            <th scope=\"col\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "time"], "method", false, false, false, 31), "html", null, true);
        echo "</th>
                            <th scope=\"col\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 32), "html", null, true);
        echo "</th>
                            <th scope=\"col\"><i class=\"fas fa-chevron-circle-right\"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "session", [], "any", false, false, false, 37), "loadPausedOps", [], "method", false, false, false, 37));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 38
            echo "                            ";
            $context["rowbg"] = ((twig_get_attribute($this->env, $this->source, $context["operation"], "dtooculto", [], "any", false, false, false, 38)) ? ("table-danger") : (""));
            // line 39
            echo "                            <tr class=\"";
            echo twig_escape_filter($this->env, ($context["rowbg"] ?? null), "html", null, true);
            echo "\">
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "codigo", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["operation"], "nombrecliente", [], "any", false, false, false, 41)], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "fecha", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "hora", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 44), "coins", [], "method", false, false, false, 44), "format", [0 => twig_get_attribute($this->env, $this->source, $context["operation"], "total", [], "any", false, false, false, 44)], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-link resume-button px-0\" data-code=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "idpausada", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                                        <i class=\"fas fa-file-download fa-lg text-info\"></i>
                                    </button>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                            <div class=\"alert alert-info\" role=\"alert\">
                                Ninguna operacion registrada
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        return "POS/Modal/PausedOperations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 56,  138 => 52,  127 => 46,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  101 => 39,  98 => 38,  93 => 37,  85 => 32,  81 => 31,  77 => 30,  73 => 29,  69 => 28,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Modal/PausedOperations.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Modal/PausedOperations.html.twig");
    }
}
