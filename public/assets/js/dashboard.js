function openModal(imgPath) {
  var modal = document.getElementById('myModal');
  var modalImg = document.getElementById('img01');

  document.body.classList.add('modal-open');

  modal.style.display = 'block';
  modalImg.src = imgPath;
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

function formatDate(inputDate) {
  console.log(inputDate);
  const dateArray = inputDate.split('-');
  const year = dateArray[0];
  const month = parseInt(dateArray[1], 10);
  const day = dateArray[2];
  const monthNames = [
      'Januari', 'Februari', 'Maret', 'April',
      'Mei', 'Juni', 'Juli', 'Agustus',
      'September', 'Oktober', 'November', 'Desember'
  ];

  const monthName = monthNames[month - 1];
  const formattedDate = `${day} ${monthName} ${year}`;
  document.getElementById('date').innerHTML = `: ${formattedDate}`;
}

window.onload = function () {
  formatDate(document.getElementById('date').innerHTML.trim());
};