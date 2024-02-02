let rotationAngle = 0;
let currentImageIndex = 0;
const images = [
"../image/load1.png", 
"../image/load2.png", 
"../image/load3.png",
"../image/load4.png"];
function changeImage() {
    const loadingImage = document.getElementById("loading-image");

    loadingImage.classList.add("animated");

    setTimeout(() => {

        loadingImage.style.transform = `rotate(${rotationAngle}deg)`;

        loadingImage.src = images[currentImageIndex];
        rotationAngle += 90;
        loadingImage.classList.remove("animated");

        currentImageIndex = (currentImageIndex + 1) % images.length;
    }, 10); 
}

setInterval(changeImage, 1000);

window.addEventListener("load", function() {
  var loadingContainer = document.getElementById("loading-container");
  loadingContainer.style.display = "none";
});

// Ketika Hamburger menu di klick
const navbarNav = document.querySelector('.navbar-nav');

document.querySelector('#humbur-menu').onclick = () => {
  navbarNav.classList.toggle('active');
}

// Klik di luar sidebar untuk menutup sidebar
const hamburger = document.querySelector('#humbur-menu');

document.addEventListener('click', function (e) {
  if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
      navbarNav.classList.remove('active');
  }
});

var acc = document.getElementsByClassName("acc");
var i;

for(i=0; i<acc.length; i++){
  acc[i].addEventListener("click", function () {
      this.classList.toggle("active1");
      this.parentElement.classList.toggle("active1");

      var pannel = this.nextElementSibling;

      if(pannel.style.display === "block"){
          pannel.style.display = "none";
      } else {
          pannel.style.display = "block";
      }
  });
} 

// Bagian Champion, buat ketiga cards sticky ketika hover
document.addEventListener("DOMContentLoaded", function () {
  const card1 = document.querySelector('.card1');
  const card2 = document.querySelector('.card2');
  const card3 = document.querySelector('.card3');

  card1.addEventListener('click', function() {
      this.classList.toggle('sticky');
  });

  card2.addEventListener('click', function() {
      this.classList.toggle('sticky');
  });

  card3.addEventListener('click', function() {
      this.classList.toggle('sticky');
  });
});

function tampilkanPopup() {
  alert("Pesan Anda telah dikirim!");
}