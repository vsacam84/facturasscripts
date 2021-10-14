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

/* POS/Layout/Base.html.twig */
class __TwigTemplate_f40667b19fd75e93d56165cd808de0604b398916fa207bb842f1cb751a55fc86 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'modals' => [$this, 'block_modals'],
            'js' => [$this, 'block_js'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "POS/Layout/Base.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/atlantis.min.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/POS/Assets/CSS/offcanvas.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/POS/Assets/CSS/pos.app.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/POS/Assets/CSS/modules/bs-stepper.min.css"]), "html", null, true);
        echo "\" />
";
    }

    // line 15
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $context["terminal"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "session", [], "any", false, false, false, 16), "getTerminal", [], "method", false, false, false, 16);
        // line 17
        echo "    <body class=\"app\">
        <!-- Header -->
        ";
        // line 19
        echo twig_include($this->env, $context, "POS/Layout/Navbar.html.twig");
        echo "
        <!-- End Header -->
        <!-- Contend -->
        <main role=\"main\" class=\"container-fluid app-content\">
            ";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
        // line 33
        echo "            <div class=\"row h-100\">
                ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "            </div>
        </main>
        <!-- End Contend -->

        ";
        // line 40
        $this->displayBlock('modals', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('js', $context, $blocks);
        // line 48
        echo "
";
        // line 50
        echo "    </body>
";
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                <div class=\"position-absolute w-100 d-flex flex-column align-items-start no-gutters\" style=\"bottom: 2rem; z-index: 1000;\">
                    <div class=\"col-lg-3\">
                        ";
        // line 26
        echo twig_call_macro($macros["_self"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 26, $context, $this->getSourceContext());
        echo "
                        ";
        // line 27
        echo twig_call_macro($macros["_self"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 27, $context, $this->getSourceContext());
        echo "
                        ";
        // line 28
        echo twig_call_macro($macros["_self"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 28, $context, $this->getSourceContext());
        echo "
                        ";
        // line 29
        echo twig_call_macro($macros["_self"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 29, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            ";
    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                ";
    }

    // line 40
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        ";
    }

    // line 43
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "            <script>
                \$(document).ready(() => \$('.toast').toast('show'));
            </script>
        ";
    }

    // line 53
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
            // line 54
            echo "    ";
            $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "readAll", [0 => ($context["types"] ?? null)], "method", false, false, false, 54);
            // line 55
            echo "    ";
            if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 0)) {
                // line 56
                echo "        <div class=\"toast mr-auto\" role=\"alert\" data-delay=\"2000\">
            <div class=\"toast-header text-white bg-";
                // line 57
                echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                echo " border-0\">
                <strong class=\"mr-auto\">";
                // line 58
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["style"] ?? null)), "html", null, true);
                echo "</strong>
                <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"toast-body\">
                ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 65
                    echo "                    <div>";
                    echo twig_get_attribute($this->env, $this->source, $context["msg"], "message", [], "any", false, false, false, 65);
                    echo "</div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "POS/Layout/Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 67,  221 => 65,  217 => 64,  208 => 58,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  180 => 53,  173 => 44,  169 => 43,  165 => 41,  161 => 40,  157 => 35,  153 => 34,  145 => 29,  141 => 28,  137 => 27,  133 => 26,  129 => 24,  125 => 23,  120 => 50,  117 => 48,  115 => 43,  112 => 42,  110 => 40,  104 => 36,  102 => 34,  99 => 33,  97 => 23,  90 => 19,  86 => 17,  83 => 16,  79 => 15,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  56 => 9,  52 => 8,  41 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "POS/Layout/Base.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/Layout/Base.html.twig");
    }
}
