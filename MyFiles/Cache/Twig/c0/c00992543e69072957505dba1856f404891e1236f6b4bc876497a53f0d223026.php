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

/* POS/Macro/POS.html.twig */
class __TwigTemplate_501a1b24b422c7257628bd602a9f680a02fe2547cfc3e7568f63b78ea129aefc extends \Twig\Template
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
        // line 14
        echo "
";
        // line 28
        echo "
";
    }

    // line 1
    public function macro_productTemplateSource(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <% it.items.forEach(function(item){ %>
    <tr>
        <td><span class=\"font-weight-bold\">Codigo: <%= item.code %> </span><br><%= item.description %></td>
        <td>
            <button class=\"btn btn-sm btn-success item-add-button\" type=\"button\" data-code=\"<%= item.code %>\"
                    data-description=\"<%= item.description %>\">
                <i class=\"fas fa-plus\"></i>
            </button>
        </td>
    </tr>
    <% }) %>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_customerTemplateSource(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 16
            echo "    <% it.items.forEach(function(customer){ %>
    <tr>
        <td><span class=\"font-weight-bold\">No. Cliente: <%= customer.code %> </span><br><%= customer.description %></td>
        <td>
            <button class=\"btn btn-sm btn-success item-add-button\" type=\"button\" data-code=\"<%= customer.code %>\"
                    data-description=\"<%= customer.description %>\">
                <i class=\"fas fa-plus\"></i>
            </button>
        </td>
    </tr>
    <% }) %>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_cartTemplateSource($__columns__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "columns" => $__columns__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "    <% it.lines.forEach(function(value, index) { %>
    <tr>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "data", [], "any", false, false, false, 33) == "referencia")) {
                    // line 34
                    echo "<td>
                    <input class=\"form-control cart-item\" type=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" value=\"<%= value.referencia %>\" readonly>
                </td>";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 37
$context["column"], "data", [], "any", false, false, false, 37) == "descripcion")) {
                    // line 38
                    echo "                <td class=\"cart-product-row\">
                    <input class=\"form-control cart-item\" type=\"";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 39), "html", null, true);
                    echo "\" value=\"<%= value.descripcion %>\" data-index=\"<%= index %>\" data-field=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "data", [], "any", false, false, false, 39), "html", null, true);
                    echo "\" ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "readonly", [], "any", false, false, false, 39), "html", null, true);
                    echo ">
                </td>
            ";
                } else {
                    // line 42
                    echo "<td>
                    <input class=\"form-control cart-item\" type=\"";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" value=\"<%= value.";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "data", [], "any", false, false, false, 43), "html", null, true);
                    echo " %>\" data-index=\"<%= index %>\" data-field=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "data", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "readonly", [], "any", false, false, false, 43), "html", null, true);
                    echo ">
                </td>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        <td>
            <button type=\"button\" class=\"btn btn-icon btn-link\">
                <i class=\"fas fa-trash text-danger cart-item-remove\" data-index=\"<%= index %>\"></i>
            </button>
        </td>
    </tr>
    <% }) %>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "POS/Macro/POS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 47,  157 => 43,  154 => 42,  144 => 39,  141 => 38,  139 => 37,  135 => 35,  132 => 34,  130 => 33,  126 => 32,  122 => 30,  109 => 29,  89 => 16,  77 => 15,  57 => 2,  45 => 1,  40 => 28,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Macro/POS.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Macro/POS.html.twig");
    }
}
