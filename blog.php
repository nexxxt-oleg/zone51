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
                    <span>Блог</span>
                </li>
            </ul>
            <h1 class="zone__title">Блог</h1>
            <div class="row">
                <?php
                include __DIR__ . '/inc/item-blog.php';
                include __DIR__ . '/inc/item-blog.php';
                include __DIR__ . '/inc/item-blog.php';
                include __DIR__ . '/inc/item-blog.php';
                include __DIR__ . '/inc/item-blog.php';
                include __DIR__ . '/inc/item-blog.php';
                ?>
            </div>
            <?php
            include __DIR__ . '/inc/paginate.php';
            ?>
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