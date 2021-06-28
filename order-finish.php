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
   <div class="voessen__silver">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-xl-6 col-lg-8">
                   <div class="voessen__order-finish">
                       <img src="./img/finish.svg" alt="" width="48" height="48" class="voessen__order-finish__ico">
                       <div class="voessen__order-finish__wrap">
                           <h1>Ваш заказ № 1000-400-50 успешно оформлен!</h1>
                           <p>Спасибо за заказ, наши менеджеры свяжутся с вами в ближайшее время.</p>
                           <p>Детали вашего заказа высланы на указанную электронную почту.</p>
                       </div>
                       <div class="voessen__order-finish__footer">
                           <a href="/" class="voessen__btn-green">ПЕРЕЙТИ НА ГЛАВНУЮ</a>
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