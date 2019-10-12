<?
include "partials.php";
getHeader('Поиск', 'Поиск', 'Товаров и поставщиков', 'img/search/bg.jpg');
?>
<section class="search">
    <div class="container">
        <div class="row items">
            <div class="col-12 text-center">
                <div class="section-title">Мы найдем поставщика, который
                    предлагает выгодные цены на нужный вам товар без ущерба его <b>качеству</b>.
                </div>
            </div>
            <div class="col-12 item">
                <div class="row">
                    <div class="col-md-6 col-12 item-info"><h3>Анализ рынка поставщиков:</h3>
                        <p>По вашему запросу мы оцениваем предложения поставщиков на внутренних электронных площадках и
                            рынках
                            Китая, сравнивая цены и анализируя отзывы выбирая самый оптимальный для вас вариант.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="img/search/1.jpg" alt="1">
                    </div>
                </div>
            </div>
            <div class="col-12 item">
                <div class="row">
                    <div class="col-md-6 col-12 order-md-0 order-1">
                        <img src="img/search/2.jpg" alt="2">
                    </div>
                    <div class="col-md-6 col-12 item-info"><h3>Сравнительный анализ и выбор поставщика:</h3>
                        <p>После анализа рынка сравниваем поставщиков по заранее отобранным критериям:
                            - цена и качество продукции;
                            - заявленные обязательства по срокам, ассортименту, комплектности, количеству поставляемой
                            продукции;
                            - сроки выполнения заказов; - и другие.
                            По результатам предоставляем заключение с итогами анализа и рекомендациями, основанными на
                            нашем опыте.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="section-title">Для выбора нужного поставщика, следующим шагом мы заказываем <b>образцы</b> его
                    продукции, чтобы убедиться в заявленном качестве.
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container-fluid">
            <div class="row services-items">
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
            </div>
        </div>
    </div>
</section>
<?
services();
whyAreWe();
contacts();
getFooter();
?>
