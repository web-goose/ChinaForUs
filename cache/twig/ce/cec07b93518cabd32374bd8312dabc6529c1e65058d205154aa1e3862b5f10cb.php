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

/* modular/faq.html.twig */
class __TwigTemplate_d35d2769d24cba681de3cd38489c3b19b871910a2bd92eac60d26c328ef10882 extends \Twig\Template
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
        $context["faqPage"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/faq"], "method");
        // line 2
        echo "
<section class=\"faq\" id=\"faq\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">FAQ</h2>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div id=\"faq-list\" class=\"wow jackInTheBox\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["faqPage"] ?? null), "header", []), "faqList", []), 0, 2));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                        ";
            $context["index"] = $this->getAttribute($context["loop"], "index", []);
            // line 14
            echo "                        ";
            $context["show"] = (($this->getAttribute($context["loop"], "first", [])) ? ("show") : (""));
            // line 15
            echo "                        ";
            $context["collapsed"] = (( !$this->getAttribute($context["loop"], "first", [])) ? ("collapsed") : (""));
            // line 16
            echo "                        <div class=\"card\">
                            <div class=\"card-header\" id=\"heading-";
            // line 17
            echo ($context["index"] ?? null);
            echo "\" style=\"";
            echo (($this->getAttribute($context["loop"], "first", [])) ? ("background: rgb(245, 145, 79);") : (""));
            echo "\">
                                <h5 class=\"mb-0\">
                                    <button class=\"btn btn-link faq-btn ";
            // line 19
            echo ($context["collapsed"] ?? null);
            echo "\" data-toggle=\"collapse\" data-target=\"#collapse-";
            echo ($context["index"] ?? null);
            echo "\" aria-expanded=\"true\" aria-controls=\"card-";
            echo ($context["index"] ?? null);
            echo "\" style=\"";
            echo (($this->getAttribute($context["loop"], "first", [])) ? ("color: rgb(255, 255, 255);") : (""));
            echo "\">
                                        ";
            // line 20
            echo $this->getAttribute($context["item"], "question", []);
            echo "
                                    </button>
                                </h5>
                            </div>
                            <div id=\"collapse-";
            // line 24
            echo $this->getAttribute($context["loop"], "index", []);
            echo "\" class=\"collapse ";
            echo ($context["show"] ?? null);
            echo "\" aria-labelledby=\"heading-";
            echo ($context["index"] ?? null);
            echo "\" data-parent=\"#faq-list\">
                                <div class=\"card-body\">
                                    ";
            // line 26
            echo $this->getAttribute($context["item"], "answer", []);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"section-info wow jackInTheBox pt-5\">
        <h2 class=\"section_desc\">Больше вопросов и ответов здесь:</h2>
        <a href=\"faq\">
            <button class=\"faq-btn-more mt-5\">FAQ</button>
        </a>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  106 => 26,  97 => 24,  90 => 20,  80 => 19,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  61 => 13,  44 => 12,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set faqPage = page.find('/faq') %}

<section class=\"faq\" id=\"faq\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">FAQ</h2>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div id=\"faq-list\" class=\"wow jackInTheBox\">
                    {% for item in faqPage.header.faqList|slice(0,2) %}
                        {% set index = loop.index %}
                        {% set show = (loop.first) ? 'show' : '' %}
                        {% set collapsed = ( not loop.first ) ? 'collapsed' : '' %}
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"heading-{{ index }}\" style=\"{{ (loop.first) ? 'background: rgb(245, 145, 79);': '' }}\">
                                <h5 class=\"mb-0\">
                                    <button class=\"btn btn-link faq-btn {{ collapsed }}\" data-toggle=\"collapse\" data-target=\"#collapse-{{ index }}\" aria-expanded=\"true\" aria-controls=\"card-{{ index }}\" style=\"{{ (loop.first) ? 'color: rgb(255, 255, 255);' : '' }}\">
                                        {{ item.question }}
                                    </button>
                                </h5>
                            </div>
                            <div id=\"collapse-{{ loop.index }}\" class=\"collapse {{ show }}\" aria-labelledby=\"heading-{{ index }}\" data-parent=\"#faq-list\">
                                <div class=\"card-body\">
                                    {{ item.answer }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"section-info wow jackInTheBox pt-5\">
        <h2 class=\"section_desc\">Больше вопросов и ответов здесь:</h2>
        <a href=\"faq\">
            <button class=\"faq-btn-more mt-5\">FAQ</button>
        </a>
    </div>
</section>
", "modular/faq.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/faq.html.twig");
    }
}
