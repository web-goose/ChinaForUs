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

/* modular/whyarewe.html.twig */
class __TwigTemplate_9c75718bfb9fa50142585224fef3355b7d5344abb16eb6416878fd24291ca2c1 extends \Twig\Template
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
        echo "<section class=\"whyAreWe\" id=\"whyAreWe\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Почему именно мы?</h2>
        <h3 class=\"section_desc\">Каждый день мы экономим время, нервы и деньги наших клиентов. Несколько причин, почему
                        у нас это получается хорошо:
        </h3>
    </div>
    <div class=\"container\">
        <div class=\"row items d-flex justify-content-center\">
            <div class=\"col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInLeft\">
                <div class=\"item-img\">
                    <img src=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/whyarewe/1.jpg");
        echo "\" alt=\"1\">
                </div>
                <div class=\"item-name\">Качество</div>
                <div class=\"item-desc\">Наши специалисты обеспечивают высокий уровень обслуживания клиентов за счет
                                        профессионализма, многолетнего опыта и индивидуального подхода к каждому заказу
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInUp\">
                <div class=\"item-img\">
                    <img src=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/whyarewe/2.jpg");
        echo "\" alt=\"1\">
                </div>
                <div class=\"item-name\">Поддержка</div>
                <div class=\"item-desc\">С самого начала нашего сотрудничества вы получаете профессиональную консультацию
                                        специалиста, к которому можете обращаться на протяжении всей работы со всеми интересующими вас
                                        вопросами
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInRight\">
                <div class=\"item-img\">
                    <img src=\"";
        // line 31
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/whyarewe/3.jpg");
        echo "\" alt=\"1\">
                </div>
                <div class=\"item-name\">Цена</div>
                <div class=\"item-desc\">Мы не предлагаем услуги, которые на самом деле вам не нужны. После обработки
                                        вашего запроса, мы предложим только действительно необходимое, что позволяет вам существенно
                                        экономить свои затраты
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/whyarewe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  55 => 21,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"whyAreWe\" id=\"whyAreWe\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Почему именно мы?</h2>
        <h3 class=\"section_desc\">Каждый день мы экономим время, нервы и деньги наших клиентов. Несколько причин, почему
                        у нас это получается хорошо:
        </h3>
    </div>
    <div class=\"container\">
        <div class=\"row items d-flex justify-content-center\">
            <div class=\"col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInLeft\">
                <div class=\"item-img\">
                    <img src=\"{{ url('theme://img/whyarewe/1.jpg') }}\" alt=\"1\">
                </div>
                <div class=\"item-name\">Качество</div>
                <div class=\"item-desc\">Наши специалисты обеспечивают высокий уровень обслуживания клиентов за счет
                                        профессионализма, многолетнего опыта и индивидуального подхода к каждому заказу
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInUp\">
                <div class=\"item-img\">
                    <img src=\"{{ url(\"theme://img/whyarewe/2.jpg\") }}\" alt=\"1\">
                </div>
                <div class=\"item-name\">Поддержка</div>
                <div class=\"item-desc\">С самого начала нашего сотрудничества вы получаете профессиональную консультацию
                                        специалиста, к которому можете обращаться на протяжении всей работы со всеми интересующими вас
                                        вопросами
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInRight\">
                <div class=\"item-img\">
                    <img src=\"{{ url('theme://img/whyarewe/3.jpg') }}\" alt=\"1\">
                </div>
                <div class=\"item-name\">Цена</div>
                <div class=\"item-desc\">Мы не предлагаем услуги, которые на самом деле вам не нужны. После обработки
                                        вашего запроса, мы предложим только действительно необходимое, что позволяет вам существенно
                                        экономить свои затраты
                </div>
            </div>
        </div>
    </div>
</section>
", "modular/whyarewe.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/whyarewe.html.twig");
    }
}
