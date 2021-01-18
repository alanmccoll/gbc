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

/* modules/contrib/youtubechannel/templates/youtubechannel-block.html.twig */
class __TwigTemplate_4a59dbd4d333045e04594b00e9686eebee690808a1b2e7ad88b2315b68cb22e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "for" => 9];
        $filters = ["escape" => 2, "keys" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'keys'],
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
        // line 1
        if (($this->getAttribute(($context["youtube_content"] ?? null), "show_error", []) == 1)) {
            // line 2
            echo "\t<h3>Please configure this section in the ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["youtube_content"] ?? null), "config_link", [])), "html", null, true);
            echo "</h3>
";
        } else {
            // line 4
            echo "\t<div class=\"embed-responsive embed-responsive-16by9\" id=\"youtubechannel-player\"\">
\t\t<iframe id=\"youtubechannel-frame\" title=\"Youtube Video Player\" src=\"\" frameborder=\"0\" allowfullscreen></iframe>  
\t</div>
\t<div id=\"youtubechannel-list\">
\t\t<ul>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["youtube_content"] ?? null), "content", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 10
                echo "\t\t\t\t<li><a href=\"#";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"]), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["youtube_content"] ?? null), "content", []), $context["i"], [], "array")), "html", null, true);
                echo "\"></a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t</ul>
\t</div> 
\t<div id=\"channel_url\">";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["youtube_content"] ?? null), "channel_link", [])), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/youtubechannel/templates/youtubechannel-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  85 => 12,  74 => 10,  70 => 9,  63 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/youtubechannel/templates/youtubechannel-block.html.twig", "/var/www/html/gbc.goodwillbaptist.org/web/modules/contrib/youtubechannel/templates/youtubechannel-block.html.twig");
    }
}
