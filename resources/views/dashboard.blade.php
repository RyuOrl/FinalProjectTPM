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
            <div class="title">Welcome, {{ $user->full_name }}</div>
    
            <div class="title1">Leader Information</div>
    
            <ul class="list1">
                <li>Nama Lengkap : {{ $user->full_name }}</li>
                <li>Email : {{ $user->email }}</li>
                <li>Nomor Whatsapp : {{ $user->whatsapp_number }}</li>
                <li>LINE ID : {{ $user->line_id }}</li>
                <li>Tempat Lahir : {{ $user->birth_place }}</li>
                <li>Tanggal Lahir : {{ $user->birth_date }}</li>
            </ul>
        </div>
    
        <div class="container2">
            <div class="data">
                <div class="title2">Data Information</div>

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