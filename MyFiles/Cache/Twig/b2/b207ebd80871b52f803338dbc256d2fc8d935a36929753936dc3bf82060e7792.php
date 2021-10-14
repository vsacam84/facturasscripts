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

/* CommonTicketSettings.html.twig */
class __TwigTemplate_d6344ea52d85fa9bf772a56c2b571633d48e0bbbe386781f07dbcf06b86b7b91 extends \Twig\Template
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
        // line 1
        echo "<form id=\"formTicketSettings\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"action\" value=\"save-settings\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"form-row\">
                <input type=\"hidden\" name=\"id\" value=\"1\">
                <div class=\"col-md-2\">
                    <div class=\"form-group\">
                        <label>N&uacute;mero de caracteres</label>
                        ";
        // line 10
        $context["linelength"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "ticket", 1 => "linelength", 2 => 50], "method", false, false, false, 10);
        // line 11
        echo "                        <input type=\"text\" name=\"linelength\" value=\"";
        echo twig_escape_filter($this->env, ($context["linelength"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" required=\"\">
                    </div>
                </div>
                <div class=\"col-md-10\">
                    <div class=\"form-group\">
                        <label>Texto al pie del ticket</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-comment\"></i></span>
                            </div>
                            ";
        // line 21
        $context["footertext"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "ticket", 1 => "footertext"], "method", false, false, false, 21);
        // line 22
        echo "                            <input type=\"text\" name=\"footertext\" value=\"";
        echo twig_escape_filter($this->env, ($context["footertext"] ?? null), "html", null, true);
        echo "\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"form-group\">
                        <div class=\"form-check\">
                            ";
        // line 29
        $context["gift"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "ticket", 1 => "gift", 2 => false], "method", false, false, false, 29);
        // line 30
        echo "                            <input class=\"form-check-input\" type=\"checkbox\" id=\"gift\" name=\"gift\" ";
        echo ((($context["gift"] ?? null)) ? ("checked") : (""));
        echo ">
                            <label class=\"form-check-label\" for=\"gift\">
                                <i class=\"fas fa-gift\"></i> Ticket de regalo
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col text-right\">
                    <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">Guardar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "CommonTicketSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  77 => 29,  66 => 22,  64 => 21,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CommonTicketSettings.html.twig", "/opt/lampp/htdocs/facturascripts/Dinamic/View/CommonTicketSettings.html.twig");
    }
}
