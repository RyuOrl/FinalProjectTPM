var passwordInputs = document.querySelectorAll('.password-input');
        var togglePasswords = document.querySelectorAll('.toggle-password');

        var showHidePassword = (passwordInput, toggler) => {
            if (passwordInput.type == 'password') {
            passwordInput.setAttribute('type', 'text');
            toggler.classList.add('fa-eye-slash');
            } else {
            toggler.classList.remove('fa-eye-slash');
            passwordInput.setAttribute('type', 'password');
            }
        };

        togglePasswords.forEach((toggler, index) => {
            toggler.addEventListener('click', function () {
            showHidePassword(passwordInputs[index], toggler);
            });
        });


        feather.replace();