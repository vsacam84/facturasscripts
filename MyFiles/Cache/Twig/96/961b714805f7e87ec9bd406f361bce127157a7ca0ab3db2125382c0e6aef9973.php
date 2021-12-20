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

/* Macro/Utils.html.twig */
class __TwigTemplate_6fa79a411089c6c3a93632c35e7e85bcd7723190bfe92ba52631fce126f99454 extends \Twig\Template
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
        // line 20
        echo "
";
        // line 35
        echo "
";
    }

    // line 22
    public function macro_message($__log__ = null, $__types__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "types" => $__types__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 23
            echo "    ";
            $context["messages"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", [0 => "master", 1 => ($context["types"] ?? null)], "method", false, false, false, 23), twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", [0 => "database", 1 => ($context["types"] ?? null)], "method", false, false, false, 23));
            // line 24
            echo "    ";
            if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 0)) {
                // line 25
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                echo "\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 30
                    echo "                <div>";
                    echo twig_get_attribute($this->env, $this->source, $context["msg"], "message", [], "any", false, false, false, 30);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
    public function macro_popoverTitle($__msg__ = null, $__position__ = "auto", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "msg" => $__msg__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 38
            echo "    ";
            if ((twig_length_filter($this->env, ($context["msg"] ?? null)) > 0)) {
                echo "data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
                echo "\" data-trigger=\"hover\" data-content=\"";
                echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
                echo "\"";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Utils.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  98 => 37,  87 => 32,  78 => 30,  74 => 29,  66 => 25,  63 => 24,  60 => 23,  45 => 22,  40 => 35,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Utils.html.twig", "C:\\xampp2\\htdocs\\facturasscripts\\Dinamic\\View\\Macro\\Utils.html.twig");
    }
}
