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
                    <span>Корзина</span>
                </li>
            </ul>
            <h1 class="zone__title">Корзина</h1>

            <div class="zone__cart fpad100">
                <div class="zone__cart__item">
                    <ul class="zone__product__label nav flex-column">
                        <li>
                            <span class="zone__product__label__sale">%</span>
                        </li>
                    </ul>
                    <div class="row zone__cart__item__row">
                        <div class="col-xl-2 col-lg-2 col-sm-6 col-6">
                            <a href="">
                                <figure class="zone__item-product__img">
                                    <img src="./img/t1.png" data-src="./img/t1.png" data-srcset="./img/t1@2.png 2x"
                                         alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-sm-6 col-6">
                            <div class="d-flex align-items-center zone__cart__item__col-title">
                                <a href="" class="zone__item-product__title">
                                    Кресло<br>
                                    ZONE 51 Gravity
                                </a>
                                <div class="zone__cart__item__col-color">
                                    <img src="./img/color1.jpg" alt="">
                                </div>
                                <div class="zone__cart__item__col-price">
                                    <div class="zone__product__price__old-value">
                                        33 000 <span class="b-rub">Р</span>
                                    </div>
                                    <div class="zone__product__price__value">
                                        30 000 <span class="b-rub">Р</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-sm-12 col-12">
                            <div class="d-flex align-items-center zone__cart__item__col-itog-price">
                                <div class="zone__cart__item__col-count">
                                    <div class="zone__box-quantity">
                                        <a class="zone__box-quantity__nav zone__box-quantity__nav--minus"></a>
                                        <input type="text" readonly class="zone__box-quantity__inp" value="1">
                                        <a class="zone__box-quantity__nav zone__box-quantity__nav--plus"></a>
                                    </div>
                                </div>
                                <div class="zone__cart__item__col-itog">
                                    <div class="zone__product__price__old-value">
                                        33 000 <span class="b-rub">Р</span>
                                    </div>
                                    <div class="zone__product__price__value">
                                        30 000 <span class="b-rub">Р</span>
                                    </div>
                                </div>
                                <a class="zone__cart__item__del">
                                    <svg width="18" height="18">
                                        <use xlink:href="#svg-close"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zone__cart__item">
                    <div class="row zone__cart__item__row">
                        <div class="col-xl-2 col-lg-2 col-sm-6 col-6">
                            <a href="">
                                <figure class="zone__item-product__img">
                                    <img src="./img/t1.png" data-src="./img/t1.png" data-srcset="./img/t1@2.png 2x"
                                         alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-sm-6 col-6">
                            <div class="d-flex align-items-center zone__cart__item__col-title">
                                <a href="" class="zone__item-product__title">
                                    Кресло<br>
                                    ZONE 51 Gravity
                                </a>
                                <div class="zone__cart__item__col-color">
                                    <img src="./img/color1.jpg" alt="">
                                </div>
                                <div class="zone__cart__item__col-price">
                                    <div class="zone__product__price__value">
                                        30 000 <span class="b-rub">Р</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-sm-12 col-12">
                            <div class="d-flex align-items-center zone__cart__item__col-itog-price">
                                <div class="zone__cart__item__col-count">
                                    <div class="zone__box-quantity">
                                        <a class="zone__box-quantity__nav zone__box-quantity__nav--minus"></a>
                                        <input type="text" readonly class="zone__box-quantity__inp" value="1">
                                        <a class="zone__box-quantity__nav zone__box-quantity__nav--plus"></a>
                                    </div>
                                </div>
                                <div class="zone__cart__item__col-itog">
                                    <div class="zone__product__price__value">
                                        30 000 <span class="b-rub">Р</span>
                                    </div>
                                </div>
                                <a class="zone__cart__item__del">
                                    <svg width="18" height="18">
                                        <use xlink:href="#svg-close"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="zone__cart__promo">
                            <div class="zone__cart__promo__caption">У меня есть промо-код</div>
                            <div class="zone__cart__promo__form">
                                <div class="zone__cart__promo__form__inp">
                                    <input type="text">
                                </div>
                                <div class="zone__cart__promo__form__submit">
                                    <button class="zone__btn zone__btn--promo"><span>ПРИМЕНИТЬ</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-flex">
                        <div class="zone__cart__footer">
                            <dl class="zone__cart__footer__row">
                                <dt>Товары <span class="zone__cart__footer__count">3</span></dt>
                                <dd>30 000 <span class="b-rub">Р</span></dd>
                            </dl>
                            <dl class="zone__cart__footer__row">
                                <dt>Скидка</dt>
                                <dd>0 <span class="b-rub">Р</span></dd>
                            </dl>
                            <dl class="zone__cart__footer__row">
                                <dt><b>Итого</b></dt>
                                <dd><b>30 000 <span class="b-rub">Р</span></b></dd>
                            </dl>
                            <div class="zone__cart__footer__btn">
                                <button class="zone__btn zone__btn--w100"><span>ОФОРМИТЬ ЗАКАЗ</span></button>
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
</body>
</html>