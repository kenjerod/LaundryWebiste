//-------------------------------Responsive navar--------------------------//
const hamburger = document.getElementsByClassName('hamburger')[0]
const navi = document.getElementsByClassName('navigate')[0]

hamburger.addEventListener('click', () => {
  navi.classList.toggle('active')
})