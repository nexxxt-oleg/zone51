<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>zone</title>
</head>
<body class="zone">
<div class="zone__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>
    <div class="zone__page">
        <div class="container">
            <ul class="zone__page__breadcrumbs nav">
                <li>
                    <a href="/">Z51.ru</a>
                </li>
                <li>
                    <span>Оплата и доставка</span>
                </li>
            </ul>
            <h1 class="zone__title">Оплата и доставка</h1>
            <div class="zone__text fpad30">
                <p>В стоимость вашего заказа включается стоимость товаров, стоимость услуг доставки, учитываются скидки,
                    купоны при проведении акций. Расчет стоимости заказа происходит в автоматическом режиме.</p>
            </div>
            <div id="oplata" class="fpad30 d-flex align-items-center justify-content-between">
                <h2 class="h2">СПОСОБЫ ОПЛАТЫ</h2>
                <a href="#dostavka" class="zone__btn-anchor">
                    СПОСОБЫ ДОСТАВКИ
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375.47 512" width="14" height="18">
                        <path fill="#dafc01"
                              d="M372.89,322.88l-48.67-47.39a8.53,8.53,0,0,0-11.93,0l-81.89,80.3V0H145.07V355.81l-81.9-80.3a8.52,8.52,0,0,0-11.92,0L2.59,322.88a8.5,8.5,0,0,0,0,12.22l179.2,174.48a8.52,8.52,0,0,0,11.9,0L372.89,335.1a8.52,8.52,0,0,0,0-12.22Z"/>
                    </svg>
                </a>
            </div>
            <div class="zone__tab-top">
                <ul class="nav nav-tabs " id="oplataTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                                class="zone__link-tab active"
                                data-toggle="tab"
                                href="#tabs-1"
                                role="tab"
                        >ЧАСТНЫМ ЛИЦАМ</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                                class="zone__link-tab"
                                id="ex1-tab-2"
                                data-toggle="tab"
                                href="#tabs-2"
                                role="tab"
                        >ЮРИДИЧЕСКИМ ЛИЦАМ</a>
                    </li>
                    <li class="zone__active-tab" id="activeTab" style="left: 0"></li>
                </ul>
            </div>

            <div class="zone__text zone__tab-body fpad70">
                <div class="tab-content">
                    <div
                            class="tab-pane fade show active"
                            id="tabs-1"
                            role="tabpanel"
                    >
                        <ul>
                            <li><b class="text-white">Наличными курьеру</b> (только регион Москва и Московская область
                                при полном заказе через корзину)
                            </li>
                            <li><b class="text-white">Электронный платеж через онлайн-сервисы Сбербанк и
                                    Яндекс.Касса</b> – доступно всем, во всех регионах, всегда при заказе с доставкой в
                                ПВЗ
                            </li>
                        </ul>
                        <br>
                        <p>Система автоматически отключит недоступные сервисы в зависимости от вашего региона. Для
                            покупателей из удаленных областей России, Беларуси, Казахстана доступен только вид оплаты
                            онлайн.</p>
                        <br>
                        <p>Все электронные платежи надежно защищены протоколами. В качестве подтверждения платежа онлайн
                            на ваш электронный адрес, указанный при оформлении, придет электронный чек.</p>
                        <br>
                        <p><b class="text-white">Сервис ЯНДЕКС.КАССА</b></p>
                        <br>
                        <p>Вы можете воспользоваться для онлайн платежа доступными способами предоставляемыми сервисом
                            Яндекс.Касса. При выборе данного вида оплаты после подтверждения заказа вы переходите на
                            сервис оплаты. Выберите удобный.</p>
                        <br>
                        <div class="d-flex align-items-center fpad15 flex-wrap">
                            <div class="pr30 fpad15"><img src="./img/sber.svg" alt="" width="140" height="16"></div>
                            <div class="pr30 fpad15"><img src="./img/ym.svg" alt="" width="115" height="24"></div>
                            <div class="pr30 fpad15"><img src="./img/mir.svg" alt="" width="85" height="24"></div>
                            <div class="pr30 fpad15"><img src="./img/visa.svg" alt="" width="85" height="24"></div>
                            <div class="pr30 fpad15"><img src="./img/maestro.svg" alt="" width="32" height="24"></div>
                            <div class="pr30 fpad15"><img src="./img/mc.svg" alt="" width="32" height="24"></div>
                            <div class="pr30 fpad15"><img src="./img/qiwi.svg" alt="" width="53" height="24"></div>
                        </div>
                        <p>При безналичной оплате картой вас перенаправит на сервер, где вы должны ввести номер карты,
                            срок действия, имя держателя. Все товары в наличии, ваш заказ не требует дополнительных
                            подтверждений от менеджера. Заказы, оплаченные Онлайн, имеют приоритет в обработке. Все
                            товары заказа резервируются.</p>
                        <br>
                        <p>Вам могут отказать от авторизации на сервере оплаты в случае:</p>
                        <br>
                        <ul>
                            <li>если ваш банк не поддерживает технологию 3D-Secure;</li>
                            <li>на карте недостаточно средств для покупки;</li>
                            <li>банк не поддерживает услугу платежей в интернете;</li>
                            <li> истекло время ожидания ввода данных 20 минут;</li>
                            <li>в данных была допущена ошибка.</li>
                        </ul>
                        <br>
                        <p>В этой ситуации вы можете повторить авторизацию через 20 минут, воспользоваться другой картой
                            или обратиться в свой банк для решения вопроса.</p>
                        <br>
                        <p>В связи с изменениями условий приема платежей Сбербанка, все платежи, совершаемые в
                            интернет-магазинах через банковскую карту либо через систему Сбербанк Онлайн, необходимо
                            подтверждать в колл-центре Сбербанка. Обращаться в колл-центр должен держатель карты.</p>
                        <br>
                        <p>Яндекс.Касса предоставляет сервис «Заплатить по частям» для товаров на сумму более 3000
                            рублей.</p>
                        <br>
                        <p>Копить не обязательно: можно получить товар сейчас, а заплатить по частям, раз в месяц. Все
                            происходит онлайн через страницу выбора вида платежа страницы Яндекс.Касса. Кредит выдается
                            во время оплаты, нужно подождать несколько минут.</p>
                        <br>
                        <p>Простая анкета. Как правило нужны только данные паспорта. Понятные условия. Итоговую сумму и
                            график платежей вы увидите перед тем, как взять кредит.</p>
                        <br>
                        <p>Всё под контролем. График ежемесячных платежей и условия всегда можно посмотреть в кошельке
                            Яндекса.</p>
                        <br>
                        <p>Удобное погашение. Деньги автоматически списываются из кошелька, нужно просто вовремя
                            пополнять его.</p>
                        <br>
                        <p>Сумма кредита 3000 – 150000 руб.</p>
                        <br>
                        <p>Срок кредита 6 или 12 месяцев, льготный период 30 дней (в этот срок можно погасить кредит без
                            переплаты).</p>
                        <br>
                        <p>Переплата от 1.9% до 3.9% в месяц.</p>
                        <br>
                        <p>Рассрочка до 6 месяцев.</p>

                    </div>
                    <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                        Tab 2 content
                    </div>
                </div>
            </div>

            <div id="dostavka" class="fpad30 d-flex align-items-center justify-content-between">
                <h2 class="h2">СПОСОБЫ ДОСТАВКИ</h2>
                <a href="#oplata" class="zone__btn-anchor">
                    СПОСОБЫ оплаты
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375.47 512" width="14" height="18">
                        <path fill="#dafc01"
                              d="M2.58,189.12l48.66,47.39a8.53,8.53,0,0,0,11.93,0l81.9-80.3V512H230.4V156.19l81.89,80.3a8.52,8.52,0,0,0,11.92,0l48.67-47.39a8.5,8.5,0,0,0,0-12.22L193.68,2.42a8.52,8.52,0,0,0-11.9,0L2.58,176.9a8.52,8.52,0,0,0,0,12.22Z"/>
                    </svg>
                </a>
            </div>
            <div class="row fpad70">
                <div class="col-lg-3 col-sm-6 fpad30">
                    <div class="zone__delivery">
                        <div class="zone__delivery__title">Самовывоз<br>
                            со склада </div>
                        <ul class="nav zone__delivery__list">
                            <li><span>Стоимость:</span> бесплатно</li>
                            <li><span>Способ доставки:</span> Москва,
                                Кавказский бульвар, 59</li>
                            <li><span>Часы работы:</span>  с 10:00 до 18:00
                                кроме выходных и праздничных
                                дней</li>
                            <li><span>Оплата:</span> на сайте </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 fpad30">
                    <div class="zone__delivery">
                        <div class="zone__delivery__title">Москва и Московская
                            область</div>
                        <ul class="nav zone__delivery__list">
                            <li><span>Стоимость:</span> бесплатно</li>
                            <li><span>Способ доставки:</span> курьер, пункт  <br>выдачи</li>
                            <li><span>Срок доставки:</span> 1 – 3 рабочих дня</li>
                            <li><span>Оплата:</span> на сайте / при получении</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 fpad30">
                    <div class="zone__delivery">
                        <div class="zone__delivery__title">Санкт-Петербург и<br>
                            Ленинградская<br>
                            область</div>
                        <ul class="nav zone__delivery__list">
                            <li><span>Стоимость:</span> бесплатно</li>
                            <li><span>Способ доставки:</span> курьер, пункт  <br>выдачи</li>
                            <li><span>Срок доставки:</span> 2 – 5 рабочих дня</li>
                            <li><span>Оплата:</span> на сайте</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 fpad30">
                    <div class="zone__delivery">
                        <div class="zone__delivery__title">Другие регионы
                            России</div>
                        <ul class="nav zone__delivery__list">
                            <li><span>Стоимость:</span> от 200 руб.,<br>
                                рассчитывается автоматически<br>
                                при оформлении заказа</li>
                            <li><span>Способ доставки:</span> курьер, пункт  <br>выдачи</li>
                            <li><span>Срок доставки:</span> от 2 рабочих дней</li>
                            <li><span>Оплата:</span> на сайте</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>