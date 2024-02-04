const images = ["assets/image/load1.png", 
"assets/image/load2.png", 
"assets/image/load3.png", 
"assets/image/load4.png"];
let currentImageIndex = 0;

function changeImage() {
    const loadingImage = document.getElementById("loading-image");

 
    loadingImage.classList.add("animated");

    setTimeout(() => {
        loadingImage.src = images[currentImageIndex];

        loadingImage.classList.remove("animated"); 
      
        currentImageIndex = (currentImageIndex + 1) % images.length;
    }, 800); 
}

setInterval(changeImage, 1000);

window.addEventListener("load", function() {
    var loadingContainer = document.getElementById("loading-container");
    loadingContainer.style.display = "none";
});