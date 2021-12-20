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

/* Master/GridView.html.twig */
class __TwigTemplate_b80a05508d4f1bae586d1f15f04f3c0a6e841b1687a1511ea4f5a6536f2815bc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'detailmastercard' => [$this, 'block_detailmastercard'],
            'gridcard' => [$this, 'block_gridcard'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 22
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 22);
        // line 23
        $context["currentViewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 23);
        // line 24
        $context["detailView"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "detailView", [], "any", false, false, false, 24);
        // line 25
        $context["detailMasterColumns"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getDetailColumns", [0 => "master"], "method", false, false, false, 25);
        // line 26
        $context["detailViewName"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getViewName", [], "method", false, false, false, 26);
        // line 27
        $context["formName"] = ("formGrid" . ($context["currentViewName"] ?? null));
        // line 29
        echo "<script type=\"text/javascript\">
    function gridViewDelete(formViewName) {
        bootbox.confirm({
            title: \"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 32), "html", null, true);
        echo "\",
            message: \"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 33), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 37), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 40), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#\" + formViewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#\" + formViewName).submit();
                }
            }
        });

        return false;
    }
</script>
";
        // line 56
        echo "<div class=\"row\">
    <div class=\"col-12\">
        ";
        // line 59
        echo "        ";
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 60
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_tabRender", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 60, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 62
        echo "        <div class=\"tab-content\">
            <div class=\"tab-pane show active\" id=\"tab";
        // line 63
        echo twig_escape_filter($this->env, ($context["detailViewName"] ?? null), "html", null, true);
        echo "\" role=\"tabpanel\">
                ";
        // line 65
        echo "                ";
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 66
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["currentViewName"] ?? null), "header"], 66, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 68
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["detailView"] ?? null), ($context["currentViewName"] ?? null), "header"], 68, $context, $this->getSourceContext());
        echo "
                ";
        // line 70
        echo "                <form id=\"";
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"action\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"code\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 73), "primaryColumnValue", [], "method", false, false, false, 73), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 74), "newToken", [], "method", false, false, false, 74), "html", null, true);
        echo "\"/>
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12 text-right\">
                                    ";
        // line 80
        echo "                                    ";
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 81
            echo "                                        ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 81);
            // line 82
            echo "                                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 82);
            echo "
                                    ";
        }
        // line 84
        echo "                                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 84);
        // line 85
        echo "                                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 85);
        echo "
                                </div>
                            </div>
                            ";
        // line 88
        $this->displayBlock('detailmastercard', $context, $blocks);
        // line 96
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 96), "editable", [], "any", false, false, false, 96) === false)) {
            // line 97
            echo "                                <div class=\"row\">
                                    <script type=\"text/javascript\">
                                        documentReadOnly = true;
                                    </script>
                                    <div class=\"col\">
                                        <div class=\"alert alert-danger text-center mb-0\">
                                            <i class=\"fas fa-lock fa-fw\"></i> ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "non-editable-document"], "method", false, false, false, 103), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 108
        echo "                        </div>
                    </div>
                    ";
        // line 111
        echo "                    <div class=\"row no-gutters mt-2\">
                        <script type=\"text/javascript\">
                            documentLineData = ";
        // line 113
        echo twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getGridData", [], "method", false, false, false, 113);
        echo ";
                        </script>
                        ";
        // line 115
        $this->displayBlock('gridcard', $context, $blocks);
        // line 125
        echo "                    </div>
                    ";
        // line 126
        $context["maxLines"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getMaxLines", [], "method", false, false, false, 126);
        // line 127
        echo "                    ";
        if ((($context["maxLines"] ?? null) < 200)) {
            // line 128
            echo "                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"alert alert-warning\" role=\"alert\">
                                ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "max-input-vars-warning", 1 => ["%numlines%" => ($context["maxLines"] ?? null)]], "method", false, false, false, 131), "html", null, true);
            echo "
                            </p>
                        </div>
                    </div>
                    ";
        }
        // line 136
        echo "                    ";
        // line 137
        echo "                    <div class=\"row no-gutters mt-2\">
                        <div class=\"card shadow col-12\">
                            <div class=\"card-body d-flex justify-content-between\" style=\"padding: 1rem 0rem;\">
                                ";
        // line 141
        echo "                                <div class=\"col\">
                                    ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 142), "btnDelete", [], "any", false, false, false, 142)) {
            // line 143
            echo "                                        <div class=\"col\">
                                            <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"gridViewDelete('";
            // line 144
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "');\">
                                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                                <span class=\"d-none d-sm-inline-block\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 146), "html", null, true);
            echo "</span>
                                            </button>
                                        </div>
                                    ";
        }
        // line 150
        echo "                                </div>
                                ";
        // line 152
        echo "                                ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 152);
        // line 153
        echo "                                ";
        if ( !twig_test_empty(($context["row"] ?? null))) {
            // line 154
            echo "                                    <div class=\"col d-flex justify-content-center\">
                                        ";
            // line 155
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 155)], "method", false, false, false, 155);
            echo "
                                    </div>
                                ";
        }
        // line 158
        echo "                                ";
        // line 159
        echo "                                <div class=\"col text-right\">
                                    ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 160), "btnSave", [], "any", false, false, false, 160)) {
            // line 161
            echo "                                        <button class=\"btn btn-sm btn-primary\" type=\"button\" id=\"save-document\" onclick=\"saveDocument('";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "');\">
                                            <i class=\"fas fa-save\" aria-hidden=\"true\"></i>&nbsp; ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 162), "html", null, true);
            echo "
                                        </button>
                                    ";
        }
        // line 165
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <br/>
                ";
        // line 172
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["detailView"] ?? null), ($context["currentViewName"] ?? null), "footer"], 172, $context, $this->getSourceContext());
        echo "
                ";
        // line 173
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 174
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["currentViewName"] ?? null), "footer"], 174, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 176
        echo "                ";
        // line 177
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_modalRender", [($context["detailView"] ?? null), ($context["currentViewName"] ?? null)], 177, $context, $this->getSourceContext());
        echo "
                ";
        // line 178
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 179
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_modalRender", [($context["currentView"] ?? null), ($context["currentViewName"] ?? null)], 179, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 181
        echo "            </div>
            ";
        // line 182
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 183
            echo "                <div class=\"tab-pane\" id=\"tab";
            echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
            echo "\" role=\"tabpanel\">
                    ";
            // line 184
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "editTemplate", [], "any", false, false, false, 184));
            echo "
                </div>
            ";
        }
        // line 187
        echo "        </div>
    </div>
</div>

";
        // line 213
        echo "
";
        // line 220
        echo "
";
    }

    // line 88
    public function block_detailmastercard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                                <div class=\"row\">
                                    ";
        // line 90
        $context["columns"] = ((twig_test_empty(($context["detailMasterColumns"] ?? null))) ? (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 90)) : (($context["detailMasterColumns"] ?? null)));
        // line 91
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 92
            echo "                                        ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 92)], "method", false, false, false, 92);
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                </div>
                            ";
    }

    // line 115
    public function block_gridcard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                            <div class=\"col\">
                                ";
        // line 118
        echo "                                <div class=\"card shadow\">
                                    <div class=\"card-body p-0\">
                                        <div id=\"document-lines\"></div>
                                    </div>
                                </div>
                            </div>
                        ";
    }

    // line 192
    public function macro_tabRender($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 193
            echo "    ";
            $context["currentViewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 193);
            // line 194
            echo "    ";
            $context["detailView"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "detailView", [], "any", false, false, false, 194);
            // line 195
            echo "    ";
            $context["detailViewName"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getViewName", [], "method", false, false, false, 195);
            // line 196
            echo "    <ul class=\"nav nav-pills mb-3 d-print-none\" role=\"tablist\">
        ";
            // line 198
            echo "        <li class=\"nav-item\">
            <a href=\"#tab";
            // line 199
            echo twig_escape_filter($this->env, ($context["detailViewName"] ?? null), "html", null, true);
            echo "\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tab";
            echo twig_escape_filter($this->env, ($context["detailViewName"] ?? null), "html", null, true);
            echo "\">
                <i class=\"";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "icon", [], "any", false, false, false, 200), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-sm-inline-block\">&nbsp;";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "title", [], "any", false, false, false, 201), "html", null, true);
            echo "</span>
            </a>
        </li>
        ";
            // line 205
            echo "        <li class=\"nav-item\">
            <a href=\"#tab";
            // line 206
            echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
            echo "\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tab";
            echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
            echo "\">
                <i class=\"fas fa-edit\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-sm-inline-block\">&nbsp;";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "detail"], "method", false, false, false, 208), "html", null, true);
            echo "</span>
            </a>
        </li>
    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 214
    public function macro_rowRender($__fsc__ = null, $__view__ = null, $__viewName__ = null, $__rowName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "view" => $__view__,
            "viewName" => $__viewName__,
            "rowName" => $__rowName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 215
            echo "    <div class=\"row\">
        ";
            // line 216
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "getRow", [0 => ($context["rowName"] ?? null)], "method", false, false, false, 216);
            // line 217
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["viewName"] ?? null), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 217);
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 221
    public function macro_modalRender($__view__ = null, $__viewName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "viewName" => $__viewName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 222
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "getModals", [], "method", false, false, false, 222));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 223
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 223), 1 => ($context["viewName"] ?? null)], "method", false, false, false, 223);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/GridView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 223,  524 => 222,  510 => 221,  497 => 217,  495 => 216,  492 => 215,  476 => 214,  462 => 208,  455 => 206,  452 => 205,  446 => 201,  442 => 200,  436 => 199,  433 => 198,  430 => 196,  427 => 195,  424 => 194,  421 => 193,  407 => 192,  397 => 118,  394 => 116,  390 => 115,  385 => 94,  376 => 92,  371 => 91,  369 => 90,  366 => 89,  362 => 88,  357 => 220,  354 => 213,  348 => 187,  342 => 184,  337 => 183,  335 => 182,  332 => 181,  326 => 179,  324 => 178,  319 => 177,  317 => 176,  311 => 174,  309 => 173,  304 => 172,  296 => 165,  290 => 162,  285 => 161,  283 => 160,  280 => 159,  278 => 158,  272 => 155,  269 => 154,  266 => 153,  263 => 152,  260 => 150,  253 => 146,  248 => 144,  245 => 143,  243 => 142,  240 => 141,  235 => 137,  233 => 136,  225 => 131,  220 => 128,  217 => 127,  215 => 126,  212 => 125,  210 => 115,  205 => 113,  201 => 111,  197 => 108,  189 => 103,  181 => 97,  178 => 96,  176 => 88,  169 => 85,  166 => 84,  160 => 82,  157 => 81,  154 => 80,  146 => 74,  142 => 73,  138 => 72,  134 => 71,  129 => 70,  124 => 68,  118 => 66,  115 => 65,  111 => 63,  108 => 62,  102 => 60,  99 => 59,  95 => 56,  77 => 40,  71 => 37,  64 => 33,  60 => 32,  55 => 29,  53 => 27,  51 => 26,  49 => 25,  47 => 24,  45 => 23,  43 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/GridView.html.twig", "C:\\xampp2\\htdocs\\facturasscripts\\Dinamic\\View\\Master\\GridView.html.twig");
    }
}
