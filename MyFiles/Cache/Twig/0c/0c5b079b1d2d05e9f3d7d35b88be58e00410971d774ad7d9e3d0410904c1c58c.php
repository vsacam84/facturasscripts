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

/* POS/Block/FormBlock.html.twig */
class __TwigTemplate_b1f1265c2a02e3d14111c0b7cc386e7812b8faf222407b5d3d8f6d977762bc7c extends \Twig\Template
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
        $context["customer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, false, false, 7), "get", [0 => twig_get_attribute($this->env, $this->source, ($context["terminal"] ?? null), "codcliente", [], "any", false, false, false, 7)], "method", false, false, false, 7);
        // line 8
        $context["documentList"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "pointofsale", 1 => "tiposdocumento"], "method", false, false, false, 8), "|");
        // line 9
        $context["defaultDocument"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "pointofsale", 1 => "defaultdoc"], "method", false, false, false, 9);
        // line 10
        echo "
<form id=\"salesDocumentForm\" name=\"salesDocumentForm\" method=\"post\" autocomplete=\"off\">
    <input type=\"hidden\" id=\"action\" name=\"action\"/>
    <input type=\"hidden\" id=\"codalmacen\" name=\"codalmacen\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["terminal"] ?? null), "codalmacen", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"codpago\" name=\"codpago\" value=\"\">
    <input type=\"hidden\" id=\"lines\" name=\"lines\"/>
    <input type=\"hidden\" id=\"neto\" name=\"neto\" value=\"0\">
    <input type=\"hidden\" id=\"payments\" name=\"payments\"/>
    <input type=\"hidden\" id=\"token\" name=\"token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getRandomToken", [], "method", false, false, false, 18), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"total\" name=\"total\" value=\"0\">
    <input type=\"hidden\" id=\"totalsuplidos\" name=\"totalsuplidos\" value=\"0\">
    <input type=\"hidden\" id=\"totaliva\" name=\"totaliva\" value=\"0\">
    <input type=\"hidden\" id=\"totalirpf\" name=\"totalirpf\" value=\"0\">
    <input type=\"hidden\" id=\"totalrecargo\" name=\"totalrecargo\" value=\"0\">
    <input type=\"hidden\" id=\"idpausada\" name=\"idpausada\" value=\"false\">

    <div class=\"form-row\">
        <div class=\"form-group col-12\">
            <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, false, false, 30), "url", [0 => "new"], "method", false, false, false, 30), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-success\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-customer"], "method", false, false, false, 30), "html", null, true);
        echo "\">
                    <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                </a>
            </span>
                <input name=\"codcliente\" id=\"codcliente\" type=\"hidden\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "codcliente", [], "any", false, false, false, 34), "html", null, true);
        echo "\"/>
                <input type=\"text\" id=\"customerSearchBox\" value=\"";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "nombre", [], "any", false, false, false, 35);
        echo "\" class=\"form-control\"
                       placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "customer"], "method", false, false, false, 36), "html", null, true);
        echo "\" autocomplete=\"off\"/>
            </div>
        </div>
        <div class=\"form-group col-12\">
            <select class=\"form-control custom-select\" id=\"tipoDocumento\" name=\"tipo-documento\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["documentList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 42
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["document"], "html", null, true);
            echo "\" ";
            if (($context["document"] == ($context["defaultDocument"] ?? null))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => $context["document"]], "method", false, false, false, 43), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
        </div>
        <div class=\"form-group col-12\">
            <select class=\"form-control custom-select\" id=\"serieDocumento\" name=\"codserie\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "serie", [], "any", false, false, false, 49), "all", [], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 50
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 50), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 50) == twig_get_attribute($this->env, $this->source, ($context["terminal"] ?? null), "codserie", [], "any", false, false, false, 50))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 51), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </select>
        </div>
    </div>
    <hr class=\"divider\">
    <div class=\"form-row\">
        <div class=\"form-group col-12\">
            <label for=\"cartNetoDisplay\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subtotal"], "method", false, false, false, 59), "html", null, true);
        echo "</label>
            <input type=\"number\" class=\"form-control\" id=\"cartNetoDisplay\" placeholder=\"0.00\" readonly>
        </div>
        <div class=\"form-group col-12\">
            <label for=\"cartTaxesDisplay\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "taxes"], "method", false, false, false, 63), "html", null, true);
        echo "</label>
            <input type=\"number\" class=\"form-control\" id=\"cartTaxesDisplay\" placeholder=\"0.00\" readonly>
        </div>
        <div class=\"form-group col-12\">
            <label for=\"cartTotalDisplay\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 67), "html", null, true);
        echo "</label>
            <input type=\"number\" class=\"form-control\" id=\"cartTotalDisplay\" placeholder=\"0.00\" readonly>
        </div>
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCustomField", [], "method", false, false, false, 70));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["customfield"]) {
            // line 71
            echo "            ";
            $context["field"] = ("POS/Block/CustomField/" . $context["customfield"]);
            // line 72
            echo "            ";
            $this->loadTemplate(($context["field"] ?? null), "POS/Block/FormBlock.html.twig", 72)->display($context);
            // line 73
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customfield'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </div>
    <hr class=\"divider\">
</form>
<div class=\"form-row mt-auto\">
    <div class=\"form-group col-12\">
        <button type=\"button\" class=\"btn btn-block btn-round btn-primary\" data-toggle=\"modal\" data-target=\"#checkoutModal\">
            <i class=\"fas fa-money-bill-alt\" aria-hidden=\"true\"></i>&nbsp;";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "charge"], "method", false, false, false, 80), "html", null, true);
        echo "
        </button>
    </div>
    <div class=\"form-group col\">
        <button type=\"button\" class=\"btn btn-block btn-danger btn-round\" data-toggle=\"modal\" data-target=\"#resetModal\">
            <i class=\"fas fa-broom\" aria-hidden=\"true\"></i>&nbsp;Limpiar
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "POS/Block/FormBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 80,  209 => 74,  195 => 73,  192 => 72,  189 => 71,  172 => 70,  166 => 67,  159 => 63,  152 => 59,  144 => 53,  136 => 51,  127 => 50,  123 => 49,  117 => 45,  109 => 43,  100 => 42,  96 => 41,  88 => 36,  84 => 35,  80 => 34,  71 => 30,  56 => 18,  48 => 13,  43 => 10,  41 => 9,  39 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Block/FormBlock.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Block/FormBlock.html.twig");
    }
}
