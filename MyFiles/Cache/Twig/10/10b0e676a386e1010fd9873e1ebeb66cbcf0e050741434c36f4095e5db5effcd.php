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

/* POS/Block/CartBlock.html.twig */
class __TwigTemplate_317bbf9745f4ec2a266bb366ba1ea0448e1051f06cba5a993d955e503aec8a60 extends \Twig\Template
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
        echo "<div class=\"form-row mb-1\">
    <div class=\"form-group col-12 col-md-4 pt-0\">
        <div class=\"input-icon\">
            <input class=\"form-control\" id=\"productBarcodeInput\" type=\"search\"
                   placeholder=\"Codigo de barras\" autocomplete=\"off\">
            <span class=\"input-icon-addon\"><i class=\"fas fa-barcode\"></i></span>
        </div>
    </div>
    <div class=\"form-group col pt-0\">
        <div class=\"input-icon\">
            <input class=\"form-control\" id=\"productSearchBox\" type=\"text\"
                   placeholder=\"Buscar por texto\" autocomplete=\"off\">
            <span class=\"input-icon-addon\"><i class=\"fas fa-search\"></i></span>
        </div>
    </div>
</div>
<div class=\"p-3 bg-white rounded box-shadow cart-content\">
    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
            <tr>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "headers", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 29
            echo "                    <th scope=\"col\">";
            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "<th scope=\"col\"><i class=\"fas fa-times\"></i></th>
            </tr>
            </thead>
            <tbody id=\"cartContainer\">
                <tr><td colspan=\"14\"><span>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "empty-cart-list"], "method", false, false, false, 35), "html", null, true);
        echo "</span></td></tr>
            </tbody>
        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "POS/Block/CartBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 35,  72 => 31,  63 => 29,  59 => 28,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Block/CartBlock.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Block/CartBlock.html.twig");
    }
}
