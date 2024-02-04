<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-admin.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<div id="myModal" class="modal">
  <img class="modal-content" id="img01">
</div>
<body>
    <nav class="navbar">
        <div class="nav-bar">
            <img src="{{ asset('assets/image/image1.png') }}" alt="" class="image1">

            <div class="title3">
                <div>HACK</div>
                <img src="{{ asset('assets/image/image2.png') }}" alt="">
                <div>THON</div>
            </div>
        </div>

        <div class="navbar-nav">
        

            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <div class="extra">
                  <button type="submit" class="border">Log Out</button>
              </div>
          </form>
    </nav>

    <div class="search">
        <div class="colm1">
            <i data-feather="chevron-up" class="icon icon5" id="toggleIcon"></i>
        </div>
        <div class="colm2">
          <i data-feather="search" class="icon1"></i>
          <input type="search" name="search" id="search" class="form-control">
      </div>
        <div class="colm3">
            <i data-feather="filter" class="icon" id="filterIcon"></i>
        </div>
    </div>

    <div class="sort1" id="sort1">
      <h1><a href="{{ route('admin.sort', ['sort' => 'group-asc']) }}">A-Z</a></h1>
      <div class="garis2"></div>
      <h1><a href="{{ route('admin.sort', ['sort' => 'group-dsc']) }}">Z-A</a></h1>
      <div class="garis2"></div>
      <h1><a href="{{ route('admin.sort', ['sort' => 'newest']) }}">Newest</a></h1>
      <div class="garis2"></div>
      <h1><a href="{{ route('admin.sort', ['sort' => 'oldest']) }}">Oldest</a></h1>
      <div class="garis2"></div>
      <h1><a href="/admin/panel">Clear</a></h1>
  </div>

    <div class="total">
        <div class="total-par">
            <h1>Total Participant</h1>
            <h2>{{ $totalParticipants }}</h2>
        </div>

        <div class="total-binusian">
            <h1>Total Binusian</h1>
            <h2>{{ $totalBinusian }}</h2>
        </div>

        <div class="total-nonbinusian">
            <h1>Total Non-Binusian</h1>
            <h2>{{ $totalNonBinusian }}</h2>
        </div>
    </div>

    <div class="container1" id="container1">
      <table>
        <thead class="columns">
        <tr>
            <th>Group ID</th>
            <th data-cell="nama-group">Nama Group</th>
            <th>Nama Leader</th>
            <th>Status</th>
            <th>Email</th>
            <th>Nomor Whatsapp</th>
            <th>Line ID</th>
            <th>Github ID</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>CV</th>
            <th>Flazz/ID Card</th>
            <th>Action</th>
        </tr>
      </thead>

        <tbody class="all-data">
        @foreach ($data as $item)
        <tr>
            <td  data-cell="group-id">{{ $item->group->id }}</td>
            <td  data-cell="nama-group">{{ $item->group->group }}</td>
            <td data-cell="nama-leader">{{ $item->full_name }}</td>
            <td data-cell="status">{{ $item->group->status }}</td>
            <td data-cell="email">{{ $item->email }}</td>
            <td data-cell="nomor">{{ $item->whatsapp_number }}</td>
            <td data-cell="line">{{ $item->line_id }}</td>
            <td data-cell="github">{{ $item->github_id }}</td>
            <td  data-cell="tempat-lahir">{{ $item->birth_place }}</td>
            <td data-cell="tanggal-lahir">{{ $item->birth_date }}</td>
            <td class="img-button" data-cell="cv"><button onclick="openModal('{{ asset('storage/'. $item->cv_path) }}')">{{ $item->cv_path }}</button></td>
            <td class="img-button" data-cell="card"><button onclick="openModal('{{ asset('storage/'. $item->card_path) }}')">{{ $item->card_path }}</button></td>
            <td>
              <a href="/update/{{ $item->id }}" class="edit"></a>
              <a href="/delete/{{ $item->id }}" class="delete"></a>
          </td>
        </tr>
        @endforeach
    </tbody>

    <tbody data-url="{{ URL::to('search') }}" class="search-data" id="content"></tbody>
    <tfoot>

</tfoot>
    </table>
    </div>
    

    <div class="container2" id="container2">
      <div class="con2">
        @foreach ($data as $item)
          <div class="colmn">
              <div class="header">
                  <h1>Group Name</h1>
                  <td>
                      <button class="edit"></button>
                      <button class="delete"></button>
                  </td>
              </div>

              <table>
                  <tr>
                      <td>Nama Lengkap</td>
                      <td>: {{ $item->full_name }}</td>
                  </tr>
                  <tr>
                      <td>Status</td>
                      <td>: {{ $item->group->status }}</td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td>: {{ $item->email }}</td>
                  </tr>
                  <tr>
                      <td>Nomor Whatsapp</td>
                      <td>: {{ $item->whatsapp_number }}</td>
                  </tr>
                  <tr>
                      <td>LINE ID</td>
                      <td>: {{ $item->line_id }}</td>
                  </tr>
                  <tr>
                      <td>Github ID</td>
                      <td>: {{ $item->github_id }}</td>
                  </tr>
                  <tr>
                      <td>Tempat Lahir</td>
                      <td>: {{ $item->birth_place }}</td>
                  </tr>
                  <tr>
                      <td>Tanggal Lahir</td>
                      <td>: {{ $item->birth_date }}</td>
                  </tr>
                  <tr>
                      <td>CV</td>
                      <td class="img-button">: <button onclick="openModal('{{ asset('storage/'. $item->cv_path) }}')">{{ $item->cv_path }}</button></td>
                  </tr>
                  <tr>
                      <td>{{ $item->group->role == 'binusian' ? 'Flazz Card' : 'ID Card' }}</td>
                      <td class="img-button">: <button onclick="openModal('{{ asset('storage/'. $item->card_path) }}')">{{ $item->card_path }}</button></td>
                  </tr>
              </table>
          </div>    
          @endforeach
          
      </div>
  </div>

            


    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    

</body>
</html>