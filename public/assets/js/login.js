var group_error = document.getElementById('group_error');
var password_error = document.getElementById('password_error');

var group = document.login_form.group;
var password = document.login_form.password;


function checkGroup() {
  if (group.value.trim() === '') {
      group_error.innerHTML = "Nama group harus diisi.";
      return false;
  } else {
      group_error.innerHTML = ""; // Clear any previous error message
      return true;
  }
}
function checkPassword() {
  
  if(password.value.trim() === ''){
    password_error.innerHTML = "Password harus diisi.";
    return false;
  }else{
    password_error.innerHTML = "";
  return true;
  }
  
}


function validateForm() {
  var isGroupValid = checkGroup();
  var isPasswordValid = checkPassword();


  // Jika semua validasi berhasil, izinkan pengiriman formulir
  if (isGroupValid && isPasswordValid) {
    // ... lanjutkan dengan pengiriman formulir atau aksi lainnya
    return true;
  } else {
    // Jika ada setidaknya satu validasi yang gagal, hentikan pengiriman formulir
    return false;
  }
}




