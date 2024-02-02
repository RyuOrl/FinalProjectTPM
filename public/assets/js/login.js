var group_error = document.getElementById('group_error');
var password_error = document.getElementById('password_error');

var group = document.login_form.group;
var password = document.login_form.password;

var loginError = document.getElementById("loginerror");
var errorMessage = loginError ? loginError.textContent : "";

if(errorMessage !== ""){
  shakeElement('screen');
}

function checkGroup(){
  saveName();
  if(group.value.trim() === ""){
    group_error.innerHTML = "Nama Group harus diisi.";
    return false;
  }else {
    group_error.innerHTML = "";
    return true;
  }
  
}
 


function checkPassword() {
  savePass();
  if(password.value.trim() === ''){
    password_error.innerHTML = "Password harus diisi.";
    return false;
  }else{
    password_error.innerHTML = "";
  return true;
  }
  
}


function shakeElement(elementId) {
  const element = document.getElementById(elementId);
  element.classList.add('error-shake');
  setTimeout(() => {
    element.classList.remove('error-shake');
  }, 300); // Sesuaikan dengan durasi animasi getaran (dalam milidetik)
}


function validateForm() {
 
  if (checkGroup() && checkPassword()) {
    return true;
  } else {
   shakeElement('screen');
    return false;
  }
}




