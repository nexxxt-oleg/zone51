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
    <div class="voessen__silver tpad0 fpad30">
        <div class="container voessen__product">
            <ul class="nav voessen__breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><span>Чистые газы в баллонах</span></li>
            </ul>
            <header class="voessen__product__header voessen__title-box voessen__text">
                <h1>Чистые газы в баллонах</h1>
            </header>
            <div class="voessen__product__sort-top">
                <div class="voessen__product__col-sort">
                    <label>Сортировать по:</label>
                    <div class="btn-group voessen__sort">
                        <button class="btn-sort dropdown-toggle" data-toggle="dropdown">
                            Алфавиту
                        </button>
                        <div class="dropdown-menu  dropdown-menu-right">
                            <a href="" class="dropdown-item">Алфавиту</a>
                            <a href="" class="dropdown-item active">Цене</a>
                            <a href="" class="dropdown-item"> По убыванию цены</a>
                            <a href="" class="dropdown-item">По новизне</a>
                            <a href="" class="dropdown-item">По популярности</a>
                            <a href="" class="dropdown-item">По скидке</a>
                        </div>
                    </div>
                    <div class="btn-group voessen__sort ml-3">
                        <button class="btn-sort dropdown-toggle" data-toggle="dropdown">
                            По формуле
                        </button>
                        <div class="dropdown-menu  dropdown-menu-right">
                            <a href="" class="dropdown-item">Алфавиту</a>
                            <a href="" class="dropdown-item active">Цене</a>
                            <a href="" class="dropdown-item"> По убыванию цены</a>
                            <a href="" class="dropdown-item">По новизне</a>
                            <a href="" class="dropdown-item">По популярности</a>
                            <a href="" class="dropdown-item">По скидке</a>
                        </div>
                    </div>

                </div>
                <ul class="nav nav--view">
                    <li>
                        <a href="" >
                            <svg width="18" height="18">
                                <use xlink:href="#svg-v-card"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="" class="active">
                            <svg width="18" height="18">
                                <use xlink:href="#svg-v-list"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="voessen__links-section fpad30">
                <div class="voessen__links-section__item">
                    <div class="voessen__links-section__col-formula">
                        <span class="voessen__product__formula">
                            N<sub>2</sub>
                        </span>
                        <span class="voessen__product__name">Азот</span>
                    </div>
                    <ul class="nav align-items-center">
                        <li><a href="">Азот нулевой ПНГ</a></li>
                        <li><a href="">Азот 5.0</a></li>
                        <li><a href="">Азот 5.5</a></li>
                        <li><a href="">Азот 6.0</a></li>
                    </ul>
                </div>
                <div class="voessen__links-section__item">
                    <div class="voessen__links-section__col-formula">
                        <span class="voessen__product__formula">
                            N<sub>2</sub>
                        </span>
                        <span class="voessen__product__name">Азот</span>
                    </div>
                    <ul class="nav align-items-center">
                        <li><a href="">Азот нулевой ПНГ</a></li>
                        <li><a href="">Азот 5.0</a></li>
                        <li><a href="">Азот 5.5</a></li>
                        <li><a href="">Азот 6.0</a></li>
                    </ul>
                </div>
                <div class="voessen__links-section__item">
                    <div class="voessen__links-section__col-formula">
                        <span class="voessen__product__formula">
                            N<sub>2</sub>
                        </span>
                        <span class="voessen__product__name">Азот</span>
                    </div>
                    <ul class="nav align-items-center">
                        <li><a href="">Азот нулевой ПНГ</a></li>
                        <li><a href="">Азот 5.0</a></li>
                        <li><a href="">Азот 5.5</a></li>
                        <li><a href="">Азот 6.0</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container tpad50 fpad50 voessen__text">
        <h2>Готовые газовые смеси ГСО-ПГС</h2>
        <p>Газы в баллонах - оптимальная форма газообеспечения при невысоком потреблении<br>
            Для клиентов, которым требуются небольшие количества газа и мобильное снабжение им, наиболее удобным
            является получение газа в баллонах.</p>

        <p>Газы в баллонах содержатся под давлением до 150 атмосфер. Емкость баллонов варьируется от 1 до 50
            литров.</p>
    </div>
    <?php
    include_once __DIR__ . '/inc/subscribe.php';
    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>


    <?php
    include_once __DIR__ . '/inc/script.php';
    ?>
</body>
</html>