feather.replace();

var toggleIcon = document.getElementById("toggleIcon");
var container1 = document.getElementById("container1");
var container2 = document.getElementById("container2");

toggleIcon.addEventListener("click", function () {
    this.classList.toggle("active");
    toggleContainers();
});

function toggleContainers() {
    if (container1.style.display == "none") {
        container1.style.display = "block";
        container2.style.display = "none";
    } else {
        container1.style.display = "none";
        container2.style.display = "block";
    }
}

const icon = document.getElementById('toggleIcon');
let rotationCount = 0;

icon.addEventListener('click', () => {
    rotationCount += 180;
    icon.style.transform = `rotate(${rotationCount}deg)`;
});

const filterIcon = document.getElementById('filterIcon');
const sort1 = document.getElementById('sort1');

filterIcon.addEventListener('click', () => {
    sort1.classList.toggle('show');
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('#filterIcon') && !event.target.closest('#sort1')) {
        sort1.classList.remove('show');
    }

    // Check if the clicked element has the class 'icon4' (your action icons)
    if (event.target.classList.contains('icon4')) {
        // Handle your action here (e.g., delete or update)
        console.log('Action icon clicked');
    }
});

function openModal(imagePath) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");

    modal.style.display = "block";
    modalImg.src = imagePath;

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function () {
        modal.style.display = "none";
    };
}

function closeModal() {
    var modal = document.getElementById('myModal');

    document.body.classList.remove('modal-open');

    modal.style.display = 'none';
}

var modal = document.getElementById('myModal');
window.onclick = function (event) {
    if (event.target == modal) {
        closeModal();
    }
};

function clearSort() {

    window.location.href = newUrl;
}