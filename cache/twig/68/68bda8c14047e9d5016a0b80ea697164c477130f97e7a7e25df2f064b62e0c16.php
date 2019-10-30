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

/* post.html.twig */
class __TwigTemplate_0df4fd8598df3b415f53a6b167bdaaa61cebd5356e90fdde0fa60c49ea80db85 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["home"] = $this->getAttribute(($context["page"] ?? null), "parent", []);
        // line 1
        $this->parent = $this->loadTemplate("blog.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "<section class=\"post\">
    <div class=\"post-head\">
        <h1>- ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo " -</h1>
        <div class=\"route\">
            <a href=\"";
        // line 10
        echo $this->getAttribute(($context["home"] ?? null), "url", []);
        echo "\">";
        echo $this->getAttribute(($context["home"] ?? null), "title", []);
        echo "</a>
            <span>&#47;</span>
            <a>";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 17
        $this->loadTemplate("partials/blog/post.html.twig", "post.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        $this->loadTemplate("partials/blog/sidebar.html.twig", "post.html.twig", 18)->display($context);
        // line 19
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  71 => 18,  69 => 17,  61 => 12,  54 => 10,  49 => 8,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"blog.html.twig\" %}

{% set home = page.parent %}

{% block content %}
<section class=\"post\">
    <div class=\"post-head\">
        <h1>- {{ page.title }} -</h1>
        <div class=\"route\">
            <a href=\"{{ home.url }}\">{{ home.title }}</a>
            <span>&#47;</span>
            <a>{{ page.title }}</a>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            {% include \"partials/blog/post.html.twig\" %}
            {% include \"partials/blog/sidebar.html.twig\" %}
        </div>
    </div>
</section>
{% endblock %}", "post.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/post.html.twig");
    }
}
