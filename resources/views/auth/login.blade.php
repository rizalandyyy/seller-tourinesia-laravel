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
    <div class="authincation h-100">
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
                                    <h4 class="text-center mb-4"><b>Masuk ke Akun Anda</b></h4>
                                    <form action="">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Alamat Email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Kata Sandi</strong></label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Selalu Ingat Akun Saya</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="{{ route('forgot') }}">Lupa Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                        <hr>
                                        <a href="" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                        </a>
                                        <hr>
                                        <a href="" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                                        </a>
                                    </form>
                                    <div class="new-account mt-3">
                                        <center><p>Belum Punya Akun? <a class="text-primary" href="{{ route('register') }}">Daftar</a></p></center>
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