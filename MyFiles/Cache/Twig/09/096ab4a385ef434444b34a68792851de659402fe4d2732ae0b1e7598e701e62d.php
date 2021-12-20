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

/* EditPageOption.html.twig */
class __TwigTemplate_930f4749fa54f0b2a476a9969cb66a69ea018c0167262a8b13a15b4cefd0c442 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["__internal_deb5b7603431785373059ead54dce5f1f3792be0f8743a008b074c20e6d91b33"] = $this->macros["__internal_deb5b7603431785373059ead54dce5f1f3792be0f8743a008b074c20e6d91b33"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPageOption.html.twig", 21)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "EditPageOption.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-3\">
        ";
        // line 26
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-4 d-print-none\">
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "backPage", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\">
                    <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-md-inline-block\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "back"], "method", false, false, false, 31), "html", null, true);
        echo " </span>
                </a>
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 33) . "?code=") . twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 33)), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 33), "html", null, true);
        echo "\">
                    <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                </a>
            </div>
            <div class=\"col text-right\">
                <h1 class=\"h4\">
                    ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 39)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
";
    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <span class=\"text-info\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 53), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"code\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 57), "html", null, true);
        echo "\" />
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"input-group mb-3\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-users\"></i>
                                            </span>
                                        </div>
                                        ";
        // line 66
        $context["userList"] = twig_array_merge(["" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 66)], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getUserList", [], "method", false, false, false, 66));
        // line 67
        echo "                                        ";
        echo twig_call_macro($macros["__internal_deb5b7603431785373059ead54dce5f1f3792be0f8743a008b074c20e6d91b33"], "macro_simpleSelect", ["nick", "nick", twig_get_attribute($this->env, $this->source,         // line 70
($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 70),         // line 71
($context["userList"] ?? null), false, false, ["onChange" => "this.form.submit()"]], 67, $context, $this->getSourceContext());
        // line 75
        echo "
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <form method=\"post\" name=\"main_form\">
                        <input type=\"hidden\" name=\"action\" value=\"save\"/>
                        <input type=\"hidden\" name=\"code\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 83), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"nick\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 84), "html", null, true);
        echo "\"/>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "title"], "method", false, false, false, 89), "html", null, true);
        echo "</th>
                                        <th class=\"text-center\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "display"], "method", false, false, false, 90), "html", null, true);
        echo "</th>
                                        <th>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "level"], "method", false, false, false, 91), "html", null, true);
        echo "</th>
                                        <th>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "readonly"], "method", false, false, false, 92), "html", null, true);
        echo "</th>
                                        <th width=\"150\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "decimals"], "method", false, false, false, 93), "html", null, true);
        echo "</th>
                                        <th>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "width"], "method", false, false, false, 94), "html", null, true);
        echo "</th>
                                        <th class=\"text-right\" width=\"130\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sort"], "method", false, false, false, 95), "html", null, true);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "columns", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 100
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 101
                echo "                                            ";
                echo twig_call_macro($macros["_self"], "macro_editGroupColumn", [$context["col"], ($context["i18n"] ?? null)], 101, $context, $this->getSourceContext());
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "model", [], "any", false, false, false, 109), "exists", [], "method", false, false, false, 109)) {
            // line 110
            echo "                                    <div class=\"col\">
                                        <button class=\"btn btn-sm btn btn-danger\" type=\"button\" onclick=\"deleteOptions();\">
                                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i> ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 112), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                ";
        }
        // line 116
        echo "                                <div class=\"col text-right\">
                                    <button class=\"btn btn-sm btn btn-secondary\" type=\"reset\">
                                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i> ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 118), "html", null, true);
        echo "
                                    </button>
                                    <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 121), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 133
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        function deleteOptions() {
            bootbox.confirm({
                title: \"";
        // line 147
        echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 147);
        echo "\",
                message: \"";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 148), "html", null, true);
        echo "\",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> ";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 152), "html", null, true);
        echo "\"
                    },
                    confirm: {
                        label: \"<i class='fas fa-check'></i> ";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 155), "html", null, true);
        echo "\",
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {
                        document.main_form.action.value = 'delete';
                        document.main_form.submit();
                    }
                }
            });
        }
    </script>
";
    }

    // line 170
    public function macro_editGroupColumn($__col__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "col" => $__col__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 171
            echo "    <tr>
        <td title=\"";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "title"], "method", false, false, false, 172), "html", null, true);
            echo "\">
            <input type=\"text\" class=\"form-control\" name=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 173), "html", null, true);
            echo "-title\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "title", [], "any", false, false, false, 173)], "method", false, false, false, 173), "html", null, true);
            echo "\" autocomplete=\"off\" />
        </td>
        <td class=\"text-center\">
            ";
            // line 176
            echo twig_call_macro($macros["_self"], "macro_editGroupColumnDisplay", [($context["col"] ?? null), ($context["i18n"] ?? null)], 176, $context, $this->getSourceContext());
            echo "
        </td>
        <td title=\"";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "level"], "method", false, false, false, 178), "html", null, true);
            echo "\">
            <input type=\"number\" class=\"form-control\" name=\"";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 179), "html", null, true);
            echo "-level\" min=\"0\" max=\"99\" step=\"1\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "level", [], "any", false, false, false, 179), "html", null, true);
            echo "\" />
        </td>
        <td title=\"";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "readonly"], "method", false, false, false, 181), "html", null, true);
            echo "\">
            ";
            // line 182
            echo twig_call_macro($macros["__internal_deb5b7603431785373059ead54dce5f1f3792be0f8743a008b074c20e6d91b33"], "macro_simpleSelect", [(twig_get_attribute($this->env, $this->source,             // line 183
($context["col"] ?? null), "name", [], "any", false, false, false, 183) . "-readonly"), (twig_get_attribute($this->env, $this->source,             // line 184
($context["col"] ?? null), "name", [], "any", false, false, false, 184) . "-readonly"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 185
($context["col"] ?? null), "widget", [], "any", false, false, false, 185), "readonly", [], "any", false, false, false, 185), ["true" => twig_get_attribute($this->env, $this->source,             // line 186
($context["i18n"] ?? null), "trans", [0 => "yes"], "method", false, false, false, 186), "false" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no"], "method", false, false, false, 186), "dinamic" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "auto"], "method", false, false, false, 186)], false, false, []], 182, $context, $this->getSourceContext());
            // line 190
            echo "
        </td>
        <td title=\"";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "decimals"], "method", false, false, false, 192), "html", null, true);
            echo "\">
            ";
            // line 193
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "widget", [], "any", false, false, false, 193), "gridFormat", [], "method", false, false, false, 193))) {
                // line 194
                echo "                <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 194), "html", null, true);
                echo "-decimal\" min=\"0\" max=\"7\" step=\"1\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "widget", [], "any", false, false, false, 194), "decimal", [], "any", false, false, false, 194), "html", null, true);
                echo "\" class=\"form-control\" />
            ";
            }
            // line 196
            echo "        </td>
        <td title=\"";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "width"], "method", false, false, false, 197), "html", null, true);
            echo "\">
            ";
            // line 198
            echo twig_call_macro($macros["__internal_deb5b7603431785373059ead54dce5f1f3792be0f8743a008b074c20e6d91b33"], "macro_simpleSelect", [(twig_get_attribute($this->env, $this->source,             // line 199
($context["col"] ?? null), "name", [], "any", false, false, false, 199) . "-numcolumns"), (twig_get_attribute($this->env, $this->source,             // line 200
($context["col"] ?? null), "name", [], "any", false, false, false, 200) . "-numcolumns"), twig_get_attribute($this->env, $this->source,             // line 201
($context["col"] ?? null), "numcolumns", [], "any", false, false, false, 201), ["0" => twig_get_attribute($this->env, $this->source,             // line 202
($context["i18n"] ?? null), "trans", [0 => "auto"], "method", false, false, false, 202), "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12"], false, false, []], 198, $context, $this->getSourceContext());
            // line 206
            echo "
        </td>
        <td title=\"";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sort"], "method", false, false, false, 208), "html", null, true);
            echo "\">
            <input type=\"number\" name=\"";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 209), "html", null, true);
            echo "-order\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "order", [], "any", false, false, false, 209), "html", null, true);
            echo "\" class=\"form-control text-right\" />
        </td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 214
    public function macro_editGroupColumnDisplay($__col__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "col" => $__col__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 215
            echo "    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
        ";
            // line 216
            if ((twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 216) == "left")) {
                // line 217
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "left"], "method", false, false, false, 217), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 218), "html", null, true);
                echo "-display\" value=\"left\" checked=\"\">
                <i class=\"fas fa-align-left\"></i>
            </label>
        ";
            } else {
                // line 222
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "left"], "method", false, false, false, 222), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 223), "html", null, true);
                echo "-display\" value=\"left\">
                <i class=\"fas fa-align-left\"></i>
            </label>
        ";
            }
            // line 227
            echo "
        ";
            // line 228
            if ((twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 228) == "center")) {
                // line 229
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "center"], "method", false, false, false, 229), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 230), "html", null, true);
                echo "-display\" value=\"center\" checked=\"\">
                <i class=\"fas fa-align-center\"></i>
            </label>
        ";
            } else {
                // line 234
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "center"], "method", false, false, false, 234), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 235), "html", null, true);
                echo "-display\" value=\"center\">
                <i class=\"fas fa-align-center\"></i>
            </label>
        ";
            }
            // line 239
            echo "
        ";
            // line 240
            if ((twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 240) == "right")) {
                // line 241
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "right"], "method", false, false, false, 241), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 242), "html", null, true);
                echo "-display\" value=\"right\" checked=\"\">
                <i class=\"fas fa-align-right\"></i>
            </label>
        ";
            } else {
                // line 246
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "right"], "method", false, false, false, 246), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 247), "html", null, true);
                echo "-display\" value=\"right\">
                <i class=\"fas fa-align-right\"></i>
            </label>
        ";
            }
            // line 251
            echo "
        ";
            // line 252
            if ((twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 252) == "none")) {
                // line 253
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "hide"], "method", false, false, false, 253), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 254), "html", null, true);
                echo "-display\" value=\"none\" checked=\"\">
                <i class=\"fas fa-eye-slash\"></i>
            </label>
        ";
            } else {
                // line 258
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "hide"], "method", false, false, false, 258), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 259
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 259), "html", null, true);
                echo "-display\" value=\"none\">
                <i class=\"fas fa-eye-slash\"></i>
            </label>
        ";
            }
            // line 263
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "EditPageOption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 263,  559 => 259,  554 => 258,  547 => 254,  542 => 253,  540 => 252,  537 => 251,  530 => 247,  525 => 246,  518 => 242,  513 => 241,  511 => 240,  508 => 239,  501 => 235,  496 => 234,  489 => 230,  484 => 229,  482 => 228,  479 => 227,  472 => 223,  467 => 222,  460 => 218,  455 => 217,  453 => 216,  450 => 215,  436 => 214,  421 => 209,  417 => 208,  413 => 206,  411 => 202,  410 => 201,  409 => 200,  408 => 199,  407 => 198,  403 => 197,  400 => 196,  392 => 194,  390 => 193,  386 => 192,  382 => 190,  380 => 186,  379 => 185,  378 => 184,  377 => 183,  376 => 182,  372 => 181,  365 => 179,  361 => 178,  356 => 176,  348 => 173,  344 => 172,  341 => 171,  327 => 170,  309 => 155,  303 => 152,  296 => 148,  292 => 147,  284 => 143,  280 => 142,  268 => 134,  264 => 133,  249 => 121,  243 => 118,  239 => 116,  232 => 112,  228 => 110,  226 => 109,  219 => 104,  213 => 103,  204 => 101,  199 => 100,  195 => 99,  188 => 95,  184 => 94,  180 => 93,  176 => 92,  172 => 91,  168 => 90,  164 => 89,  156 => 84,  152 => 83,  142 => 75,  140 => 71,  139 => 70,  137 => 67,  135 => 66,  123 => 57,  116 => 53,  106 => 47,  102 => 46,  90 => 39,  79 => 33,  74 => 31,  69 => 29,  63 => 26,  57 => 24,  53 => 23,  48 => 20,  46 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "EditPageOption.html.twig", "C:\\xampp2\\htdocs\\facturasscripts\\Dinamic\\View\\EditPageOption.html.twig");
    }
}
