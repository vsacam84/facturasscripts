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

/* GeneralSettingsPOS.html.twig */
class __TwigTemplate_7550432cb12165c6674dfb5585c79e65a06e5302ed133b40d39d7033dd042f2d extends \Twig\Template
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
        echo "<form id=\"formPointSaleSettings\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"action\" value=\"settings\">
    <div class=\"card shadow\">
        <div class=\"card-body\">
            <div class=\"form-row mb-3\">
                <div class=\"col-md-12\">
                    <legend class=\"text-info\"><i class=\"fas fa-sliders-h\"></i> Opciones predefinidas</legend>
                </div>
                <div class=\"form-group col-6\">
                    ";
        // line 16
        $context["cash"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "pointofsale", 1 => "fpagoefectivo"], "method", false, false, false, 16);
        // line 17
        echo "                    <label for=\"cash-payment\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cash-payment-method"], "method", false, false, false, 17), "html", null, true);
        echo "</label>
                    <select class=\"form-control\" id=\"cash-payment\" name=\"cash-payment\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "paymentMethods", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["formapago"]) {
            // line 20
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formapago"], "codpago", [], "any", false, false, false, 20), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["formapago"], "codpago", [], "any", false, false, false, 20) == ($context["cash"] ?? null))) {
                echo " selected ";
            }
            echo ">
                                ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formapago"], "descripcion", [], "any", false, false, false, 21), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formapago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </select>
                </div>
                <div class=\"form-group col-6\">
                    ";
        // line 27
        $context["defaultdoc"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "pointofsale", 1 => "defaultdoc"], "method", false, false, false, 27);
        // line 28
        echo "                    <label for=\"cash-payment\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-business-document"], "method", false, false, false, 28), "html", null, true);
        echo "</label>
                    <select class=\"form-control\" id=\"default-businessdoc\" name=\"default-businessdoc\">
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "businessDocTypes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["businessDoc"]) {
            // line 31
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["businessDoc"], "tipodoc", [], "any", false, false, false, 31), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["businessDoc"], "tipodoc", [], "any", false, false, false, 31) == ($context["defaultdoc"] ?? null))) {
                echo " selected ";
            }
            echo ">
                                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["businessDoc"], "tipodoc", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['businessDoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </select>
                </div>
            </div>
            <div class=\"form-row mb-3\">
                <div class=\"col-md-12\">
                    <legend class=\"text-info\">
                        <i class=\"fas fa-credit-card\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "available-payment-methods"], "method", false, false, false, 41), "html", null, true);
        echo "
                    </legend>
                </div>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "paymentMethods", [], "any", false, false, false, 44));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 45
            echo "                    ";
            $context["checked"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "isPaymentMethodEneabled", [0 => twig_get_attribute($this->env, $this->source, $context["paymentMethod"], "codpago", [], "any", false, false, false, 45)], "method", false, false, false, 45);
            // line 46
            echo "                    <div class=\"col\">
                        <div class=\"form-group form-check\">
                            <input type=\"checkbox\" name=\"paymentmethod[]\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentMethod"], "codpago", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"form-check-input\" ";
            echo ((($context["checked"] ?? null)) ? ("checked") : (""));
            echo ">
                            <label for=\"checkbox0\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentMethod"], "descripcion", [], "any", false, false, false, 49));
            echo "</label>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "                    <li><em>No se encontro ningun m&eacute;todo de pago.</em></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>
            <div class=\"form-row mb-4\">
                <div class=\"col-md-12\">
                    <legend class=\"text-info\">
                        <i class=\"fas fa-file-invoice-dollar\"></i> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "available-custumer-doctypes"], "method", false, false, false, 59), "html", null, true);
        echo "
                    </legend>
                </div>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "businessDocTypes", [], "any", false, false, false, 62));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["businessDoc"]) {
            // line 63
            echo "                    <div class=\"col\">
                        ";
            // line 64
            $context["checked"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "isBusinessDocEneabled", [0 => twig_get_attribute($this->env, $this->source, $context["businessDoc"], "tipodoc", [], "any", false, false, false, 64)], "method", false, false, false, 64);
            // line 65
            echo "                        <div class=\"form-group form-check\">
                            <input type=\"checkbox\" name=\"bussinesdocs[]\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["businessDoc"], "tipodoc", [], "any", false, false, false, 66), "html", null, true);
            echo "\" class=\"form-check-input\" ";
            echo ((($context["checked"] ?? null)) ? ("checked") : (""));
            echo ">
                            <label for=\"checkbox0\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["businessDoc"], "tipodoc", [], "any", false, false, false, 67)], "method", false, false, false, 67), "html", null, true);
            echo "</label>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                    <li><em>No se encontro ningun tipo de documento.</em></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['businessDoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
            <div class=\"form-row mb-4\">
                <div class=\"col-md-12\">
                    <legend class=\"text-info\"><i class=\"fas fa-table\"></i> Columnas en el POS</legend>
                    ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 77), "admin", [], "any", false, false, false, 77)) {
            // line 78
            echo "                        <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["EditPageOption"]), "html", null, true);
            echo "?code=EditConfiguracionPOS\">
                            <i class=\"fas fa-edit\" aria-hidden=\"true\"> Editar</i>
                        </a>
                    ";
        } else {
            // line 82
            echo "                        <p>Solo un administrador puede modificar esta información</p>
                    ";
        }
        // line 84
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col text-right\">
                    <button class=\"btn btn-sm btn-primary\" type=\"submit\" name=\"accion\" value=\"save\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 90), "html", null, true);
        echo "</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "GeneralSettingsPOS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 90,  228 => 84,  224 => 82,  216 => 78,  214 => 77,  208 => 73,  201 => 71,  192 => 67,  186 => 66,  183 => 65,  181 => 64,  178 => 63,  173 => 62,  167 => 59,  161 => 55,  154 => 53,  145 => 49,  139 => 48,  135 => 46,  132 => 45,  127 => 44,  121 => 41,  113 => 35,  104 => 32,  95 => 31,  91 => 30,  85 => 28,  83 => 27,  78 => 24,  69 => 21,  60 => 20,  56 => 19,  50 => 17,  48 => 16,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "GeneralSettingsPOS.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/GeneralSettingsPOS.html.twig");
    }
}
