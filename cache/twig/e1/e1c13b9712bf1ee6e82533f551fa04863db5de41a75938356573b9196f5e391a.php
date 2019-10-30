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

/* partials/base.html.twig */
class __TwigTemplate_cc62a365a00c6318111a116c889baafe2bbe834a2e7310089904507ecc64c4e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 53
        echo "    </head>
    <body>

        ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('bottom', $context, $blocks);
        // line 69
        echo "    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
            ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 9
            echo "                <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "description", []);
            echo "\">
            ";
        } else {
            // line 11
            echo "                <meta name=\"description\" content=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
            echo "\">
            ";
        }
        // line 13
        echo "            ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 14
            echo "                <meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
            ";
        }
        // line 16
        echo "            <meta name=\"keywords\" content=\"";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "keywords", []);
        echo "\">
            <meta name=\"Author\" content=\"";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
        echo "\">
            <title>
                ";
        // line 19
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            // line 20
            echo "                    ";
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo "
                    |
                ";
        }
        // line 23
        echo "                ";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "
            </title>

            ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
            ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('assets', $context, $blocks);
        // line 50
        echo "
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 51
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\"/>
        ";
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 27
        echo "
                ";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.min.css"], "method");
        // line 29
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.css"], "method");
        // line 30
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/owl.carousel.min.css"], "method");
        // line 31
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/styles.css"], "method");
        // line 32
        echo "
            ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        // line 36
        echo "
                ";
        // line 37
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-3.4.1.min.js", 1 => ["group" => "bottom"]], "method");
        // line 38
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js", 1 => ["group" => "bottom"]], "method");
        // line 39
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/wow.min.js", 1 => ["group" => "bottom"]], "method");
        // line 40
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/owl.carousel.min.js", 1 => ["group" => "bottom"]], "method");
        // line 41
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "                ";
        // line 43
        echo "
            ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 46
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 47
        echo "                ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
                ";
        // line 48
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 56
    public function block_header($context, array $blocks = [])
    {
        // line 57
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "        ";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        // line 63
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 63)->display($context);
        // line 64
        echo "        ";
    }

    // line 66
    public function block_bottom($context, array $blocks = [])
    {
        // line 67
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 67,  249 => 66,  245 => 64,  242 => 63,  239 => 62,  234 => 60,  230 => 58,  227 => 57,  224 => 56,  217 => 48,  212 => 47,  209 => 46,  199 => 43,  197 => 42,  194 => 41,  191 => 40,  188 => 39,  185 => 38,  183 => 37,  180 => 36,  177 => 35,  172 => 32,  169 => 31,  166 => 30,  163 => 29,  161 => 28,  158 => 27,  155 => 26,  149 => 51,  146 => 50,  144 => 46,  141 => 45,  139 => 35,  136 => 34,  134 => 26,  127 => 23,  120 => 20,  118 => 19,  113 => 17,  108 => 16,  102 => 14,  99 => 13,  93 => 11,  87 => 9,  85 => 8,  80 => 5,  77 => 4,  70 => 69,  68 => 66,  65 => 65,  63 => 62,  60 => 61,  58 => 60,  55 => 59,  53 => 56,  48 => 53,  46 => 4,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
            {% if header.description %}
                <meta name=\"description\" content=\"{{ header.description }}\">
            {% else %}
                <meta name=\"description\" content=\"{{ site.metadata.description }}\">
            {% endif %}
            {% if header.robots %}
                <meta name=\"robots\" content=\"{{ header.robots }}\">
            {% endif %}
            <meta name=\"keywords\" content=\"{{ site.metadata.keywords }}\">
            <meta name=\"Author\" content=\"{{ site.author.name }}\">
            <title>
                {% if header.title %}
                    {{ header.title }}
                    |
                {% endif %}
                {{ site.title }}
            </title>

            {% block stylesheets %}

                {% do assets.addCss('theme://css/bootstrap.min.css') %}
                {% do assets.addCss('theme://css/animate.css') %}
                {% do assets.addCss('theme://css/owl.carousel.min.css') %}
                {% do assets.addCss('theme://css/styles.css') %}

            {% endblock %}

            {% block javascripts %}

                {% do assets.addJs('theme://js/jquery-3.4.1.min.js', {group: 'bottom'}) %}
                {% do assets.addJs('theme://js/bootstrap.min.js', {group:'bottom'}) %}
                {% do assets.addJs('theme://js/wow.min.js', {group:'bottom'}) %}
                {% do assets.addJs('theme://js/owl.carousel.min.js', {group:'bottom'}) %}
                {% do assets.addJs('theme://js/main.js', {group:'bottom'}) %}
                {#  <script src=\"//code.jivosite.com/widget.js\" data-jv-id=\"Qmn8krdLMR\" async></script> #}

            {% endblock %}

            {% block assets deferred %}
                {{ assets.css()|raw }}
                {{ assets.js()|raw }}
            {% endblock %}

            <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\"/>
        {% endblock head %}
    </head>
    <body>

        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/base.html.twig");
    }
}
