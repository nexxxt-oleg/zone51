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
                    <span>Контакты</span>
                </li>
            </ul>
            <h1 class="zone__title">Контакты</h1>
            <div class="zone__text fpad30">
                <p>Интернет-магазин обслуживает ООО «бизнес-фабрика» - эксклюзивный дистрибьютор продукции zone 51 в России.</p>
            </div>
            <div class="row justify-content-between fpad50">
                <div class="col-lg-7 col-xl-6 fpad30">
                    <div class="zona__contacts">
                        <div class="fonts24">Юридический и фактический адреса</div>
                    </div>
                    <div class="zone__text">
                        <div class="zona__contacts zona__contacts__item zona__contacts__item--address">
                            <span class="fonts16">123458, г. Москва, ул. Маршала Прошлякова, д. 30, офис 503</span>
                            <p>(в офисе находится только сервис-центр – продажи из офиса не
                                осуществляются – см. раздел «Оплата и доставка»)
                            </p>
                        </div>

                        <div class="zona__contacts zona__contacts__item zona__contacts__item--phone">
                            <a href="tel:+74952690911" >+7 (495) 269-09-11</a>
                        </div>

                        <div class="zona__contacts__item zona__contacts__item--email">
                            <p class="fpad15">Общие вопросы: <a class="text-white" href="mailto:hi@z51.ru">hi@z51.ru</a></p>
                            <p class="fpad15">Оптовые продажи: <a class="text-white" href="mailto:opt@f-2-b.ru">opt@f-2-b.ru</a></p>
                            <p>Маркетинг, реклама и PR: <a class="text-white" href="mailto:marketing@z51.ru">marketing@z51.ru</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 fpad30">
                    <div class="zona__contacts">
                        <div class="fonts24">Реквизиты компании</div>
                    </div>
                    <div class="zone__text">
                        <p>ИНН 7714631170<br>
                            КПП 773401001<br>
                            ОКПО 93289861<br>
                            ОКТМО 45370000<br>
                            ОГРН 1057749619509<br>
                            ОКВЭД 51.43.22</p>
                    </div>
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
<script src="./js/product.js"></script>

</body>
</html>