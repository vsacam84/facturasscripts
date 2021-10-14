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

/* POS/Modal/ProductSearch.html.twig */
class __TwigTemplate_22cb419f1b1e3e5ad40cd58912a30afe284d7003a636bf1213c8cc49fe31dbc9 extends \Twig\Template
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
        echo "<!-- Ajax Search Modal -->
<div class=\"modal fade\" id=\"productSearchModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <div class=\"d-flex w-100\">
                    <div class=\"pr-2 flex-grow-1\">
                        <div class=\"input-icon\">
                            <input class=\"form-control input-pill\" id=\"productSerachInput\" type=\"text\"
                                   placeholder=\"Buscar...\" autocomplete=\"off\" data-target=\"none\">
                            <span class=\"input-icon-addon\"><i class=\"fas fa-search\"></i></span>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-icon btn-round btn-danger\" data-dismiss=\"modal\">
                        <i class=\"fas fa-times\"></i>
                    </button>
                </div>
            </div>
            <div class=\"modal-body\">
                <table class=\"table search-table table-striped\">
                    <thead>
                    <tr>
                        <th class=\"w-90\" scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "product"], "method", false, false, false, 29), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 30), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                    <tbody id=\"productSearchResult\">
                    <tr>
                        <td colspan=\"2\">Escribe en el cuadro para buscar</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "POS/Modal/ProductSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  61 => 29,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Modal/ProductSearch.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Modal/ProductSearch.html.twig");
    }
}
