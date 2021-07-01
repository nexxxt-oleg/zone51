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
    <div class="zone__page zone__page--guarantee">
        <div class="container">
            <ul class="zone__page__breadcrumbs nav">
                <li>
                    <a href="/">Z51.ru</a>
                </li>
                <li>
                    <span>ГАРАНТИЯ</span>
                </li>
            </ul>
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <h1 class="zone__title">ГАРАНТИЯ</h1>
                    <div class="zone__text">
                        <p><b>Благодарим вас за приобретение продукции ZONE 51!</b></p>
                        <br><p>Гарантийный срок зависит от типа приобретенной продукции и указан в руководстве пользователя или инструкции по сборке.</p>
                        <br><p>Просьба сохранять кассовый чек на покупку до окончания гарантийного срока.</p>
                        <br><p>Если в течение гарантийного срока устройство вышло из строя по причине заводского брака, то устройство подлежит замене.</p>
                        <p>*В соответствии со ст. 18 Закона «О защите прав потребителей» предварительно собранная мебель не подлежит замене на любую аналогичную (в том числе при желании корректировки форм, цвета или размеров). А значит возврат собранной мебели в соответствии с законодательством Российской Федерации невозможен.</p>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <figure class="zone__guarantee-logo">
                        <img src="./img/zone.svg" alt="" width="334" height="290">
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="container tpad100">
        <div class="zone__text row">
            <div class="col-12 fpad80">
                <h2 class="zone__title-line">ЧТО ДЕЛАТЬ ПРИ ВОЗНИКНОВЕНИИ ГАРАНТИЙНОГО СЛУЧАЯ?</h2>
                <p>Оставить заявку в службу технической поддержки.</p>
                <br><p>Приложить фотографии документов на покупку. Сообщить модель и серийный номер устройства. Описать проблему и, если необходимо, выслать фотографии или видео, поясняющие ее.</p>
                <br><p>Дождаться решения службы технической поддержки (2-3 рабочих дня). В спорных случаях служба технической поддержки имеет право взять сломанное изделие на экспертизу и обязуется провести ее в течение 20 календарных дней.</p>
                <br><p>В случае обнаружения заводского брака, все расходы по замене бракованного изделия служба технической поддержки возьмет на себя.</p>
                <div class="tpad40">
                    <button class="zone__btn zone__btn--mob-w100"><span>ОСТАВИТЬ ЗАЯВКУ</span></button>
                </div>
            </div>
            <div class="col-12">
                <h2 class="zone__title-line">ГАРАНТИЯ НЕ РАСПРОСТРАНЯЕТСЯ НА НЕИСПРАВНОСТИ,<br>
                    ВОЗНИКШИЕ В РЕЗУЛЬТАТЕ:</h2>
            </div>
            <div class="col-xl-7 col-lg-6 fpad30">
                <ul>
                    <li>несоблюдения правил эксплуатации и использования</li>
                    <li>наличия механических повреждений</li>
                    <li>попадания внутрь изделия влаги, песка, насекомых</li>
                    <li>самостоятельного ремонта</li>
                    <li>если на изделии будет изменен, стерт, удален серийный номер</li>
                </ul>
            </div>
            <div class="col-xl-5 col-lg-6 fpad80">
                <div class="zone__alert-box">
                    <div class="zone__alert-box__top"></div>
                    <p>Служба технической поддержки снимает с себя
                        ответственность за возможный вред, прямо или
                        косвенно нанесенный проданным изделием людям,
                        домашним животным или имуществу, в случае если
                        это произошло в результате несоблюдения правил и
                        условий эксплуатации.</p>
                    <div class="zone__alert-box__bottom"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 fpad100">
                <h2 class="zone__title-line">CЛУЖБА ТЕХНИЧЕСКОЙ ПОДДЕРЖКИ:</h2>
                <div class="zone__support">
                    <div class="zone__support__item zone__support__item--time">
                        <p><span class="fonts16">График работы: с 10-00 до 18-00</span> по московскому времени, кроме выходных и праздничных дней</p>
                    </div>
                    <div class="zone__support__item zone__support__item--address">
                        <span class="fonts16">123458, г. Москва, Маршала Прошлякова 30</span>
                        <p>Уточнить оперативную информацию по вопросам гарантии можно по телефону</p>
                    </div>
                    <div class="zone__support__item zone__support__item--phone">
                        <a href="tel:+74952690911" class="fonts16">+7 (495) 269-09-11</a>
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