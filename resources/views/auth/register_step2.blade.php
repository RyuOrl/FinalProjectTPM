<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style-register2.css') }}">
    <title>Register2</title>
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

        <div class="title1">Leader Information</div>
        
        <form action="{{ route('register.step2') }}" method="POST">
          @csrf
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Nama Lengkap</span>
                    <input name="full_name" type="text" placeholder="Masukkan Nama Lengkap" required>
                    @error('full_name')
                      <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input name="email" type="email" placeholder="Masukkan Email" required>
                    @error('email')
                      <p style="color:red">{{ $message }}</p>
                    @enderror
                  </div>
                <div class="input-box">
                    <span class="details">Nomor Whatsapp</span>
                    <input name="whatsapp_number" type="number" placeholder="Masukkan Nomor Whatsapp" required>
                    @error('whatsapp_number')
                      <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="details">Line ID</span>
                    <input name="line_id" type="text" placeholder="Masukkan Line ID" required>
                    @error('line_id')
                      <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="button">
                <a href="/register/step1" class="submit">Back</a>
                <a type="submit" class="submit" id="sub">Submit</a>
            </div>
        </form>
    </div>
</body>
</html>