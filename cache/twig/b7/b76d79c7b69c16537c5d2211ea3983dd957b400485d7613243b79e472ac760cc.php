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

/* partials/searchbox.html.twig */
class __TwigTemplate_398a420aa196ed3e27ac345172b0da9696c4605eaeb208d0c4056aae058abf4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["min_chars"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.simplesearch.min_query_length", 1 => 3], "method");
        // line 2
        echo "
<div class=\"search\">
    <form name=\"search\" data-simplesearch-form>
        <input name=\"searchfield\" class=\"search-input\" type=\"text\" ";
        // line 5
        if ((($context["min_chars"] ?? null) > 0)) {
            echo " min=\"";
            echo ($context["min_chars"] ?? null);
            echo "\" ";
        }
        echo " required placeholder=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CHINAFORUS.SIDEBAR.SIMPLE_SEARCH.PLACEHOLDER");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["query"] ?? null));
        echo "\" data-search-invalid=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CHINAFORUS.SIDEBAR.SIMPLE_SEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS", ($context["min_chars"] ?? null));
        echo "\" data-search-separator=\"";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "\" data-search-input=\"";
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", [])))));
        echo "/query\"/>
        ";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "display_button", [])) {
            // line 7
            echo "            <button type=\"submit\" class=\"search-submit\">
                <img src=\"";
            // line 8
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://simplesearch/assets/search.svg");
            echo "\"/>
            </button>
        ";
        }
        // line 11
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  61 => 8,  58 => 7,  56 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set min_chars = config.get('plugins.simplesearch.min_query_length', 3) %}

<div class=\"search\">
    <form name=\"search\" data-simplesearch-form>
        <input name=\"searchfield\" class=\"search-input\" type=\"text\" {% if min_chars > 0 %} min=\"{{- min_chars -}}\" {% endif %} required placeholder=\"{{\"THEME_CHINAFORUS.SIDEBAR.SIMPLE_SEARCH.PLACEHOLDER\"|t}}\" value=\"{{ query|e }}\" data-search-invalid=\"{{ \"THEME_CHINAFORUS.SIDEBAR.SIMPLE_SEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS\"|t(min_chars)|raw }}\" data-search-separator=\"{{ config.system.param_sep }}\" data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\"/>
        {% if config.plugins.simplesearch.display_button %}
            <button type=\"submit\" class=\"search-submit\">
                <img src=\"{{ url('plugin://simplesearch/assets/search.svg') }}\"/>
            </button>
        {% endif %}
    </form>
</div>
", "partials/searchbox.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/searchbox.html.twig");
    }
}
