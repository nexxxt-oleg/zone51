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
                <li><span>Данные для государственных органов</span></li>
            </ul>
            <header class="voessen__product__header voessen__title-box voessen__text">
                <h1>Данные для государственных органов</h1>
            </header>

            <div class="accordion">
                <div class="voessen__faq">
                    <div class="voessen__faq__title" data-toggle="collapse" data-target="#collapse1_tab1">
                        Часто задаваемый вопрос
                    </div>
                    <div id="collapse1_tab1" class="collapse show">
                        <div class="voessen__faq__body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
                <div class="voessen__faq">
                    <div class="voessen__faq__title collapsed" data-toggle="collapse" data-target="#collapse2_tab1">
                        Часто задаваемый вопрос
                    </div>
                    <div id="collapse2_tab1" class="collapse">
                        <div class="voessen__faq__body">
                            <p>При входе на сайт ваш город определится автоматически, Акции по федеральным
                                округам России могут различаться.</p>
                            <p>В интернет-магазине КИБЕРСЛОН регулярно проводятся Акции на товары и услуги.
                                Узнать подробно об Акциях и сроках их проведения можно из Главного меню. При
                                клике на кнопку "% Акции" перейдите на список Акций.</p>
                        </div>
                    </div>
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