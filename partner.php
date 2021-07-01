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
                    <span>Где купить</span>
                </li>
            </ul>
            <h1 class="zone__title">Где купить</h1>
            <div class="zone__text fpad30">
                <p>Продукцию ZONE 51. можно приобрести у наших партнеров:</p>
            </div>
            <div class="row fpad70">
                <div class="col-lg-4 fpad30">
                    <a href="" class="zone__partners">
                        <div class="zone__partners__left"></div>
                        <img src="./img/part1.png" alt="">
                        <div class="zone__partners__right"></div>
                    </a>
                </div>
                <div class="col-lg-4 fpad30">
                    <a href="" class="zone__partners">
                        <div class="zone__partners__left"></div>
                        <img src="./img/part2.png" alt="">
                        <div class="zone__partners__right"></div>
                    </a>
                </div>
                <div class="col-lg-4 fpad30">
                    <a href="" class="zone__partners">
                        <div class="zone__partners__left"></div>
                        <img src="./img/part3.png" alt="">
                        <div class="zone__partners__right"></div>
                    </a>
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