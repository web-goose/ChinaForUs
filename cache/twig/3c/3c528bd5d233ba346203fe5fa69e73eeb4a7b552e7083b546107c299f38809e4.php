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

/* modular.html.twig */
class __TwigTemplate_1dda41baf5aed266b3e6af0c38e0ef8e27b0f295608a899346f888d12e6a488c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "isIndex", [])) {
            // line 7
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/other-page.css"], "method");
            // line 8
            echo "    ";
        }
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 13
            echo "        ";
            echo $this->getAttribute($context["module"], "content", []);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 12,  58 => 11,  53 => 8,  50 => 7,  48 => 6,  43 => 5,  40 => 4,  30 => 1,);
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
    {% if not page.header.isIndex %}
        {% do assets.addCss('theme://css/other-page.css') %}
    {% endif %}
{% endblock %}

{% block content %}
    {% for module in page.collection() %}
        {{ module.content }}
    {% endfor %}
{% endblock %}
", "modular.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular.html.twig");
    }
}
