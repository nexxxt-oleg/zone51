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
    <div class="container">
        <ul class="nav voessen__breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><span>Вакансии</span></li>
        </ul>
        <header class="voessen__title-box voessen__text">
            <h1>Вакансии</h1>
        </header>
        <div class="row">
            <div class="col-lg-6 fpad30">
                <div class="voessen__jobs-item">
                    <svg class="voessen__jobs-item__icon" width="48" height="48">
                        <use xlink:href="#svg-hh"></use>
                    </svg>
                    <h2 class="voessen__jobs-item__title">Открытые вакансии</h2>
                    <div class="voessen__jobs-item__text">
                        Хотите работать в нашей компании?<br>
                        Все вакансии на сайте hh.ru
                    </div>
                    <div class="voessen__jobs-item__btn">
                        <a href="" target="_blank" class="voessen__btn-green">Перейти на hh.ru</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fpad30">
                <div class="voessen__jobs-item">
                    <svg class="voessen__jobs-item__icon" width="37" height="48">
                        <use xlink:href="#svg-jobs"></use>
                    </svg>
                    <h2 class="voessen__jobs-item__title">Отправить резюме</h2>
                    <div class="voessen__jobs-item__text">
                        Откликайтесь на портале или присылайте <br>
                        ваши резюме
                    </div>
                    <div class="voessen__jobs-item__btn">
                        <a href="" target="_blank" class="voessen__btn-green">Отправить резюме</a>
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