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

/* AdminPlugins.html.twig */
class __TwigTemplate_9fc5709c0861fb2f81bfcfa64e0fa234ff2cdfa1a0b91e342607886e5f74c37e extends \Twig\Template
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
        // line 22
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 22)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null)], "method", false, false, false, 22));
        // line 23
        $context["allPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAllPlugins", [], "method", false, false, false, 23);
        // line 24
        $context["installedPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPlugins", [], "method", false, false, false, 24);
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "AdminPlugins.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group bg-white\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
        echo "\"
                       title=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 33), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 36
        if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 36)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 36), "homepage", [], "any", false, false, false, 36))) {
            // line 37
            echo "                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 37), "html", null, true);
            echo "?defaultPage=FALSE\"
                           title=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 38), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 42
            echo "                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 42), "html", null, true);
            echo "?defaultPage=TRUE\"
                           title=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 43), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 47
        echo "                </div>
                ";
        // line 48
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 49
            echo "                    <button class=\"btn btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 52), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 55
        echo "                <div class=\"btn-group bg-white\">
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 56), "html", null, true);
        echo "?action=rebuild\" class=\"btn btn-sm btn-outline-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "rebuild"], "method", false, false, false, 58), "html", null, true);
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 64
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 64)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed-plugins"], "method", false, false, false, 72), "html", null, true);
        echo "
                ";
        // line 73
        if ((twig_length_filter($this->env, ($context["installedPlugins"] ?? null)) > 0)) {
            // line 74
            echo "                    <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["installedPlugins"] ?? null)), "html", null, true);
            echo "</span>
                ";
        }
        // line 76
        echo "            </a>
        </li>
        ";
        // line 78
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 79
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more-plugins"], "method", false, false, false, 82), "html", null, true);
            echo "</span>
                    ";
            // line 83
            if ((twig_length_filter($this->env, ($context["allPlugins"] ?? null)) > 0)) {
                // line 84
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["allPlugins"] ?? null)), "html", null, true);
                echo "</span>
                    ";
            }
            // line 86
            echo "                </a>
            </li>
        ";
        }
        // line 89
        echo "    </ul>
";
    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 96
        echo twig_call_macro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["installedPlugins"] ?? null)], 96, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 98
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 99
            echo "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 100
            echo twig_call_macro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["allPlugins"] ?? null)], 100, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 103
        echo "    </div>

    ";
        // line 106
        echo "    ";
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 107
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 107), "html", null, true);
            echo "\" name=\"upload-plugins\" method=\"post\" class=\"form\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 109), "newToken", [], "method", false, false, false, 109), "html", null, true);
            echo "\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add-new-plugin"], "method", false, false, false, 114), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 116), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 120) < 99)) {
                // line 121
                echo "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 122)]], "method", false, false, false, 122), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 125
            echo "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-plugin-zip-file"], "method", false, false, false, 127), "html", null, true);
            echo "
                                <input type=\"file\" name=\"plugin[]\" multiple=\"\" accept=\"application/zip\" required=\"\"/>
                                ";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 129) >= 99)) {
                // line 130
                echo "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 131)]], "method", false, false, false, 131), "html", null, true);
                echo "
                                    </small>
                                ";
            }
            // line 134
            echo "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-secondary\"
                                        data-dismiss=\"modal\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 137), "html", null, true);
            echo "</button>
                                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 138), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
    }

    // line 148
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        .bg-header {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 157
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 159
        if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
            // line 160
            echo "        <script type=\"text/javascript\">
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 163
            echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 163);
            echo "\",
                    message: \"";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 164), "html", null, true);
            echo "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 168), "html", null, true);
            echo "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 171), "html", null, true);
            echo "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            window.location = \"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 177), "html", null, true);
            echo "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName;
                        }
                    }
                });
            }
        </script>
    ";
        }
    }

    // line 186
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 187
            echo "    ";
            if ((($context["value"] ?? null) < 1)) {
                // line 188
                echo "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 193
($context["value"] ?? null) < 2)) {
                // line 194
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 199
($context["value"] ?? null) < 3)) {
                // line 200
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 205
($context["value"] ?? null) < 4)) {
                // line 206
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 211
($context["value"] ?? null) < 5)) {
                // line 212
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 218
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 226
    public function macro_showAllPlugins($__fsc__ = null, $__i18n__ = null, $__allPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "allPlugins" => $__allPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 227
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th width=\"140\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "health"], "method", false, false, false, 231), "html", null, true);
            echo "</th>
                <th>";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 232), "html", null, true);
            echo "</th>
                <th>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 233), "html", null, true);
            echo "</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 239
                echo "                ";
                $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 239) > 2)) ? ("table-success") : ((((twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 239) == 0)) ? ("table-danger") : ("table-warning"))));
                // line 240
                echo "                <tr class=\"clickableRow ";
                echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 240), "html", null, true);
                echo "\" data-target=\"_blank\">
                    <td>";
                // line 241
                echo twig_call_macro($macros["_self"], "macro_healthStatus", [twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 241)], 241, $context, $this->getSourceContext());
                echo "</td>
                    <td>";
                // line 242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 242), "html", null, true);
                echo "</td>
                    <td>";
                // line 243
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 243), "html", null, true));
                echo "</td>
                    <td class=\"text-center\">
                        ";
                // line 245
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "installed", [], "any", false, false, false, 245)) {
                    // line 246
                    echo "                            <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i>
                            ";
                    // line 247
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed"], "method", false, false, false, 247), "html", null, true);
                    echo "
                        ";
                }
                // line 249
                echo "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 252
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 253
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 253), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 261
    public function macro_showInstalledPlugins($__fsc__ = null, $__i18n__ = null, $__installedPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "installedPlugins" => $__installedPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 262
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 266), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "version"], "method", false, false, false, 267), "html", null, true);
            echo "</th>
                <th>";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 268), "html", null, true);
            echo "</th>
                <th></th>
                <th class=\"text-center\">";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actions"], "method", false, false, false, 270), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["installedPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 275
                echo "                ";
                $context["trClass"] = " class=\"table-danger\"";
                // line 276
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 276)) {
                    // line 277
                    echo "                    ";
                    $context["trClass"] = " class=\"table-success\"";
                    // line 278
                    echo "                ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 278)) {
                    // line 279
                    echo "                    ";
                    $context["trClass"] = "";
                    // line 280
                    echo "                ";
                }
                // line 281
                echo "                <tr";
                echo ($context["trClass"] ?? null);
                echo ">
                    <td>";
                // line 282
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 282), "html", null, true);
                echo "</td>
                    ";
                // line 283
                if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 283) == 0)) {
                    // line 284
                    echo "                        <td class=\"text-right text-danger\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 284), "html", null, true);
                    echo "</td>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 285
$context["plugin"], "version", [], "any", false, false, false, 285) < 1)) {
                    // line 286
                    echo "                        <td class=\"text-right text-warning\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 286), "html", null, true);
                    echo "</td>
                    ";
                } else {
                    // line 288
                    echo "                        <td class=\"text-right\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 288), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 290
                echo "                    <td>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 290), "html", null, true));
                echo "</td>
                    ";
                // line 291
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 291)) {
                    // line 292
                    echo "                        <td></td>
                        <td>
                            <a class=\"btn btn-block btn-sm btn-secondary\"
                               href=\"";
                    // line 295
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 295), "html", null, true);
                    echo "?action=disable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 295), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 297
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "disable"], "method", false, false, false, 297), "html", null, true);
                    echo "</span>
                            </a>
                        </td>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 300
$context["plugin"], "compatible", [], "any", false, false, false, 300)) {
                    // line 301
                    echo "                        <td>
                            ";
                    // line 302
                    if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
                        // line 303
                        echo "                                <a class=\"btn btn-block btn-sm btn-danger\" href=\"#\"
                                   onclick=\"deletePlugin('";
                        // line 304
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 304), "html", null, true);
                        echo "');\">
                                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                        // line 306
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 306), "html", null, true);
                        echo "</span>
                                </a>
                            ";
                    }
                    // line 309
                    echo "                        </td>
                        <td>
                            <a class=\"btn btn-block btn-sm btn-success\"
                               href=\"";
                    // line 312
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 312), "html", null, true);
                    echo "?action=enable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 312), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 314
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "enable"], "method", false, false, false, 314), "html", null, true);
                    echo "</span>
                            </a>
                        </td>
                    ";
                } else {
                    // line 318
                    echo "                        <td colspan=\"2\"></td>
                    ";
                }
                // line 320
                echo "                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 322
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"5\"><b>";
                // line 323
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 323), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "AdminPlugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 326,  733 => 323,  730 => 322,  724 => 320,  720 => 318,  713 => 314,  706 => 312,  701 => 309,  695 => 306,  690 => 304,  687 => 303,  685 => 302,  682 => 301,  680 => 300,  674 => 297,  667 => 295,  662 => 292,  660 => 291,  655 => 290,  649 => 288,  643 => 286,  641 => 285,  636 => 284,  634 => 283,  630 => 282,  625 => 281,  622 => 280,  619 => 279,  616 => 278,  613 => 277,  610 => 276,  607 => 275,  602 => 274,  595 => 270,  590 => 268,  586 => 267,  582 => 266,  576 => 262,  561 => 261,  549 => 256,  540 => 253,  537 => 252,  530 => 249,  525 => 247,  522 => 246,  520 => 245,  515 => 243,  511 => 242,  507 => 241,  500 => 240,  497 => 239,  492 => 238,  484 => 233,  480 => 232,  476 => 231,  470 => 227,  455 => 226,  440 => 218,  432 => 212,  430 => 211,  423 => 206,  421 => 205,  414 => 200,  412 => 199,  405 => 194,  403 => 193,  396 => 188,  393 => 187,  380 => 186,  368 => 177,  359 => 171,  353 => 168,  346 => 164,  342 => 163,  337 => 160,  335 => 159,  330 => 158,  326 => 157,  314 => 149,  310 => 148,  297 => 138,  293 => 137,  288 => 134,  282 => 131,  279 => 130,  277 => 129,  272 => 127,  268 => 125,  262 => 122,  259 => 121,  257 => 120,  250 => 116,  245 => 114,  237 => 109,  231 => 107,  228 => 106,  224 => 103,  218 => 100,  215 => 99,  213 => 98,  208 => 96,  201 => 93,  197 => 92,  192 => 89,  187 => 86,  181 => 84,  179 => 83,  175 => 82,  170 => 79,  168 => 78,  164 => 76,  158 => 74,  156 => 73,  152 => 72,  139 => 64,  130 => 58,  125 => 56,  122 => 55,  116 => 52,  111 => 49,  109 => 48,  106 => 47,  99 => 43,  94 => 42,  87 => 38,  82 => 37,  80 => 36,  74 => 33,  70 => 32,  61 => 27,  57 => 26,  52 => 20,  50 => 24,  48 => 23,  46 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "C:\\xampp2\\htdocs\\facturasscripts\\Dinamic\\View\\AdminPlugins.html.twig");
    }
}
