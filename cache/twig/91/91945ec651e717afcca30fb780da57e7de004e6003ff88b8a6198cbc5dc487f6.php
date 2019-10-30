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

/* partials/blog/post.html.twig */
class __TwigTemplate_91daf604d5a76cf119d4f01b74f991e9d557bca6fd1fc644d2d563713f22fcb1 extends \Twig\Template
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
<div class=\"col-12 col-lg-5 post-detail ml-auto\">
    <p>
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
            // line 6
            echo "            Категория:
            <a href=\"";
            // line 7
            echo ($context["base_url"] ?? null);
            echo "/ChinaForUs/blog/";
            echo "category";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            echo twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
            echo "\">";
            echo twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
            echo "</a>
        ";
        }
        // line 9
        echo "        <span>&#9679;</span>
        Дата публикации:
        <strong>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M d, Y");
        echo "</strong>
    </p>
    <img src=\"";
        // line 13
        echo $this->getAttribute(($context["image"] ?? null), "url", []);
        echo "\"/>
    <p>";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
    ";
        // line 15
        $this->loadTemplate("partials/taxonomylist.html.twig", "partials/blog/post.html.twig", 15)->display(twig_array_merge($context, ["base_url" => ($context["base_url"] ?? null), "taxonomy" => "tag"]));
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  70 => 15,  66 => 14,  62 => 13,  57 => 11,  53 => 9,  42 => 7,  39 => 6,  37 => 5,  32 => 2,  30 => 1,);
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

<div class=\"col-12 col-lg-5 post-detail ml-auto\">
    <p>
        {% if page.taxonomy.category %}
            Категория:
            <a href=\"{{ base_url }}/ChinaForUs/blog/{{ 'category' }}{{ config.system.param_sep }}{{ page.taxonomy.category|first }}\">{{ page.taxonomy.category|first }}</a>
        {% endif %}
        <span>&#9679;</span>
        Дата публикации:
        <strong>{{ page.date|date('M d, Y') }}</strong>
    </p>
    <img src=\"{{ image.url }}\"/>
    <p>{{ page.content }}</p>
    {% include 'partials/taxonomylist.html.twig' with {base_url: base_url, taxonomy: 'tag'} %}
</div>
", "partials/blog/post.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/blog/post.html.twig");
    }
}
