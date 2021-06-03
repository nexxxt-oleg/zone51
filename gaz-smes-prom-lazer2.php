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
                <li><a href="">Газовые смеси</a></li>
                <li><span>Газовые смеси для промышленных лазеров</span></li>
            </ul>
            <header class="voessen__product__header voessen__title-box voessen__text">
                <h1>Газовые смеси для промышленных лазеров</h1>
            </header>
            <div class="row ">
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 fpad30">
                    <a href="" class="voessen__product__square">
                        <span class="voessen__product__formula">
                            O<sub>2</sub> + N<sub>2</sub>
                        </span>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 fpad30">
                    <a href="" class="voessen__product__square">
                        <span class="voessen__product__formula">
                            H<sub>2</sub> + He
                        </span>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 fpad30">
                    <a href="" class="voessen__product__square">
                        <span class="voessen__product__formula">
                            CO<sub>2</sub> + H<sub>2</sub>
                        </span>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 fpad30">
                    <a href="" class="voessen__product__square">
                        <span class="voessen__product__formula">
                            Ne + N<sub>2</sub> + CO<sub>2</sub>
                        </span>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 fpad30">
                    <a href="" class="voessen__product__square">
                        <span class="voessen__product__formula">
                            Ne + N<sub>2</sub> + CO<sub>2</sub> + H<sub>2</sub>
                        </span>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 fpad30">
                    <a href="" class="voessen__product__square">
                        <span class="voessen__product__formula">
                            Ne + N<sub>2</sub> + CO<sub>2</sub> + CO
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container tpad50 fpad50 voessen__text">
        <h2>Газовые смеси для промышленных лазеров</h2>
        <p>Газы в баллонах - оптимальная форма газообеспечения при невысоком потреблении<br>
            Для клиентов, которым требуются небольшие количества газа и мобильное снабжение им, наиболее удобным
            является получение газа в баллонах.</p>

        <p>Газы в баллонах содержатся под давлением до 150 атмосфер. Емкость баллонов варьируется от 1 до 50 литров.</p>
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