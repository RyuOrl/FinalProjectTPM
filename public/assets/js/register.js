var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {
  // var savedStep = localStorage.getItem("currentStep");
  // if (savedStep !== null && !isNaN(savedStep)) {
  //   currentTab = parseInt(savedStep);
  // }

            showTab(currentTab);
            
            
});


function getStatus() {
  var radios = document.getElementsByName('status');
  var selectedValue = null;

  for (var i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
          selectedValue = radios[i].value;
          break;
      }
  }

  return selectedValue;
}


            function showTab(n) {
           
              var x = document.getElementsByClassName("user-detail");
              if(n===2){
                return true;
              }
              for (var i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              
              x[n].style.display = "block";
              document.getElementById("prevBtn").style.display = "inline";
              
              var status = getStatus();
              if (n === 1) {
                document.querySelector(".lingkaran2").style.backgroundColor = "#352DEB"; 
                document.querySelector(".garis").style.backgroundColor = "#352DEB"; 
                document.querySelector('.title1').innerHTML= "Leader Information";
                document.getElementById("submitBtn").style.display = "inline";
                document.getElementById("nextBtn").style.display = "none";
                if(status == 'binusian'){
                  document.getElementById("card").innerHTML = "Upload Flazz Card";
          
                }else if(status == 'non-binusian'){
                  document.getElementById("card").innerHTML = "Upload ID Card";
                  
                }

              }else{
                document.querySelector(".lingkaran2").style.backgroundColor = "#FFFFFF"; 
                document.querySelector(".garis").style.backgroundColor = "#FFFFFF"; 
                document.querySelector('.title1').innerHTML= "Group Information";
                document.getElementById("submitBtn").style.display = "none";
                document.getElementById("nextBtn").style.display = "inline";
              }
          
          
              // localStorage.setItem("currentStep", n.toString());
              
            
            }
            

            function nextPrev(n) {
              var x = document.getElementsByClassName("user-detail");
              if (n == 1 && !validateForm()) {
                return false;
              }
          
              if (currentTab === 0 && n === -1) {
                  window.location.href = "/login";
                  return false;
              } 
          
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
          
              if (currentTab >= x.length) {
                  document.getElementById("nextprevious").style.display = "none";
                  return false; // prevent form submission
              }
          
              showTab(currentTab);
          }


          
          
          
          
//           var full_name_error = document.getElementById('full_name_error');
// var email_error = document.getElementById('email_error');
// var whatsapp_number_error = document.getElementById('whatsapp_number_error');
// var line_id_error = document.getElementById('line_id_error');
// var birth_place_error = document.getElementById('birth_place_error');
// var birth_date_error = document.getElementById('birth_date_error');
// var cv_path_error = document.getElementById('cv_path_error');
// var flazz_card_path_error = document.getElementById('flazz_card_path_error');
// var id_card_path_error = document.getElementById('id_card_path_error');
          
          
          
          
         
          
//           var full_name = document.register_form.full_name;
// var email = document.register_form.email;
// var whatsapp_number = document.register_form.whatsapp_number;
// var line_id = document.register_form.line_id;
// var birth_place = document.register_form.birth_place;
// var birth_date = document.register_form.birth_date;
// var cv_path = document.register_form.cv_path;
// var flazz_card_path = document.register_form.flazz_card_path;
// var id_card_path = document.register_form.id_card_path;
          
function checkGroup() {
 
  var group_error = document.getElementById('group_error');
  var group = document.register_form.group;
  if (group.value.trim() === '') {
      group_error.innerHTML = "Nama group harus diisi.";
      return false;
  } else {
      group_error.innerHTML = ""; // Clear any previous error message
      return true;
  }
}

function checkPassword() {

  var password_error = document.getElementById('password_error');
  var password = document.register_form.password;
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
  
  var confirm_password_error = document.getElementById('confirm_password_error');
  var password = document.register_form.password;
  var confirm_password = document.register_form.confirm_password;
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
    if(line_id.value.trim() === ""){
      line_id_error.innerHTML = "Line ID harus diisi."
      return false;
    }else{
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
    var age = today.getFullYear() - date.getFullYear();
    if (age < 17) {
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



 
          function validateForm(){
        
            if(currentTab===0 && checkGroup() && checkPassword() && checkConfirmPassword() && checkStatus()){
              
              return true;
            }
            else if(currentTab===1 && checkFullName() && checkEmail() && 
            checkWhatsappNumber() && checkLineId() && checkGithubId() && 
            checkBirthPlace() && checkBirthDate() && checkCardPath()){
              return true;

            }
            else{
              return false;
            }
          }
          
         
          
          

     