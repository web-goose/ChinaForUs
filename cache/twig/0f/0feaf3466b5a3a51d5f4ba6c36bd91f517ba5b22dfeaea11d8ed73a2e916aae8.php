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

/* partials/footer.html.twig */
class __TwigTemplate_0051bd4f32672818080187053b1dd1fd51f2e4e07c3a841d6a9d923fdfbef1bf extends \Twig\Template
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
        echo "<footer>
    <div class=\"container-fluid\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"footer-logo\">
                    <a href=\"";
        // line 6
        echo ($context["base_url"] ?? null);
        echo "/\"><img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/all/logo.png");
        echo "\" alt=\"logo\"></a>
                </div>
                <div class=\"footer-soc\">
                    <a href=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contacts", []), "youtube", []);
        echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 48 48\" enable-background=\"new 0 0 48 48\">
                            <path d=\"M24 0.0130005C37.248 0.0130005 47.987 10.753 47.987 24C47.987 37.247 37.247 47.987 24 47.987C10.753 47.987 0.0130005 37.247 0.0130005 24C0.0130005 10.753 10.752 0.0130005 24 0.0130005ZM35.815 18.093C35.565 16.756 34.452 15.758 33.173 15.635C30.119 15.439 27.054 15.28 23.995 15.278C20.936 15.276 17.882 15.432 14.828 15.625C13.544 15.749 12.431 16.742 12.182 18.084C11.898 20.017 11.756 21.969 11.756 23.92C11.756 25.871 11.898 27.823 12.182 29.756C12.431 31.098 13.544 32.21 14.828 32.333C17.883 32.526 20.935 32.723 23.995 32.723C27.053 32.723 30.121 32.551 33.173 32.353C34.452 32.229 35.565 31.084 35.815 29.747C36.101 27.817 36.244 25.868 36.244 23.919C36.244 21.971 36.101 20.023 35.815 18.093ZM21.224 27.435V20.32L27.851 23.878L21.224 27.435Z\"></path>
                        </svg>
                    </a>
                    <a href=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contacts", []), "instagram", []);
        echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 30 30\">
                            <path d=\"M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z\"></path>
                            <path style=\"fill:#525252;\" d=\"M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z\"></path>
                            <path style=\"fill:#525252;\" d=\"M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z\"></path>
                        </svg>
                    </a>
                </div>
                <div class=\"footer-copyright\">© 2019 ChinaForUs</div>
            </div>
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"menu-title\">О КОМПАНИИ</div>
                <ul class=\"menu\">
                    <li>
                        <a href=\"";
        // line 28
        echo ($context["base_url"] ?? null);
        echo "/\">Главная</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 31
        echo ($context["base_url"] ?? null);
        echo "/about-us\">О нас</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 34
        echo ($context["base_url"] ?? null);
        echo "/reviews\">Отзывы</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"menu-title\">УСЛУГИ</div>
                <ul class=\"menu\">
                    <li>
                        <a href=\"";
        // line 42
        echo ($context["base_url"] ?? null);
        echo "/services/search\">Поиск поставщиков</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 45
        echo ($context["base_url"] ?? null);
        echo "/services/transaction\">Ведение сделки</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 48
        echo ($context["base_url"] ?? null);
        echo "/services/inspection\">Инспекция</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 51
        echo ($context["base_url"] ?? null);
        echo "/services/overview\">Обзор образцов товара</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 54
        echo ($context["base_url"] ?? null);
        echo "/services/konsolidaciya\">Консолидация</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 57
        echo ($context["base_url"] ?? null);
        echo "/services/uslugi-sklada\">Услуги склада</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 60
        echo ($context["base_url"] ?? null);
        echo "/services/logistika\">Логистика</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 63
        echo ($context["base_url"] ?? null);
        echo "/services/foto-na-listing\">Фото на листинг</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"menu-title\">FAQ</div>
                <ul class=\"menu\">
                    <li>
                        <a href=\"";
        // line 71
        echo ($context["base_url"] ?? null);
        echo "/faq\">Ответы на ваши вопросы</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 71,  135 => 63,  129 => 60,  123 => 57,  117 => 54,  111 => 51,  105 => 48,  99 => 45,  93 => 42,  82 => 34,  76 => 31,  70 => 28,  53 => 14,  45 => 9,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container-fluid\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"footer-logo\">
                    <a href=\"{{ base_url }}/\"><img src=\"{{ url('theme://img/all/logo.png') }}\" alt=\"logo\"></a>
                </div>
                <div class=\"footer-soc\">
                    <a href=\"{{ site.contacts.youtube }}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 48 48\" enable-background=\"new 0 0 48 48\">
                            <path d=\"M24 0.0130005C37.248 0.0130005 47.987 10.753 47.987 24C47.987 37.247 37.247 47.987 24 47.987C10.753 47.987 0.0130005 37.247 0.0130005 24C0.0130005 10.753 10.752 0.0130005 24 0.0130005ZM35.815 18.093C35.565 16.756 34.452 15.758 33.173 15.635C30.119 15.439 27.054 15.28 23.995 15.278C20.936 15.276 17.882 15.432 14.828 15.625C13.544 15.749 12.431 16.742 12.182 18.084C11.898 20.017 11.756 21.969 11.756 23.92C11.756 25.871 11.898 27.823 12.182 29.756C12.431 31.098 13.544 32.21 14.828 32.333C17.883 32.526 20.935 32.723 23.995 32.723C27.053 32.723 30.121 32.551 33.173 32.353C34.452 32.229 35.565 31.084 35.815 29.747C36.101 27.817 36.244 25.868 36.244 23.919C36.244 21.971 36.101 20.023 35.815 18.093ZM21.224 27.435V20.32L27.851 23.878L21.224 27.435Z\"></path>
                        </svg>
                    </a>
                    <a href=\"{{ site.contacts.instagram }}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 30 30\">
                            <path d=\"M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z\"></path>
                            <path style=\"fill:#525252;\" d=\"M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z\"></path>
                            <path style=\"fill:#525252;\" d=\"M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z\"></path>
                        </svg>
                    </a>
                </div>
                <div class=\"footer-copyright\">© 2019 ChinaForUs</div>
            </div>
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"menu-title\">О КОМПАНИИ</div>
                <ul class=\"menu\">
                    <li>
                        <a href=\"{{ base_url }}/\">Главная</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/about-us\">О нас</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/reviews\">Отзывы</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"menu-title\">УСЛУГИ</div>
                <ul class=\"menu\">
                    <li>
                        <a href=\"{{ base_url }}/services/search\">Поиск поставщиков</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/services/transaction\">Ведение сделки</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/services/inspection\">Инспекция</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/services/overview\">Обзор образцов товара</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/services/konsolidaciya\">Консолидация</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/services/uslugi-sklada\">Услуги склада</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/services/logistika\">Логистика</a>
                    </li>
                    <li>
                        <a href=\"{{ base_url }}/services/foto-na-listing\">Фото на листинг</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3\">
                <div class=\"menu-title\">FAQ</div>
                <ul class=\"menu\">
                    <li>
                        <a href=\"{{ base_url}}/faq\">Ответы на ваши вопросы</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/footer.html.twig");
    }
}
