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

/* modular/contacts.html.twig */
class __TwigTemplate_7a8aec09a7cc7dce8609a6ef02be3b28af9b73f9d0484b2392df2a0070213ca9 extends \Twig\Template
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
        echo "<section class=\"contacts\" id=\"contacts\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Наши контакты</h2>
    </div>
    <div class=\"container wrap-info wow fadeInUp\" data-wow-delay=\".3s\">
        <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-12\">E-mail:
                <a href=\"mailto:";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contacts", []), "email", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contacts", []), "email", []);
        echo "</a>
            </div>
            <div class=\"col-12\">Телефон:
                <a href=\"tel:8613957945181\">+86 139 5794 5181</a>
            </div>
            <div class=\"col-12\">Соцсети:
                <a class=\"soc\" href=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contacts", []), "instagram", []);
        echo "\">Instagram</a>
                |
                <a class=\"soc\" href=\"\">Youtube</a>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"contacts\" id=\"contacts\">
    <div class=\"section-info wow fadeInUp\" data-wow-delay=\".3s\">
        <h2 class=\"section_title\">Наши контакты</h2>
    </div>
    <div class=\"container wrap-info wow fadeInUp\" data-wow-delay=\".3s\">
        <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-12\">E-mail:
                <a href=\"mailto:{{ site.contacts.email }}\">{{ site.contacts.email }}</a>
            </div>
            <div class=\"col-12\">Телефон:
                <a href=\"tel:8613957945181\">+86 139 5794 5181</a>
            </div>
            <div class=\"col-12\">Соцсети:
                <a class=\"soc\" href=\"{{ site.contacts.instagram }}\">Instagram</a>
                |
                <a class=\"soc\" href=\"\">Youtube</a>
            </div>
        </div>
    </div>
</section>
", "modular/contacts.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/modular/contacts.html.twig");
    }
}
