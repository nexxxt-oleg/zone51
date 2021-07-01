<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>zone</title>
</head>
<body class="zone">
<div class="zone__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>
    <aside class="zone__home-slider">
        <div class="swiper-container" id="sliderHome">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="zone__home-slider__item zone__home-slider__item--sl1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="zone__home-slider__item__desc">
                                        <h2 class="zone__home-slider__item__title">
                                            Кресло<br>
                                            ZONE 51 CYBERPUNK
                                        </h2>
                                        <ul class="zone__home-slider__item__adv nav">
                                            <li>Цветовые решения в стиле Киберпанк</li>
                                            <li>Долговечные материалы отделки</li>
                                            <li>Надежная конструкция и элементы управления</li>
                                        </ul>
                                        <div class="zone__home-slider__item__link">
                                            <a href="/" class="zone__btn">
                                                <span>ПОДРОБНЕЕ</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <style>
                        .zone__home-slider__item--sl1 {
                            background-image: url("./img/bg1.jpg");
                        }
                        @media screen and (max-width: 768px) {
                            .zone__home-slider__item--sl1 {
                                background-image: url("./img/bg1_mob.jpg");
                            }
                        }
                    </style>
                </div>
                <div class="swiper-slide">
                    <div class="zone__home-slider__item zone__home-slider__item--sl2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="zone__home-slider__item__desc">
                                        <h2 class="zone__home-slider__item__title">
                                            Кресло<br>
                                            ZONE 52 CYBERPUNK
                                        </h2>
                                        <ul class="zone__home-slider__item__adv nav">
                                            <li>Цветовые решения в стиле Киберпанк</li>
                                            <li>Долговечные материалы отделки</li>
                                            <li>Надежная конструкция и элементы управления</li>
                                        </ul>
                                        <div class="zone__home-slider__item__link">
                                            <a href="/" class="zone__btn">
                                                <span>ПОДРОБНЕЕ</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <style>
                        .zone__home-slider__item--sl2 {
                            background-image: url("./img/bg1.jpg");
                        }

                        @media screen and (max-width: 768px) {
                            .zone__home-slider__item--sl2 {
                                background-image: url("./img/bg1_mob.jpg");
                            }
                        }
                    </style>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </aside>

    <div class="container fpad100">
        <div class="row tpad100">
            <div class="col-lg-4 order-sm-1 order-lg-1">
                <div class="fpad30">
                    <a href="" class="zone__category-link" style="background-image: url(./img/cat1.jpg)">
                        Гарнитуры
                    </a>
                </div>
                <div class="fpad30">
                    <a href="" class="zone__category-link" style="background-image: url(./img/cat2.jpg)">
                        Клавиатуры
                    </a>
                </div>
            </div>
            <div class="col-lg-4 fpad30 order-sm-0 order-lg-2">
                <a href="" class="zone__category-link zone__category-link--big" style="background-image: url(./img/cat3.jpg)">
                    Кресла
                </a>
            </div>
            <div class="col-lg-4 order-sm-1 order-lg-3">
                <div class="fpad30">
                    <div class="fpad30">
                        <a href="" class="zone__category-link" style="background-image: url(./img/cat4.jpg)">
                            МЫШИ
                        </a>
                    </div>
                    <div class="fpad30">
                        <a href="" class="zone__category-link" style="background-image: url(./img/cat5.jpg)">
                            Микрофоны
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="zone__title">
            Новинки
        </div>
        <?php
        include_once __DIR__ . '/inc/slider.php';
        ?>
        <div class="zone__title">
            Новости
        </div>
        <?php
        include_once __DIR__ . '/inc/news.php';
        ?>
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