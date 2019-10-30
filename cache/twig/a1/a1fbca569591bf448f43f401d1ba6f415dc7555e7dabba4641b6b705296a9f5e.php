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

/* modular/callback.html.twig */
class __TwigTemplate_6cb32a28a7e0edfdb30d54bac552ef35b07615715f8d2238c51b418aeb9df322 extends \Twig\Template
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
        echo "<section class=\"callback\" id=\"callback\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Связаться с нами</h2>
        <h3 class=\"section_desc\">Укажите, пожалуйста, что вас интересует, оставьте свои контактные данные, и мы свяжемся
                        с вами в ближайшее время</h3>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xl-6 col-lg-7 col-12 pt-2 wow fadeInLeft\">
                <form class=\"form\">
                    <label class=\"callback-textarea\">
                        <textarea class=\"js-callback-textarea\" required></textarea>
                    </label>
                    <div class=\"w-100 d-md-flex justify-content-md-between \">
                        <label class=\"callback-name\">
                            <input class=\"js-callback-name\" type=\"text\" placeholder=\"Ваше имя*\" required>
                        </label>
                        <label class=\"callback-email\">
                            <input class=\"js-callback-email\" type=\"email\" placeholder=\"Ваш E-mail*\" required>
                        </label>
                    </div>
                    <button class=\"js-callback-btn\" type=\"submit\">Отправить</button>
                </form>
            </div>
            <div class=\"col-xl-5 col-lg-5 col-12 pt-2 wow fadeInRight\">
                <div class=\"callback-title\">
                    ВСЕ ВАШИ ПОТРЕБНОСТИ В ОДНОМ МЕСТЕ
                </div>
                <div class=\"callback-desc\">
                    <p>Наши комплексные решения по поиску, упаковке и доставке поддерживают продавцов на каждом этапе их
                                                пути. Все начинается с правильного планирования. Мы знаем, насколько важно для продавца
                                                поддерживать
                                                уровень своих запасов и о последствиях, которые могут наступить, если товар не будет готов или
                                                не
                                                будет доставлен вовремя.</p>
                    <p>Вот почему наши специалисты работают в тесном контакте с клиентами и
                                                поставщиками, планируя всю работу самым оптимальным образом.</p>

                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/callback.html.twig";
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
        return new Source("<section class=\"callback\" id=\"callback\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Связаться с нами</h2>
        <h3 class=\"section_desc\">Укажите, пожалуйста, что вас интересует, оставьте свои контактные данные, и мы свяжемся
                        с вами в ближайшее время</h3>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xl-6 col-lg-7 col-12 pt-2 wow fadeInLeft\">
                <form class=\"form\">
                    <label class=\"callback-textarea\">
                        <textarea class=\"js-callback-textarea\" required></textarea>
                    </label>
                    <div class=\"w-100 d-md-flex justify-content-md-between \">
                        <label class=\"callback-name\">
                            <input class=\"js-callback-name\" type=\"text\" placeholder=\"Ваше имя*\" required>
                        </label>
                        <label class=\"callback-email\">
                            <input class=\"js-callback-email\" type=\"email\" placeholder=\"Ваш E-mail*\" required>
                        </label>
                    </div>
                    <button class=\"js-callback-btn\" type=\"submit\">Отправить</button>
                </form>
            </div>
            <div class=\"col-xl-5 col-lg-5 col-12 pt-2 wow fadeInRight\">
                <div class=\"callback-title\">
                    ВСЕ ВАШИ ПОТРЕБНОСТИ В ОДНОМ МЕСТЕ
                </div>
                <div class=\"callback-desc\">
                    <p>Наши комплексные решения по поиску, упаковке и доставке поддерживают продавцов на каждом этапе их
                                                пути. Все начинается с правильного планирования. Мы знаем, насколько важно для продавца
                                                поддерживать
                                                уровень своих запасов и о последствиях, которые могут наступить, если товар не будет готов или
                                                не
                                                будет доставлен вовремя.</p>
                    <p>Вот почему наши специалисты работают в тесном контакте с клиентами и
                                                поставщиками, планируя всю работу самым оптимальным образом.</p>

                </div>
            </div>
        </div>
    </div>
</section>
", "modular/callback.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/callback.html.twig");
    }
}
