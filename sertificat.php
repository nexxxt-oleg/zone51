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
    <div class="voessen__silver tpad0 fpad50">
        <div class="container ">
            <ul class="nav voessen__breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><span>Сертификаты и лицензии</span></li>
            </ul>
            <header class="voessen__product__header voessen__title-box voessen__text">
                <h1>Сертификаты и лицензии</h1>
            </header>
            <ul class="nav flex-column nav--file-list">
                <li>
                    <a href="" download="" class="voessen__download-box">
                        <span class="voessen__download-box__title">Название сертификата</span>
                        <div class="voessen__download-box__ico">
                            <svg width="18" height="24">
                                <use xlink:href="#svg-file"></use>
                            </svg>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" download="" class="voessen__download-box">
                        <span class="voessen__download-box__title">Название сертификата</span>
                        <div class="voessen__download-box__ico">
                            <svg width="18" height="24">
                                <use xlink:href="#svg-file"></use>
                            </svg>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" download="" class="voessen__download-box">
                        <span class="voessen__download-box__title">Название сертификата</span>
                        <div class="voessen__download-box__ico">
                            <svg width="18" height="24">
                                <use xlink:href="#svg-file"></use>
                            </svg>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" download="" class="voessen__download-box">
                        <span class="voessen__download-box__title">Название сертификата</span>
                        <div class="voessen__download-box__ico">
                            <svg width="18" height="24">
                                <use xlink:href="#svg-file"></use>
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
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