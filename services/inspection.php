<?
include "partials.php";
getHeader('Инспекция', 'Инспекция', 'Фабрик (до и во время производства), партий товара', 'img/inspection/bg.jpg');
?>
<section class="inspection">
    <div class="container">
        <div class="row items">
            <div class="col-12 text-center wow fadeIn" data-wow-delay=".3s">
                <div class="section-title">Каким бы не был надежным поставщик, всегда требуется инспекция качества и
                    функционала до производства, во время производства и проверка уже готового продукта. Инспекция
                    разделяется на несколько видов:
                </div>
            </div>
            <div class="col-12 item wow fadeIn" data-wow-delay=".3s">
                <div class="row">
                    <div class="col-md-6 col-12 item-info"><h3>Аудит (проверка) поставщика</h3>
                        <p>Инспекция фабрики до производства товара. Данный вид инспекции предназначен для оценки
                            поставщика, проверки документов, производственных мощностей, оборудования и т.д.

                            Цель данного вида инспекции – установить, является ли поставщик производителем товара или
                            посредником, имеет ли соответствующую регистрацию и документы, какие у него производственные
                            площади и в каком состоянии они находятся, какое оборудование используется, количество
                            персонал, его компетентность и прочее, все это имеет важное значение еще до начала работы и
                            позволяет избежать ошибок в дальнейшем.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="img/inspection/1.jpg" alt="1">
                    </div>
                </div>
            </div>
            <div class="col-12 item wow fadeIn" data-wow-delay=".3s">
                <div class="row">
                    <div class="col-md-6 col-12 order-md-0 order-1">
                        <img src="img/inspection/2.jpg" alt="2">
                    </div>
                    <div class="col-md-6 col-12 item-info"><h3>Инспекция во время производста вашего товара</h3>
                        <p>Позволяет понять, соответствует ли производимый товар требованиям, выявить проблемы и внести
                            изменения в процессе производства.

                            Цель данного вида инспекции – своевременно выявить проблемы при производстве товара, оценить
                            качество компонентов, соответствие оборудования, квалификацию персонала и других факторы.
                            Если требуется, внести изменения и/или дополнения.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 item wow fadeIn" data-wow-delay=".3s">
                <div class="row">
                    <div class="col-md-6 col-12 item-info"><h3>Инспекция готовой партии товара</h3>
                        <p>Одна из важных задач продавца, это недопущение (сведение к минимуму) попадания некачественной
                            или бракованной продукции на склады Амазон и конечному потребителю. Поэтому необходимо
                            регулярно проверять качество товара до отгрузки.

                            Инспекция разделяется на 2 типа- выборочная (рандомная), позволяющая выявить процент брака и
                            полная (выбраковка) всей партии товара.

                            Цель – контроль заявленного качества, выявление брака и исключение замены (удешевления)
                            используемых материалов.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="img/inspection/3.jpg" alt="1">
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeIn" data-wow-delay=".3s">
                <div class="section-title">
                    Так, с помощью инспекции можно понять легальность и возможности поставщика, своевременно выявить
                    проблемы при производстве товара, а также <b>контролировать</b> качество уже готового товара.
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container-fluid text-center">
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
            <button class="main-btn">Заполнить заявку на услугу</button>
        </div>
    </div>
</section>
<?
services();
whyAreWe();
contacts();
getFooter();
?>