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

/* partials/services/konsolidaciya.html.twig */
class __TwigTemplate_06867a43903df456db384c6574314ab7fa1a29cc63fea98449f8ed08686817ef extends \Twig\Template
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
        echo "<section class=\"konsolidaciya uid-1\">
    <div class=\"container\">
        <div class=\"row items\">
            <div class=\"col-12 item wow fadeIn\" data-wow-delay=\".3s\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-12 item-info\">
                        <p>Мы можем собрать товары от разных производителей на нашем складе и упаковать их в одну
                                                                                    посылку (отправление), что значительно экономит ваши средства на пересылке по
                                                                                    отдельности.</p>
                    </div>
                    <div class=\"col-md-6 col-12\">
                        <img src=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/services/img/konsolidaciya/1.jpg");
        echo "\" alt=\"1\">
                    </div>
                </div>
            </div>
            <div class=\"col-12 item wow fadeIn\" data-wow-delay=\".3s\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-12 order-md-0 order-1\">
                        <img src=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/services/img/konsolidaciya/2.jpg");
        echo "\" alt=\"2\">
                    </div>
                    <div class=\"col-md-6 col-12 item-info\">
                        <p>Возможно как и упаковать товары в том виде, в котором они поступают от поставщиков, так и
                                                                                    перепаковать, что может значительно уменьшить объемный вес и/или усилить упаковку, что важно
                                                                                    при транспортировке хрупких товаров, с целью предотвращения их повреждения при
                                                                                    транспортировке.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-12 text-center wow fadeIn\" data-wow-delay=\".3s\">
                <button class=\"main-btn\">Заполнить заявку на услугу</button>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/services/konsolidaciya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"konsolidaciya uid-1\">
    <div class=\"container\">
        <div class=\"row items\">
            <div class=\"col-12 item wow fadeIn\" data-wow-delay=\".3s\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-12 item-info\">
                        <p>Мы можем собрать товары от разных производителей на нашем складе и упаковать их в одну
                                                                                    посылку (отправление), что значительно экономит ваши средства на пересылке по
                                                                                    отдельности.</p>
                    </div>
                    <div class=\"col-md-6 col-12\">
                        <img src=\"{{ url('theme://img/services/img/konsolidaciya/1.jpg') }}\" alt=\"1\">
                    </div>
                </div>
            </div>
            <div class=\"col-12 item wow fadeIn\" data-wow-delay=\".3s\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-12 order-md-0 order-1\">
                        <img src=\"{{ url('theme://img/services/img/konsolidaciya/2.jpg') }}\" alt=\"2\">
                    </div>
                    <div class=\"col-md-6 col-12 item-info\">
                        <p>Возможно как и упаковать товары в том виде, в котором они поступают от поставщиков, так и
                                                                                    перепаковать, что может значительно уменьшить объемный вес и/или усилить упаковку, что важно
                                                                                    при транспортировке хрупких товаров, с целью предотвращения их повреждения при
                                                                                    транспортировке.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-12 text-center wow fadeIn\" data-wow-delay=\".3s\">
                <button class=\"main-btn\">Заполнить заявку на услугу</button>
            </div>
        </div>
    </div>
</section>
", "partials/services/konsolidaciya.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/services/konsolidaciya.html.twig");
    }
}
