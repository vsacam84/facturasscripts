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

/* \POS\SessionScreen.html.twig */
class __TwigTemplate_327542658a3486963e1ecfee5554b100c744e428fbcdc87debe86a2afbfcd11e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("POS/Layout/Base.html.twig", "\\POS\\SessionScreen.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"container-fluid\">
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["terminal"] ?? null), "idterminal", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <form autocomplete=\"off\" id=\"new-till-session-form\" method=\"post\">
                <input name=\"action\" type=\"hidden\" value=\"open-session\">
                <input name=\"terminal\" type=\"hidden\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["terminal"] ?? null), "idterminal", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                <div class=\"row justify-content-md-center\">
                    <div class=\"col col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["terminal"] ?? null), "nombre", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                                <p class=\"card-text text-center\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cash-initial-amount-input"], "method", false, false, false, 19), "html", null, true);
            echo "</p>
                                <div class=\"form-row\">
                                    <div class=\"form-group col\">
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\"><i class=\"fas fa-money-bill-alt\"></i></span>
                                            </div>
                                            <input type=\"number\" class=\"form-control\" name=\"saldoinicial\" value=\"0\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-row\">
                                    <div class=\"col text left\">
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["POS"]), "html", null, true);
            echo "\">Ver todas</a>
                                    </div>
                                    <div class=\"col text-right\">
                                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 35), "html", null, true);
            echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        ";
        } else {
            // line 44
            echo "            <div class=\"row justify-content-md-center\">
                <div class=\"col col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "available-cash-registers"], "method", false, false, false, 48), "html", null, true);
            echo "</h5>
                            <p class=\"card-text text-center\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-cash-register"], "method", false, false, false, 49), "html", null, true);
            echo "</p>
                            <form method=\"post\">
                                <input type=\"hidden\" name=\"action\" value=\"open-terminal\"/>
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["terminal"], "allAvailable", [], "method", false, false, false, 52));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["terminal"]) {
                // line 53
                echo "                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <button class=\"btn btn-primary btn-block\" name=\"terminal\"
                                                    value=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["terminal"], "idterminal", [], "any", false, false, false, 56), "html", null, true);
                echo "\">
                                                ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["terminal"], "nombre", [], "any", false, false, false, 57), "html", null, true);
                echo "
                                            </button>
                                        </div>
                                    </div>
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ListTerminalPOS"]), "html", null, true);
                echo "\" class=\"btn btn-success btn-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 64), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terminal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 74
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "\\POS\\SessionScreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 74,  161 => 68,  149 => 64,  145 => 62,  135 => 57,  131 => 56,  126 => 53,  121 => 52,  115 => 49,  111 => 48,  105 => 44,  93 => 35,  87 => 32,  71 => 19,  67 => 18,  59 => 13,  55 => 11,  53 => 10,  50 => 9,  46 => 8,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "\\POS\\SessionScreen.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/POS/SessionScreen.html.twig");
    }
}
