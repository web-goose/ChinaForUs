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

/* blog.html.twig */
class __TwigTemplate_69ceb5a5474c9ba941df1ecb8ca3de13839195b1dd76bd054537e90dc99b1214 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/blog/styles.css"], "method");
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "    <section class=\"blog\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
        // line 12
        $this->loadTemplate("partials/blog/posts-list.html.twig", "blog.html.twig", 12)->display(twig_array_merge($context, ["search_results" => ($context["search_results"] ?? null)]));
        // line 13
        echo "                ";
        $this->loadTemplate("partials/blog/sidebar.html.twig", "blog.html.twig", 13)->display($context);
        // line 14
        echo "            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  60 => 12,  55 => 9,  52 => 8,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"partials/base.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    {% do assets.addCss('theme://css/blog/styles.css') %}
{% endblock %}

{% block content %}
    <section class=\"blog\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                {% include \"partials/blog/posts-list.html.twig\" with { search_results: search_results } %}
                {% include \"partials/blog/sidebar.html.twig\" %}
            </div>
        </div>
    </section>
{% endblock %}
", "blog.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/blog.html.twig");
    }
}
