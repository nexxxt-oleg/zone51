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
                    <span>Страница 404</span>
                </li>
            </ul>
            <div class="row align-items-center fpad100 flex-xl-row flex-lg-row flex-column-reverse">
                <div class="col-lg-6">
                    <div class="zone__page__404-desc zone__text">
                        <h1>Страница не найдена</h1>
                        <p>Ой! Кажется, мы заблудились.<br>
                            Вернуться обратно?</p>
                        <div class="tpad30 zone__page__404-desc__link">
                            <a href="" class="zone__btn zone__btn--w100">
                                <span>ВОЗВРАЩАЕМСЯ</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="zone__page__404-img">
                        <img src="./img/404.png" alt="">
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
