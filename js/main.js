if (document.getElementById('sliderHome')) {
    let swiperHome = new Swiper('#sliderHome', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
}

if (document.getElementsByClassName("voessen__slider-product").length) {
    let swiperCatalog = new Swiper('.voessen__slider-product', {
        pagination: {

        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 4,
        lazy: true,
        observer: true,
        observeParents: true,
        //loop: true,
        //simulateTouch: false,
        breakpoints: {
            300: {
                slidesPerView: 'auto',
                centeredSlides: true,
                simulateTouch: true,
            },
            440: {
                slidesPerView: 2,
                centeredSlides: true,
                simulateTouch: true,
            },
            600: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 4,
            },
        }
    });
}
function countProduct(action, input) {
    if (document.getElementById(input)) {
        let count = parseInt(document.getElementById(input).value);
        if (action == 'plus') {
            document.getElementById(input).value = count + 1;
        }
        if (action == 'minus' && count > 1) {
            document.getElementById(input).value = count * 1 - 1;
        }
    }
}

function setEqualHeight(elements) {
    var mainDivs = document.getElementsByClassName(elements);
    var maxHeight = 0;
    for (var i = 0; i < mainDivs.length; ++i) {
        if (maxHeight < mainDivs[i].clientHeight) {
            maxHeight = mainDivs[i].clientHeight;
        }
    }
    for (var i = 0; i < mainDivs.length; ++i) {
        mainDivs[i].style.height = maxHeight + "px";
    }
}

if(window.screen.width < 991) {
    var menu = new MmenuLight(
        document.querySelector( '#menu' ),
        'all'
    );

    var navigator = menu.navigation({
        // selectedClass: 'Selected',
        // slidingSubmenus: true,
        // theme: 'dark',
        // title: 'Menu'
    });

    var drawer = menu.offcanvas({
        // position: 'left'
    });

    //	Open the menu.
    document.querySelector( 'a[href="#menu"]' )
        .addEventListener( 'click', evnt => {
            evnt.preventDefault();
            drawer.open();
        });
    document.getElementById('closeNav').addEventListener( 'click', evnt => {
        evnt.preventDefault();
        drawer.close();
    });
} else {
    function getScrollMenu() {
        let el = document.getElementById('fixNav');
        if(pageYOffset > 300) {
            el.classList.add('active');
        } else {
            el.classList.remove("active");
        }
    }
    getScrollMenu();
    window.addEventListener('scroll', function() {
        getScrollMenu();
    });
}


var wow = new WOW(
    {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animate__animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
            //box.classList.add("animate__animated");
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);
wow.init();