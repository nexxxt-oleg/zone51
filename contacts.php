<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>VOESSEN</title>
</head>
<body class="voessen">
<div class="voessen__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>

    <div class="container fpad50">
        <ul class="nav voessen__breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><span>Контакты</span></li>
        </ul>
        <header class="voessen__title-box voessen__text">
            <h1>Контакты</h1>
        </header>
        <div class="border-bottom voessen__contacts-info">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fpad30">
                    <div class="voessen__label-info">
                        Телефоны:
                    </div>
                    <a href="tel:88005515340" class="fots20">8 800 551-53-40</a><br>
                    <a href="tel:+74951280758" class="fots20">+7 495 128-07-58</a>
                </div>
                <div class="col-sm-6 col-lg-3 fpad30">
                    <div class="voessen__label-info">
                        Электронная почта:
                    </div>
                    <a href="mailto:info@voessen.com" class="fots20"><span class="voessen__link-border">info@voessen.com</span></a>
                </div>
                <div class="col-sm-6 col-lg-3 fpad30">
                    <div class="voessen__label-info">
                        Время работы:
                    </div>
                    <div class="fots20">
                        Пн–Пт 9:00 – 18:00<br>
                        <small>(время по Москве)</small>
                    </div>

                    <div class="voessen__contacts-info__time">
                        Существует большая вероятность,
                        что в нерабочее время кто–то есть в
                        офисе и обязательно вам поможет.<br>
                        Звоните!
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fpad30">
                    <div class="voessen__label-info">
                        Следите за нами в соцсетях:
                    </div>
                    <ul class="nav nav--footer-soc">
                        <li>
                            <a href="" target="_blank" class="nav--footer-soc__item">
                                <svg width="13" height="24">
                                    <use xlink:href="#svg-face"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" class="nav--footer-soc__item">
                                <svg width="24" height="24">
                                    <use xlink:href="#svg-inst"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 tpad30 voessen__text">
                <div class="voessen__label-info">
                    Адрес офиса:
                </div>
                <div class="fots20">
                    Москва, Научный проезд, 17
                </div>
                <div class="voessen__contacts-map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa273b3e5ae116b33a90c0321bc0120578bdf7284b95fb36be070413b2c4d3e08&amp;width=100%25&amp;height=270&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
                <a href="" class="voessen__link-border">Подробнее о том, как нас найти</a>
            </div>
            <div class="col-lg-6 tpad30 voessen__text">
                <div class="voessen__label-info">
                    Адрес склада:
                </div>
                <div class="fots20">
                    Москва, Перовский проезд, 35 с24
                </div>
                <div class="voessen__contacts-map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A39c1c702e515e33a3253674be70521c8ea1e862945ad34c2a0318fd19ee64e88&amp;width=100%25&amp;height=270&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
                <a href="" class="voessen__link-border">Подробнее о том, как нас найти</a>
            </div>
        </div>
    </div>
    <?php
    include_once __DIR__ . '/inc/callback.php';
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>