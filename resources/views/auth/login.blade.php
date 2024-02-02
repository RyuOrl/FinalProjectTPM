<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-login.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="main">
        <div>HACK</div>
        <img src="{{ asset('assets/image/image2.png') }}" alt="">
        <div>THON</div>
    </section>

    <div id='screen' class="container">
        <div class="title">Log In</div>

        <form onsubmit="return validateForm();" name="login_form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Nama Group</span>
                    <input oninput="checkGroup();" id="group" name="group" type="text" placeholder="Masukkan nama group" autocomplete="off"  >
                    <p style="color:red" id="group_error"></p>
                  
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input oninput="checkPassword();" id="password" name="password" type="password" placeholder="Masukkan password" autocomplete="off"  >
                    <span><i id="toggler"class="far fa-eye"></i></span>
                    <p style="color:red" id="password_error"></p>
                </div>
                @error ('group')
                <p id='loginerror' style="color: red"> {{ $message}}</p>
                @enderror

            </div>

            <div class="donthave">
                <div class="donthave1">Belum memiliki akun?</div>
                <a href="{{ route('register') }}" class="donthave2">Registrasi disini</a>
            </div>   
            <div class="button">
                <a href="/home" class="submit">Back</a>
                <button type="submit" class="submit" id="sub">Log In</button>
            </div>
        </form>
</div>
<script src="{{ asset('assets/js/login.js') }}"></script>
<script src="{{ asset('assets/js/hide_password_login.js') }}"></script>
</body>
</html>