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

/* \POS\SalesScreen.html.twig */
class __TwigTemplate_be872aa21f947f8f3a60a8aa62c35893acc8d61524a8750e6bf3a7d2123029a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'modals' => [$this, 'block_modals'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "POS/Layout/Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $macros["pos"] = $this->macros["pos"] = $this->loadTemplate("POS/Macro/POS.html.twig", "\\POS\\SalesScreen.html.twig", 8)->unwrap();
        // line 10
        $context["grid"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getGridHeaders", [], "method", false, false, false, 10);
        // line 7
        $this->parent = $this->loadTemplate("POS/Layout/Base.html.twig", "\\POS\\SalesScreen.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <div class=\"col-sm-12 col-md-7 col-lg-9 mh-100\">
        ";
        // line 14
        echo twig_include($this->env, $context, "POS/Block/CartBlock.html.twig");
        echo "
    </div>
    <div class=\"col-sm-12 col-md-5 col-lg-3 pl-md-0\">
        <div class=\"p-3 bg-white rounded box-shadow h-100 d-flex flex-column\">
            ";
        // line 18
        echo twig_include($this->env, $context, "POS/Block/FormBlock.html.twig");
        echo "
        </div>
    </div>
";
    }

    // line 23
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        echo twig_include($this->env, $context, "POS/Modal/Cashup.html.twig");
        echo "
    ";
        // line 25
        echo twig_include($this->env, $context, "POS/Modal/Checkout.html.twig");
        echo "
    ";
        // line 26
        echo twig_include($this->env, $context, "POS/Modal/CustomerSearch.html.twig");
        echo "
    ";
        // line 27
        echo twig_include($this->env, $context, "POS/Modal/History.html.twig");
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "POS/Modal/PausedOperations.html.twig");
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "POS/Modal/ProductSearch.html.twig");
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "POS/Modal/ResetData.html.twig");
        echo "
";
    }

    // line 33
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <script id=\"cartTemplateSource\" type=\"text/template\">
        ";
        // line 35
        echo twig_call_macro($macros["pos"], "macro_cartTemplateSource", [twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "columns", [], "any", false, false, false, 35)], 35, $context, $this->getSourceContext());
        echo "
    </script>
    <script id=\"productTemplateSource\" type=\"text/template\">
        ";
        // line 38
        echo twig_call_macro($macros["pos"], "macro_productTemplateSource", [], 38, $context, $this->getSourceContext());
        echo "
    </script>
    <script id=\"customerTemplateSource\" type=\"text/template\">
        ";
        // line 41
        echo twig_call_macro($macros["pos"], "macro_customerTemplateSource", [], 41, $context, $this->getSourceContext());
        echo "
    </script>
    <script type=\"text/javascript\">
        const CASH_PAYMENT_METHOD = \"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCashPaymentMethod", [], "method", false, false, false, 44), "html", null, true);
        echo "\";
    </script>

    ";
        // line 48
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/POS/Assets/JS/modules/eta.min.js"]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/POS/Assets/JS/modules/onscan.min.js"]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/POS/Assets/JS/modules/bs-stepper.min.js"]), "html", null, true);
        echo "\"></script>
    <script type=\"module\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/POS/Assets/JS/pos.app.js"]), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "\\POS\\SalesScreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 52,  154 => 51,  150 => 50,  146 => 49,  141 => 48,  135 => 44,  129 => 41,  123 => 38,  117 => 35,  114 => 34,  110 => 33,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  79 => 24,  75 => 23,  67 => 18,  60 => 14,  57 => 13,  53 => 12,  48 => 7,  46 => 10,  44 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "\\POS\\SalesScreen.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/SalesScreen.html.twig");
    }
}
