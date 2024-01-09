var group_error = document.getElementById('group_error');
var password_error = document.getElementById('password_error');
var confirm_password_error = document.getElementById('confirm_password_error');
var status_error = document.getElementById('status_error');


var group = document.register1_form.group;
var password = document.register1_form.password;
var confirm_password = document.register1_form.confirm_password;
var binusian = document.register1_form.binusian;
var nonbinusian = document.register1_form.nonbinusian;

function checkGroup() {
  if (group.value.trim() === '') {
      group_error.innerHTML = "Nama grup harus diisi.";
      return false;
  } else {
      group_error.innerHTML = ""; // Clear any previous error message
      return true;
  }
}
function checkPassword() {
  var uppercaseRegex = /[A-Z]/;
  var lowercaseRegex = /[a-z]/;
  var digitRegex = /\d/;
  var specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;

  if(password.value.trim() === ''){
    password_error.innerHTML = "Password harus diisi.";
    return false;
  }else if (!uppercaseRegex.test(password.value)) {
    password_error.innerHTML = "Password harus memiliki setidaknya 1 huruf kapital.";
    return false;
  }else if (!lowercaseRegex.test(password.value)) {
    password_error.innerHTML = "Password harus memiliki setidaknya 1 huruf kecil.";
    return false;
  }else if (!digitRegex.test(password.value)) {
    password_error.innerHTML = "Password harus memiliki setidaknya 1 angka.";
    return false;
  }else if (!specialCharRegex.test(password.value)) {
    password_error.innerHTML = "Password harus memiliki setidaknya 1 karakter spesial.";
    return false;
  }else if (password.value.length < 8) {
    password_error.innerHTML = "Password harus memiliki panjang minimal 8 karakter.";
    return false;
  }else{
    password_error.innerHTML = "";
  return true;
  }
  
}
function checkConfirmPassword() {
  if (confirm_password.value.trim() === '') {
      confirm_password_error.innerHTML = "Konfirmasi password harus diisi.";
      return false;
  }else if(confirm_password.value !== password.value){
    confirm_password_error.innerHTML = "Konfirmasi tidak sesuai.";
    return false;
  } else {
      confirm_password_error.innerHTML = ""; // Clear any previous error message
      return true;
  }
}

function checkStatus(){
  var isAnyRadioButtonSelected = false;

  if (!binusian.checked && !nonbinusian.checked) {
    status_error.innerHTML = "Pilih salah satu opsi.";
    return false;
  } else {
    status_error.innerHTML = "";
    return true;
  }
}



