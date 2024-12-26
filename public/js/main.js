document.addEventListener('DOMContentLoaded', function() {
    var rangeContainer = document.querySelector('.range-container');
    var rangeInput = document.getElementById('customRange');
    var rangeValue = document.getElementById('rangeValue');
    var rangeImage = document.getElementById('rangeImage');
    var subText = document.getElementById('outsubtext');
  
    function updateSliderPosition() {
        if (rangeContainer.classList.contains('stsyangi')) {
            rangeInput.value = 32.33;
        } else if (rangeContainer.classList.contains('stsusta')) {
            rangeInput.value = 65.33;
          } else if (rangeContainer.classList.contains('stsishonch')) {
            rangeInput.value = 100;
        } else {
            rangeInput.value = 0;
        }
        updateSlider();
    }

    function updateSlider() {
        var value = rangeInput.value;
        var text;
        var subText2;
        var imageUrl;
        var color1, color2, color3;
        var thumbColor;

        if (value < 32.33) {
            text = 'Yangi sotuvchi';
            subText2 = 'Yangi a`zo bol`gan. E`lonlari soni ortib bormoqda';
            imageUrl = 'https://i.postimg.cc/7hzfv605/silver-badge.png';
            color1 = '#5e5959';
            color2 = '#5e5959';
            color3 = '#999';
            thumbColor = '#413d3d';
        } else if (value < 65.33) {
            text = 'Ishonchli';
            subText2 = 'Ushbu sotuvchining e`lonlari soni 100tadan ko`p.';
            imageUrl = 'https://i.postimg.cc/j5mLkNwV/bronza-badge.png';
            color1 = '#999';
            color2 = '#c77808';
            color3 = '#999';
            thumbColor = '#fe5513';
        } else {
            text = 'Ommamop';
            subText2 = 'Eng ko`p haridorlarga ega va 200 dan ortiq e`lonlari mavjud.';
            imageUrl = ' https://i.postimg.cc/dQZ7ZWpJ/gold-badge.png';
            color1 = '#999';
            color2 = '#999';
            color3 = '#e3b500';
            thumbColor = '#e3b500';
        }

        rangeValue.textContent = text;
        subText.textContent = subText2;
        rangeImage.src = imageUrl;
        rangeImage.alt = text + ' Image';
        rangeInput.style.setProperty('--thumb-color', thumbColor);

        document.documentElement.style.setProperty('--color1', color1);
        document.documentElement.style.setProperty('--color2', color2);
        document.documentElement.style.setProperty('--color3', color3);
    }

    rangeInput.addEventListener('input', updateSlider);

    updateSliderPosition(); 
});


document.addEventListener('DOMContentLoaded', function () {
    var itemhead = document.querySelector('.itemhead');

    function updateShadow() {
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > 50) {
            itemhead.classList.add('headshadow');
        } else {
            itemhead.classList.remove('headshadow');
        }
    }

    // Определяем состояние элемента при загрузке страницы
    updateShadow();

    // Добавляем обработчик события прокрутки
    window.addEventListener('scroll', updateShadow);

    // Добавляем обработчик события изменения размера окна
    window.addEventListener('resize', updateShadow);
});






$(".closelocation").on("click", function (event) {
    $(".jcaic, .locadress").fadeOut();
    setTimeout(function () {
        $(".autolocationuser").slideUp();
    }, 250);

    event.preventDefault();
});

//lika button effect
document.addEventListener('DOMContentLoaded', function () {
    var likeButtons = document.querySelectorAll('.like-button');

    likeButtons.forEach(function (likeButton) {
        var buttonId = likeButton.getAttribute('data-id');
        var isActive = localStorage.getItem('likeButton-' + buttonId) === 'true';
        if (isActive) {
            likeButton.classList.add('active');
        }
    });

    likeButtons.forEach(function (likeButton) {
        likeButton.addEventListener('click', function () {
            var buttonId = likeButton.getAttribute('data-id');
            var isActive = likeButton.classList.contains('active');

            likeButton.classList.toggle('active');
            localStorage.setItem('likeButton-' + buttonId, !isActive);

            if (!isActive) {
                for (var i = 0; i < 2; i++) {
                    var floatingHeart = document.createElement('i');
                    floatingHeart.classList.add('floating-heart', 'heart-icon');
                    floatingHeart.innerHTML = '<i class="icon-heart"></i>';

                    if (i === 0) {
                        floatingHeart.classList.add('heart1');
                    } else {
                        floatingHeart.classList.add('heart2');
                    }

                    likeButton.appendChild(floatingHeart);

                    setTimeout(function (heart) {
                        return function () {
                            heart.remove();
                        };
                    }(floatingHeart), 1000);
                }
            }
        });
    });
});

//skeleton effect
const skeletons = document.querySelectorAll(".skeleton");
skeletons.forEach((skeleton) => {
    setTimeout(() => {
        $(skeletons).removeClass("skeleton");
    }, 2000);
});

//dark/laght mode
// let darkmode = localStorage.getItem("darkmode");
// const themeSwitch = document.getElementById("theme-switch");

// const enableDarkmode = () => {
//     document.body.classList.add("darkmode");
//     localStorage.setItem("darkmode", "active");
// };

// const disableDarkmode = () => {
//     document.body.classList.remove("darkmode");
//     localStorage.setItem("darkmode", null);
// };

// if (darkmode === "active") enableDarkmode();

// themeSwitch.addEventListener("click", () => {
//     darkmode = localStorage.getItem("darkmode");
//     darkmode !== "active" ? enableDarkmode() : disableDarkmode();
// });

// document.addEventListener('DOMContentLoaded', function () {
//     var ithlElement = document.querySelector('.ithl');
//     var lyutrboxElement = document.querySelector('.lyutrbox');
//     var lyutr = document.querySelector('.lyutr');


//     window.addEventListener('scroll', function () {
//         var ithlTop = ithlElement.getBoundingClientRect().top;

//         if (ithlTop <= 0) {
//             lyutrboxElement.classList.add('scrolled');
//             lyutr.classList.add('scrolled2');

//         } else {
//             lyutrboxElement.classList.remove('scrolled');
//             lyutr.classList.remove('scrolled2');
//         }
//     });
// });


/*
document.addEventListener('DOMContentLoaded', function () {
    var ithlElement = document.querySelector('.ithl');
    var lyutrboxElement = document.querySelector('.lyutrbox');
    var lyutr = document.querySelector('.lyutr');
    var itemNameElement = document.querySelector('.itemq__name');
    var timeoutId;

    window.addEventListener('scroll', function () {
        var ithlTop = ithlElement.getBoundingClientRect().top;

        if (ithlTop <= 0) {
            lyutrboxElement.classList.add('scrolled');
            lyutr.classList.add('scrolled2');

            timeoutId = setTimeout(function () {
                itemNameElement.style.fontSize = '20px';
            }, 900);

        } else {
            lyutrboxElement.classList.remove('scrolled');
            lyutr.classList.remove('scrolled2');

            clearTimeout(timeoutId);
            itemNameElement.style.fontSize = ''; 
        }
    });
});
*/



document.addEventListener('DOMContentLoaded', function () {
    var toggleButton = document.querySelector('.toggle-button');
    var toggleButtonBox = document.querySelector('.toggle-button-box');
    var itemMoreInfo = document.querySelector('.itemmoreinfo');
    var moreInfoText = itemMoreInfo.querySelector('.moreinfo-text');

    if (moreInfoText.scrollHeight > 300) {
        toggleButtonBox.style.display = 'block';
    } else {
        toggleButtonBox.style.display = 'none';
    }

    toggleButton.addEventListener('click', function () {
        itemMoreInfo.classList.toggle('expanded');

        if (itemMoreInfo.classList.contains('expanded')) {
            toggleButton.textContent = 'Свернуть';
            $(".dots").toggle();
        } else {
            toggleButton.textContent = 'Показать больше';

        }
    });
});


// categories carousel
const swiper22 = new Swiper('.swiper22', {
    freeMode: true,
    slidesPerView: 'auto',
    spaceBetween: 12,
});

const swiper__pins = new Swiper('.swiper__pins', {
    freeMode: true,
    slidesPerView: 'auto',
    spaceBetween: 5,
});

const swiper__similar = new Swiper('.swiper__similar', {
    freeMode: true,
    slidesPerView: 'auto',
    spaceBetween: 10,
    navigation: {
        nextEl: '.c-carousel__button--next',
        prevEl: '.c-carousel__button--prev',
    },
});

const swiper__item = new Swiper('.swiper__item', {
    freeMode: true,
    slidesPerView: 'auto',
    spaceBetween: 1,
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
        dragSize: 100
    },
    mousewheel: {
        enabled: false,
    },
});



const swipermap = new Swiper('.swipermap', {
    freeMode: true,
    slidesPerView: 'auto',
    spaceBetween: 12,
});

// vip ads carousel
const swiper33 = new Swiper('.swiper33', {
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.c-carousel__button--next',
        prevEl: '.c-carousel__button--prev',
    },
    slidesPerView: 'auto',
    spaceBetween: 12,
    a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
    },
    autoplay: {
        delay: 1300,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
});

//click ripple
jQuery(document).ready(function ($) {
    $(".btn-ripple").on("click", function (e) {
        var $span = $('<span class="bc-ripple "></span>');
        var $this = $(this);
        $this.append($span);
        var bcRipple = $this.find(".bc-ripple");
        var bcOffset = $this.offset();
        var pgY = e.pageY - bcOffset.top - bcRipple.height() / 2; //- bcRipple.offset().top  ;
        var pgX = e.pageX - bcOffset.left - bcRipple.width() / 2; // - bcRipple.offset().left ;

        bcRipple.css({
            top: pgY + "px",
            left: pgX + "px",
        });

        bcRipple.addClass("rp-active");
        window.setTimeout(function () {
            $span.remove();
        }, 2000);
    });
});

$(document).ready(function () {
    // scroll to top
    var scrollToTopBtn = $('#scrollToTopBtn');
    var lastScrollTop = 0;

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(window).height();

        if (scrollTop > scrollHeight * 0.9) {
            scrollToTopBtn.fadeIn();
        } else if (scrollTop > scrollHeight * 0) {
            if (scrollTop < lastScrollTop) {
                scrollToTopBtn.fadeIn();
            } else {
                scrollToTopBtn.fadeOut();
            }
        } else {
            scrollToTopBtn.fadeOut();
        }
        lastScrollTop = scrollTop;
    });

    scrollToTopBtn.click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
        return false;
    });

    //fix head effect

    const stickyDiv = document.querySelector('.nav__wrap');
    $('.elonberish').removeClass('elonberishbg');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            //stickyDiv.classList.add('stickyde');
            $('.nav__wrap').addClass('navwrap2');
            $('.navitems').addClass('navitems2');
            $('.current__language').addClass('navitems2');
            $('.elonberish').addClass('elonberishbg');
            $('.menu__user').addClass('menu__user2');
            $('.mlogobox__oq').addClass('mlogobox__qora');

            // Сохранение состояния в localStorage
            localStorage.setItem('isScrolled', 'true');
        } else {
            //stickyDiv.classList.remove('stickyde');
            $('.nav__wrap').removeClass('navwrap2');
            $('.navitems').removeClass('navitems2');
            $('.current__language').removeClass('navitems2');
            $('.elonberish').removeClass('elonberishbg');
            $('.menu__user').removeClass('menu__user2');
            $('.mlogobox__oq').removeClass('mlogobox__qora');

            // Сохранение состояния в localStorage
            localStorage.setItem('isScrolled', 'false');
        }
    });
    $(document).ready(function () {
        if (localStorage.getItem('isScrolled') === 'true') {
            //stickyDiv.classList.add('stickyde');
            $('.nav__wrap').addClass('navwrap2');
            $('.navitems').addClass('navitems2');
            $('.current__language').addClass('navitems2');
            $('.elonberish').addClass('elonberishbg');
            $('.menu__user').addClass('menu__user2');
            $('.mlogobox__oq').addClass('mlogobox__qora');
        }
    });


    //fix window for load apps
    $(".apparrow").on("click", function () {
        $(".fixappbox").toggleClass("fixappbox2");
        $(".apparrow i").toggleClass("apparrow2");
        setTimeout(function () {
            $(".apslink").toggleClass("apslink2");
        }, 300);
    });

    //show map
    $(".searchbymap").on("click", function () {
        var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
        $(".fixmapbox").addClass("show");
        $(".main__overlay").addClass("main__overlay__show");
        $('body').css('padding-right', scrollWidth + 'px');
        $('body').addClass('modal-open');
    });
    $(".main__overlay").click(function () {
        var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
        $(".main__overlay").removeClass("main__overlay__show");
        $(".fixmapbox").removeClass("show");
        $('body').removeClass('modal-open');
        $('body').css('padding-right', '');
    });

    //main dropdown window
    $(document).ready(function () {
        $(".select2box__outer").click(function () {
            var $dropdown = $(this).find(".til__dropdown");
            $(".til__dropdown").not($dropdown).removeClass("til__dropdown2");
            $(".til__dropdown").not($dropdown).removeClass("til__dropdown__menu2");
            $dropdown.toggleClass("til__dropdown2");
            $dropdown.toggleClass("til__dropdown__menu2");
        });

        // Закрыть выпадающее меню при клике вне его
        $(document).click(function (event) {
            if (!$(event.target).closest(".select2box__outer").length) {
                $(".til__dropdown").removeClass("til__dropdown2");
                $(".til__dropdown").removeClass("til__dropdown__menu2");
            }
        });
    });


    // $(".select2box__outer").click(function () {
    //     var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
    //     $(".til__dropdown").toggleClass("til__dropdown2");

    // });
    // $(".rightmenutil").click(function () {
    //     var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
    //     $(".til__dropdown__menu").toggleClass("til__dropdown__menu2");

    // });
    $(".main__overlay").click(function () {
        $(".til__dropdown").removeClass("til__dropdown2");
    });

    //right sidebar menu
    $(".menu__user").click(function () {
        var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
        $('body').css('padding-right', scrollWidth + 'px');
        $('body').addClass('modal-open');
        $(".rightmenu").addClass("rightmenu__show");
        $(".main__overlay").addClass("main__overlay__show");
    });
    $(".main__overlay, .closerightmenu").click(function () {
        $(".main__overlay").removeClass("main__overlay__show");
        $(".rightmenu").removeClass("rightmenu__show");
        $('body').removeClass('modal-open');
        $('body').css('padding-right', '');
    });
    $(".close__map").click(function () {
        var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
        $(".main__overlay").removeClass("main__overlay__show");
        $(".fixmapbox").removeClass("show");
        $('body').removeClass('modal-open');
        $('body').css('padding-right', '');
    });
});

/*
(function ($) {
    $(function () {
        var isoCountries = [{
                text: "Қазақша",
                dial_code: "+77",
                id: "KZ",
            },
            {
                text: "Кыргызча",
                dial_code: "+996",
                id: "KG",
            },
            {
                text: "Русский",
                dial_code: "+7",
                id: "RU",
            },
            {
                text: "Tоҷикӣ",
                dial_code: "+992",
                id: "TJ",
            },
            {
                text: "English",
                dial_code: "+44",
                id: "GB",
            },
            {
                text: "O'zbekcha",
                dial_code: "+998",
                id: "UZ",
            },
        ];

        function formatCountry(country) {
            if (!country.id) {
                return country.text;
            }
            var $country = $(
                '<span class="fi fi-' +
                country.id.toLowerCase() +
                '"></span>' +
                '<span class="flag-text">' +
                country.text +
                "</span>"
            );
            return $country;
        }

        function formatTemplate(country) {
            if (!country.id) {
                return country.text;
            }
            var $country = $(
                '<span class="fi fi-' +
                country.id.toLowerCase() +
                '"></span>' +
                '<span class="flag-text">' +
                country.text +
                "</span>"
            );
            return $country;
        }

        $(".jSelectbox").select2({
            width: "100%",
            placeholder: "Select a country",
            templateResult: formatTemplate,
            templateSelection: formatCountry,
            data: isoCountries,
            minimumResultsForSearch: -1,
        });
    });
})(jQuery);
*/


$(function () {
    $(".addtolovelist").click(function () {
        const parent = $(this).closest('.faveffect__parent');
        const icon = parent.find(".favoicon");
        const itemId = parent.data('item-id');
        const isFavorite = icon.hasClass('favorite__added');

        icon.toggleClass('favorite__added');

        if (!isFavorite) {
            parent.find(".favoicon__show").addClass("press", 1000);
            parent.find(".favoicon__show2").addClass("press", 1300);
        } else {
            parent.find(".favoicon__show").removeClass("press");
            parent.find(".favoicon__show2").removeClass("press");
        }

        if (isFavorite) {
            localStorage.removeItem(itemId);
        } else {
            localStorage.setItem(itemId, 'true');
        }
    });

    $(".faveffect__parent").each(function () {
        const parent = $(this);
        const itemId = parent.data('item-id');
        const isFavorite = localStorage.getItem(itemId) === 'true';

        if (isFavorite) {
            parent.find(".favoicon").addClass('favorite__added');
            parent.find(".favoicon__show").removeClass("press");
            parent.find(".favoicon__show2").removeClass("press");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll('img.lazy');

    if ('IntersectionObserver' in window) {
        let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove('lazy');
                    lazyImage.classList.add('loaded');
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function (lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        // Fallback для браузеров, не поддерживающих Intersection Observer
        let lazyLoad = function () {
            lazyImages.forEach(function (lazyImage) {
                if (lazyImage.getBoundingClientRect().top < window.innerHeight && lazyImage.getBoundingClientRect().bottom > 0 && getComputedStyle(lazyImage).display !== 'none') {
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove('lazy');
                    lazyImage.classList.add('loaded');
                }
            });

            if (lazyImages.length == 0) {
                document.removeEventListener("scroll", lazyLoad);
                window.removeEventListener("resize", lazyLoad);
                window.removeEventListener("orientationchange", lazyLoad);
            }
        };

        document.addEventListener("scroll", lazyLoad);
        window.addEventListener("resize", lazyLoad);
        window.addEventListener("orientationchange", lazyLoad);
    }
});

document.addEventListener('DOMContentLoaded', function () {
    var observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    var observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    var items = document.querySelectorAll('.item-elon');
    items.forEach(function (item) {
        observer.observe(item);
    });
});

jQuery(function ($) {
    $(document).on('scroll', function () {
        var scrollPos = $(this).scrollTop();
        $('.hideff').css({
            'top': (scrollPos / 3.8) + 'px',
            'opacity': 1 - (scrollPos / 120)
        });
        if (scrollPos > 0) {
            $('.hideff').css('pointer-events', 'none');
        } else {
            $('.hideff').css('pointer-events', 'auto');
        }
    });
});

// Инициализация карты
var map = L.map('map').setView([51.505, -0.09], 13);

// Добавление тайлов
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Добавление пользовательского элемента вместо маркера 
var customIcon = L.divIcon({
    className: 'custom-div-icon',
    html: "<div id='myCustomElement'><img src='https://i.postimg.cc/7ZnC8gQ1/qozon.jpg' alt='Ваше изображение' /></div>",
    iconSize: [100, 100],
    iconAnchor: [50, 50]
});
// Устанавливаем пользовательский элемент на карту 
L.marker([51.505, -0.09], {
    icon: customIcon
}).addTo(map);

// Функция для получения местоположения и перемещения карты
function goToLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
            map.setView([lat, lng], 13);
            L.marker([lat, lng]).addTo(map)
                .bindPopup('<b>Вы находитесь здесь!</b>')
                .openPopup();
        }, function (error) {
            alert('Ошибка при получении местоположения: ' + error.message);
        });
    } else {
        alert('Ваш браузер не поддерживает геолокацию.');
    }
}

$(document).ready(function () {
    $('.showad').click(function () {
        $('.ochyop').toggleClass('hidden');
        $('.showad i').toggleClass('ratate');
    });
});




//search by words
const products = [
    "Hurmo", "Hona", "Kitoab", "Kitobq", "Kitobw", "Kitobe",
    "Kitobr", "Kitobg", "Kitob", "Kigtob", "Kitjob", "Kitob",
    "Kitobc", "Kitlob", "Kitobz", "Kitobx", "Kitob", "Kit",
    "Sut", "Sutchi"
];

const categories = {
    "Hurmo": "Fruit",
    "Hona": "Place",
    "Kitoab": "Book",
    "Kitobq": "Book",
    "Kitobw": "Book",
    "Kitobe": "Book",
    "Kitobr": "Book",
    "Kitobg": "Book",
    "Kitob": "Book",
    "Kigtob": "Book",
    "Kitjob": "Book",
    "Kitobc": "Book",
    "Kitlob": "Book",
    "Kitobz": "Book",
    "Kitobx": "Book",
    "Kit": "Misc",
    "Sut": "Dairy",
    "Sutchi": "Dairy"
};

const searchInput = document.getElementById('searchinput');
const dropdown = document.getElementById('dropdowns');

searchInput.addEventListener('input', function () {
    const query = this.value.toLowerCase();

    dropdown.innerHTML = '';

    if (query) {
        const filteredProducts = products.filter(product => product.toLowerCase().startsWith(query));

        if (filteredProducts.length > 0) {
            filteredProducts.forEach(product => {
                const a = document.createElement('a');
                a.href = '#';
                a.textContent = product;

                const span = document.createElement('span');
                span.textContent = ` ${categories[product]}`;
                a.appendChild(span);

                dropdown.appendChild(a);
            });
        } else {
            const noResults = document.createElement('div');
            noResults.textContent = `"${this.value}" не найдено`;
            noResults.style.color = 'red';
            dropdown.appendChild(noResults);
        }

        dropdown.style.display = 'block';
    } else {
        dropdown.style.display = 'none';
    }
});

document.addEventListener('click', function (event) {
    if (!searchInput.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.style.display = 'none';
    }
});












// $(document).ready(function() {
//     $('.country__select').select2();
// });

//search main page
$(".country__select").select2({
    dropdownParent: $("#searchingModal")
});
$(".region__select").select2({
    dropdownParent: $("#searchingModal")
});

document.getElementById('searchinput').addEventListener('input', function (e) {
    if (this.value) {
        document.getElementById('resetinp').classList.add('showresetbtn');
    } else {
        document.getElementById('resetinp').classList.remove('showresetbtn');
    }
});
$('.resetinp').click(function () {
    $('.resetinp').removeClass('showresetbtn');
});

$('.search__history').fadeOut();
$('.animation__word').click(function () {
    $('.searchpopup').addClass('show');
    setTimeout(function () {
        $('.search__history').fadeIn();
    }, 600);
});
$('.closesearchpopup').click(function () {
    $('.search__history').fadeOut();
    setTimeout(function () {
        $('.searchpopup').removeClass('show');
    }, 600);
});


document.addEventListener('DOMContentLoaded', function () {
    var userbox = document.querySelector('.userbox');

    function updateUserboxShadow() {
        var userboxBottom = userbox.getBoundingClientRect().bottom;
        var viewportHeight = window.innerHeight;

        if (userboxBottom >= viewportHeight) {
            userbox.classList.add('sticky-shadow');
        } else {
            userbox.classList.remove('sticky-shadow');
        }
    }

    updateUserboxShadow();
    window.addEventListener('scroll', updateUserboxShadow);
    window.addEventListener('resize', updateUserboxShadow);
});




//--------------Izi TOAST--------------------------
iziToast.settings({
    timeout: 3000, // default timeout
    resetOnHover: true,
    // icon: '', // icon class
    transitionIn: 'flipInX1',
    transitionOut: 'flipOutX1',
    position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
    onOpen: function () {
      
    },
    onClose: function () {
      
    }
  });


  // info
  $('#infoClick').click(function () {
    iziToast.info({position: "bottomRight", title: 'Nusha', message: 'olindi!'});
  }); // ! click

  // success
  $('#successClick').click(function () {
    iziToast.success({timeout: 5000, icon: 'fa fa-chrome', title: 'OK', message: 'iziToast.sucess() with custom icon!'});
  }); // ! .click

  // warning
  $('#warningClick').click(function () {
    iziToast.warning({position: "bottomLeft", title: 'Caution', message: '日本語環境のテスト'});
  });

  // error
  $('#errorClick').click(function () {
    iziToast.error({title: 'Error', message: 'Illegal operation'});
  });

  // custom toast
  $('#customClick').click(function () {

    iziToast.show({
      color: 'dark',
      icon: 'fas fa-exclamation-circle',  
      title: 'E`lon',
      message: 'boshqa ko`rsatilmaydi!',
      position: 'bottomRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
      progressBarColor: 'rgb(0, 136, 255)',
      buttons: [
        [
          '<button class="toastHa">Yaxshi</button>',
        ],
        [
          '<button class="toastYoq">Bekor qilish</button>',
          function (instance, toast) {
            instance.hide({
              transitionOut: 'fadeOutUp'
            }, toast);
          }
        ]
      ]
    });

  }); 

$('#any').click(function(){
iziToast.error({
  title: 'Errorカラー',
  message: 'iziToast.error()'
});
});




