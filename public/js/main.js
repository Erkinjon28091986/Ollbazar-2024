$(".closelocation").on("click", function (event) {
    $('.jcaic, .locadress').fadeOut();
    setTimeout(function () {
        $('.autolocationuser').slideUp();
    }, 250);

    event.preventDefault();
});

//skeleton effect
const skeletons = document.querySelectorAll('.skeleton')
skeletons.forEach((skeleton) => {
    setTimeout(() => {
        $(skeletons).removeClass('skeleton')
    }, 2000)
})

//dark/laght mode
let darkmode = localStorage.getItem('darkmode')
const themeSwitch = document.getElementById('theme-switch')

const enableDarkmode = () => {
    document.body.classList.add('darkmode')
    localStorage.setItem('darkmode', 'active')
}

const disableDarkmode = () => {
    document.body.classList.remove('darkmode')
    localStorage.setItem('darkmode', null)
}

if (darkmode === "active") enableDarkmode()

themeSwitch.addEventListener("click", () => {
    darkmode = localStorage.getItem('darkmode')
    darkmode !== "active" ? enableDarkmode() : disableDarkmode()
})

//swiper category freemode
var swiper2 = new Swiper('.swiperbox__categories', {
    slidesPerView: 'auto',
    freeMode: true,
    rewind: false,
    spaceBetween: 10
});

var swiper2 = new Swiper('.swiperbox2__categories', {
    slidesPerView: 'auto',
    freeMode: true,
    rewind: false,
    spaceBetween: 10
});

//click ripple

jQuery(document).ready(function ($) {

    $('.btn-ripple').on('click', function (e) {

        var $span = $('<span class="bc-ripple "></span>');
        var $this = $(this);
        $this.append($span);
        var bcRipple = $this.find('.bc-ripple');
        var bcOffset = $this.offset();
        var pgY = e.pageY - bcOffset.top - (bcRipple.height() / 2); //- bcRipple.offset().top  ;
        var pgX = e.pageX - bcOffset.left - (bcRipple.width() / 2); // - bcRipple.offset().left ;

        bcRipple.css({
            top: pgY + 'px',
            left: pgX + 'px'
        });

        bcRipple.addClass('rp-active');
        window.setTimeout(function () {
            $span.remove();
        }, 2000);
    });
});

//fix window for load apps
$(document).ready(function () {
    $(".apparrow").on('click', function () {
        $(".fixappbox").toggleClass("fixappbox2");
        $(".apparrow i").toggleClass("apparrow2");
        setTimeout(function () {
            $(".apslink").toggleClass("apslink2");
        }, 300);

    });
});
