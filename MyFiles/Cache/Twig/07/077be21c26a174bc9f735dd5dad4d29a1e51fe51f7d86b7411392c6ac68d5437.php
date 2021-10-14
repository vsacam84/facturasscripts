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

/* Master/BusinessDocumentView.html.twig */
class __TwigTemplate_5e03f0303bb21f1efed977a7e4f4c7f968cdd67e98e6e9cde1a549fbea7f1543 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extras' => [$this, 'block_extras'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["thisView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script type=\"text/javascript\">
    businessDocViewLineData = ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getLineData", [], "method", false, false, false, 23);
        echo ";
    businessDocViewFormName = \"form";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 24), "html", null, true);
        echo "\";
    businessDocViewUrl = \"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 25), "url", [0 => "edit"], "method", false, false, false, 25);
        echo "\";
    function businessDocViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 28), "html", null, true);
        echo "\",
            message: \"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 29), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 33), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 36), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

<form id=\"form";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 52), "html", null, true);
        echo "\" action=\"#\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 54), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 55), "primaryColumnValue", [], "method", false, false, false, 55), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumn", [], "method", false, false, false, 56), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumnValue", [], "method", false, false, false, 56), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"idestado\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 57), "idestado", [], "any", false, false, false, 57), "html", null, true);
        echo "\" id=\"doc_idestado\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 58), "newToken", [], "method", false, false, false, 58), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 59
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 59), "card", [], "any", false, false, false, 59)) ? ("") : ("container-fluid"));
        echo "\">
        <div class=\"form-row\">
            ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 61), "subjectColumn", [], "method", false, false, false, 61) == "codcliente")) {
            // line 62
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customerSelect", [($context["i18n"] ?? null), "codcliente", "codcliente", twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 62)], 62, $context, $this->getSourceContext());
            echo "
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["thisView"] ?? null), "model", [], "any", false, false, false, 63), "subjectColumn", [], "method", false, false, false, 63) == "codproveedor")) {
            // line 64
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_supplierSelect", [($context["i18n"] ?? null), "codproveedor", "codproveedor", twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 64)], 64, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 66
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codalmacen", "codalmacen", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 66), "codalmacen", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Almacen"], "method", false, false, false, 66)], 66, $context, $this->getSourceContext());
        echo "
            ";
        // line 67
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codserie", "codserie", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 67), "codserie", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Serie"], "method", false, false, false, 67)], 67, $context, $this->getSourceContext());
        echo "
            ";
        // line 68
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_fecha", "fecha", twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 68), "fecha", [], "any", false, false, false, 68), "Y-m-d"), "date", "", ["class" => "form-control"]], 68, $context, $this->getSourceContext());
        echo "
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCustomFields", [], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 70
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", [("doc_" . twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70)), twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getViewModelValue", [0 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 70), 1 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70)], "method", false, false, false, 70), "text", twig_get_attribute($this->env, $this->source,             // line 71
$context["field"], "icon", [], "any", false, false, false, 71), ["placeholder" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 71)], "method", false, false, false, 71)]], 70, $context, $this->getSourceContext());
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codpago", "codpago", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 73), "codpago", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "FormaPago"], "method", false, false, false, 73)], 73, $context, $this->getSourceContext());
        echo "
            ";
        // line 74
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_coddivisa", "coddivisa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 74), "coddivisa", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Divisa"], "method", false, false, false, 74)], 74, $context, $this->getSourceContext());
        echo "
            <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"doc_total\" name=\"total\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 77), "total", [], "any", false, false, false, 77), "html", null, true);
        echo "\" class=\"form-control text-right\" disabled=\"\" />
                    <div class=\"input-group-append\">
                        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 79), "btnSave", [], "any", false, false, false, 79)) {
            // line 80
            echo "                            <button type=\"button\" class=\"btn btn-primary\" onclick=\"businessDocViewSave();\">
                                <i class=\"fas fa-save\" aria-hidden=\"true\"></i>
                            </button>
                        ";
        }
        // line 84
        echo "                    </div>
                </div>
            </div>
            ";
        // line 87
        echo twig_call_macro($macros["_self"], "macro_statusSelect", [twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 87), ($context["thisView"] ?? null), ($context["i18n"] ?? null)], 87, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 89), "exists", [], "method", false, false, false, 89)) {
            // line 90
            echo "            <div class=\"row\">
                ";
            // line 91
            echo twig_call_macro($macros["_self"], "macro_parentDocuments", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 91), "parentDocuments", [], "method", false, false, false, 91), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 91, $context, $this->getSourceContext());
            echo "
                ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 92), "femail", [], "any", false, false, false, 92)) {
                // line 93
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-info text-center\">
                            <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 95), "femail", [], "any", false, false, false, 95), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 99
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 99), "paid", [], "method", false, false, false, 99)) {
                // line 100
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-success text-center\">
                            <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i> ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "paid"], "method", false, false, false, 102), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 106
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 106), "editable", [], "any", false, false, false, 106) == false)) {
                // line 107
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-danger text-center\">
                            <i class=\"fas fa-lock fa-fw\"></i> ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "non-editable-document"], "method", false, false, false, 109), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 113
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_childrenDocuments", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 113), "childrenDocuments", [], "method", false, false, false, 113), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 113, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 116
        echo "        <div id=\"document-lines\"></div>
        <div class=\"form-row mt-2\">
            <div class=\"col-sm-12\">
                <p class=\"text-center text-muted\">
                    ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "grid-help"], "method", false, false, false, 120), "html", null, true);
        echo "
                    ";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getMaxLines", [], "method", false, false, false, 121) < 200)) {
            // line 122
            echo "                        <span class=\"text-danger\">
                            ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "max-input-vars-warning", 1 => ["%numlines%" => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getMaxLines", [], "method", false, false, false, 123)]], "method", false, false, false, 123), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 126
        echo "                </p>
            </div>
            ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showDocSubType", [], "any", false, false, false, 128)) {
            // line 129
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codsubtipodoc", "codsubtipodoc", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 129), "codsubtipodoc", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source,             // line 130
($context["thisView"] ?? null), "getSelectValues", [0 => "BusinessDocSubType"], "method", false, false, false, 130), true, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "doc-subtype"], "method", false, false, false, 130)], 129, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 132
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showDocOperation", [], "any", false, false, false, 132)) {
            // line 133
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codoperaciondoc", "codoperaciondoc", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 133), "codoperaciondoc", [], "any", false, false, false, 133), twig_get_attribute($this->env, $this->source,             // line 134
($context["thisView"] ?? null), "getSelectValues", [0 => "BusinessDocTypeOperation"], "method", false, false, false, 134), true, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "doc-operation"], "method", false, false, false, 134)], 133, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 136
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_netosindto", "netosindto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 136), "netosindto", [], "any", false, false, false, 136), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 137
($context["i18n"] ?? null), "trans", [0 => "subtotal"], "method", false, false, false, 137)], 136, $context, $this->getSourceContext());
        echo "
            ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 138), "editable", [], "any", false, false, false, 138)) {
            // line 139
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor1", "dtopor1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 139), "dtopor1", [], "any", false, false, false, 139), "number", "fas fa-percentage", ["class" => "form-control"], twig_get_attribute($this->env, $this->source,             // line 140
($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 140)], 139, $context, $this->getSourceContext());
            echo "
                ";
            // line 141
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor2", "dtopor2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 141), "dtopor2", [], "any", false, false, false, 141), "number", "fas fa-percentage", ["class" => "form-control"], twig_get_attribute($this->env, $this->source,             // line 142
($context["i18n"] ?? null), "trans", [0 => "global-dto-2"], "method", false, false, false, 142)], 141, $context, $this->getSourceContext());
            echo "
            ";
        } else {
            // line 144
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor1", "dtopor1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 144), "dtopor1", [], "any", false, false, false, 144), "number", "fas fa-percentage", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 145
($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 145)], 144, $context, $this->getSourceContext());
            echo "
                ";
            // line 146
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor2", "dtopor2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 146), "dtopor2", [], "any", false, false, false, 146), "number", "fas fa-percentage", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 147
($context["i18n"] ?? null), "trans", [0 => "global-dto-2"], "method", false, false, false, 147)], 146, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 149
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_neto", "neto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 149), "neto", [], "any", false, false, false, 149), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 150
($context["i18n"] ?? null), "trans", [0 => "net"], "method", false, false, false, 150)], 149, $context, $this->getSourceContext());
        echo "
            ";
        // line 151
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totaliva", "totaliva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 151), "totaliva", [], "any", false, false, false, 151), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 152
($context["i18n"] ?? null), "trans", [0 => "taxes"], "method", false, false, false, 152)], 151, $context, $this->getSourceContext());
        echo "
            ";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 153), "totalrecargo", [], "any", false, false, false, 153) != 0)) {
            // line 154
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalrecargo", "totalrecargo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 154), "totalrecargo", [], "any", false, false, false, 154), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 155
($context["i18n"] ?? null), "trans", [0 => "re"], "method", false, false, false, 155)], 154, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 157
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 157), "totalirpf", [], "any", false, false, false, 157) != 0)) {
            // line 158
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalirpf", "totalirpf", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 158), "totalirpf", [], "any", false, false, false, 158), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 159
($context["i18n"] ?? null), "trans", [0 => "irpf"], "method", false, false, false, 159)], 158, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 161
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 161), "totalsuplidos", [], "any", false, false, false, 161) != 0)) {
            // line 162
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalsuplidos", "totalsuplidos", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 162), "totalsuplidos", [], "any", false, false, false, 162), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 163
($context["i18n"] ?? null), "trans", [0 => "supplied-amount"], "method", false, false, false, 163)], 162, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 165
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_total2", "total", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 165), "total", [], "any", false, false, false, 165), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 166
($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 166)], 165, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"form-row mb-2\">
            ";
        // line 169
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getRow", [0 => "business"], "method", false, false, false, 169), "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 169)], "method", false, false, false, 169);
        echo "
        </div>
        <div class=\"form-row\">
            <div class=\"col\">
                ";
        // line 173
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 173) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 173), "btnDelete", [], "any", false, false, false, 173))) {
            // line 174
            echo "                    <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"businessDocViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 174), "html", null, true);
            echo "');\">
                        <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 176), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 179
        echo "            </div>
            <div class=\"col text-center\">
                ";
        // line 181
        $this->displayBlock('extras', $context, $blocks);
        // line 184
        echo "            </div>
            <div class=\"col text-right\">
                ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 186), "btnUndo", [], "any", false, false, false, 186)) {
            // line 187
            echo "                    <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 187), "url", [], "method", false, false, false, 187), "html", null, true);
            echo "\">
                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 189), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 192
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 192), "btnSave", [], "any", false, false, false, 192)) {
            // line 193
            echo "                    <button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"businessDocViewSave();\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 194), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 197
        echo "            </div>
        </div>
    </div>
</form>

";
        // line 220
        echo "
";
        // line 247
        echo "
";
        // line 270
        echo "
";
        // line 293
        echo "
";
        // line 336
        echo "
";
        // line 389
        echo "
";
    }

    // line 181
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 182), "render", [0 => false, 1 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 182)], "method", false, false, false, 182);
        echo "
                ";
    }

    // line 202
    public function macro_customSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__allowHide__ = true, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "allowHide" => $__allowHide__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 203
            echo "    ";
            if ((($context["allowHide"] ?? null) && (twig_length_filter($this->env, ($context["allValues"] ?? null)) == 1))) {
                // line 204
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 205
                    echo "            <input type=\"hidden\" id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"/>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "    ";
            } else {
                // line 208
                echo "        <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
            ";
                // line 209
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
            <select id=\"";
                // line 210
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"form-control\">
                ";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 212
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"\"";
                    }
                    echo ">
                        ";
                    // line 213
                    echo $context["option"];
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "            </select>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 221
    public function macro_customInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__icon__ = null, $__attributes__ = null, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 222
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        ";
            // line 223
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
        ";
            // line 224
            if (($context["icon"] ?? null)) {
                // line 225
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 228
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
            ";
            }
            // line 232
            echo "
            <input type=\"";
            // line 233
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo ($context["value"] ?? null);
            echo "\" autocomplete=\"off\"
                   ";
            // line 234
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 234)) {
                // line 235
                echo "                       class=\"form-control\"
                   ";
            }
            // line 237
            echo "
                   ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 239
                echo "                       ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo " /> ";
            // line 241
            echo "
            ";
            // line 242
            if (($context["icon"] ?? null)) {
                // line 243
                echo "            </div>
        ";
            }
            // line 245
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 248
    public function macro_customerSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 249
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 252
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 252)) {
                // line 253
                echo "                    <a href=\"EditCliente?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 253), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 257
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-customer"], "method", false, false, false, 257), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 261
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 262
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 262), "html", null, true);
            echo "\"/>
            ";
            // line 263
            $context["autofocus"] = ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 263)) ? ("") : ("autofocus=\"\""));
            // line 264
            echo "            <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombrecliente", [], "any", false, false, false, 264);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 265
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Cliente\" data-fieldcode=\"codcliente\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "customer"], "method", false, false, false, 266), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["autofocus"] ?? null), "html", null, true);
            echo " autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 271
    public function macro_supplierSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 272
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 275
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 275)) {
                // line 276
                echo "                    <a href=\"EditProveedor?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 276), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 280
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-supplier"], "method", false, false, false, 280), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 284
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 285
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 285), "html", null, true);
            echo "\"/>
            ";
            // line 286
            $context["autofocus"] = ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 286)) ? ("") : ("autofocus=\"\""));
            // line 287
            echo "            <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombre", [], "any", false, false, false, 287);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 288
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Proveedor\" data-fieldcode=\"codproveedor\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "supplier"], "method", false, false, false, 289), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["autofocus"] ?? null), "html", null, true);
            echo " autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 294
    public function macro_statusSelect($__model__ = null, $__view__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "model" => $__model__,
            "view" => $__view__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 295
            echo "    ";
            $context["status"] = twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getStatus", [], "method", false, false, false, 295);
            // line 296
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "exists", [], "method", false, false, false, 296) == false)) {
                // line 297
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "generadoc", [], "any", false, false, false, 297)) {
                // line 298
                echo "        <div class=\"col mb-2\">
            <button class=\"btn btn-block btn-secondary\" type=\"button\">
                <i class=\"";
                // line 300
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 300), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 300), "html", null, true);
                echo "
            </button>
        </div>
    ";
            } else {
                // line 304
                echo "        <div class=\"col mb-2\">
            <div class=\"dropdown\">
                <button class=\"btn btn-block btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"";
                // line 307
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 307), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 307), "html", null, true);
                echo "
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                // line 310
                $context["showDocumentStitcher"] = false;
                // line 311
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentStatus", [], "any", false, false, false, 311));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 312
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "idestado", [], "any", false, false, false, 312) == twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 312))) {
                        // line 313
                        echo "                            <a class=\"dropdown-item active\" href=\"#\">
                                <i class=\"";
                        // line 314
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 314), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 314), "html", null, true);
                        echo "
                            </a>
                        ";
                    } else {
                        // line 317
                        echo "                            <a class=\"dropdown-item\" href=\"#\" onclick=\"\$('#doc_idestado').val('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 317), "html", null, true);
                        echo "'); businessDocViewSave();\">
                                ";
                        // line 318
                        if (twig_get_attribute($this->env, $this->source, $context["status"], "generadoc", [], "any", false, false, false, 318)) {
                            // line 319
                            echo "                                    ";
                            $context["showDocumentStitcher"] = true;
                            // line 320
                            echo "                                ";
                        }
                        // line 321
                        echo "                                <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 321), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 321), "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 324
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "exists", [], "method", false, false, false, 325) && ($context["showDocumentStitcher"] ?? null))) {
                    // line 326
                    echo "                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"DocumentStitcher?model=";
                    // line 327
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "modelClassName", [], "method", false, false, false, 327), "html", null, true);
                    echo "&codes=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 327), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-magic fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 328
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "group-or-split"], "method", false, false, false, 328), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 331
                echo "                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 337
    public function macro_parentDocuments($__relatedDocuments__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "relatedDocuments" => $__relatedDocuments__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 338
            echo "    ";
            if ((twig_length_filter($this->env, ($context["relatedDocuments"] ?? null)) > 2)) {
                // line 339
                echo "        <div class=\"col-sm\">
            <div class=\"alert alert-warning text-center\">
                <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#parentsModal\">";
                // line 342
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "previous-documents"], "method", false, false, false, 342), "html", null, true);
                echo "</a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"parentsModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i>
                            ";
                // line 351
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "previous-documents"], "method", false, false, false, 351), "html", null, true);
                echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
                // line 360
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 361
                    echo "                                    <tr>
                                        <td>
                                            <a href=\"";
                    // line 363
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "method", false, false, false, 363), "html", null, true);
                    echo "\">
                                                ";
                    // line 364
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "modelClassName", [], "method", false, false, false, 364)], "method", false, false, false, 364), "html", null, true);
                    echo "
                                                ";
                    // line 365
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "primaryDescription", [], "method", false, false, false, 365), "html", null, true);
                    echo "
                                            </a>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 368
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 368), "coins", [], "method", false, false, false, 368), "format", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "total", [], "any", false, false, false, 368)], "method", false, false, false, 368), "html", null, true);
                    echo "</td>
                                        <td class=\"text-right\">";
                    // line 369
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "fecha", [], "any", false, false, false, 369), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 372
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 379
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["relatedDoc"]) {
                    // line 380
                    echo "            <div class=\"col-sm\">
                <div class=\"alert alert-warning text-center\">
                    <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 382
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "modelClassName", [], "method", false, false, false, 382)], "method", false, false, false, 382), "html", null, true);
                    echo "
                    <a href=\"";
                    // line 383
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "url", [], "method", false, false, false, 383), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "primaryDescription", [], "method", false, false, false, 383), "html", null, true);
                    echo "</a>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedDoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 387
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 390
    public function macro_childrenDocuments($__relatedDocuments__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "relatedDocuments" => $__relatedDocuments__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 391
            echo "    ";
            if ((twig_length_filter($this->env, ($context["relatedDocuments"] ?? null)) > 2)) {
                // line 392
                echo "        <div class=\"col-sm\">
            <div class=\"alert alert-success text-center\">
                <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#childrenModal\">";
                // line 395
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "documents-generated"], "method", false, false, false, 395), "html", null, true);
                echo "</a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"childrenModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i>
                            ";
                // line 404
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "documents-generated"], "method", false, false, false, 404), "html", null, true);
                echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
                // line 413
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 414
                    echo "                                    <tr>
                                        <td>
                                            <a href=\"";
                    // line 416
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "method", false, false, false, 416), "html", null, true);
                    echo "\">
                                                ";
                    // line 417
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "modelClassName", [], "method", false, false, false, 417)], "method", false, false, false, 417), "html", null, true);
                    echo "
                                                ";
                    // line 418
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "primaryDescription", [], "method", false, false, false, 418), "html", null, true);
                    echo "
                                            </a>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 421
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 421), "coins", [], "method", false, false, false, 421), "format", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "total", [], "any", false, false, false, 421)], "method", false, false, false, 421), "html", null, true);
                    echo "</td>
                                        <td class=\"text-right\">";
                    // line 422
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "fecha", [], "any", false, false, false, 422), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 425
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 432
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["relatedDoc"]) {
                    // line 433
                    echo "            <div class=\"col-sm\">
                <div class=\"alert alert-success text-center\">
                    <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 435
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "modelClassName", [], "method", false, false, false, 435)], "method", false, false, false, 435), "html", null, true);
                    echo "
                    <a href=\"";
                    // line 436
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "url", [], "method", false, false, false, 436), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "primaryDescription", [], "method", false, false, false, 436), "html", null, true);
                    echo "</a>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedDoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 440
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/BusinessDocumentView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1200 => 440,  1188 => 436,  1184 => 435,  1180 => 433,  1175 => 432,  1166 => 425,  1157 => 422,  1153 => 421,  1147 => 418,  1143 => 417,  1139 => 416,  1135 => 414,  1131 => 413,  1119 => 404,  1107 => 395,  1102 => 392,  1099 => 391,  1084 => 390,  1074 => 387,  1062 => 383,  1058 => 382,  1054 => 380,  1049 => 379,  1040 => 372,  1031 => 369,  1027 => 368,  1021 => 365,  1017 => 364,  1013 => 363,  1009 => 361,  1005 => 360,  993 => 351,  981 => 342,  976 => 339,  973 => 338,  958 => 337,  945 => 331,  939 => 328,  933 => 327,  930 => 326,  927 => 325,  921 => 324,  912 => 321,  909 => 320,  906 => 319,  904 => 318,  899 => 317,  891 => 314,  888 => 313,  885 => 312,  880 => 311,  878 => 310,  870 => 307,  865 => 304,  856 => 300,  852 => 298,  849 => 297,  846 => 296,  843 => 295,  828 => 294,  813 => 289,  809 => 288,  802 => 287,  800 => 286,  792 => 285,  789 => 284,  779 => 280,  771 => 276,  769 => 275,  764 => 272,  747 => 271,  732 => 266,  728 => 265,  721 => 264,  719 => 263,  711 => 262,  708 => 261,  698 => 257,  690 => 253,  688 => 252,  683 => 249,  666 => 248,  656 => 245,  652 => 243,  650 => 242,  647 => 241,  645 => 240,  634 => 239,  630 => 238,  627 => 237,  623 => 235,  621 => 234,  611 => 233,  608 => 232,  601 => 228,  596 => 225,  594 => 224,  590 => 223,  587 => 222,  568 => 221,  556 => 216,  547 => 213,  538 => 212,  534 => 211,  528 => 210,  524 => 209,  521 => 208,  518 => 207,  505 => 205,  500 => 204,  497 => 203,  479 => 202,  472 => 182,  468 => 181,  463 => 389,  460 => 336,  457 => 293,  454 => 270,  451 => 247,  448 => 220,  441 => 197,  435 => 194,  432 => 193,  429 => 192,  423 => 189,  417 => 187,  415 => 186,  411 => 184,  409 => 181,  405 => 179,  399 => 176,  393 => 174,  391 => 173,  384 => 169,  378 => 166,  376 => 165,  371 => 163,  369 => 162,  366 => 161,  361 => 159,  359 => 158,  356 => 157,  351 => 155,  349 => 154,  347 => 153,  343 => 152,  342 => 151,  338 => 150,  336 => 149,  331 => 147,  330 => 146,  326 => 145,  324 => 144,  319 => 142,  318 => 141,  314 => 140,  312 => 139,  310 => 138,  306 => 137,  304 => 136,  299 => 134,  297 => 133,  294 => 132,  289 => 130,  287 => 129,  285 => 128,  281 => 126,  275 => 123,  272 => 122,  270 => 121,  266 => 120,  260 => 116,  253 => 113,  246 => 109,  242 => 107,  239 => 106,  232 => 102,  228 => 100,  225 => 99,  218 => 95,  214 => 93,  212 => 92,  208 => 91,  205 => 90,  203 => 89,  198 => 87,  193 => 84,  187 => 80,  185 => 79,  180 => 77,  174 => 74,  169 => 73,  161 => 71,  159 => 70,  155 => 69,  151 => 68,  147 => 67,  142 => 66,  136 => 64,  134 => 63,  129 => 62,  127 => 61,  122 => 59,  118 => 58,  114 => 57,  108 => 56,  104 => 55,  100 => 54,  95 => 52,  76 => 36,  70 => 33,  63 => 29,  59 => 28,  53 => 25,  49 => 24,  45 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/BusinessDocumentView.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/Master/BusinessDocumentView.html.twig");
    }
}
