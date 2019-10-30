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

/* modular/blog.html.twig */
class __TwigTemplate_eb225fa303a34f97dedc6697c347642691dbdc941bb7c9f1e6304c413c516176 extends \Twig\Template
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
        $context["options"] = ["items" => ["@page.children" => "/blog"], "limit" => 4, "order" => ["by" => "date", "dir" => "desc"]];
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ($context["options"] ?? null)], "method");
        // line 3
        echo "
<section class=\"blog\" id=\"blog\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">В нашем блоге:</h2>
        <h3 class=\"section_desc\">Главные события из мира Китая, которые влияют на ведение бизнеса, способы
                                самостоятельного выбора поставщика, распространенные ошибки при заказе товаров и многое другое</h3>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row box-items\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "                ";
            $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", []), "images", []));
            // line 14
            echo "                <div class=\"col-xl-3 col-lg-6 col-md-6 col-12 box-item blog-item wow fadeIn\" data-wow-delay=\".3s\" style=\"background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(";
            echo $this->getAttribute(($context["image"] ?? null), "url", []);
            echo ") center no-repeat\">
                    <div class=\"box-item-shade\"></div>
                    <div class=\"box-item-info\">
                        <div class=\"box-item-info-inner\">
                            <div class=\"wrap\">
                                <div class=\"box-item-title\">";
            // line 19
            echo $this->getAttribute($context["p"], "title", []);
            echo "</div>
                                <div class=\"box-item-desc\">";
            // line 20
            echo twig_slice($this->env, $this->getAttribute($context["p"], "content", []), 0, 40);
            echo "</div>
                                <div class=\"box-item-btn\">
                                    <a href=\"";
            // line 22
            echo $this->getAttribute($context["p"], "url", []);
            echo "\" target=\"_blank\">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  70 => 22,  65 => 20,  61 => 19,  52 => 14,  49 => 13,  45 => 12,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set options = { items: {'@page.children': '/blog'}, 'limit': 4, 'order': {'by': 'date', 'dir': 'desc'}} %}
{% set collection = page.collection(options) %}

<section class=\"blog\" id=\"blog\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">В нашем блоге:</h2>
        <h3 class=\"section_desc\">Главные события из мира Китая, которые влияют на ведение бизнеса, способы
                                самостоятельного выбора поставщика, распространенные ошибки при заказе товаров и многое другое</h3>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row box-items\">
            {% for p in collection %}
                {% set image = p.media.images|first %}
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-12 box-item blog-item wow fadeIn\" data-wow-delay=\".3s\" style=\"background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{image.url}}) center no-repeat\">
                    <div class=\"box-item-shade\"></div>
                    <div class=\"box-item-info\">
                        <div class=\"box-item-info-inner\">
                            <div class=\"wrap\">
                                <div class=\"box-item-title\">{{ p.title }}</div>
                                <div class=\"box-item-desc\">{{ p.content|slice(0,40)}}</div>
                                <div class=\"box-item-btn\">
                                    <a href=\"{{ p.url }}\" target=\"_blank\">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</section>
", "modular/blog.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/blog.html.twig");
    }
}
