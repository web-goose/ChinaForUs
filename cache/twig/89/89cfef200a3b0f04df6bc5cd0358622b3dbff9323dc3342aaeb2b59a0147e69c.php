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

/* modular/transaction.html.twig */
class __TwigTemplate_f4119bc2fd683ab14dd3e045cf8a22a62bd549e80ec00a371695c6840a6009b0 extends \Twig\Template
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
        echo "<section class=\"transaction\" id='transaction'>
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Сопровождение сделки</h2>
    </div>
    <div id=\"timeline\">
        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/1.png");
        echo "\" alt=\"1\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Поиск поставщика</h2>
                <p>
                    Анализ рынка поставщиков с предоставлением результатов и рекомендаций. Поиск поставщика по
                                                            оптимальному соответствию цена/качество на внутренних электронных площадках и рынках Китая
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/2.png");
        echo "\" alt=\"2\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Ведение переговоров</h2>
                <p>
                    Переговоры по количеству/цене/срокам, возможности нанесения логотипов, кастомизация, дизайн коробки,
                                                            выбор способов нанесения и пр.
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 34
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/3.png");
        echo "\" alt=\"3\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Выкуп образцов</h2>
                <p>
                    Для того, чтобы убедиться в заявленном поставщиком качестве товара, производится заказ или выкуп
                                                            образцов
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 47
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/4.png");
        echo "\" alt=\"4\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Обзор / тест / испытание</h2>
                <p>
                    Проведение обзоров, тестирование, испытание образцов (при необходимости). Предоставление результатов
                                                            в формате фото/видео высокого качества, мнение и заключение по результатам обзора
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 60
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/5.png");
        echo "\" alt=\"5\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Доработка</h2>
                <p>
                    Переговоры по доработке/исправлению, нанесению логотипа (кастомизации), заказ или выкуп образцов с
                                                            логотипом (доработкой), обзоры, при необходимости повторение
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 73
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/6.png");
        echo "\" alt=\"6\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Фото на листинг</h2>
                <p>
                    Пока ваш товар в процессе изготовления, мы поможем вам не упустить время и сделаем качественные
                                                            фотографии вашего товара на листинг
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 86
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/7.png");
        echo "\" alt=\"7\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Консолидация</h2>
                <p>
                    Консолидация образцов, упаковка, усиление (укрепление упаковки), отправка образцов на адрес (при
                                                            необходимости)
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 99
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/8.png");
        echo "\" alt=\"8\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Выкуп партии</h2>
                <p>
                    Осуществлеие заказа или выкупа партии, защита сделки. Проведение инспекции на нашем
                                                            складе, обмен/возврат, ведение споров
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 112
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/9.png");
        echo "\" alt=\"9\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Подготовка товара к отправке</h2>
                <p>
                    Подготовка к отправке, доставка на ваш адрес и/или отправка на склады Amazon FBA оптимальным
                                                            способом
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"";
        // line 125
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/transaction/10.png");
        echo "\" alt=\"10\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Консультации на всех этапах</h2>
                <p>
                    Советы, рекомендации, основанные на многолетнем опыте, наше полное участие - бесплатно
                </p>
            </div>
        </div>

    </div>
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-12\">
                <a href=\"services/transaction.php\" target=\"_blank\">
                    <button class=\"main-btn\">Подробнее о сопровождении сделки</button>
                </a>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/transaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 125,  167 => 112,  151 => 99,  135 => 86,  119 => 73,  103 => 60,  87 => 47,  71 => 34,  55 => 21,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"transaction\" id='transaction'>
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Сопровождение сделки</h2>
    </div>
    <div id=\"timeline\">
        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/1.png') }}\" alt=\"1\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Поиск поставщика</h2>
                <p>
                    Анализ рынка поставщиков с предоставлением результатов и рекомендаций. Поиск поставщика по
                                                            оптимальному соответствию цена/качество на внутренних электронных площадках и рынках Китая
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/2.png') }}\" alt=\"2\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Ведение переговоров</h2>
                <p>
                    Переговоры по количеству/цене/срокам, возможности нанесения логотипов, кастомизация, дизайн коробки,
                                                            выбор способов нанесения и пр.
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/3.png') }}\" alt=\"3\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Выкуп образцов</h2>
                <p>
                    Для того, чтобы убедиться в заявленном поставщиком качестве товара, производится заказ или выкуп
                                                            образцов
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/4.png') }}\" alt=\"4\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Обзор / тест / испытание</h2>
                <p>
                    Проведение обзоров, тестирование, испытание образцов (при необходимости). Предоставление результатов
                                                            в формате фото/видео высокого качества, мнение и заключение по результатам обзора
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/5.png') }}\" alt=\"5\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Доработка</h2>
                <p>
                    Переговоры по доработке/исправлению, нанесению логотипа (кастомизации), заказ или выкуп образцов с
                                                            логотипом (доработкой), обзоры, при необходимости повторение
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/6.png') }}\" alt=\"6\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Фото на листинг</h2>
                <p>
                    Пока ваш товар в процессе изготовления, мы поможем вам не упустить время и сделаем качественные
                                                            фотографии вашего товара на листинг
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/7.png') }}\" alt=\"7\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Консолидация</h2>
                <p>
                    Консолидация образцов, упаковка, усиление (укрепление упаковки), отправка образцов на адрес (при
                                                            необходимости)
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/8.png') }}\" alt=\"8\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Выкуп партии</h2>
                <p>
                    Осуществлеие заказа или выкупа партии, защита сделки. Проведение инспекции на нашем
                                                            складе, обмен/возврат, ведение споров
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/9.png') }}\" alt=\"9\">
            </div>
            <div class=\"timeline-content wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Подготовка товара к отправке</h2>
                <p>
                    Подготовка к отправке, доставка на ваш адрес и/или отправка на склады Amazon FBA оптимальным
                                                            способом
                </p>
            </div>
        </div>

        <div class=\"timeline-item\">
            <div class=\"timeline-icon\">
                <img src=\"{{ url('theme://img/transaction/10.png') }}\" alt=\"10\">
            </div>
            <div class=\"timeline-content right wow fadeIn\" data-wow-delay=\".3s\">
                <h2>Консультации на всех этапах</h2>
                <p>
                    Советы, рекомендации, основанные на многолетнем опыте, наше полное участие - бесплатно
                </p>
            </div>
        </div>

    </div>
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-12\">
                <a href=\"services/transaction.php\" target=\"_blank\">
                    <button class=\"main-btn\">Подробнее о сопровождении сделки</button>
                </a>
            </div>
        </div>
    </div>
</section>
", "modular/transaction.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/transaction.html.twig");
    }
}
