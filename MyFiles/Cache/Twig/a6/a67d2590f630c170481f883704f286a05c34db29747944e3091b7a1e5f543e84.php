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

/* InformesOrdenes.html.twig */
class __TwigTemplate_4d0c6f1f86c3408519cc346ed0a76f0855937913dac767d89d5afc51d2d703ae extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "InformesOrdenes.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.css"]), "html", null, true);
        echo "\" />
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.js"]), "html", null, true);
        echo "\"></script>
";
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $context["allProyectos"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "allProyectos", [], "method", false, false, false, 20);
        // line 21
        echo "    
    <style type=\"text/css\">
        .card {
            margin-bottom: 30px;
        }
        
        .autocomplete {
            /*the container must be positioned relative:*/
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }
        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
    
    <div class=\"container-fluid mb-2\">
        ";
        // line 62
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group d-xs-none\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 66), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 66), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 69
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 69)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 69), "homepage", [], "any", false, false, false, 69))) {
            // line 70
            echo "                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 70), "html", null, true);
            echo "?defaultPage=FALSE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 70), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 74
            echo "                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 74), "html", null, true);
            echo "?defaultPage=TRUE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 74), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 78
        echo "                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "report-orders-work"], "method", false, false, false, 82), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 82)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"card text-center\">
                    <div class=\"card-header\">
                        <h5>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "projects"], "method", false, false, false, 91), "html", null, true);
        echo "</h5>
                    </div>
                    <div id=\"formProyectos\" class=\"card-body\">
                            <div class=\"ui-widget\">
                                <label for=\"proyectos\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search-project"], "method", false, false, false, 95), "html", null, true);
        echo "</label>
                                <input id=\"proyectos\" value=\"\" name=\"proyecto\" class=\"form-control text-center\">
                            </div>

                            <p style=\"margin-top:10px;\" class=\"card-text\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "project-report-info"], "method", false, false, false, 99), "html", null, true);
        echo "</p>
                        
                        <form class=\"autocomplete\" target=\"_blank\" type=\"post\" action=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "any", false, false, false, 101), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"action\" value=\"informe-proyecto\" readonly>
                            <input class=\"autocomplete\" type=\"hidden\" name=\"idproyecto\" value=\"\" readonly>
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate-report"], "method", false, false, false, 104), "html", null, true);
        echo "</button>
                        </form>
                    </div>
                </div>
                        
                <div class=\"card text-center\">
                    <div class=\"card-header\">
                        <h5>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "incidences"], "method", false, false, false, 111), "html", null, true);
        echo "</h5>
                    </div>
                    <div id=\"formIncidencias\" class=\"card-body\">
                        <div class=\"ui-widget\">
                            <label for=\"inProyectos\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search-project"], "method", false, false, false, 115), "html", null, true);
        echo "</label>
                            <input id=\"inProyectos\" value=\"\" name=\"proyecto\" class=\"form-control text-center\">
                        </div>

                        <p style=\"margin-top:10px;\" class=\"card-text\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "incidence-project-report-info"], "method", false, false, false, 119), "html", null, true);
        echo "</p>
                        
                        <form class=\"autocomplete\" target=\"_blank\" type=\"post\" action=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "any", false, false, false, 121), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"action\" value=\"informe-incidencia-proyecto\" readonly>
                            <input class=\"autocomplete\" type=\"hidden\" name=\"idproyecto\" value=\"\" readonly>
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate-report"], "method", false, false, false, 124), "html", null, true);
        echo "</button>
                        </form>
                        
                        <hr/>
                        
                        <form class=\"autocomplete\" target=\"_blank\" type=\"post\" action=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
                            <div class=\"ui-widget\">
                                <label for=\"inUsuarios\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search-user"], "method", false, false, false, 131), "html", null, true);
        echo "</label>
                                <input id=\"inUsuarios\" value=\"\" name=\"nick\" class=\"form-control text-center\">
                            </div>

                            <p style=\"margin-top:10px;\" class=\"card-text\">";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "incidence-user-report-info"], "method", false, false, false, 135), "html", null, true);
        echo "</p>
                        
                            <input type=\"hidden\" name=\"action\" value=\"informe-incidencia-usuario\" readonly>
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate-report"], "method", false, false, false, 138), "html", null, true);
        echo "</button>
                        </form>
                        
                        <hr/>
                        
                        <form class=\"autocomplete\" target=\"_blank\" type=\"post\" action=\"";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "any", false, false, false, 143), "html", null, true);
        echo "\">
                            <div class=\"form-group\">
                                <label for=\"infechainicio\">";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "start-date"], "method", false, false, false, 145), "html", null, true);
        echo "</label>
                                <input placeholder=\"YYYY/M/D\" type=\"text\" id=\"infechainicio\" name=\"fechainicio\" value=\"\" class=\"form-control datepicker text-center\">
                            </div>

                            <div class=\"form-group\">
                                <label for=\"infechafin\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "end-date"], "method", false, false, false, 150), "html", null, true);
        echo "</label>
                                <input placeholder=\"YYYY/M/D\" type=\"text\" id=\"infechafin\" name=\"fechafin\" value=\"\" class=\"form-control datepicker text-center\">
                            </div>

                            <p style=\"margin-top:10px;\" class=\"card-text\">";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "incidences-report-info"], "method", false, false, false, 154), "html", null, true);
        echo "</p>
                        
                            <input type=\"hidden\" name=\"action\" value=\"informe-incidencias\" readonly>
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate-report"], "method", false, false, false, 157), "html", null, true);
        echo "</button>
                        </form>
                    </div>
                </div>
            </div>
                    
            <div class=\"col-lg-4\">
                <div class=\"card text-center\">
                    <div class=\"card-header\">
                        <h5>";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "processes"], "method", false, false, false, 166), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        <form id=\"formProcesos\" target=\"_blank\" type=\"post\" action=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "any", false, false, false, 169), "html", null, true);
        echo "\">
                            <div class=\"form-group\">
                                <label for=\"prfechainicio\">";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "start-date"], "method", false, false, false, 171), "html", null, true);
        echo "</label>
                                <input placeholder=\"YYYY/M/D\" type=\"text\" id=\"prfechainicio\" name=\"fechainicio\" value=\"\" class=\"form-control datepicker text-center\">
                            </div>
                                
                            <div class=\"form-group\">
                                <label for=\"prfechafin\">";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "end-date"], "method", false, false, false, 176), "html", null, true);
        echo "</label>
                                <input placeholder=\"YYYY/M/D\" type=\"text\" id=\"prfechafin\" name=\"fechafin\" value=\"\" class=\"form-control datepicker text-center\">
                            </div>
                                
                            <p style=\"margin-top:10px;\" class=\"card-text\">";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "processes-report-info"], "method", false, false, false, 180), "html", null, true);
        echo "</p>
                            
                            <input type=\"hidden\" name=\"action\" value=\"informe-procesos\" readonly>
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate-report"], "method", false, false, false, 183), "html", null, true);
        echo "</button>
                        </form>
                    </div>
                </div>
            </div>
                    
            <div class=\"col-lg-4\">
                <div class=\"card text-center\">
                    <div class=\"card-header\">
                        <h5>";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "users"], "method", false, false, false, 192), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        <form class=\"autocomplete\" id=\"formUsuarios\" target=\"_blank\" type=\"post\" action=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "any", false, false, false, 195), "html", null, true);
        echo "\">
                            <div class=\"form-group\">
                                <label for=\"usfechainicio\">";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "start-date"], "method", false, false, false, 197), "html", null, true);
        echo "</label>
                                <input placeholder=\"YYYY/M/D\" type=\"text\" id=\"usfechainicio\" name=\"fechainicio\" value=\"\" class=\"form-control datepicker text-center\">
                            </div>
                                
                            <div class=\"form-group\">
                                <label for=\"usfechafin\">";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "end-date"], "method", false, false, false, 202), "html", null, true);
        echo "</label>
                                <input placeholder=\"YYYY/M/D\" type=\"text\" id=\"usfechafin\" name=\"fechafin\" value=\"\" class=\"form-control datepicker text-center\">
                            </div>
                                
                            <div class=\"ui-widget\">
                                <label for=\"usuarios\">";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search-user"], "method", false, false, false, 207), "html", null, true);
        echo "</label>
                                <input id=\"usuarios\" value=\"\" name=\"nick\" class=\"form-control text-center\">
                            </div>
                                
                            <p style=\"margin-top:10px;\" class=\"card-text\">";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "users-report-info"], "method", false, false, false, 211), "html", null, true);
        echo "</p>
                            
                            <input type=\"hidden\" name=\"action\" value=\"informe-usuarios\" readonly>
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate-report"], "method", false, false, false, 214), "html", null, true);
        echo "</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
    <script type=\"text/javascript\">
        \$(function() {
            \$('form.autocomple button').click(function(e){
                e.preventDefault();
                
                var form = \$(this).parent();
                
                if (\$(form).find('input.autocomplete').val() != '') {
                    \$(form).submit();
                }
            });
            
            \$( \"#formIncidencias #inProyectos\" ).autocomplete({
                source: \"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "method", false, false, false, 235), "html", null, true);
        echo "?action=proyectos\",
                minLength: 2,
                select: function( event, ui ) {
                    \$(this).val(ui.item.label);
                    \$('#formIncidencias input[name=\"idproyecto\"]').val(ui.item.id);
                    //console.log( \"Selected: \" + ui.item.value + \" aka \" + ui.item.id );
                }
            });
            
            \$( \"#formProyectos #proyectos\" ).autocomplete({
                source: \"";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "method", false, false, false, 245), "html", null, true);
        echo "?action=proyectos\",
                minLength: 2,
                select: function( event, ui ) {
                    \$(this).val(ui.item.label);
                    \$('#formProyectos input[name=\"idproyecto\"]').val(ui.item.id);
                    //console.log( \"Selected: \" + ui.item.value + \" aka \" + ui.item.id );
                }
            });
            
            \$( \"#formUsuarios #usuarios\" ).autocomplete({
                source: \"";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "method", false, false, false, 255), "html", null, true);
        echo "?action=usuarios\",
                minLength: 2,
                select: function( event, ui ) {
                    \$(this).val(ui.item.label);
                    \$('#formUsuarios input[name=\"nick\"]').val(ui.item.id);
                    //console.log( \"Selected: \" + ui.item.value + \" aka \" + ui.item.id );
                }
            });
            
            \$( \"#formIncidencias #inUsuarios\" ).autocomplete({
                source: \"";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "controllerName", [], "method", false, false, false, 265), "html", null, true);
        echo "?action=usuarios\",
                minLength: 2,
                select: function( event, ui ) {
                    \$(this).val(ui.item.label);
                    \$('#formIncidencias input[name=\"nick\"]').val(ui.item.id);
                    //console.log( \"Selected: \" + ui.item.value + \" aka \" + ui.item.id );
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "InformesOrdenes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 265,  451 => 255,  438 => 245,  425 => 235,  401 => 214,  395 => 211,  388 => 207,  380 => 202,  372 => 197,  367 => 195,  361 => 192,  349 => 183,  343 => 180,  336 => 176,  328 => 171,  323 => 169,  317 => 166,  305 => 157,  299 => 154,  292 => 150,  284 => 145,  279 => 143,  271 => 138,  265 => 135,  258 => 131,  253 => 129,  245 => 124,  239 => 121,  234 => 119,  227 => 115,  220 => 111,  210 => 104,  204 => 101,  199 => 99,  192 => 95,  185 => 91,  171 => 82,  165 => 78,  155 => 74,  145 => 70,  143 => 69,  135 => 66,  128 => 62,  85 => 21,  82 => 20,  78 => 19,  72 => 16,  67 => 15,  63 => 14,  57 => 11,  52 => 10,  48 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "InformesOrdenes.html.twig", "C:\\xampp2\\htdocs\\facturasscripts\\Dinamic\\View\\InformesOrdenes.html.twig");
    }
}
