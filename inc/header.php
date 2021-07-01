<header class="zone__header">
    <div class="container">
        <div class="align-items-center row zone__header__row">
            <div class="col-lg-3 col-6">
                <a href="/" class="zone__header__logo">
                    <svg class="zone__header__logo__icon" width="170" height="23">
                        <use xlink:href="#svg-logo"></use>
                    </svg>
                </a>
            </div>
            <div class="col-lg-4 zone__header__col-nav" id="collapseNav">
                <div class="pc-hidden">
                    <div class="zone__header__mob-nav-top container">
                        <a href="/" class="zone__header__logo">
                            <svg class="zone__header__logo__icon" width="170" height="23">
                                <use xlink:href="#svg-logo"></use>
                            </svg>
                        </a>
                        <button data-toggle="collapse" data-target="#collapseNav" class="zone__header__mob-nav-top__close">
                            <svg  width="16" height="16">
                                <use xlink:href="#svg-close"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <ul class="nav zone__header__menu align-items-center">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                           id="dropdownMenuLink">Продукция</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Гарнитуры</a></li>
                            <li><a class="dropdown-item" href="#">Клавиатуры</a></li>
                            <li><a class="dropdown-item" href="#">Кресла</a></li>
                            <li><a class="dropdown-item" href="#">Мыши</a></li>
                            <li><a class="dropdown-item" href="#">Микрофоныи</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                           id="dropdownMenuLink2">О бренде</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Контакты</a></li>
                            <li><a class="dropdown-item" href="#">Где купить</a></li>
                            <li><a class="dropdown-item" href="#">Гарантия</a></li>
                            <li><a class="dropdown-item" href="#">Новости</a></li>
                            <li><a class="dropdown-item" href="#">Блог</a></li>
                        </ul>
                    </li>

                    <li class="dropdown pc-hidden">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                           id="dropdownMenuLink3">Магазин</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                            <li><a class="dropdown-item" href="#">Оплата и доставка</a></li>
                            <li><a class="dropdown-item" href="#">Политика конфиденциальности </a></li>
                        </ul>
                    </li>
                </ul>
                <div class="pc-hidden">
                    <div class="zone__header__mob-nav-bottom">
                        <?php
                        include __DIR__ . '/socset.php';
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 only-pc">
                <?php
                include __DIR__ . '/socset.php';
                ?>
            </div>
            <div class="col-lg-2 col-6">
                <ul class="nav justify-content-center zone__header__ico">
                    <li>
                        <button data-toggle="collapse" data-target="#collapseSearch" class="collapsed">
                            <svg class="zone__icon" width="24" height="24">
                                <use xlink:href="#svg-search"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <a href="" class="zone__header__cart">
                            <span class="zone__header__cart__count">3</span>
                            <svg class="zone__icon" width="24" height="24">
                                <use xlink:href="#svg-cart"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="pc-hidden">
                        <button data-toggle="collapse" data-target="#collapseNav" class="zone__header__mob-nav-open">
                            <svg  width="20" height="17">
                                <use xlink:href="#svg-mob-nav"></use>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="collapse collapse--search" id="collapseSearch">
        <div class="zone__search-box">
            <div class="container">
                <div class="zone__search-box__form">
                    <form action="">
                        <input type="text" required placeholder="Поиск" class="zone__search-box__inp">
                        <button class="zone__search-box__submit">
                            <svg width="16" height="16">
                                <use xlink:href="#svg-search"></use>
                            </svg>
                        </button>
                    </form>
                    <button data-toggle="collapse" data-target="#collapseSearch" class="zone__search-box__close">
                        <svg class="zone__icon" width="16" height="16">
                            <use xlink:href="#svg-close"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>


<?php
/*

<div class="zone__header-mob">
    <div class="container">
        <div class="zone__header-mob__row">
            <div class="zone__header-mob__row__left">
                <div class="zone__header-mob__col-nav-open">
                    <a href="#menu">
                        <svg width="20" height="14">
                            <use xlink:href="#svg-mob-nav-open"></use>
                        </svg>
                    </a>
                </div>
                <div class="zone__header-mob__col-search-open">
                    <a href="#search">
                        <svg width="20" height="20">
                            <use xlink:href="#svg-search"></use>
                        </svg>
                    </a>
                </div>
                <div class="zone__header-mob__col-phone">
                    <a href="tel:+74951280758">
                        <svg width="20" height="20">
                            <use xlink:href="#svg-phone"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="zone__header-mob__row__center">
                <a href="/" class="logo-mob">
                    <svg width="80" height="10">
                        <use xlink:href="#logo-footer"></use>
                    </svg>
                </a>
            </div>
            <div class="zone__header-mob__row__right">
                <ul class="nav nav__shop align-items-center w-100 justify-content-between">
                    <li>
                        <a href="">
                            <svg class="zone__header__logo__icon" width="20" height="20">
                                <use xlink:href="#svg-fav"></use>
                            </svg>
                            <span class="nav__shop__count">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg class="zone__header__logo__icon" width="20" height="20">
                                <use xlink:href="#svg-cart"></use>
                            </svg>
                            <span class="nav__shop__count">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg class="zone__header__logo__icon" width="15" height="20">
                                <use xlink:href="#svg-user"></use>
                            </svg>
                            <span class="nav__shop__count nav__shop__count--empty"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
*/
?>
