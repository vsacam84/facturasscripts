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

/* POS/Modal/Checkout.html.twig */
class __TwigTemplate_9b573ada2f46cc35d8694c667fe6acf72695f10f9b608ba60d0a3b0f58adfe20 extends \Twig\Template
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
        echo "<!-- Checkout Modal -->
";
        // line 8
        $context["paymentEnabled"] = ((twig_get_attribute($this->env, $this->source, ($context["terminal"] ?? null), "aceptapagos", [], "any", false, false, false, 8)) ? ("") : ("disabled"));
        // line 9
        echo "<div class=\"modal fade\" id=\"checkoutModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close ml-auto mr-4 mt-3\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal-body pt-0\">
                <div id=\"checkoutTotals\" class=\"content p-3\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"col-4 border-right\">
                            <div class=\"form-row\">
                                <div class=\"form-group col-12\">
                                    <label for=\"cartNeto\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subtotal"], "method", false, false, false, 21), "html", null, true);
        echo "</label>
                                    <input type=\"number\" class=\"form-control\" id=\"cartNeto\" placeholder=\"0.00\" readonly>
                                </div>
                                <div class=\"form-group col-12\">
                                    <label for=\"dtopor1\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 25), "html", null, true);
        echo "</label>
                                    <div class=\"input-icon\">
                                        <span class=\"input-icon-addon\"><i class=\"fas fa-percent\"></i></span>
                                        <input type=\"text\" id=\"dtopor1\" name=\"dtopor1\" class=\"form-control\" placeholder=\"0\"/>
                                    </div>
                                </div>
                                <div class=\"form-group col-12\">
                                    <label for=\"cartTaxes\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "taxes"], "method", false, false, false, 32), "html", null, true);
        echo "</label>
                                    <input type=\"number\" class=\"form-control\" id=\"cartTaxes\" placeholder=\"0.00\" readonly>
                                </div>
                                <div class=\"form-group col-12\">
                                    <label for=\"cartTotal\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 36), "html", null, true);
        echo "</label>
                                    <h1 id=\"checkoutTotal\" class=\"display-4 text-center\">0.00</h1>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-8\">
                            <div class=\"d-flex flex-column h-100\">
                                <div class=\"row\">
                                    <div class=\"col-6 text-right border-right\">
                                        <span class=\"d-block font-weight-bold text-muted\">RECIBIDO</span>
                                        <span id=\"paymentOnHand\" class=\"display-4 text-info\">0.00</span>
                                    </div><div class=\"col-6\">
                                        <span class=\"d-block font-weight-bold text-muted\">CAMBIO</span>
                                        <span id=\"paymentReturn\" class=\"display-4 text-warning\">0.00</span>
                                    </div>
                                </div>
                                <div class=\"form-row mt-auto\">
                                    <div class=\"form-group col\">
                                        <label for=\"paymentMethod\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "payment-method"], "method", false, false, false, 54), "html", null, true);
        echo "</label>
                                        <select class=\"form-control\" id=\"paymentMethod\" name=\"codpago\">
                                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "formaPago", [], "any", false, false, false, 56), "all", [], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["formapago"]) {
            // line 57
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formapago"], "codpago", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
                                                    ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formapago"], "descripcion", [], "any", false, false, false, 58), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formapago'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-row\">
                                    <div class=\"form-group col\">
                                        <label for=\"paymentAmount\" class=\"col-form-label\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "payment-amount"], "method", false, false, false, 66), "html", null, true);
        echo ":</label>
                                        <input type=\"number\" class=\"form-control\" id=\"paymentAmount\" ";
        // line 67
        echo twig_escape_filter($this->env, ($context["paymentEnabled"] ?? null), "html", null, true);
        echo ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-3 d-flex\">
                        <button type=\"button\" class=\"btn btn-warning mr-auto\" id=\"pauseButton\">
                            <i class=\"fas fa-pause\" aria-hidden=\"true\"></i>&nbsp;";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "ticket-on-hold"], "method", false, false, false, 75), "html", null, true);
        echo "
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\" id=\"checkoutButton\" disabled=\"disabled\">
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "POS/Modal/Checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 75,  135 => 67,  131 => 66,  124 => 61,  115 => 58,  110 => 57,  106 => 56,  101 => 54,  80 => 36,  73 => 32,  63 => 25,  56 => 21,  42 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Modal/Checkout.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Modal/Checkout.html.twig");
    }
}
