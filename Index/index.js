
//------------------------------Gallery Slider-----------------------------//
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      loop: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

//-------------------------------Scroll up animations--------------------------//
function bubble() {
  var boxBubble = document.querySelectorAll(".bubble");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", bubble);

function box() {
  var boxBubble = document.querySelectorAll(".box");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", box);

function pService() {
  var boxBubble = document.querySelectorAll(".pService");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",pService);

function card() {
  var boxBubble = document.querySelectorAll(".card");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",card);

function pdBox() {
  var boxBubble = document.querySelectorAll(".pdBox");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",pdBox);

function smallcon() {
  var boxBubble = document.querySelectorAll(".smallcon");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",smallcon);

function slider() {
  var boxBubble = document.querySelectorAll(".slider");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",slider);

function gallery() {
  var boxBubble = document.querySelectorAll(".gallery");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",gallery);

function sliderBox() {
  var boxBubble = document.querySelectorAll(".sliderBox");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",sliderBox);

function container3() {
  var boxBubble = document.querySelectorAll(".container3");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",container3);

function choose() {
  var boxBubble = document.querySelectorAll(".choose");
  for(var i = 0; i < boxBubble.length; i++){
    var windowHeight = window.innerHeight;
    var elementTop = boxBubble[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      boxBubble[i].classList.add("active");
    } else {
      boxBubble[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll",choose);

//-------------------------------Responsive navar--------------------------//
const hamburger = document.getElementsByClassName('hamburger')[0]
const navi = document.getElementsByClassName('navigate')[0]

hamburger.addEventListener('click', () => {
  navi.classList.toggle('active')
})
//-------------------------------Scroll Top animations--------------------------//
window.addEventListener('scroll', function(){
  var scroll = document.querySelector('.scrollTop');
  scroll.classList.toggle("active", window.scrollY > 600)
})

function scrollToTop(){
  window.scrollTo({
    top:0,
    behavior: 'smooth'
  })
}

//-------------------------------animations duration--------------------------//
const clean = document.querySelector('.cleaning');
clean.style.setProperty('--animate-duration', '2s');

const wash = document.querySelector('.wash');
wash.style.setProperty('--animate-duration', '2s');

