<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style-register.css') }}">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <section class="main">
        <div>HACK</div>
        <img src="{{ asset('assets/image/image2.png') }}" alt="">
        <div>THON</div>
    </section>

    <div class="container">
        <div class="title">Registrasi</div>
        
        <div class="asset">
            <div class="lingkaran1"></div>
            <div class="garis"></div>
            <div class="lingkaran2"></div>
        </div>

        <div class="title1">Group Information</div>
        
        <form action="{{ route('register') }}" onsubmit="return validateForm();" name="register_form"  method="POST">
          @csrf
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Nama Group</span>
                    <input oninput="checkGroup();" id="group"  name="group"  type="text" placeholder="Masukkan nama group" 
                    value="{{ old('group') }}" required>
                    @error('group')
                    <p style="color:red" >Nama grup telah diambil.</p>
                    @enderror
                      <p style="color:red" id="group_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input class="password-input" oninput="checkPassword();" id="password" name="password"  type="password" placeholder="Buat password"  
                    value="{{ old('password') }}"  autocomplete="new-password" required>
                    <span><i class="toggle-password far fa-eye"></i></span>
                    <p style="color:red" id="password_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Konfirmasi Password</span>
                    <input class="password-input" oninput="checkConfirmPassword();" id="confirm_password" name="confirm_password"  type="password" placeholder="Konfirmasi password" value="{{ old('confirm_password') }}" 
                    required>
                    <span><i class="toggle-password far fa-eye"></i></span>
                    <p style="color:red" id="confirm_password_error"></p>
                </div>
                <div class="binusian-details">
                    <span class="title5">Binusian atau Non-Binusian</span>
                    <div class="category">
                        <input oninput="checkStatus();" type="radio" name="status" id="binusian" value="binusian" 
                        @if(old('status', 'non-binusian') === 'binusian')
                        checked  @endif>
                        <label for="binusian">Binusian</label>
                    
                        <input oninput="checkStatus();" type="radio" name="status" id="nonbinusian" value="non-binusian" @if(old('status', 'non-binusian') === 'binusian')
                        checked  @endif>
                        <label for="nonbinusian">Non-Binusian</label>
                        <p style="color:red" id="status_error"></p>
                    </div>
                </div>
            </div>
            

            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Nama Lengkap</span>
                    <input id="full_name" oninput="checkFullName();" name="full_name" type="text" placeholder="Masukkan Nama Lengkap" value="{{ old('full_name') }}"
                    required>
                    <p style="color:red" id="full_name_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input id="email" oninput="checkEmail();" name="email" type="email" placeholder="Masukkan Email" value="{{ old('email') }}"
                    required >
                    @error('email')
                    <p style="color:red" >Email telah diambil.</p>
                    @enderror
                    <p style="color:red" id="email_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Nomor Whatsapp</span>
                    <input id="whatsapp_number" oninput="checkWhatsappNumber();" name="whatsapp_number" type="text" placeholder="Masukkan Nomor Whatsapp" value="{{ old('whatsapp_number') }}" required>
                    @error('whatsapp_number')
                    <p style="color:red" >Nomor WhatsApp telah diambil.</p>
                    @enderror
                    <p style="color:red" id="whatsapp_number_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Line ID</span>
                    <input id="line_id" oninput="checkLineId();" name="line_id" type="text" placeholder="Masukkan Line ID" value="{{ old('line_id') }}"
                    required>
                    @error('line_id')
                    <p style="color:red" >Line ID telah diambil.</p>
                    @enderror
                    <p style="color:red" id="line_id_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Github/Gitlab ID</span>
                    <input id="github_id" oninput="checkGithubId();" name="github_id" type="text" placeholder="Masukkan Github/Gitlab ID" value="{{ old('github_id') }}" 
                    required>
                    <p style="color:red" id="github_id_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Tempat Lahir</span>
                    <input id="birth_place" oninput="checkBirthPlace();" name="birth_place" type="text" placeholder="Masukkan Tempat Lahir" value="{{ old('birth_place') }}"
                    required>
                    <p style="color:red" id="birth_place_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Tanggal Lahir</span>
                    <input id="birth_date" oninput="checkBirthDate();" name="birth_date" type="date" placeholder="Masukkan Tanggal Lahir" value="{{ old('birth_date') }}"
                    required>
                    <i data-feather="calendar" class="icon"></i>
                    <p style="color:red" id="birth_date_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Upload CV</span>
                    <input oninput="checkCvPath();" name="cv_path" type="file" id="cvUpload" class="upload" required>
                    <i data-feather="upload-cloud" class="up" onclick="triggerFileInput('cvUpload')"></i>
                    <p style="color:red" id="cv_path_error"></p>
                    <span for="" class="format">*File formats: .pdf, .jpg, .jpeg and .png</span>
                </div>
                <div id="flazz">
                <div class="input-box">
                    <span id="card" class="details">Upload Flazz Card</span>
                    <input oninput="checkCardPath();" name="card_path" type="file" id="cardUpload" class="upload" required>
                    <i data-feather="upload-cloud" class="up" onclick="triggerFileInput('cardUpload')"></i>
                    <p style="color:red" id="card_path_error"></p>
                    <span for="" class="format">*File formats: .pdf, .jpg, .jpeg and .png</span>
                </div>
            </div>
               
     
            </div>

            <div id="nextprevious" class="button">
                <button id="prevBtn" type="button" class="submit" onclick="nextPrev(-1)">Back</button>
                <button id="nextBtn" type="button" class="submit" onclick="nextPrev(1)">Next</button>
                <button class="submit" id="submitBtn" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('assets/js/hide_password_register.js') }}"> </script>
    <script src="{{ asset('assets/js/register.js') }}"></script>
    <script>
        function triggerFileInput(inputId) {
            document.getElementById(inputId).click();
        }
        feather.replace();
      </script>
    
</body>
</html>