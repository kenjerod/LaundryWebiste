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
const clean = document.querySelector('.ourService');
clean.style.setProperty('--animate-duration', '2s');

const wash = document.querySelector('.manImg');
wash.style.setProperty('--animate-duration', '2s');
