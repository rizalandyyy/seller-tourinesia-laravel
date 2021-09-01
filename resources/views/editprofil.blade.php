@include('header')
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Informasi Toko</h4>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div id="navpills-1" class="tab-pane active">
                                        <div class="row">
                                             <div class="mb-3">
                                            <label class="mb-1"><strong>Nama Toko</strong></label>
                                            <input type="text" class="form-control" value="Nama Toko">
                                        </div>
                                        </div>
										 <div class="row">
                                             <div class="mb-3">
                                            <label class="mb-1"><strong>Domain Toko</strong></label>
                                            <input type="text" class="form-control" value="Domain Toko">
                                        </div>
                                        </div>
										 <div class="row">
                                             <div class="mb-3">
                                            <label class="mb-1"><strong>Slogan Toko</strong></label>
                                            <input type="text" class="form-control" value="Slogan Toko">
                                        </div>
                                        </div>
										 <div class="row">
                                             <div class="mb-3">
                                            <label class="mb-1"><strong>Deskripsi Toko</strong></label>
                                            <input type="text" class="form-control" value="Deskripsi Toko">
                                        </div>
                                        </div>
										<fieldset class="mb-3">
                                            <div class="row">
                                                <label class="col-form-label col-sm-3 pt-0">Status Toko</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                                        <label class="form-check-label">
                                                            Buka Toko
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                                        <label class="form-check-label">
                                                            Tutup Toko
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
										<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
							<div class="card-header">
								<h4 class="card-title">Gambar Toko</h4>
							</div>
							<div class="card-body pb-1">
								<div id="lightgallery" class="row">
									<a href="images/big/img1.jpg" data-exthumbimage="images/big/img1.jpg" data-src="images/big/img1.jpg" class="col-lg-3 col-md-6 mb-4">
										<img src="images/big/img1.jpg" alt="" style="width:100%;"/>
									</a>
									<h5>Ukuran optimal 300 x 300 piksel dengan Besar file: Maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: JPG, JPEG, PNG</h5>
									 <button type="button" class="btn btn-square btn-outline-primary">Pilih Foto</button>
								</div>
							</div>
                        </div>
                        <!-- /# card -->
                    </div>
                						</div>
										<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
							<div class="card-header">
								<h4 class="card-title">Sampul Toko</h4>
							</div>
							<div class="card-body pb-1">
								<div id="lightgallery" class="row">
									<a href="images/big/img1.jpg" data-exthumbimage="images/big/img1.jpg" data-src="images/big/img1.jpg" class="col-lg-3 col-md-6 mb-4">
										<img src="images/big/img1.jpg" alt="" style="width:100%;"/>
									</a>
									<h5>Ukuran optimal 300 x 300 piksel dengan Besar file: Maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: JPG, JPEG, PNG</h5>
									 <button type="button" class="btn btn-square btn-outline-primary">Pilih Foto</button>
								</div>
							</div>
                        </div>
                        <!-- /# card -->
                    </div>
                						</div>
										 <a href="javascript:void(0);" class="btn btn-outline-success mb-5"><i class="fas fa-check-circle me-3 scale3"></i>Simpan</a>
                                    </div>
                                    <div id="navpills-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills-3" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
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
            Content body end
        ***********************************-->

@include('footer')