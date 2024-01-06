document.addEventListener('DOMContentLoaded', function () {
  var loginButton = document.querySelector('.login-button');

  loginButton.addEventListener('click', function () {
      var isLoggedIn = confirm('Do you want to log in?');

      if (isLoggedIn) {
          alert('Login successful!');
      } else {
          alert('Login failed. Please try again.');
      }
  });
});