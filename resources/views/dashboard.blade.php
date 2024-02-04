<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-loading.css') }}">
</head>
<div id="myModal" class="modal">
  <img class="modal-content" id="img01">
</div>
<body>
    <nav class="navbar">
        <div class="nav-bar">
            <img src="{{ asset('assets/image/image1.png') }}" alt="" class="image1">
        </div>

        <div class="navbar-nav">
            <div class="mid">
                <a href="{{ route('dashboard') }}" class="nav-button nav1 dash">Dashboard</a>
                <a href="{{ route('timeline') }}" class="nav-button nav1">Timeline</a>
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
        <div class="container1">
            <div class="title">Welcome, &nbsp;{{ $group->group }}</div>
    
            <div class="title1">Leader Information</div>
    
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {{ $user->full_name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Nomor Whatsapp</td>
                    <td>: 	{{ $user->whatsapp_number }}</td>
                </tr>
                <tr>
                    <td>LINE ID</td>
                    <td>: {{ $user->line_id }}</td>
                </tr>
                <tr>
                    <td>Github ID</td>
                    <td>: {{ $user->github_id }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>: {{ $user->birth_place }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td id="date">{{ $user->birth_date }}</td>
                </tr>
            </table>
        </div>
    
        <div class="container2">
            <div class="data">
                <div class="title2">Informasi Data</div>

                <table>
                    <tr>
                        <td>CV</td>
                        <td>: &nbsp;&nbsp; <button onclick="openModal('{{ asset('storage/'. $user->cv_path) }}')">{{ $user->cv_path }}</button> </td>
                    </tr>
                    <tr>
                        <td>{{ $group->role == 'binusian' ? 'Flazz Card' : 'ID Card' }}</td>
                        <td>: &nbsp;&nbsp; <button onclick="openModal('{{ asset('storage/'. $user->card_path) }}')">{{ $user->card_path }}</button></td>
                    </tr>
                </table>
            </div>

            <div class="contact">
                <div class="title3">Contact Person</div>

                <table>
                    <tr>
                        <td>XXXXX</td>
                        <td>: +62 812 3456 7890</td>
                    </tr>
                    <tr>
                        <td>XXXXX</td>
                        <td>: +62 812 3456 7891</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/loading.js') }}"></script>
    
</body>
</html>