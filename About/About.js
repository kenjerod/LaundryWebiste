//-------------------------------Responsive navar--------------------------//
const hamburger = document.getElementsByClassName('hamburger')[0]
const navi = document.getElementsByClassName('navigate')[0]

hamburger.addEventListener('click', () => {
  navi.classList.toggle('active')
})

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  loop: true,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
    loop: true,
  },
  
});


const teams = document.querySelector('.team');
teams.style.setProperty('--animate-duration', '2s');