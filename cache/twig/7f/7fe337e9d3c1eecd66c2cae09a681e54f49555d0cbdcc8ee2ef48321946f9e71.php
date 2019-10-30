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

/* modular/form.html.twig */
class __TwigTemplate_198b72d951a37e9bdf64813cfd4aaeacf2f68ff5a0a56b4e73dc3e4b11f1c0a7 extends \Twig\Template
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
        echo "<section class=\"form-block\">
    <form class=\"form\" action=\"javascript:void(0)\">
        <div class=\"title\">Отправить заявку</div><br/>
        <input class=\"js-form-name\" placeholder=\"Ваше имя\" required type=\"text\"/><br/>
        <input class=\"js-form-phone\" onkeypress='return charCode >= 48 && charCode <= 57' placeholder=\"Введите ваш номер\" required type=\"number\"/><br/>
        <input class=\"js-form-email\" type=\"email\" placeholder=\"Ваш Email\" required type=\"text\"/><br/>
        <button class=\"js-form-btn-send\" onclick=\"\" type=\"submit\">Отправить</button>
    </form>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
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
        return new Source("<section class=\"form-block\">
    <form class=\"form\" action=\"javascript:void(0)\">
        <div class=\"title\">Отправить заявку</div><br/>
        <input class=\"js-form-name\" placeholder=\"Ваше имя\" required type=\"text\"/><br/>
        <input class=\"js-form-phone\" onkeypress='return charCode >= 48 && charCode <= 57' placeholder=\"Введите ваш номер\" required type=\"number\"/><br/>
        <input class=\"js-form-email\" type=\"email\" placeholder=\"Ваш Email\" required type=\"text\"/><br/>
        <button class=\"js-form-btn-send\" onclick=\"\" type=\"submit\">Отправить</button>
    </form>
</section>
", "modular/form.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/form.html.twig");
    }
}
