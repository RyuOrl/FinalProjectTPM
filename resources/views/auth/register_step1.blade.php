<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style-register1.css') }}">
    <title>Register1</title>
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
        
        <form name="register1_form" action="{{ route('register.step1') }}" method="POST">
          @csrf
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Nama Group</span>
                    <input oninput="checkGroup();" id="group"  name="group"  type="text" placeholder="Masukkan nama group" 
                    value="{{ session('register1.group') }}" required>
                    @error('group')
                    <p style="color:red" >Nama grup harus unik</p>
                    @enderror
                      <p style="color:red" id="group_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input oninput="checkPassword();" id="password" name="password"  type="password" placeholder="Buat password"  
                    value="{{ session('register1.password') }}" required autocomplete="new-password">
                    <p style="color:red" id="password_error"></p>
                </div>
                <div class="input-box">
                    <span class="details">Konfirmasi Password</span>
                    <input oninput="checkConfirmPassword();" id="confirm_password" name="confirm_password"  type="password" placeholder="Konfirmasi password" value="{{ session('register1.confirm_password') }}" required autocomplete="new-password">
                    <p style="color:red" id="confirm_password_error"></p>
                </div>
            </div>
            <div class="binusian-details">
                <span class="title5">Binusian atau Non-Binusian</span>
                <div class="category">
                    <input oninput="checkStatus();" type="radio" name="status" id="binusian" value="binusian" 
                    @if(session('register1.status', 'non-binusian') === 'binusian')
                    checked  @endif>
                    <label for="binusian">Binusian</label>
                
                    <input oninput="checkStatus();" type="radio" name="status" id="nonbinusian" value="non-binusian" @if(session('register1.status', 'binusian') === 'non-binusian')  checked @endif>
                    <label for="nonbinusian">Non-Binusian</label>
                    <p style="color:red" id="status_error"></p>
                </div>
            </div>

            <div class="button">
                <a href="/login" type="submit" class="submit">Back</a>
                <button type="submit" class="submit" id="sub">Next</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('assets/js/register1_validation.js') }}"></script>
</body>
</html>