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

/* modular/doubt.html.twig */
class __TwigTemplate_582acc0d4a89c5f98c9214bf04130137c27fabaa7977b183abdd91d410cfbd58 extends \Twig\Template
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
        echo "<section class=\"doubt\" id=\"doubt\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Сомневаетесь?</h2>
        <h3 class=\"section_desc\">Вот ещё пару поводов выбрать нас:</h3>
    </div>

    <div class=\"container\">
        <div class=\"row items\">
            <div class=\"col-md-4 col-12 item wow zoomIn\" data-wow-delay=\".3s\">
                <div class=\"item-count\" data-delay=\"400\" data-min=\"0\" data-max=\"10\"></div>
                <div class=\"item-desc\">Мы работаем с Китаем уже более десяти лет</div>
            </div>
            <div class=\"col-md-4 col-12 item wow zoomIn\" data-wow-delay=\".3s\">
                <div class=\"item-count\" data-delay=\"10\" data-min=\"10238\" data-max=\"10538\"></div>
                <div class=\"item-desc\">Столько тонн товаров было доставлено на склады Амазон, а также в Россию, Украину,
                                        Казахстан для наших клиентов с помощью ChinaForUs
                </div>
            </div>
            <div class=\"col-md-4 col-12 item wow zoomIn\" data-wow-delay=\".3s\">
                <div class=\"item-count\" data-delay=\"20\" data-min=\"700\" data-max=\"862\"></div>
                <div class=\"item-desc\">Мы с ответственностью, поддержкой и готовностью помочь в любых вопросах подходим
                                        к каждому клиенту, именно поэтому свой бизнес нам доверили уже более 800 заказчиков
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/doubt.html.twig";
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
        return new Source("<section class=\"doubt\" id=\"doubt\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Сомневаетесь?</h2>
        <h3 class=\"section_desc\">Вот ещё пару поводов выбрать нас:</h3>
    </div>

    <div class=\"container\">
        <div class=\"row items\">
            <div class=\"col-md-4 col-12 item wow zoomIn\" data-wow-delay=\".3s\">
                <div class=\"item-count\" data-delay=\"400\" data-min=\"0\" data-max=\"10\"></div>
                <div class=\"item-desc\">Мы работаем с Китаем уже более десяти лет</div>
            </div>
            <div class=\"col-md-4 col-12 item wow zoomIn\" data-wow-delay=\".3s\">
                <div class=\"item-count\" data-delay=\"10\" data-min=\"10238\" data-max=\"10538\"></div>
                <div class=\"item-desc\">Столько тонн товаров было доставлено на склады Амазон, а также в Россию, Украину,
                                        Казахстан для наших клиентов с помощью ChinaForUs
                </div>
            </div>
            <div class=\"col-md-4 col-12 item wow zoomIn\" data-wow-delay=\".3s\">
                <div class=\"item-count\" data-delay=\"20\" data-min=\"700\" data-max=\"862\"></div>
                <div class=\"item-desc\">Мы с ответственностью, поддержкой и готовностью помочь в любых вопросах подходим
                                        к каждому клиенту, именно поэтому свой бизнес нам доверили уже более 800 заказчиков
                </div>
            </div>
        </div>
    </div>
</section>
", "modular/doubt.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/doubt.html.twig");
    }
}
