$(".closelocation").on("click", function (event) {
    $(".jcaic, .locadress").fadeOut();
    setTimeout(function () {
        $(".autolocationuser").slideUp();
    }, 250);

    event.preventDefault();
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

// categories carousel

const swiper22 = new Swiper('.swiper22', {
    //loop: true,
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
        delay: 13000,
    },
    autoplay: {
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

    //fix head effect

    const stickyDiv = document.querySelector('.nav__wrap');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            stickyDiv.classList.add('stickyde');
            $('.navitems').addClass('navitems2');
            $('.elonberish').addClass('elonberishbg');
            $('.menu__user').addClass('navitems2');
            $('.menu__user').css({
                'background-color': 'hsl(0deg 0% 90% / 80%)'
            });
        } else {
            stickyDiv.classList.remove('stickyde');
            $('.navitems').removeClass('navitems2');
            $('.elonberish').removeClass('elonberishbg');
            $('.menu__user').removeClass('navitems2');
            $('.menu__user').css({
                'background-color': 'hsla(0, 0%, 90%, 0.165)'
            });
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

    $(".select2box__outer").click(function () {
        var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
        $(".til__dropdown").toggleClass("til__dropdown2");

    });
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

// const swiper = new Swiper('.swiper', {
//     // modules: [Navigation, A11y],
//     direction: 'horizontal',
//     loop: true,
//     navigation: {
//         nextEl: '.c-carousel__button--next',
//         prevEl: '.c-carousel__button--prev',
//     },
//     slidesPerView: 'auto',
//     spaceBetween: 12,
//     a11y: {
//         prevSlideMessage: 'Previous slide',
//         nextSlideMessage: 'Next slide',
//     },
//     autoplay: {
//         delay: 48000,
//     },
//     autoplay: {
//         disableOnInteraction: false,
//         pauseOnMouseEnter: true,
//     },
// });

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
        $('.searchbox').css({
            'top': (scrollPos / 3.8) + 'px',
            'opacity': 1 - (scrollPos / 120)
        });
    });
});
