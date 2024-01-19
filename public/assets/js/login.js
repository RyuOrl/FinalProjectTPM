var group_error = document.getElementById('group_error');
var password_error = document.getElementById('password_error');

var group = document.login_form.group;
var password = document.login_form.password;


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





function validateForm() {
 
  if (checkGroup() && checkPassword()) {
 
    return true;
  } else {
   
    return false;
  }
}




