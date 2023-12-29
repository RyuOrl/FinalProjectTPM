<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{asset('build/assets/css/landing_page.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/fontawesome.css')}}" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="page">
        <nav>
            <ul class="image1">
                <img src="{{asset('build/assets/image/image1.png')}}" alt="">
            </ul>
    
            <ul class="navi">
                <button class="nav-button nav1">Home</button>
                <button class="nav-button nav2">Prizes</button>
                <button class="nav-button nav3">Mentor & Jury</button>
                <button class="nav-button nav4">About</button>
                <button class="nav-button nav5">FAQ</button>
                <button class="nav-button nav6">Timeline</button>
                <button class="nav-button nav7 login-button">Login</button>
            </ul>
        </nav>
    
        <hr>
    
        <section>
            <section class="main">
                <div>HACK</div>
                <img src="{{asset('build/assets/image/image2.png')}}" alt="">
                <div>THON</div>
            </section>
    
            <div class="Lorem">Lorem Ipsum</div>

            <button href="/dashboard" class="lets">Let’s Start</button>

            <img src="{{asset('build/assets/image/image3.png')}}" alt="" class="image3">
        </section>
    </section>

    <script src="{{asset('build/assets/js/script.js')}}"></script>
</body>
</html>