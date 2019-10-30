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

/* modular/whoarewe.html.twig */
class __TwigTemplate_a42c145ce6c19777706a349ab8c276994911ffeda88732dde054a7cbf9379f48 extends \Twig\Template
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
        $context["routerPage"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/whoarewe"], "method");
        // line 2
        echo "
<section class=\"whoAreWe\" id=\"whoAreWe\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["routerPage"] ?? null), "header", []), "whoarewe", []), "title", []);
        echo "</h2>
        <h3 class=\"section_desc\">";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["routerPage"] ?? null), "header", []), "whoarewe", []), "content", []);
        echo "</h3>
    </div>
    <div class=\"owl-carousel owl-theme wow flipInX\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["routerPage"] ?? null), "header", []), "whoarewe", []), "team", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "            <div class=\"item\">
                <div class=\"item-img\"><img src=\"";
            // line 11
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/personal/" . $this->getAttribute(twig_first($this->env, $this->getAttribute($context["item"], "img", [])), "name", [])));
            echo "\" alt=\"\"></div>
                <div class=\"item-name\">";
            // line 12
            echo $this->getAttribute($context["item"], "name", []);
            echo "</div>
                <div class=\"item-hr\">
                    <span></span>
                </div>
                <div class=\"item-position\">";
            // line 16
            echo $this->getAttribute($context["item"], "role", []);
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/whoarewe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  65 => 16,  58 => 12,  54 => 11,  51 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set routerPage = page.find('/whoarewe') %}

<section class=\"whoAreWe\" id=\"whoAreWe\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">{{ routerPage.header.whoarewe.title }}</h2>
        <h3 class=\"section_desc\">{{ routerPage.header.whoarewe.content }}</h3>
    </div>
    <div class=\"owl-carousel owl-theme wow flipInX\">
        {% for item in routerPage.header.whoarewe.team %}
            <div class=\"item\">
                <div class=\"item-img\"><img src=\"{{ url('theme://img/personal/' ~ item.img|first.name) }}\" alt=\"\"></div>
                <div class=\"item-name\">{{ item.name }}</div>
                <div class=\"item-hr\">
                    <span></span>
                </div>
                <div class=\"item-position\">{{ item.role }}</div>
            </div>
        {% endfor %}
    </div>
</section>
", "modular/whoarewe.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/whoarewe.html.twig");
    }
}
