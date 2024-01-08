<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-login.css') }}">
</head>

<body>
    <section class="main">
        <div>HACK</div>
        <img src="{{ asset('assets/image/image2.png') }}" alt="">
        <div>THON</div>
    </section>

    <div class="container">
        <div class="title">Log In</div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Nama Group</span>
                    <input id="group" :value="old('group')" name="group" type="text" placeholder="Masukkan nama group" required>
                    @error('group')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input id="password" name="password" type="password" placeholder="Masukkan password" required>
                    @error('password')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
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
</body>
</html>