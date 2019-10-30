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

/* modular/reviews.html.twig */
class __TwigTemplate_1be5a2cb48d7fd67cf080220092887a3eaaadcfb76cd97d1b12929c233b0d3ce extends \Twig\Template
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
        $context["reviewsPage"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/reviews"], "method");
        // line 2
        echo "
<section class=\"reviews\" id=\"reviews\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Отзывы</h2>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row items\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["reviewsPage"] ?? null), "header", []), "reviews", []), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                <div class=\"col-lg-4 col-md-8 col-12 item text-md-left text-center wow fadeIn\" data-delay=\".3s\">
                    <div class=\"row\">
                        ";
            // line 12
            if ($this->getAttribute($context["item"], "img", [])) {
                // line 13
                echo "                            <div class=\"col-xl-4 col-lg-12 col-md-4 col-12\">
                                <div class=\"item-img\">
                                    <img src=\"";
                // line 15
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/reviews/" . $this->getAttribute(twig_first($this->env, $this->getAttribute($context["item"], "img", [])), "name", [])));
                echo "\"/>
                                </div>
                            </div>
                        ";
            }
            // line 19
            echo "                        <div class=\"col-xl-8 col-lg-12 col-md-8 col-12\">
                            <div class=\"item-name\">";
            // line 20
            echo $this->getAttribute($context["item"], "name", []);
            echo "</div>
                            <div class=\"item-review\">
                                ";
            // line 22
            echo (((twig_length_filter($this->env, $this->getAttribute($context["item"], "review", [])) > 130)) ? ((twig_slice($this->env, $this->getAttribute($context["item"], "review", []), 0, 130) . " ... <a href=\"reviews\">Еще</a>")) : ($this->getAttribute($context["item"], "review", [])));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>

    <a href=\"reviews\">
        <button class=\"reviews-button wow fadeIn\" data-delay=\".3s\">Все отзывы</button>
    </a>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  70 => 22,  65 => 20,  62 => 19,  55 => 15,  51 => 13,  49 => 12,  45 => 10,  41 => 9,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set reviewsPage = page.find('/reviews') %}

<section class=\"reviews\" id=\"reviews\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Отзывы</h2>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row items\">
            {% for item in reviewsPage.header.reviews|slice(0,3) %}
                <div class=\"col-lg-4 col-md-8 col-12 item text-md-left text-center wow fadeIn\" data-delay=\".3s\">
                    <div class=\"row\">
                        {% if item.img %}
                            <div class=\"col-xl-4 col-lg-12 col-md-4 col-12\">
                                <div class=\"item-img\">
                                    <img src=\"{{ url('theme://img/reviews/' ~ item.img|first.name) }}\"/>
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-xl-8 col-lg-12 col-md-8 col-12\">
                            <div class=\"item-name\">{{ item.name }}</div>
                            <div class=\"item-review\">
                                {{ (item.review|length > 130) ? item.review[:130] ~ ' ... <a href=\"reviews\">Еще</a>' : item.review }}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <a href=\"reviews\">
        <button class=\"reviews-button wow fadeIn\" data-delay=\".3s\">Все отзывы</button>
    </a>

</section>
", "modular/reviews.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/reviews.html.twig");
    }
}
