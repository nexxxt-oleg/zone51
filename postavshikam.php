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
            <li><a href="/">Поставщикам</a></li>
            <li><span>Поставщикам</span></li>
        </ul>
        <header class="voessen__title-box voessen__text">
            <h1>Поставщикам</h1>
        </header>
        <div class="voessen__text">
            <p>Если вы хотите стать нашим поставщиком — присылайте свои предложения на специальную почту отдела закупок:</p>

            <p><a href="mailto:p@voessen.com" class="fots20"><span class="voessen__link-border">p@voessen.com</span></a></p>

            <p>или воспользуйтесь формой ниже</p>
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