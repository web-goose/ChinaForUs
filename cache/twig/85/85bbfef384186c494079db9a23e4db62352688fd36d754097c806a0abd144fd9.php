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

/* partials/blog/sidebar.html.twig */
class __TwigTemplate_28db3168924d9344321eeab324f58bc21baac07c156f1b6eb6eaa02bc5d15461 extends \Twig\Template
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
        $context["options"] = ["items" => ["@page.children" => "/blog"], "limit" => 5, "order" => ["by" => "date", "dir" => "desc"], "pagination" => true];
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ($context["options"] ?? null)], "method");
        // line 3
        $context["taxlist"] = (((isset($context["children_only"]) || array_key_exists("children_only", $context))) ? ($this->getAttribute(($context["taxonomylist"] ?? null), "getChildPagesTags", [], "method")) : ($this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method")));
        // line 4
        echo "
<div class=\"col-4 col-lg-2 sidebar mr-auto\">

    ";
        // line 7
        $this->loadTemplate("partials/searchbox.html.twig", "partials/blog/sidebar.html.twig", 7)->display($context);
        // line 8
        echo "
    ";
        // line 9
        if (($context["taxlist"] ?? null)) {
            // line 10
            echo "        <div class=\"categories\">
            <h4>Категории</h4>
            <ul>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), "category", [], "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 14
                echo "                    <li>
                        <a href=\"";
                // line 15
                echo ($context["base_url"] ?? null);
                echo "/blog/";
                echo "category";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </ul>
        </div>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ((($context["collection"] ?? null) != null)) {
            // line 23
            echo "        <div class=\"recent-posts\">
            <h4>Последние посты</h4>
            <ul>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 27
                echo "                    <li>
                        ";
                // line 28
                $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", []), "images", []));
                // line 29
                echo "                        ";
                if (($context["image"] ?? null)) {
                    // line 30
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                                <img src=\"";
                    // line 31
                    echo $this->getAttribute(($context["image"] ?? null), "url", []);
                    echo "\"/>
                            </a>
                        ";
                }
                // line 34
                echo "                        <div class=\"post-info\">
                            <a href=\"";
                // line 35
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">
                                <h5>";
                // line 36
                echo twig_slice($this->env, $this->getAttribute($context["p"], "title", []), 0, 20);
                echo "</h5>
                            </a>
                            <p>";
                // line 38
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M d, Y");
                echo "</p>
                        </div>
                    </li>
                    <hr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </ul>
        </div>
    ";
        }
        // line 46
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  136 => 43,  125 => 38,  120 => 36,  116 => 35,  113 => 34,  107 => 31,  102 => 30,  99 => 29,  97 => 28,  94 => 27,  90 => 26,  85 => 23,  83 => 22,  80 => 21,  75 => 18,  60 => 15,  57 => 14,  53 => 13,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set options = { items: {'@page.children': '/blog'}, 'limit': 5, 'order': {'by': 'date', 'dir': 'desc'}, 'pagination': true } %}
{% set collection = page.collection(options) %}
{% set taxlist = children_only is defined ? taxonomylist.getChildPagesTags() : taxonomylist.get() %}

<div class=\"col-4 col-lg-2 sidebar mr-auto\">

    {% include \"partials/searchbox.html.twig\" %}

    {% if taxlist %}
        <div class=\"categories\">
            <h4>Категории</h4>
            <ul>
                {% for tax,value in taxlist[\"category\"] %}
                    <li>
                        <a href=\"{{ base_url }}/blog/{{ 'category' }}{{ config.system.param_sep }}{{ tax }}\">{{ tax }}</a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    {% if collection != null %}
        <div class=\"recent-posts\">
            <h4>Последние посты</h4>
            <ul>
                {% for p in collection %}
                    <li>
                        {% set image = p.media.images|first %}
                        {% if image %}
                            <a href=\"{{ p.url }}\">
                                <img src=\"{{ image.url }}\"/>
                            </a>
                        {% endif %}
                        <div class=\"post-info\">
                            <a href=\"{{ p.url }}\">
                                <h5>{{ p.title|slice(0,20) }}</h5>
                            </a>
                            <p>{{ p.date|date('M d, Y') }}</p>
                        </div>
                    </li>
                    <hr>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
</div>
", "partials/blog/sidebar.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/blog/sidebar.html.twig");
    }
}
