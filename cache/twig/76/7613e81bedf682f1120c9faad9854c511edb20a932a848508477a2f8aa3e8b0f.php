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

/* modular/activity.html.twig */
class __TwigTemplate_0cdb199c2c8f251d5348122cba135b123172b83de46036dadd18f34fc9b574a1 extends \Twig\Template
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
        echo "<section class=\"activity\" id=\"activity\">
    <div class=\"container-fluid wow fadeInUp\" data-wow-delay=\".3s\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xl-12 col-12 activity-inner\">Наша деятельность направлена на то, чтобы помочь вам избежать
                                ошибок при заказе крупных партий из Китая, сэкономив при этом ваше
                <span class=\"typewriter\">время и деньги</span>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/activity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"activity\" id=\"activity\">
    <div class=\"container-fluid wow fadeInUp\" data-wow-delay=\".3s\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xl-12 col-12 activity-inner\">Наша деятельность направлена на то, чтобы помочь вам избежать
                                ошибок при заказе крупных партий из Китая, сэкономив при этом ваше
                <span class=\"typewriter\">время и деньги</span>
            </div>
        </div>
    </div>
</section>
", "modular/activity.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/activity.html.twig");
    }
}
