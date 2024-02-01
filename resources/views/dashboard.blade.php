<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-dashboard.css') }}">
</head>
<body>
    <nav class="navbar">
        <img src="{{ asset('assets/image/image1.png') }}" alt="" class="image1">
      
        <button class="nav-button nav1">Dashboard</button>
        <a href="timeline.html" class="nav-button">Timeline</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button type="submit" class="nav-button logout-button">Log Out</button>
    </form>
    </nav>
    
    <hr>

    <section class="page" id="home">
        <section class="main">
            <div>HACK</div>
            <img src="{{ asset('assets/image/image2.png') }}" alt="">
            <div>THON</div>
        </section>

        <div class="Lorem">Creating The Future Through Innovation</div>
    </section>

    <div class="container">
        <div class="container1">
            <div class="title">Welcome, .....................</div>
    
            <div class="title1">Information Leader</div>
    
            <ul class="list1">
                <li>Nama Lengkap</li>
                <li>Email</li>
                <li>Nomor Whatsapp</li>
                <li>LINE ID</li>
                <li>Tempat Lahir</li>
                <li>Tanggal Lahir</li>
            </ul>
        </div>
    
        <div class="container2">
            <div class="data">
                <div class="title2">Informasi Data</div>

                <ul class="list2">
                    <li>CV</li>
                    <li>ID Card / Flazz Card</li>
                </ul>
            </div>

            <div class="contact">
                <div class="title3">Contact Person</div>
            </div>
        </div>
    </div>

    
</body>
</html>