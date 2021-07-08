document.addEventListener("DOMContentLoaded", () => {
    if (document.getElementById('sliderHome')) {
        let swiperHome = new Swiper('#sliderHome', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    if (document.getElementsByClassName("zone__slider-product").length) {
        let swiperCatalog = new Swiper('.zone__slider-product', {
            pagination: {},
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
            slidesPerView: 4,
            //lazy: true,
            observer: true,
            observeParents: true,
            spaceBetween: 10,
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: false,
            },
            //loop: true,
            //simulateTouch: false,
            breakpoints: {
                300: {
                    slidesPerView: 'auto',
                    //centeredSlides: true,
                    simulateTouch: true,
                    spaceBetween: 0,
                },
                574: {
                    slidesPerView: 'auto',
                    spaceBetween: 0,
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
            },
            on: {
                init: function () {
                    setEqualHeight('zone__item-product__desc');
                },
            },
        });
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
            mainDivs[i].style.minHeight = maxHeight + "px";
        }
    }

    if (window.screen.width > 991) {

        function getScrollMenu() {
            if(document.getElementById('productDescNav')) {
                let el = document.getElementById('productDescNav');
                if (pageYOffset > 250) {
                    el.classList.add('active');
                } else {
                    el.classList.remove("active");
                }
            }
        }

        getScrollMenu();
        window.addEventListener('scroll', function () {
            getScrollMenu();
        });

    }


    if (document.getElementById('lightgallery')) {
        lightGallery(document.getElementById('lightgallery'), {
            download: false,
            counter: false,
            selector: 'a'
        });
    }


    if (document.getElementById('sliderImages')) {
        let sliderImages = new Swiper('#sliderImages', {
            //loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 3,
            spaceBetween: 30,
            on: {
                init: function () {
                    lightGallery(document.getElementById('sliderImages'), {
                        download: false,
                        counter: false,
                        selector: 'a'
                    });
                },
            },
        });
    }

    if (document.getElementById('sliderCertificates')) {
        let sliderImages = new Swiper('#sliderCertificates', {
            //loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 5,
            spaceBetween: 30,
            on: {
                init: function () {
                    lightGallery(document.getElementById('sliderCertificates'), {
                        download: false,
                        counter: false,
                        selector: 'a'
                    });
                },
            },
        });
    }


    if(document.getElementById('jsOpenFilter')) {
        document.getElementById('jsOpenFilter').addEventListener('click', evnt => {
            evnt.preventDefault();
            document.getElementById('mobFilter').classList.add('open');
        });
        document.getElementById('jsCloseFilter').addEventListener('click', evnt => {
            evnt.preventDefault();
            document.getElementById('mobFilter').classList.remove('open');
        });
    }

    if(document.getElementById('oplataTab')) {
        let tabEl =  document.getElementsByClassName('zone__link-tab');
        let activeTab = document.getElementById('activeTab');
        let leftContent = document.getElementById('oplataTab').getBoundingClientRect().left;
        for (let i = tabEl.length - 1; i >= 0; i--) {
            tabEl[i].addEventListener('shown.bs.tab', function (event) {
                event.target // newly activated tab
                event.relatedTarget // previous active tab
                let leftPositionLine = tabEl[i].getBoundingClientRect().left - leftContent;
                //console.log(leftContent);
                activeTab.style.left = leftPositionLine + 'px';
                activeTab.style.width = tabEl[i].offsetWidth + 'px';
            });
        }
        activeTab.style.width = document.getElementById('oplataTab').firstElementChild.offsetWidth + 'px';
    }

});


function getFileName() {
    let file = document.getElementById('uploaded-file').value;
    file = file.replace(/\\/g, '/').split('/').pop();
    document.getElementById('file-name').innerHTML = 'Имя файла: ' + file;
}



function hoverMenu(e) {
    if (window.screen.width > 991) {
        let searchDropdown = new bootstrap.Dropdown(e.firstElementChild)
        searchDropdown.toggle();
    }
}