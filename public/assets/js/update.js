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

function checkGroup(){

  var group_error = document.getElementById('group_error');
  var group = document.register_form.group;

  $.post('/api/check-group', { group: group.value }, function (response) {
    if (response.exists) {
        group_error.innerText = 'Nama Group telah diambil.';
    }
});
 if(group.value.trim() === ""){
      group_error.innerHTML = "Nama Group harus diisi.";
      return false;
    }else {
      group_error.innerHTML = "";
      return true;
    }
  }




function checkStatus(){

var status_error = document.getElementById('status_error');
var status = document.getElementsByName('status');
var isAnyRadioButtonSelected = !status[0].checked && !status[1].checked;

if (isAnyRadioButtonSelected) {
status_error.innerHTML = "Mohon pilih salah satu opsi.";
return false;
} else {
status_error.innerHTML = "";
return true;
}
}




function checkFullName(){

var full_name_error = document.getElementById('full_name_error');
var full_name = document.register_form.full_name;

if(full_name.value.trim() ===""){
full_name_error.innerHTML = "Nama lengkap harus diisi.";
return false;
}else{
full_name_error.innerHTML = "";
return true;
}
}


function checkEmail(){

var email_error = document.getElementById('email_error');
var email = document.register_form.email;

$.post('/api/check-email', { email: email.value }, function (response) {
if (response.exists) {
email_error.innerText = 'Email telah diambil.';
}
});
if (/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email.value))
{
email_error.innerHTML = "";
return true;
}
else if(email.value.trim() === ""){
email_error.innerHTML = "Email harus diisi.";
return false;
}else {
email_error.innerHTML = "Email tidak valid.";
return false;
}
}

function checkWhatsappNumber(){
var whatsapp_number_error = document.getElementById('whatsapp_number_error');
var whatsapp_number = document.register_form.whatsapp_number;

$.post('/api/check-whatsapp-number', { whatsapp_number: whatsapp_number.value }, function (response) {
if (response.exists) {
whatsapp_number_error.innerText = 'Nomor WhatsApp telah diambil.';

}
});
if(/^\d{9,}$/.test(whatsapp_number.value)){
whatsapp_number_error.innerHTML = "";
return true;
}else if(whatsapp_number.value.trim() === ""){
whatsapp_number_error.innerHTML = "Nomor WhatsApp harus diisi.";
return false;
}else{
whatsapp_number_error.innerHTML = "Nomor WhatsApp tidak valid.";
return false;
}
}

function checkLineId(){
var line_id_error = document.getElementById('line_id_error');
var line_id = document.register_form.line_id;

$.post('/api/check-line-id', { line_id: line_id.value }, function (response) {
if (response.exists) {
line_id_error.innerText = 'Line ID telah diambil.';

}
});
if(line_id.value.trim() === ""){
line_id_error.innerHTML = "Line ID harus diisi."
return false;
}
else{
line_id_error.innerHTML = "";
return true;
}
}

function checkGithubId(){
var github_id_error = document.getElementById('github_id_error');
var github_id = document.register_form.github_id;
if(github_id.value.trim() === ""){
github_id_error.innerHTML = "Github/Gitlab ID harus diisi.";
return false;
}else{
github_id_error.innerHTML = "";
return true;
}
}

function checkBirthPlace(){
var birth_place_error = document.getElementById('birth_place_error');
var birth_place = document.register_form.birth_place;
if(birth_place.value.trim() === ""){
birth_place_error.innerHTML = "Tempat lahir harus diisi.";
return false;
}else{
birth_place_error.innerHTML = "";
return true;
}
}

function checkBirthDate() {
var birth_date = document.register_form.birth_date;
var birth_date_error = document.getElementById('birth_date_error');
// Memeriksa apakah tanggal lahir diisi
if (birth_date.value.trim() === "") {
birth_date_error.innerHTML = "Tanggal lahir harus diisi.";
return false;
}
var dateParts = birth_date.value.split("/");

// Mengurutkan ulang array sesuai format yang diinginkan (YYYY-MM-DD)
var new_birth_date = dateParts[2] + "-" + dateParts[1] + "-" + dateParts[0];

var date = new Date(new_birth_date);

var today = new Date();
var year = today.getFullYear() - date.getFullYear();

if (year < 17 || (year==17 && today.getMonth() < date.getMonth()) || (year==17 && today.getMonth() == date.getMonth() && today.getDate() < date.getDate())) {
console.log(date.getMonth(), "monthnya",date.getDate(), "tanggalnya" );
birth_date_error.innerHTML = "Umur peserta harus minimal 17 tahun." ;
return false;
}
birth_date_error.innerHTML = "";
return true;
}

function checkCvPath(){
var cv_path = document.register_form.cv_path;
var cv_path_error = document.getElementById('cv_path_error');
var format = /(\.jpg|\.jpeg|\.pdf|\.png)$/i;
if (cv_path.value.trim()===""){
cv_path_error.innerHTML = "File CV harus diunggah";
return false;
}
else if(!format.exec(cv_path.value)) {
cv_path_error.innerHTML = "Format file CV harus sesuai ketentuan.";
return false;
}else{
cv_path_error.innerHTML = "";
return true;
}
} 
function checkCardPath(){
var card_path = document.register_form.card_path;
var card_path_error = document.getElementById('card_path_error');
var format = /(\.jpg|\.jpeg|\.pdf|\.png)$/i;
if (card_path.value.trim()===""){
card_path_error.innerHTML = "File Card harus diunggah";
return false;
}
else if(!format.exec(card_path.value)) {
card_path_error.innerHTML = "Format file Card harus sesuai ketentuan.";
return false;
}else{
card_path_error.innerHTML = "";
return true;
}
} 
