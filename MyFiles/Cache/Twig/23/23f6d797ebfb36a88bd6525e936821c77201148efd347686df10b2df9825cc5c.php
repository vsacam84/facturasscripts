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

/* Login/Login.html.twig */
class __TwigTemplate_aef9ba45f7484e56e4ff164ee4724d816ee587115c59d2030f61aa58756b9fa4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                    <div class=\"card mt-4\">
                        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\">
                            <img class=\"card-img-top\" src=\"https://firebasestorage.googleapis.com/v0/b/skillsoft-ea998.appspot.com/o/logoskill.jpeg?alt=media\" style=\"height: 300px\" alt=\"FacturaScripts\"/>
                        </a>
                        <div class=\"card-body\">
                            <p class=\"card-text text-center\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login-text"], "method", false, false, false, 14), "html", null, true);
        echo "</p>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 22), "html", null, true);
        echo "\"
                                           required=\"\" autocomplete=\"off\" autofocus=\"\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "password"], "method", false, false, false, 33), "html", null, true);
        echo "\"
                                           required=\"\" autocomplete=\"off\"/>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-block btn-primary\">
                                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login"], "method", false, false, false, 38), "html", null, true);
        echo "
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#newPasswordModal\">
                                ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "i-forgot-password"], "method", false, false, false, 43), "html", null, true);
        echo "
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <div class=\"card mt-4 text-white bg-secondary\">
                    <div class=\"card-header\">Skill Fact</div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">
                            SkillFact es un software de cintabilidad y CRM basado en FacturaScripts
                        </p>
                        <a href=\"https://skillsoft.ec\" class=\"badge badge-light\">skillsoft.ec</a>
                        <a href=\"https://www.facebook.com/skillsoftec\" class=\"badge badge-light\">facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action=\"";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 70), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 83), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 94), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 105), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 110), "html", null, true);
        echo "
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\" placeholder=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "db-password"], "method", false, false, false, 117), "html", null, true);
        echo "\"
                                       autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-row align-items-end\">
                            <div class=\"col-sm\">
                                <a href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\" target=\"_blank\" class=\"h6\">
                                    ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "need-help-password"], "method", false, false, false, 124), "html", null, true);
        echo "
                                </a>
                            </div>
                            <div class=\"col-sm-3 text-right\">
                                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 128), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 138
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #333A40;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 139,  237 => 138,  224 => 128,  217 => 124,  207 => 117,  197 => 110,  189 => 105,  175 => 94,  161 => 83,  145 => 70,  137 => 65,  112 => 43,  104 => 38,  96 => 33,  82 => 22,  71 => 14,  64 => 10,  59 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/Login/Login.html.twig");
    }
}
