<?
include "partials.php";
getHeader('Сопровождение сделки', 'Сопровождение сделки', 'Ведение сделки нашими специалистами', 'img/transaction/bg.jpg');
?>
<section class="transaction-block" id='transaction'>
    <div class="transaction">
        <div id="timeline">
            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/1.png" alt="1">
                </div>
                <div class="timeline-content wow fadeIn" data-wow-delay=".3s">
                    <h2>Поиск поставщика</h2>
                    <p>
                        Анализ рынка поставщиков с предоставлением результатов и рекомендаций. Поиск поставщика по
                        оптимальному соответствию цена/качество на внутренних электронных площадках и рынках Китая
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/2.png" alt="2">
                </div>
                <div class="timeline-content right wow fadeIn" data-wow-delay=".3s">
                    <h2>Ведение переговоров</h2>
                    <p>
                        Переговоры по количеству/цене/срокам, возможности нанесения логотипов, кастомизация, дизайн
                        коробки,
                        выбор способов нанесения и пр.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/3.png" alt="3">
                </div>
                <div class="timeline-content wow fadeIn" data-wow-delay=".3s">
                    <h2>Выкуп образцов</h2>
                    <p>
                        Для того, чтобы убедиться в заявленном поставщиком качестве товара, производится заказ или выкуп
                        образцов
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/4.png" alt="4">
                </div>
                <div class="timeline-content right wow fadeIn" data-wow-delay=".3s">
                    <h2>Обзор / тест / испытание</h2>
                    <p>
                        Проведение обзоров, тестирование, испытание образцов (при необходимости). Предоставление
                        результатов
                        в формате фото/видео высокого качества, мнение и заключение по результатам обзора
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/5.png" alt="5">
                </div>
                <div class="timeline-content wow fadeIn" data-wow-delay=".3s">
                    <h2>Доработка</h2>
                    <p>
                        Переговоры по доработке/исправлению, нанесению логотипа (кастомизации), заказ или выкуп образцов
                        с
                        логотипом (доработкой), обзоры, при необходимости повторение
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/6.png" alt="6">
                </div>
                <div class="timeline-content right wow fadeIn" data-wow-delay=".3s">
                    <h2>Фото на листинг</h2>
                    <p>
                        Пока ваш товар в процессе изготовления, мы поможем вам не упустить время и сделаем качественные
                        фотографии вашего товара на листинг
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/7.png" alt="7">
                </div>
                <div class="timeline-content wow fadeIn" data-wow-delay=".3s">
                    <h2>Консолидация</h2>
                    <p>
                        Консолидация образцов, упаковка, усиление (укрепление упаковки), отправка образцов на адрес (при
                        необходимости)
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/8.png" alt="8">
                </div>
                <div class="timeline-content right wow fadeIn" data-wow-delay=".3s">
                    <h2>Выкуп партии</h2>
                    <p>
                        Осуществлеие заказа или выкупа партии, защита сделки. Проведение инспекции на нашем
                        складе, обмен/возврат, ведение споров
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/9.png" alt="9">
                </div>
                <div class="timeline-content wow fadeIn" data-wow-delay=".3s">
                    <h2>Подготовка товара к отправке</h2>
                    <p>
                        Подготовка к отправке, доставка на ваш адрес и/или отправка на склады Amazon FBA оптимальным
                        способом
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="../img/transaction/10.png" alt="10">
                </div>
                <div class="timeline-content right wow fadeIn" data-wow-delay=".3s">
                    <h2>Консультации на всех этапах</h2>
                    <p>
                        Советы, рекомендации, основанные на многолетнем опыте, наше полное участие - бесплатно
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-info wow fadeInUp text-center" data-wow-delay=".3s">
        <h3 class="section_desc">Мы можем выполнить как весь комплекс услуг, так и несколько выбранных пунктов по вашему
            усмотрению. Итоговая стоимость зависит от объема и сложности работы. Каждый случай индивидуален, мы
            бесплатно проконсультируем и подберем только те услуги, которые необходимы именно вам.</h3>
        <button class="main-btn">Заполнить форму и узнать стоимость</button>
    </div>
</section>
<?
services();
whyAreWe();
contacts();
getFooter();
?>
