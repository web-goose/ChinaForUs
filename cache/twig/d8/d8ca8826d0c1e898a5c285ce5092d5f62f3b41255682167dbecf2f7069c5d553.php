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

/* service.html.twig */
class __TwigTemplate_a9bc334a61dd169314c07d9bec41a9f30a2ac66ac3a858454d6ddf7cc1b47c1f extends \Twig\Template
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
        // line 3
        $context["pageTemplate"] = (("partials/services/" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pageTemplate", [])) . ".html.twig");
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "isNotIndex", [])) {
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "service.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 7
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        ";
        // line 8
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/services.css"], "method");
        // line 9
        echo "    ";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        $this->loadTemplate(($context["pageTemplate"] ?? null), "service.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        $this->loadTemplate("modular/services.html.twig", "service.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        $this->loadTemplate("modular/whyarewe.html.twig", "service.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("modular/contacts.html.twig", "service.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  56 => 9,  54 => 8,  49 => 7,  46 => 6,  41 => 1,  38 => 5,  36 => 3,  30 => 1,);
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

{% set pageTemplate = 'partials/services/' ~ page.header.pageTemplate ~ '.html.twig' %}

{% if page.header.isNotIndex %}
    {% block stylesheets %}
        {{ parent() }}
        {% do assets.addCss('theme://css/services.css') %}
    {% endblock %}
{% endif %}

{% block content %}
    {% include pageTemplate %}
    {% include 'modular/services.html.twig' %}
    {% include 'modular/whyarewe.html.twig' %}
    {% include 'modular/contacts.html.twig' %}
{% endblock %}
", "service.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/service.html.twig");
    }
}
