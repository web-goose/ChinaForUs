<?

function getHeader($title, $wrapTitle, $wrapDesc, $bgUrl)
{
    echo <<<_HTML
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="Author" content="https://webgoose.ru/">
    <title>$title | CHINAFORUS</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="assets/css/services.css">
</head>
<body>
<header style="background: url($bgUrl) 10% 60%">
    <nav class="navbar navbar-expand-lg header-nav">
        <a class="navbar-brand" href="/"><img class="header-logo" src="img/all/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

            <svg class="header-nav-toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link header-nav-item" href="#">FAQ</a>
                <a class="nav-item nav-link header-nav-item" href="#">Главная</a>
                <a class="nav-item nav-link header-nav-item" href="#">Услуги</a>
                <a class="nav-item nav-link header-nav-item" href="#">О нас</a>
                <a class="nav-item nav-link header-nav-item" href="#">Отзывы</a>
                <a class="nav-item nav-link header-nav-item" href="#">Блог</a>
                <a class="nav-item nav-link header-nav-item" href="#">Контакты</a>
            </div>
        </div>
    </nav>

    <div class="header-wrap" style="height: calc(100vh - 80px - 50%)">
        <div class="header-wrap-info">
            <h1 class="header-wrap-title wow fadeInUp" data-wow-delay="1s">$wrapTitle</h1>
            <div class="header-wrap-desc wow fadeInUp" data-wow-delay="1.5s">$wrapDesc</div>
        </div>
    </div>
</header>
_HTML;
}

function services(){
    echo <<<_HTML
<section class="services" id="services">
    <div class="section-info wow fadeInUp" data-wow-delay=".3s">
        <h2 class="section_title">Ознакомьтесь с другими нашими услугами</h2>
        <h3 class="section_desc">Мы работаем, чтобы помочь развивать ваш бизнес быстро и эффективно</h3>
    </div>
    <div class="container-fluid">
        <div class="row services-items">
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Поиск</div>
                            <div class="services-item-desc">Товаров, поставщиков по соответствию цена/качество</div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Обзор/тест/испытание образцов товара</div>
                            <div class="services-item-desc">Тест/полный обзор образцов товара</div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Сопровождение сделки</div>
                            <div class="services-item-desc">Ведение сделки нашими специалистами</div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Инспекция</div>
                            <div class="services-item-desc">Фабрик (до и во время производства), партий товара</div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Фото на листинг</div>
                            <div class="services-item-desc">Предметная фотосъемка</div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Услуги склада</div>
                            <div class="services-item-desc">Наша компания находится и имеет несколько складов в Китае
                            </div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Консолидация</div>
                            <div class="services-item-desc">Сборка товаров/образцов: консолидация по формуле 5+5+</div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 services-item wow fadeIn" data-wow-delay=".3s">
                <div class="services-item-shade"></div>
                <div class="services-item-info">
                    <div class="services-item-info-inner">
                        <div class="wrap">
                            <div class="services-item-title">Логистика</div>
                            <div class="services-item-desc">Транспортная, железнодорожная, авиа, экспресс</div>
                            <div class="services-item-btn"><a href="">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
_HTML;

}

function whyAreWe(){
    echo <<<_HTML
<section class="whyAreWe" id="whyAreWe">
    <div class="section-info wow fadeInUp" data-wow-delay=".3s">
        <h2 class="section_title">Почему именно мы?</h2>
        <h3 class="section_desc">Каждый день мы экономим время, нервы и деньги наших клиентов. Несколько причин, почему
            у нас это получается хорошо:
        </h3>
    </div>
    <div class="container">
        <div class="row items d-flex justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInLeft">
                <div class="item-img">
                    <img src="../img/whyarewe/1.jpg" alt="1">
                </div>
                <div class="item-name">Качество</div>
                <div class="item-desc">Наши специалисты обеспечивают высокий уровень обслуживания клиентов за счет
                    профессионализма, многолетнего опыта и индивидуального подхода к каждому заказу
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInUp">
                <div class="item-img">
                    <img src="../img/whyarewe/2.jpg" alt="1">
                </div>
                <div class="item-name">Поддержка</div>
                <div class="item-desc">С самого начала нашего сотрудничества вы получаете профессиональную консультацию
                    специалиста, к которому можете обращаться на протяжении всей работы со всеми интересующими вас
                    вопросами
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-7 col-12 item wow fadeInRight">
                <div class="item-img">
                    <img src="../img/whyarewe/3.jpg" alt="1">
                </div>
                <div class="item-name">Цена</div>
                <div class="item-desc">Мы не предлагаем услуги, которые на самом деле вам не нужны. После обработки
                    вашего запроса, мы предложим только действительно необходимое, что позволяет вам существенно
                    экономить свои затраты
                </div>
            </div>
        </div>
    </div>
</section>
_HTML;
}

function contacts(){
    echo <<<_HTML
 <section class="contacts">
    <div class="section-info wow fadeInUp" data-wow-delay=".3s">
        <h2 class="section_title">Наши контакты</h2>
    </div>
    <div class="container wrap-info wow fadeInUp" data-wow-delay=".3s">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-12">E-mail: <a href="mailto:chinaforuspost@gmail.com">chinaforuspost@gmail.com</a></div>
            <div class="col-12">Телефон: <a href="tel:8613957945181">+86 139 5794 5181</a></div>
            <div class="col-12">Соцсети: <a class="soc" href="https://instagram.com/chinaforus">Instagram</a> | <a class="soc" href="">Youtube</a></div>
        </div>
    </div>
</section>
_HTML;

}

function getFooter()
{
    echo <<<_HTML
<footer>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3">
                <div class="footer-logo"><a href=""><img src="img/all/logo.png" alt="logo"></a></div>
                <div class="footer-soc">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" enable-background="new 0 0 48 48">
                            <path d="M24 0.0130005C37.248 0.0130005 47.987 10.753 47.987 24C47.987 37.247 37.247 47.987 24 47.987C10.753 47.987 0.0130005 37.247 0.0130005 24C0.0130005 10.753 10.752 0.0130005 24 0.0130005ZM35.815 18.093C35.565 16.756 34.452 15.758 33.173 15.635C30.119 15.439 27.054 15.28 23.995 15.278C20.936 15.276 17.882 15.432 14.828 15.625C13.544 15.749 12.431 16.742 12.182 18.084C11.898 20.017 11.756 21.969 11.756 23.92C11.756 25.871 11.898 27.823 12.182 29.756C12.431 31.098 13.544 32.21 14.828 32.333C17.883 32.526 20.935 32.723 23.995 32.723C27.053 32.723 30.121 32.551 33.173 32.353C34.452 32.229 35.565 31.084 35.815 29.747C36.101 27.817 36.244 25.868 36.244 23.919C36.244 21.971 36.101 20.023 35.815 18.093ZM21.224 27.435V20.32L27.851 23.878L21.224 27.435Z"></path>
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                            <path d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path>
                            <path style="fill:#525252;"
                                  d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path>
                            <path style="fill:#525252;"
                                  d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path>
                        </svg>
                    </a>
                </div>
                <div class="footer-copyright">© 2019 ChinaForUs</div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3">
                <div class="menu-title">О КОМПАНИИ</div>
                <ul class="menu">
                    <li><a href="">Главная</a></li>
                    <li><a href="">О нас</a></li>
                    <li><a href="">Отзывы</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3">
                <div class="menu-title">УСЛУГИ</div>
                <ul class="menu">
                    <li><a href="">Ведение сделки</a></li>
                    <li><a href="">Поиск поставщиков</a></li>
                    <li><a href="">Инспекция</a></li>
                    <li><a href="">Обзор образцов товара</a></li>
                    <li><a href="">Консолидация</a></li>
                    <li><a href="">Услуги склада</a></li>
                    <li><a href="">Логистика</a></li>
                    <li><a href="">Фото на листинг</a></li>
                    <li><a href="">Консультации (бесплатно)</a></li>

                </ul>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-12 text-md-left text-center pt-3">
                <div class="menu-title">FAQ</div>
                <ul class="menu">
                    <li><a href="">Ответы на ваши вопросы</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="//code.jivosite.com/widget.js" data-jv-id="Qmn8krdLMR" async></script>

<script >
const wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);
wow.init();
</script>
</body>
</html>
_HTML;

}
