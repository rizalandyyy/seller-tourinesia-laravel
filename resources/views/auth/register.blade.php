<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="Vokanesia" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tourinesia - Platform yang membatu kalian untuk mempermudah membeli tiket, suvenir, dan virtual tour dengan mudah, cepat, dan nyaman" />
	<meta property="og:title" content="Tourinesia - Platform Wisata Online" />
	<meta property="og:description" content="Tourinesia - Platform yang membatu kalian untuk mempermudah membeli tiket, suvenir, dan virtual tour dengan mudah, cepat, dan nyaman" />
	<meta property="og:image" content="{{ asset('/images/logo-rel.png') }}" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Tourinesia - Seller Dashboard</title>

	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ asset('/images/logo-rel.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <script src="https://kit.fontawesome.com/9329f29326.js" crossorigin="anonymous"></script>

</head>

<body class="vh-100">
     <div class=" h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
                                        <img src="{{ asset('/images/tourinesia2.png') }}" style="width: 200px" alt="">
									</div>
                                    <h4 class="text-center mb-4">Daftarkan Akun Anda</h4>
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label  class="mb-1"><strong>Nama Pengguna</strong></label>
                                            <input type="text" name="name" id="name" class="form-control" @error('name') style="border-color: #ff0000" @enderror placeholder="Nama Pengguna" value="{{ old('name') }}">

                                            @error('name')
                                                <div class="text-red-500 mt-2 text-sm" style="color: #ff0000" >
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" id="email" class="form-control" @error('email') style="border-color: #ff0000" @enderror placeholder="Alamat Email" value="{{ old('email') }}">

                                            @error('email')
                                                <div class="text-red-500 mt-2 text-sm" style="color: #ff0000">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Tanggal Lahir</strong></label>
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" @error('tanggal_lahir') style="border-color: #ff0000" @enderror  value="{{ old('tanggal_lahir') }}">

                                            @error('tanggal_lahir')
                                                <div class="text-red-500 mt-2 text-sm" style="color: #ff0000">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Jenis Kelamin</strong></label>
                                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
                                                <option value="1" {{ old('jenis_kelamin') == 1 ? 'selected' : '' }}>Laki-laki</option>
                                                <option value="2" {{ old('jenis_kelamin') == 2 ? 'selected' : '' }}>Perempuan</option>
                                            </select>

                                            @error('jenis_kelamin')
                                                <div class="text-red-500 mt-2 text-sm" style="color: #ff0000">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="username" id="username" class="form-control" @error('username') style="border-color: #ff0000" @enderror placeholder="Username"  value="{{ old('username') }}">

                                            @error('username')
                                                <div class="text-red-500 mt-2 text-sm" style="color: #ff0000">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Kata Sandi</strong></label>
                                            <input type="text" name="password" id="password" class="form-control" @error('password') style="border-color: #ff0000" @enderror placeholder="Password"  value="{{ old('password') }}">

                                            @error('password')
                                                <div class="text-red-500 mt-2 text-sm" style="color: #ff0000">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Konfirmasi Kata Sandi</strong></label>
                                            <input type="text" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repeat your password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        </div>
                                    </form>
                                    <hr>
                                        <a href="" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                        </a>
                                        <hr>
                                        <a href="" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                                        </a>
                                    <div class="new-account mt-3">
                                        <center><p>Sudah Punya Akun? <a class="text-primary" href="{{ route('login') }}">Masuk</a></p></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>
</body>

</html>