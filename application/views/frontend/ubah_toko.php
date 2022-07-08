<div class="main-content">
        <section class="section">
           <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Toko "<?php foreach ($toko as $toko):?> <?php echo $toko -> namaToko; ?> <?php endforeach;?>"</h1>
        
          </div>

          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Toko</h4>
                  </div>
                  <div class="card-body">
                  <ul class="nav nav-pills flex-column">
								<li class="nav-item"><a href="#" class=" nav-link">Beranda</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/produk/'.$toko->idToko);?>"
										class="nav-link ">Produk</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/pesanan/'.$toko->idToko);?>"
										class="nav-link">Pesanan</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/laporan');?>" class="nav-link">Laporan</a>
								</li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/ubah_toko/'.$toko->idToko);?>"
										class="nav-link active">Ubah Toko</a></li>
							</ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
          <div class="row">
          <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <div>
                    <h2 class="section-title">Hi, <?php echo $toko->namaToko ?>!</h2>
                </div>
                </div>
                </div>
              </div>
              </div>
            <div class="row">
            <div class="col-12">
            <form method="post" enctype="multipart/form-data"  action="<?php echo site_url('frontend/ubahToko/'.$toko->idToko);?>" class="needs-validation" novalidate="" > 
              <div class="card">
                <div class="card-header">
                  <h4>Ubah Toko</h4>
                </div>
                        <div class="card-body">
                        <div class="form-group row mb-4">
                        <img class="rounded mx-auto d-block" src="<?=base_url('./upload/'.$toko->logo);?>" width="360">
                        </div>
                          <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Toko</label>
                            <div class="col-9">
                              <input class="form-control" type="hidden" placeholder="" aria-label="Search" data-width="250" name="idToko" value="<?= $toko->idToko;?>">
                              <input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250" name="namaToko" value="<?= $toko->namaToko;?>" required>
                              <div class="invalid-feedback">
                                Nama toko tidak boleh kosong!
                              </div>
                            </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Toko</label>
                      <div class="col-9">
                      <input class="form-control" required type="text" placeholder="" aria-label="Search" data-width="250" name="deskripsi" value="<?= $toko->deskripsi ?>">
                      <div class="invalid-feedback">
                        Deskripsi toko tidak boleh kosong!
                      </div>  
                    </div>
                    </div>
                    <div class="form-group row mb-2">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Produk</label>
                      <di class="col-9">
                      <div class="form-group">
                        <input type="file" class="form-control" id="image" name="logo" placeholder="Gambar">
                      </div>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="card-footer text-right">
                    </div>
                    </div>
                    </div>
                  <div class="card-footer text-right bg-whitesmoke">
                        <button class="btn btn-primary mr-2" type="submit">Simpan</button>
                        <button class="btn btn-secondary " type="reset">Reset</button>
                </div>
                </div>
                <div class="card-footer text-right">
                </div>
            </div>
            </div>
        </div>
      	</section>
      </div>
