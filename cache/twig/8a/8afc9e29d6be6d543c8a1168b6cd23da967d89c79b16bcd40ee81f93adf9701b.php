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

/* partials/taxonomylist.html.twig */
class __TwigTemplate_213bd02e5d09eac1a605c24b051d6721025ff1c49bb5f820eb68f38505aefe62 extends \Twig\Template
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
        $context["taxlist"] = $this->getAttribute(($context["page"] ?? null), "taxonomy", []);
        echo " 

";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<p>Tags:
    <span class=\"tags\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 7
                echo "        <a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/blog/";
                echo ($context["taxonomy"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["value"];
                echo "\">";
                echo $context["value"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </span>
</p>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  45 => 7,  41 => 6,  37 => 4,  35 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set taxlist = page.taxonomy %} 

{% if taxlist %}
<p>Tags:
    <span class=\"tags\">
        {% for tax,value in taxlist[taxonomy] %}
        <a href=\"{{ base_url }}/blog/{{ taxonomy }}{{ config.system.param_sep }}{{ value }}\">{{ value }}</a>
        {% endfor %}
    </span>
</p>
{% endif %}", "partials/taxonomylist.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/taxonomylist.html.twig");
    }
}
