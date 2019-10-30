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

/* partials/blog/posts-list.html.twig */
class __TwigTemplate_19691499a785a0f3f23fe5dd96e951c91653a839bfa83f4aa7396ba69ffdb6cd extends \Twig\Template
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
        $context["limit"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "limit", []);
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 3
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 4
        echo "

<div class=\"col-12 col-lg-6 posts-list ml-auto\">
    ";
        // line 7
        if (($context["search_results"] ?? null)) {
            // line 8
            echo "        <h2>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CHINAFORUS.SIDEBAR.SIMPLE_SEARCH.SEARCH_RESULTS");
            echo "</h2>
    ";
        } else {
            // line 10
            echo "        <h2>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h2>
    ";
        }
        // line 12
        echo "    ";
        if (($context["query"] ?? null)) {
            // line 13
            echo "        <p>
            ";
            // line 14
            $context["count"] = ((($context["search_results"] ?? null)) ? ($this->getAttribute(($context["search_results"] ?? null), "count", [])) : (0));
            // line 15
            echo "            ";
            if ((($context["count"] ?? null) === 1)) {
                // line 16
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR", twig_escape_filter($this->env, ($context["query"] ?? null)));
                echo "
            ";
            } else {
                // line 18
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL", twig_escape_filter($this->env, ($context["query"] ?? null)), ($context["count"] ?? null));
                echo "
            ";
            }
            // line 20
            echo "        </p>
    ";
        }
        // line 22
        echo "    <div class=\"row\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            echo "            ";
            if (( !$this->getAttribute($this->getAttribute($context["p"], "header", [], "any", false, true), "unpublished", [], "any", true, true) || ($this->getAttribute($this->getAttribute($context["p"], "header", []), "unpublished", []) == false))) {
                // line 25
                echo "                ";
                $this->loadTemplate("partials/blog/post-summary.html.twig", "partials/blog/posts-list.html.twig", 25)->display(twig_array_merge($context, ["page" => $context["p"]]));
                // line 26
                echo "            ";
            }
            // line 27
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["search_results"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "            ";
            if (( !$this->getAttribute($this->getAttribute($context["p"], "header", [], "any", false, true), "unpublished", [], "any", true, true) || ($this->getAttribute($this->getAttribute($context["p"], "header", []), "unpublished", []) == false))) {
                // line 30
                echo "                ";
                $this->loadTemplate("partials/blog/post-summary.html.twig", "partials/blog/posts-list.html.twig", 30)->display(twig_array_merge($context, ["page" => $context["p"]]));
                // line 31
                echo "            ";
            }
            // line 32
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    <div class=\"pagination-wrapper\">
        ";
        // line 35
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 36
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "partials/blog/posts-list.html.twig", 36)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 37
            echo "        ";
        }
        // line 38
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/posts-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 38,  175 => 37,  172 => 36,  170 => 35,  166 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  125 => 28,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  85 => 23,  82 => 22,  78 => 20,  72 => 18,  66 => 16,  63 => 15,  61 => 14,  58 => 13,  55 => 12,  49 => 10,  43 => 8,  41 => 7,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set limit = page.header.content.limit %}
{% set collection = page.collection() %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}


<div class=\"col-12 col-lg-6 posts-list ml-auto\">
    {% if search_results %}
        <h2>{{ 'THEME_CHINAFORUS.SIDEBAR.SIMPLE_SEARCH.SEARCH_RESULTS'|t }}</h2>
    {% else %}
        <h2>{{ page.title }}</h2>
    {% endif %}
    {% if query %}
        <p>
            {% set count = search_results ? search_results.count : 0 %}
            {% if count is same as( 1 ) %}
                {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR\"|t(query|e)|raw }}
            {% else %}
                {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL\"|t(query|e, count)|raw }}
            {% endif %}
        </p>
    {% endif %}
    <div class=\"row\">
        {% for p in collection %}
            {% if (p.header.unpublished is not defined or (p.header.unpublished == false)) %}
                {% include 'partials/blog/post-summary.html.twig' with { 'page': p } %}
            {% endif %}
        {% endfor %}
        {% for p in search_results %}
            {% if (p.header.unpublished is not defined or (p.header.unpublished == false)) %}
                {% include 'partials/blog/post-summary.html.twig' with {'page': p} %}
            {% endif %}
        {% endfor %}
    </div>
    <div class=\"pagination-wrapper\">
        {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}
    </div>
</div>
", "partials/blog/posts-list.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/blog/posts-list.html.twig");
    }
}
