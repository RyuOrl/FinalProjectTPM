<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('build/assets/css/style_landing.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/style_prizes.css')}}">
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
                <a href="#prizes" class="nav-button nav2">Prizes</a>
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

    <section class="page" id="prizes">
        <section class="page">
            <div class="header">
                <h1><center>Champion Prizes</center></h1>
            </div>
        </section>

        <section class="prize">
            <div class="card card1">
                <h2>Juara 2</h2>
                <br>
                <p>Rp ---------</p>
                <p>Merchandise</p>
                <p>Sertifikat</p>

            </div>
            <div class="card card2">
                <h2>Juara 1</h2>
                <br>
                <p>Rp ---------</p>
                <p>Merchandise</p>
                <p>Sertifikat</p>
            </div>
            <div class="card card3">
                <h2>Juara 3</h2>
                <br>
                <p>Rp ---------</p>
                <p>Merchandise</p>
                <p>Sertifikat</p>
            </div>
        </section>

        <section class="..">
            <br>
            <br>
            <br>
        </section>
    </section>

    <script src="{{asset('build/assets/js/script.js')}}"></script>
</body>
</html>