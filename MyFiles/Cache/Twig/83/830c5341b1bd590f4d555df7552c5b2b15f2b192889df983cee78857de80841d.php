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

/* Wizard-2.html.twig */
class __TwigTemplate_9c8d94533db15bb67f8fc586848a19d03af8cd3acdadc7698788128fe0862f66 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard-2.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <!-- Macros Template Imports -->
    ";
        // line 24
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard-2.html.twig", 24)->unwrap();
        // line 25
        echo "    ";
        $context["codimpuesto"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codimpuesto"], "method", false, false, false, 25);
        // line 26
        echo "    ";
        $context["codretencion"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codretencion"], "method", false, false, false, 26);
        // line 27
        echo "
    <div class=\"bg-primary pt-5 pb-5\">
        <br/>
        <br/>
        <br/>
    </div>
    <div class=\"container\" style=\"margin-top: -100px;\">
        <div class=\"card shadow mb-5\">
            <div class=\"card-body\">
                <h1 class=\"h3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 37), "html", null, true);
        echo "
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 38), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 38), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 42), "html", null, true);
        echo "</p>
                <hr/>
                <form action=\"#\" method=\"post\" class=\"form\" id=\"formWizard\">
                    <input type=\"hidden\" name=\"action\" value=\"step2\" />
                    <div class=\"form-row align-items-end\">
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 49
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["regimeniva", "regimeniva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 49), "regimeniva", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getRegimenIva", [], "method", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "vat-regime"], "method", false, false, false, 49)], 49, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 54
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codimpuesto", "codimpuesto", ($context["codimpuesto"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Impuesto", 1 => true], "method", false, false, false, 54), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-tax"], "method", false, false, false, 54)], 54, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 59
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codretencion", "codretencion", ($context["codretencion"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Retencion", 1 => true], "method", false, false, false, 59), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-retention"], "method", false, false, false, 59)], 59, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cost-price-policy"], "method", false, false, false, 64), "html", null, true);
        echo "
                                <select name=\"costpricepolicy\" class=\"form-control\">
                                    <option value=\"\">------</option>
                                    <option value=\"last-price\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "last-purchase-price"], "method", false, false, false, 67), "html", null, true);
        echo "</option>
                                    <option value=\"average-price\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "average-purchase-price"], "method", false, false, false, 68), "html", null, true);
        echo "</option>
                                    <option value=\"actual-price\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actual-cost-price"], "method", false, false, false, 69), "html", null, true);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group form-check\">
                                ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "updatesupplierprices"], "method", false, false, false, 75)) {
            // line 76
            echo "                                    <input type=\"checkbox\" name=\"updatesupplierprices\" value=\"1\" id=\"cbUpdateSupplierPrices\" class=\"form-check-input\" checked=\"\" />
                                ";
        } else {
            // line 78
            echo "                                    <input type=\"checkbox\" name=\"updatesupplierprices\" value=\"1\" id=\"cbUpdateSupplierPrices\" class=\"form-check-input\" />
                                ";
        }
        // line 80
        echo "                                <label for=\"cbUpdateSupplierPrices\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "update-supplier-prices"], "method", false, false, false, 80), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group form-check\">
                                ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "ventasinstock"], "method", false, false, false, 85)) {
            // line 86
            echo "                                    <input type=\"checkbox\" name=\"ventasinstock\" value=\"1\" id=\"cbNoStock\" class=\"form-check-input\" checked=\"\" />
                                ";
        } else {
            // line 88
            echo "                                    <input type=\"checkbox\" name=\"ventasinstock\" value=\"1\" id=\"cbNoStock\" class=\"form-check-input\" />
                                ";
        }
        // line 90
        echo "                                <label for=\"cbNoStock\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "allow-sale-without-stock-n"], "method", false, false, false, 90), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group form-check\">
                                <input type=\"checkbox\" name=\"defaultplan\" value=\"1\" id=\"checkboxPlan\" class=\"form-check-input\" checked=\"\" />
                                <label for=\"checkboxPlan\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "load-def-acc-plan"], "method", false, false, false, 96), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"col-sm-8 text-right\">
                            <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                                ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 101), "html", null, true);
        echo "
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/>
    </div>
";
    }

    // line 112
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/custom.css"]), "html", null, true);
        echo "\" />
";
    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/pace-js/pace.min.js"]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/JS/Custom.js"]), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#formWizard\").submit(function () {
                \$(\"#btnWizard\").prop('disabled', true);
                \$(\"#btnWizard\").html('<i class=\"fas fa-spinner fa-spin\"></i>');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Wizard-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 120,  230 => 119,  225 => 118,  221 => 117,  215 => 114,  210 => 113,  206 => 112,  192 => 101,  184 => 96,  174 => 90,  170 => 88,  166 => 86,  164 => 85,  155 => 80,  151 => 78,  147 => 76,  145 => 75,  136 => 69,  132 => 68,  128 => 67,  122 => 64,  114 => 59,  106 => 54,  98 => 49,  88 => 42,  79 => 38,  75 => 37,  63 => 27,  60 => 26,  57 => 25,  55 => 24,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard-2.html.twig", "C:\\xampp2\\htdocs\\facturasscripts\\Dinamic\\View\\Wizard-2.html.twig");
    }
}
