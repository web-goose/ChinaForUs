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

/* partials/header.html.twig */
class __TwigTemplate_6f5803fcb499e9c5d1d0b09fe98b581a71b1fdfe5cf95da37f20f3c97de332e8 extends \Twig\Template
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
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 2
        $context["links"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/services"], "method"), "children", []);
        // line 3
        echo "
";
        // line 4
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "isBlog", []) && ($this->getAttribute(($context["page"] ?? null), "slug", []) != "pages"))) {
            // line 5
            echo "    ";
            if (($context["image"] ?? null)) {
                // line 6
                echo "        <header style=\"background: url(";
                echo $this->getAttribute(($context["image"] ?? null), "url", []);
                echo ") 10% 60%\">
        ";
            } else {
                // line 8
                echo "            <header>
            ";
            }
            // line 10
            echo "            <nav class=\"navbar navbar-expand-lg header-nav\">
                <a class=\"navbar-brand\" href=\"";
            // line 11
            echo ($context["base_url"] ?? null);
            echo "/\"><img class=\"header-logo\" src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/all/logo.png");
            echo "\" alt=\"logo\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <svg class=\"header-nav-toggle\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
                        <path d=\"M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z\"/>
                    </svg>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                    <div class=\"navbar-nav ml-auto\">
                        <a class=\"nav-item nav-link header-nav-item\" href=\"#faq\" onclick=\"scrollToAnchor('#faq')\">FAQ</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"";
            // line 20
            echo ($context["base_url"] ?? null);
            echo "/\">Главная</a>
                        <div class=\"nav-item nav-link header-nav-item dropdown\" href=\"#services\" onclick=\"scrollToAnchor('#services')\">Услуги &#x25BC;
                            <div class=\"dropdown-content\">
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 24
                echo "                                    <a href=\"";
                echo $this->getAttribute($context["link"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["link"], "title", []);
                echo "</a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                            </div>
                        </div>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"";
            // line 28
            echo ($context["base_url"] ?? null);
            echo "/about-us\">О нас</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"#reviews\" onclick=\"scrollToAnchor('#reviews')\">Отзывы</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"";
            // line 30
            echo ($context["base_url"] ?? null);
            echo "/blog\">Блог</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"#contacts\" onclick=\"scrollToAnchor('#contacts')\">Контакты</a>
                    </div>
                </div>
            </nav>
            ";
            // line 35
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "isIndex", [])) {
                // line 36
                echo "                <div class=\"header-wrap\">
                    <div class=\"header-wrap-info\">
                        <h1 class=\"header-wrap-title wow fadeInUp\" data-wow-delay=\"1s\">Ваш партнер в Китае
                        </h1>
                        <div class=\"header-wrap-desc wow fadeInUp\" data-wow-delay=\"1.5s\">
                            <p>От поиска и создания
                                <br>
                                до производства и доставки
                            </p>
                        </div>
                        <div class=\"header-wrap-btn wow fadeInUp\" data-wow-delay=\"2s\">
                            <button>Бесплатная консультация</button>
                        </div>

                    </div>
                    <div class=\"header-wrap-arrow\" onclick=\"scrollToAnchor('#services')\">
                        <svg width=\"38px\" height=\"18px\">
                            <path d=\"M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z\"></path>
                        </svg>
                    </div>
                </div>
                <span id=\"special\"></span>
            ";
            } else {
                // line 59
                echo "                <div class=\"header-wrap\">
                    <div class=\"header-wrap-info\">
                        <h1 class=\"header-wrap-title wow fadeInUp\" data-wow-delay=\"1s\">
                            ";
                // line 62
                echo $this->getAttribute(($context["page"] ?? null), "title", []);
                echo "
                        </h1>
                        <div class=\"header-wrap-desc wow fadeInUp\" data-wow-delay=\"1.5s\">";
                // line 64
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "</div>
                    </div>
                </div>
            ";
            }
            // line 68
            echo "        </header>
    ";
        }
        // line 70
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "isBlog", []) || ($this->getAttribute(($context["page"] ?? null), "slug", []) == "pages"))) {
            // line 71
            echo "        <header>
            <nav class=\"navbar navbar-expand-lg header-nav\">
                <a class=\"navbar-brand\" href=\"";
            // line 73
            echo ($context["base_url"] ?? null);
            echo "/\"><img class=\"header-logo\" src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/all/logo.png");
            echo "\" alt=\"logo\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <svg class=\"header-nav-toggle\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
                        <path d=\"M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z\"/>
                    </svg>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                    <div class=\"navbar-nav ml-auto\">
                        <a class=\"nav-item nav-link header-nav-item\" href=\"";
            // line 81
            echo ($context["base_url"] ?? null);
            echo "/\">Главная</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"";
            // line 82
            echo ($context["base_url"] ?? null);
            echo "/about-us\">О нас</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"";
            // line 83
            echo ($context["base_url"] ?? null);
            echo "/blog\">Блог</a>
                    </div>
                </div>
            </nav>
        </header>
    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 83,  179 => 82,  175 => 81,  162 => 73,  158 => 71,  155 => 70,  151 => 68,  144 => 64,  139 => 62,  134 => 59,  109 => 36,  107 => 35,  99 => 30,  94 => 28,  90 => 26,  79 => 24,  75 => 23,  69 => 20,  55 => 11,  52 => 10,  48 => 8,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set image = page.media.images|first %}
{% set links = page.find('/services').children %}

{% if not page.header.isBlog and page.slug != 'pages' %}
    {% if image %}
        <header style=\"background: url({{ image.url }}) 10% 60%\">
        {% else %}
            <header>
            {% endif %}
            <nav class=\"navbar navbar-expand-lg header-nav\">
                <a class=\"navbar-brand\" href=\"{{ base_url }}/\"><img class=\"header-logo\" src=\"{{ url('theme://img/all/logo.png') }}\" alt=\"logo\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <svg class=\"header-nav-toggle\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
                        <path d=\"M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z\"/>
                    </svg>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                    <div class=\"navbar-nav ml-auto\">
                        <a class=\"nav-item nav-link header-nav-item\" href=\"#faq\" onclick=\"scrollToAnchor('#faq')\">FAQ</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"{{ base_url }}/\">Главная</a>
                        <div class=\"nav-item nav-link header-nav-item dropdown\" href=\"#services\" onclick=\"scrollToAnchor('#services')\">Услуги &#x25BC;
                            <div class=\"dropdown-content\">
                                {% for link in links %}
                                    <a href=\"{{ link.url }}\">{{ link.title }}</a>
                                {% endfor %}
                            </div>
                        </div>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"{{ base_url }}/about-us\">О нас</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"#reviews\" onclick=\"scrollToAnchor('#reviews')\">Отзывы</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"{{ base_url}}/blog\">Блог</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"#contacts\" onclick=\"scrollToAnchor('#contacts')\">Контакты</a>
                    </div>
                </div>
            </nav>
            {% if page.header.isIndex %}
                <div class=\"header-wrap\">
                    <div class=\"header-wrap-info\">
                        <h1 class=\"header-wrap-title wow fadeInUp\" data-wow-delay=\"1s\">Ваш партнер в Китае
                        </h1>
                        <div class=\"header-wrap-desc wow fadeInUp\" data-wow-delay=\"1.5s\">
                            <p>От поиска и создания
                                <br>
                                до производства и доставки
                            </p>
                        </div>
                        <div class=\"header-wrap-btn wow fadeInUp\" data-wow-delay=\"2s\">
                            <button>Бесплатная консультация</button>
                        </div>

                    </div>
                    <div class=\"header-wrap-arrow\" onclick=\"scrollToAnchor('#services')\">
                        <svg width=\"38px\" height=\"18px\">
                            <path d=\"M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z\"></path>
                        </svg>
                    </div>
                </div>
                <span id=\"special\"></span>
            {% else %}
                <div class=\"header-wrap\">
                    <div class=\"header-wrap-info\">
                        <h1 class=\"header-wrap-title wow fadeInUp\" data-wow-delay=\"1s\">
                            {{ page.title }}
                        </h1>
                        <div class=\"header-wrap-desc wow fadeInUp\" data-wow-delay=\"1.5s\">{{ page.content }}</div>
                    </div>
                </div>
            {% endif %}
        </header>
    {% endif %}
    {% if page.header.isBlog or page.slug == 'pages' %}
        <header>
            <nav class=\"navbar navbar-expand-lg header-nav\">
                <a class=\"navbar-brand\" href=\"{{ base_url }}/\"><img class=\"header-logo\" src=\"{{ url('theme://img/all/logo.png') }}\" alt=\"logo\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <svg class=\"header-nav-toggle\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
                        <path d=\"M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z\"/>
                    </svg>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                    <div class=\"navbar-nav ml-auto\">
                        <a class=\"nav-item nav-link header-nav-item\" href=\"{{ base_url }}/\">Главная</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"{{ base_url }}/about-us\">О нас</a>
                        <a class=\"nav-item nav-link header-nav-item\" href=\"{{ base_url }}/blog\">Блог</a>
                    </div>
                </div>
            </nav>
        </header>
    {% endif %}
", "partials/header.html.twig", "/var/www/sites/ChinaForUs/user/themes/chinaforus/templates/partials/header.html.twig");
    }
}
