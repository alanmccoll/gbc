<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/system/templates/mark.html.twig */
class __TwigTemplate_00ed7659e0a01b0e8af5df1314a7904bda9d9afea613d63c03b05783d182227a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["t" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        if (($context["logged_in"] ?? null)) {
            // line 17
            echo "  ";
            if ((($context["status"] ?? null) === constant("MARK_NEW"))) {
                // line 18
                echo "    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("New"));
                echo "
  ";
            } elseif ((            // line 19
($context["status"] ?? null) === constant("MARK_UPDATED"))) {
                // line 20
                echo "    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Updated"));
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/mark.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  65 => 19,  60 => 18,  57 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/system/templates/mark.html.twig", "/var/www/html/gbc.goodwillbaptist.org/web/core/modules/system/templates/mark.html.twig");
    }
}
