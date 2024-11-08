$(".closelocation").on("click", function (event) {
    $('.jcaic, .locadress').fadeOut();
    setTimeout(function () {
        $('.autolocationuser').slideUp();
    }, 250);

    event.preventDefault();
});


const skeletons = document.querySelectorAll('.skeleton') 
skeletons.forEach((skeleton) => { 
setTimeout(() => { 
$(skeletons).removeClass('skeleton')
 }, 2000) 
})

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

if(darkmode === "active") enableDarkmode()

themeSwitch.addEventListener("click", () => {
  darkmode = localStorage.getItem('darkmode')
  darkmode !== "active" ? enableDarkmode() : disableDarkmode()
})