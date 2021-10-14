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

/* Etiquetas.html.twig */
class __TwigTemplate_e125dc636536321441ae6c0048d8018fc73c5a3ae9b2b9c65b197b65afeace01 extends \Twig\Template
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
        $context["mainViewName"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMainViewName", [], "method", false, false, false, 1);
        // line 2
        echo "
<script type=\"text/javascript\">
    function setMaxTagQuantity() {
        var printQtyInputs = document.getElementsByClassName(\"tag-quantity\");
        for (i = 0; i < printQtyInputs.length; i++) {
            printQtyInputs.item(i).value = printQtyInputs.item(i).getAttribute(\"data-max-value\");
        }
    }
    function setTagQuantity(quantity) {
        var printQtyInputs = document.getElementsByClassName(\"tag-quantity\");
        for (i = 0; i < printQtyInputs.length; i++) {
            printQtyInputs.item(i).value = quantity;
        }
    }
</script>

<form action=\"PrintEtiquetas\" method=\"post\">
    <input type=\"hidden\" name=\"model\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 19)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["mainViewName"] ?? null)] ?? null) : null), "model", [], "any", false, false, false, 19), "modelClassName", [], "method", false, false, false, 19), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 20)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["mainViewName"] ?? null)] ?? null) : null), "model", [], "any", false, false, false, 20), "primaryColumnValue", [], "method", false, false, false, 20), "html", null, true);
        echo "\"/>
    <div class=\"container-fluid\">
        <div class=\"row align-items-end\">
            <div class=\"col\">
                <div class=\"form-group\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "format"], "method", false, false, false, 25), "html", null, true);
        echo "
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">
                                <i class=\"far fa-file\"></i>
                            </span>
                        </div>
                        <select name=\"format\" class=\"form-control\">
                            <option>APLI 10490</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"form-group\">
                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "initial-row"], "method", false, false, false, 40), "html", null, true);
        echo "
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">
                                <i class=\"fas fa-th\"></i>
                            </span>
                        </div>
                        <select name=\"initrow\" class=\"form-control\">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"form-group\">
                    ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "initial-column"], "method", false, false, false, 71), "html", null, true);
        echo "
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">
                                <i class=\"fas fa-th\"></i>
                            </span>
                        </div>
                        <select name=\"initcol\" class=\"form-control\">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"form-group form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"printbarcodes\" value=\"1\" checked=\"true\" id=\"tagCodbarCheck\">
                    <label for=\"tagCodbarCheck\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "barcode"], "method", false, false, false, 90), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"form-group form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"printprices\" value=\"1\" checked=\"true\" id=\"tagPricesCheck\">
                    <label for=\"tagPricesCheck\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "price"], "method", false, false, false, 96), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"form-group form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"printdesc\" value=\"1\" id=\"tagDescCheck\">
                    <label for=\"tagDescCheck\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 102), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"mb-2 text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "print"], "method", false, false, false, 108), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <br/>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <h3 class=\"h4\">
                    <i class=\"far fa-clone\"></i> ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "number-labels-per-product"], "method", false, false, false, 121), "html", null, true);
        echo "
                </h3>
            </div>
            <div class=\"col\">
                <div class=\"mb-3 text-right\">
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" onclick=\"setTagQuantity('0');\">
                        ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-tag"], "method", false, false, false, 127), "html", null, true);
        echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" onclick=\"setTagQuantity('1');\">
                        ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "one-per-product"], "method", false, false, false, 130), "html", null, true);
        echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" onclick=\"setMaxTagQuantity();\">
                        ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all-tags"], "method", false, false, false, 133), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAvaliableTags", [], "method", false, false, false, 139));
        foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
            // line 140
            echo "                <div class=\"col-sm-2\">
                    <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, false, 141), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 141), "html", null, true);
            echo "</a>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">
                                <i class=\"far fa-clone\"></i>
                            </span>
                        </div>
                        <input type=\"number\" name=\"quantity";
            // line 148
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "quantity", [], "any", false, false, false, 148), "html", null, true);
            echo "\" data-max-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "quantity", [], "any", false, false, false, 148), "html", null, true);
            echo "\" class=\"form-control tag-quantity\" />
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "Etiquetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 152,  236 => 148,  224 => 141,  221 => 140,  217 => 139,  208 => 133,  202 => 130,  196 => 127,  187 => 121,  171 => 108,  162 => 102,  153 => 96,  144 => 90,  122 => 71,  88 => 40,  70 => 25,  62 => 20,  58 => 19,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Etiquetas.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/Etiquetas.html.twig");
    }
}
