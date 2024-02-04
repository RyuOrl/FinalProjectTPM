

// Ketika Hamburger menu di klik
const navbarNav = document.querySelector('.navbar .navbar-nav .mid');

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

const navbarItems = document.querySelectorAll('.navbar .navbar-nav .mid a');

    // biar pas click, navbar terhighlight dan stay
navbarItems.forEach(function (item) {
    item.addEventListener('click', function () {
        navbarItems.forEach(function (navItem) {
            navItem.classList.remove('active');
        });

        item.classList.add('active');
    });
});

// Bagian Champion, buat ketiga cards sticky ketika hover
document.addEventListener("DOMContentLoaded", function () {
    const card1 = document.querySelector('.card1');
    const card2 = document.querySelector('.card2');
    const card3 = document.querySelector('.card3');

    card1.addEventListener('mouseleave', function() {
        this.classList.toggle('sticky');
    });

    card2.addEventListener('mouseleave', function() {
        this.classList.toggle('sticky');
    });

    card3.addEventListener('mouseleave', function() {
        this.classList.toggle('sticky');
    });
});

//Popup when clicked send
function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
    popup.classList.remove("open-popup");
}

document.addEventListener('click', function(e) {
    var radio = document.querySelector('.container input[type="radio"]:checked');
    if (!radio || radio.contains(e.target)) return;
    radio.checked = false;
});