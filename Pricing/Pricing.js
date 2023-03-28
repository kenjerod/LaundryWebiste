//-------------------------------Responsive navar--------------------------//
const hamburger = document.getElementsByClassName('hamburger')[0]
const navi = document.getElementsByClassName('navigate')[0]

hamburger.addEventListener('click', () => {
  navi.classList.toggle('active')
})


var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "flex") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "flex";
    }
  });
}

//add the event listener to the gif
document.getElementById('gif').addEventListener('mouseenter', stopAndPlayGif);

//define the function
function stopAndPlayGif() {
  //get the gif
  var gif = document.getElementById('gif');
  
  //stop the gif
  gif.pause();
  
  //play the gif
  gif.play();
}

function toggleIcon(element) {
  var iconElement = element.querySelector("i");

  if (iconElement.classList.contains("fa-plus")) {
    iconElement.classList.remove("fa-plus");
    iconElement.classList.add("fa-minus");
  } else {
    iconElement.classList.remove("fa-minus");
    iconElement.classList.add("fa-plus");
  }
}


function showBasic() {
  document.getElementById('dry').style.display = "none";
  document.getElementById('basic').style.display = "block";
  document.getElementById('special1').style.display = "none";
}
function showDry() {
  document.getElementById('dry').style.display = "block";
  document.getElementById('basic').style.display = "none";
  document.getElementById('special1').style.display = "none";
}
function showSpecial() {
  document.getElementById('dry').style.display = "none";
  document.getElementById('basic').style.display = "none";
  document.getElementById('special1').style.display = "block";
}


const clean = document.querySelector('.icons');
clean.style.setProperty('--animate-duration', '3s');