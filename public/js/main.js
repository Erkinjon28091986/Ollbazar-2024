
$(document).ready(function () {

  const stickyDiv = document.querySelector('.nav__wrap');
  const stickyPoint = stickyDiv.offsetTop;
  
  const onScroll = () => {
    if (window.pageYOffset >= stickyPoint) {
      stickyDiv.classList.add('stickyde');
    } else {
      stickyDiv.classList.remove('stickyde');
    }
  };
  window.addEventListener('scroll', onScroll); // Функция onScroll будет переключать класс
});


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
let darkmode = localStorage.getItem("darkmode");
const themeSwitch = document.getElementById("theme-switch");

const enableDarkmode = () => {
    document.body.classList.add("darkmode");
    localStorage.setItem("darkmode", "active");
};

const disableDarkmode = () => {
    document.body.classList.remove("darkmode");
    localStorage.setItem("darkmode", null);
};

if (darkmode === "active") enableDarkmode();

themeSwitch.addEventListener("click", () => {
    darkmode = localStorage.getItem("darkmode");
    darkmode !== "active" ? enableDarkmode() : disableDarkmode();
});

//swiper category freemode
var swiper2 = new Swiper(".swiperbox__categories", {
    slidesPerView: "auto",
    freeMode: true,
    rewind: false,
    spaceBetween: 10,
});

var swiper2 = new Swiper(".swiperbox2__categories", {
    slidesPerView: "auto",
    freeMode: true,
    rewind: false,
    spaceBetween: 10,
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

//fix window for load apps
$(document).ready(function () {
    $(".apparrow").on("click", function () {
        $(".fixappbox").toggleClass("fixappbox2");
        $(".apparrow i").toggleClass("apparrow2");
        setTimeout(function () {
            $(".apslink").toggleClass("apslink2");
        }, 300);
    });

    $(".select2box").click(function () {
        $(".til__dropdown").addClass("til__dropdown2");
        $(".main__overlay").addClass("main__overlay__show");
        $(".current__language").addClass("current__language__bg__show");
    });
    $(".main__overlay").click(function () {
      $(".til__dropdown").removeClass("til__dropdown2");
      $(".main__overlay").removeClass("main__overlay__show");
      $(".current__language").removeClass("current__language__bg__show");
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

const swiper = new Swiper('.swiper', {
  // modules: [Navigation, A11y],
  direction: 'horizontal',
  loop: true,
  navigation: {
    nextEl: '.c-carousel__button--next',
    prevEl: '.c-carousel__button--prev',
  },
  slidesPerView: 'auto',
  spaceBetween: 48,
  a11y: {
    prevSlideMessage: 'Previous slide',
    nextSlideMessage: 'Next slide',
  },
  // autoplay: {
  //   delay: 48000,
  // },
//   autoplay: {
//     disableOnInteraction: false,
//     pauseOnMouseEnter: true,
// },
});


