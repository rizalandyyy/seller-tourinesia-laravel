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
<div>
     <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6" style="position: absolute; top: 15%">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
									    <img src="{{ asset('/images/tourinesia2.png') }}" style="width: 200px" alt="">
									</div>
                                    <h4 class="text-center mb-4">Atur Ulang Kata Sandi</h4>
                                    <form action="">
                                        <div class="mb-3">
                                            <label><strong>Kata Sandi Baru</strong></label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                         <div class="mb-3">
                                            <label><strong>Konfirmasi Kata Sandi Baru</strong></label>
                                            <input type="password" class="form-control" placeholder="Confirmation Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">KIRIM</button>
                                        </div>
                                    </form>
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