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
    <div class="voessen__full-banner" style="background-image: url(./img/bg-gaz1.jpg)">
        <div class="container">
            <div class="voessen__full-banner__wrap">
                <ul class="nav voessen__breadcrumbs">
                    <li><a href="/">Главная</a></li>
                    <li><span>Газовые смеси</span></li>
                </ul>
                <div class="voessen__full-banner__wrap__desc row">
                    <div class="voessen__text voessen__text--white col-xl-8">
                        <h1>Газовые смеси</h1>
                        <p>ООО «Фёссен Эм Ай И» является ведущим поставщиком газовых смесей, используемых в самых
                            различных отраслях промышленности и научных исследований.</p>
                        <div class="tpad15">
                            <a href="/" class="voessen__btn-green">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row fpad50">
            <div class="col-lg-6 fpad30">
                <a href="" class="voessen__subcat-link" style="background-image: url(./img/cat1.jpg)">
                    <div class="voessen__subcat-link__wrap">
                        <div class="voessen__subcat-link__title">
                            Поверочные газовые смеси ГСО-ПГС, калибровочные газовые смеси
                        </div>
                        <span class="voessen__btn-green">ПОДРОБНЕЕ</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 fpad30">
                <a href="" class="voessen__subcat-link" style="background-image: url(./img/cat2.jpg)">
                    <div class="voessen__subcat-link__wrap">
                        <div class="voessen__subcat-link__title">
                            Газовые смеси для промышленных лазеров
                        </div>
                        <span class="voessen__btn-green">ПОДРОБНЕЕ</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 fpad30">
                <a href="" class="voessen__subcat-link" style="background-image: url(./img/cat3.jpg)">
                    <div class="voessen__subcat-link__wrap">
                        <div class="voessen__subcat-link__title">
                            Эксимерные газовые смеси для
                            офтальмологических лазеров
                        </div>
                        <span class="voessen__btn-green">ПОДРОБНЕЕ</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 fpad30">
                <a href="" class="voessen__subcat-link" style="background-image: url(./img/cat4.jpg)">
                    <div class="voessen__subcat-link__wrap">
                        <div class="voessen__subcat-link__title">
                            Газовые смеси для медицинского применения
                        </div>
                        <span class="voessen__btn-green">ПОДРОБНЕЕ</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row fpad50">
            <div class="col-12 fpad30 voessen__text">
                <h2>Газовые смеси (SEO текст)</h2>
                <p>Газы в баллонах - оптимальная форма газообеспечения при невысоком потреблении<br>
                    Для клиентов, которым требуются небольшие количества газа и мобильное снабжение им, наиболее удобным является получение газа в баллонах.</p>

                <p>Газы в баллонах содержатся под давлением до 150 атмосфер. Емкость баллонов варьируется от 1 до 50 литров.</p>
            </div>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/inc/subscribe.php';
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>