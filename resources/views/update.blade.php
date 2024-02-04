<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style-update.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-loading.css') }}">
    <title>Update</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<div id="myModal" class="modal">
  <img class="modal-content" id="img01">
</div>
<body>
    <div id="loading-container">
        <img id="loading-image" src="{{ asset('assets/image/load1.png') }}" alt="Loading...">
        <div><br>loading...</div>
    </div>
    <section class="main">
        <div>HACK</div>
        <img src="{{ asset('assets/image/image2.png') }}" alt="">
        <div>THON</div>
    </section>

    <div class="colmn">
        <div class="container1">
            <h1 class="title">Data Terkini</h1>

            <h2 class="title1">Leader ID: {{ $data->id }} &nbsp;&nbsp;   Group ID: {{ $data->group->id }}</h2>

            <table>
                <tr>
                    <td>Nama Group</td>
                    <td>: {{ $data->group->group }}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap Leader</td>
                    <td>: {{ $data->full_name }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: {{ $data->group->status }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $data->email }}</td>
                </tr>
                <tr>
                    <td>Nomor Whatsapp</td>
                    <td>: {{ $data->whatsapp_number }}</td>
                </tr>
                <tr>
                    <td>LINE ID</td>
                    <td>: {{ $data->line_id }}</td>
                </tr>
                <tr>
                    <td>Github ID</td>
                    <td>: {{ $data->github_id }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>: {{ $data->birth_place }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: {{ $data->birth_date }}</td>
                </tr>
                <tr>
                    <td>CV</td>
                    <td class="img-button">: <button onclick="openModal('{{ asset('storage/'. $data->cv_path) }}')">{{ $data->cv_path }}</button></td>
                </tr>
                <tr>
                    <td>{{ $data->group->role == 'binusian' ? 'Flazz Card' : 'ID Card' }}</td>
                    <td class="img-button">: <button onclick="openModal('{{ asset('storage/'. $data->card_path) }}')">{{ $data->card_path }}</button></td>
                </tr>
            </table>

        </div>

        <div class="container2">
            <h1 class="title">Data Update</h1>

            <form action="/update/post/{{$data->id}}" method="POST", enctype="multipart/form-data">
              @csrf
                <div class="user-detail">
                    <div class="input-box">
                        <span class="details">Nama Group</span>
                        <input oninput="checkGroup();" name="group" type="text" placeholder="Masukkan Nama Group" required>
                        <p id="group_error" style="color: red"></p>
                    </div>
                    <div class="input-box">
                        <span class="details">Nama Lengkap Leader</span>
                        <input oninput="checkFullName();" name="full_name" type="text" placeholder="Masukkan Nama Lengkap Leader" required>
                        <p id="full_name_error" style="color: red"></p>
                    </div>
                    <div class="binusian-details">
                      <span class="title5">Status</span>
                      <div class="category">
                          <input oninput="checkStatus();" type="radio" name="status" id="binusian" value="binusian" 
                          checked  >
                          <label for="binusian">Binusian</label>
                      
                          <input oninput="checkStatus()" type="radio" name="status" id="nonbinusian" value="non-binusian" 
                          checked >
                          <label for="nonbinusian">Non-Binusian</label>
                          <p id="status_error" style="color: red"></p>
       
                      </div>
                  </div>
                    <div class="input-box">
                        <span  class="details">Email</span>
                        <input oninput="checkEmail();" name="email" type="text" placeholder="Masukkan Email" required>
                        <p id="email_error" style="color: red"></p>
                    </div>
                    <div class="input-box">
                        <span class="details">Nomor Whatsapp</span>
                        <input oninput="checkWhatsappNumber();" name="whatsapp_number" type="text" placeholder="Masukkan Nomor Whatsapp" required>
                        <p id="whatsapp_number_error" style="color: red"></p>
                    </div>
                    <div class="input-box">
                        <span class="details">Line ID</span>
                        <input oninput="checkLineId();" name="line_id" type="text" placeholder="Masukkan Line ID" required>
                        <p id="line_id_error" style="color: red"></p>
                    </div>
                    <div class="input-box">
                        <span class="details">Github/Gitlab ID</span>
                        <input oninput="checkGithubId();" name="github_id" type="text" placeholder="Masukkan Github/Gitlab ID" required>
                        <p id="github_id_error" style="color: red"></p>
                    </div>
                    <div class="input-box">
                        <span class="details">Tempat Lahir</span>
                        <input oninput="checkBirthPlace();" name="birth_place" type="text" placeholder="Masukkan Tempat Lahir" required>
                        <p id="birth_place_error" style="color: red"></p>
                    </div>
                    <div class="input-box">
                        <span class="details">Tanggal Lahir</span>
                        <input oninput="checkBirthDate();" name="birth_date" type="date" placeholder="Masukkan Tanggal Lahir" required>
                        <p id="birth_date_error" style="color: red"></p>
                        <i data-feather="calendar" class="icon"></i>
                    </div>
                    <div class="input-box">
                        <span class="details">Upload CV</span>
                        <input oninput="checkCvPath();" name="cv_path" type="file" id="cvUpload" class="upload" required>
                        <i data-feather="upload-cloud" class="up" onclick="triggerFileInput('cvUpload')"></i>
                        <span for="" class="format">*File formats: .pdf, .jpg, .jpeg and .png</span>
                        <p id="cv_path_error" style="color: red"></p>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Upload Flazz/ID Card</span>
                        <input oninput="checkCardPath();" name="card_path" type="file" id="cardUpload" class="upload" required>
                        <i data-feather="upload-cloud" class="up" onclick="triggerFileInput('cardUpload')"></i>
                        <span for="" class="format">*File formats: .pdf, .jpg, .jpeg and .png</span>
                        <p id="card_path_error" style="color: red"></p>
                    </div>
                </div>
                <div class="button">
                    <a href="/admin/panel" class="submit">Back</a>
                    <button type="submit" class="submit" id="sub">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function triggerFileInput(inputId) {
            document.getElementById(inputId).click();
        }
        feather.replace();
      </script>
      <script src="{{ asset('assets/js/update.js') }}"></script>
      <script src="{{ asset('assets/js/loading.js') }}"></script>
</body>
</html>