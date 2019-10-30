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

/* partials/nav-up.html.twig */
class __TwigTemplate_14f1af27e04a580d73ce3d39e9b475d686bad8effa5baaf4e423aaa990257c49 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "route", [])) {
            // line 2
            echo "    ";
            $context["parent_url"] = ((($context["base_url"] ?? null) . "/pages") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "route", []));
            // line 3
            echo "    <a class=\"button hidden-mobile\" href=\"";
            echo twig_escape_filter($this->env, ($context["parent_url"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UP"), "html", null, true);
            echo "\"><i
                class=\"fa fa-chevron-up\"></i></a>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/nav-up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.parent.route %}
    {% set parent_url = base_url ~ '/pages' ~ page.parent.route %}
    <a class=\"button hidden-mobile\" href=\"{{ parent_url }}\" title=\"{{ \"PLUGIN_ADMIN.UP\"|tu }}\"><i
                class=\"fa fa-chevron-up\"></i></a>
{% endif %}
", "partials/nav-up.html.twig", "/var/www/sites/ChinaForUs/user/plugins/admin-power-tools/admin/templates/partials/nav-up.html.twig");
    }
}
