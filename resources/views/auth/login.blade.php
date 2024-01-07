<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style_login.css') }}">
</head>

<body>
    <section class="main">
        <div>HACK</div>
        <img src="{{ asset('assets/image/image2.png') }}" alt="">
        <div>THON</div>
    </section>
<div class="wrap">
    <div class="container">
        <div class="title">Log In</div>

        <form method="POST" action="{{ route('login') }}">
          @csrf
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Group Name</span>
                    <input name="group" type="text" placeholder="Enter your group name" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input name="password" type="password" placeholder="Enter your password" required>
                </div>
            </div>

            <div class="donthave">
                <div class="donthave1">Don't have an account yet?</div>
                <a href="/register" class="donthave2">Register here</a>
            </div>

            
        </form>
    </div>
    <div class="kotak">
        
    </div>
    
    <div class="button">
        <a href="" class="submit">Log In</a>
    </div>
</div>
</body>
</html>