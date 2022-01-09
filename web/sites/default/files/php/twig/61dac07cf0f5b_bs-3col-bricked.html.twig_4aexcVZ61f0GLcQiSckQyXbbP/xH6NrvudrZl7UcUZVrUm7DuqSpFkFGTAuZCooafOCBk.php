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

/* modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig */
class __TwigTemplate_4f88f8bf0a94a14d437983e71056cfe76054c67d93f0fdab029d1ac905f7681d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        echo "<";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", [])), "html", null, true);
        echo "

  ";
        // line 30
        if ($this->getAttribute(($context["top"] ?? null), "content", [])) {
            // line 31
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ($this->getAttribute(($context["top_left"] ?? null), "content", [])) {
            // line 37
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        if ($this->getAttribute(($context["top_middle"] ?? null), "content", [])) {
            // line 43
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if ($this->getAttribute(($context["top_right"] ?? null), "content", [])) {
            // line 49
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["middle"] ?? null), "content", [])) {
            // line 55
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        if ($this->getAttribute(($context["bottom_left"] ?? null), "content", [])) {
            // line 61
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ($this->getAttribute(($context["bottom_middle"] ?? null), "content", [])) {
            // line 67
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if ($this->getAttribute(($context["bottom_right"] ?? null), "content", [])) {
            // line 73
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ($this->getAttribute(($context["bottom"] ?? null), "content", [])) {
            // line 79
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 83
        echo "
</";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null)), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 84,  220 => 83,  215 => 81,  211 => 80,  205 => 79,  203 => 78,  200 => 77,  195 => 75,  191 => 74,  185 => 73,  183 => 72,  180 => 71,  175 => 69,  171 => 68,  165 => 67,  163 => 66,  160 => 65,  155 => 63,  151 => 62,  145 => 61,  143 => 60,  140 => 59,  135 => 57,  131 => 56,  125 => 55,  123 => 54,  120 => 53,  115 => 51,  111 => 50,  105 => 49,  103 => 48,  100 => 47,  95 => 45,  91 => 44,  85 => 43,  83 => 42,  80 => 41,  75 => 39,  71 => 38,  65 => 37,  63 => 36,  60 => 35,  55 => 33,  51 => 32,  45 => 31,  43 => 30,  38 => 28,  32 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig", "/var/www/html/gbc.goodwillbaptist.org/web/modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 30];
        static $filters = ["escape" => 27];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
}
