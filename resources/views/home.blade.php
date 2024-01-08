<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar">
        <img src="{{ asset('assets/image/image1.png') }}" alt="" class="image1">
      
        <a href="#home" class="nav-button nav1">Home</a>
        <a href="#prizes" class="nav-button">Prizes</a>
        <button class="nav-button">Mentor & Jury</button>
        <button class="nav-button">About</button>
        <button class="nav-button">FAQ</button>
        <button class="nav-button">Timeline</button>
        <a href="/login" class="nav-button login-button">Login</a>
    </nav>

    <hr>
    
    <section class="page" id="home">
        <section class="main">
            <div>HACK</div>
            <img src="{{ asset('assets/image/image2.png') }}" alt="">
            <div>THON</div>
        </section>

        <div class="Lorem">Creating The Future Through</div>
        <div class="Lorem Innovation">Innovation</div>

        <div class="lets">
            <a href="{{ route('dashboard') }}" class="lets1">Let’s Start</a>
        </div>
        
        <div class="image3">
            <img src="{{ asset('assets/image/image3.png') }}" alt="">
        </div>
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

    <script>
        
    </script>
</body>
</html>