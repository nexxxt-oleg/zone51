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
    <div class="voessen__page404">
        <div class="container fpad50">
            <ul class="nav voessen__breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><span>Страница 404</span></li>
            </ul>
            <div class="row tpad85 fpad80">
                <div class="col-lg-6 col-xl-5 fpad30">
                    <div class="h2 fpad30">Похоже, мы не можем найти
                        нужную вам страницу :(</div>
                    <a href="/" class="voessen__btn-green">ПЕРЕЙТИ НА ГЛАВНУЮ</a>
                </div>
                <div class="col-lg-6 col-xl-7 d-flex justify-content-end">
                    <img
                            src="./img/404.png"
                            data-src="./img/404.png"
                            data-srcset="./img/404@2.png 2x"
                            alt=""
                    />
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