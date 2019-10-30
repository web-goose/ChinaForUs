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

/* partials/blog/post-summary.html.twig */
class __TwigTemplate_a6a5e35844c9e42f741727b6c978dc4e930ba4c2dd7f816b3421db9e56ff4e47 extends \Twig\Template
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
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 2
        echo "
<div class=\"col-12 col-lg-6 post-summary\">
    <div class=\"post-inner\">
        ";
        // line 5
        if (($context["image"] ?? null)) {
            // line 6
            echo "            <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">
                <figure>
                    <img src=\"";
            // line 8
            echo $this->getAttribute(($context["image"] ?? null), "url", []);
            echo "\">
                </figure>
            </a>
        ";
        }
        // line 12
        echo "        <a href=\"";
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\">
            <h2>";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
        </a>
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 16
            echo "
            ";
            // line 17
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/blog/post-summary.html.twig", 17)->display(twig_array_merge($context, ["base_url" => ($context["base_url"] ?? null), "taxonomy" => "tag"]));
            // line 18
            echo "
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 22
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
        ";
        } else {
            // line 24
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
        }
        // line 26
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/post-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  84 => 24,  78 => 22,  76 => 21,  73 => 20,  69 => 18,  67 => 17,  64 => 16,  62 => 15,  57 => 13,  52 => 12,  45 => 8,  39 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set image = page.media.images|first %}

<div class=\"col-12 col-lg-6 post-summary\">
    <div class=\"post-inner\">
        {% if image %}
            <a href=\"{{ page.url }}\">
                <figure>
                    <img src=\"{{ image.url }}\">
                </figure>
            </a>
        {% endif %}
        <a href=\"{{ page.url }}\">
            <h2>{{ page.title }}</h2>
        </a>
        {% if page.taxonomy.tag %}

            {% include 'partials/taxonomylist.html.twig' with {base_url: base_url, taxonomy: 'tag'} %}

        {% endif %}

        {% if page.summary != page.content %}
            <p>{{ page.summary|raw }}</p>
        {% else %}
            <p>{{ page.content|raw }}</p>
        {% endif %}
    </div>
</div>
", "partials/blog/post-summary.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/blog/post-summary.html.twig");
    }
}
