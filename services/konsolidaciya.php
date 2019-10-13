<?
include "partials.php";
getHeader('Консолидация', 'консолидация', 'Сборка товаров/образцов: консолидация по формуле 5+5+', 'img/konsolidaciya/bg.jpg');
?>
<section class="inspection">
    <div class="container">
        <div class="row items">
            <div class="col-12 item wow fadeIn" data-wow-delay=".3s">
                <div class="row">
                    <div class="col-md-6 col-12 item-info">
                        <p>Мы можем собрать товары от разных производителей на нашем складе и упаковать их в одну
                            посылку (отправление), что значительно экономит ваши средства на пересылке по
                            отдельности.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="img/konsolidaciya/1.jpg" alt="1">
                    </div>
                </div>
            </div>
            <div class="col-12 item wow fadeIn" data-wow-delay=".3s">
                <div class="row">
                    <div class="col-md-6 col-12 order-md-0 order-1">
                        <img src="img/konsolidaciya/2.jpg" alt="2">
                    </div>
                    <div class="col-md-6 col-12 item-info">
                        <p>Возможно как и упаковать товары в том виде, в котором они поступают от поставщиков, так и
                            перепаковать, что может значительно уменьшить объемный вес и/или усилить упаковку, что важно
                            при транспортировке хрупких товаров, с целью предотвращения их повреждения при
                            транспортировке.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeIn" data-wow-delay=".3s">
                <button class="main-btn">Заполнить заявку на услугу</button>
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
