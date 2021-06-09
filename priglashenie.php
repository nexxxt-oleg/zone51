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
    <div class="voessen__page-bg" style="background-image: url(./img/bg-zapros.jpg)">
        <div class="container fpad50">
            <ul class="nav voessen__breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="/">Участвуем в госзакупках</a></li>
                <li><span>Пригласить к участию</span></li>
            </ul>
            <header class="voessen__title-box voessen__text voessen__text--white">
                <h1>Пригласить к участию</h1>
            </header>
            <div class="voessen__text voessen__text--white fpad15">
                <p>Для того чтобы пригласить нашу компанию на тендер, заполните следующую форму:</p>
            </div>

            <form action="">
                <div class="voessen__form voessen__form--pading voessen__form--shadow">

                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label for="inn" class="form-label">ИНН организации *</label>
                        <input type="text" class="form-control" id="inn" name="inn" required>
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label for="link" class="form-label">Ссылка на тендер *</label>
                        <input type="text" class="form-control" id="link" name="link" required>
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label for="data-end" class="form-label">Дата окончания подачи заявок на тендер *</label>
                        <input type="text" class="form-control" id="data-end" name="data-end" required>
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label for="fio" class="form-label">Контактное лицо *</label>
                        <input type="text" class="form-control" id="fio" name="fio" required>
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label for="tel" class="form-label">Контактный телефон</label>
                        <input type="tel" class="form-control" id="tel" name="tel" required>
                    </div>
                    <div class="voessen__form__inp-box voessen__form__inp-box--v2">
                        <label for="prim" class="form-label">Примечание</label>
                        <textarea name="prim" id="prim" class="form-control h-29"></textarea>
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="voessen__subscribe__form__ps voessen__subscribe__form__ps--v2">
                                Нажимая на кнопку «Получить», вы соглашаетесь с условиями
                                <br><a href="" target="_blank">Политики конфиденциальности</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <button class="voessen__btn-green w-100" type="submit">
                                ОТПРАВИТЬ
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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