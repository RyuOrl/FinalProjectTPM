<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-timeline.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="nav-bar">
            <img src="{{ asset('assets/image/image1.png') }}" alt="" class="image1">
        </div>

        <div class="navbar-nav">
            <div class="mid">
                <a href="{{ route('dashboard') }}" class="nav-button nav1">Dashboard</a>
                <a href="{{ route('timeline') }}" class="nav-button nav1 dash">Timeline</a>
            </div>

            <div class="extra">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="border">Log Out</button>
              </form>
            </div>
    </nav>

    <section class="page" id="home">
        <section class="main">
            <div>HACK</div>
            <img src="{{ asset('assets/image/image2.png') }}" alt="">
            <div>THON</div>
        </section>

        <div class="Lorem">Creating The Future Through Innovation</div>
    </section>

    <div class="container">
        <div class="time">Timeline</div>

        <div class="asset">
            <div class="lingkaran"></div>
            <div class="garis"></div>
            <div class="lingkaran"></div>
            <div class="garis"></div>
            <div class="lingkaran"></div>
            <div class="garis"></div>
            <div class="lingkaran"></div>
        </div>

        <ul class="list1">
            <li class="date">XX-XX-2024</li>
            <li class="date">XX-XX-2024</li>
            <li class="date">XX-XX-2024</li>
            <li class="date">XX-XX-2024</li>
        </ul>

        <ul class="list2"> 
            <li class="date1">Open Registration</li>
            <li class="date2">Close Registration</li>
            <li class="date3">Technical Meeting</li>
            <li class="date4">Competition Day</li>
        </ul>

        <ul class="list3">
            <li class="z">Time : XX.XX - XX.XX</li>
            <li class="z">Time : XX.XX - XX.XX</li>
        </ul>

        <ul class="list4">
            <li class="x">Location : XXXXXXXX</li>
            <li class="x">Location : XXXXXXXX</li>
        </ul>
    </div>
</body>
</html>