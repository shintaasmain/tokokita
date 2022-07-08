<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Toko "<?php echo $toko -> namaToko; ?>"</h1>
          </div>
          <div class="section-body">         
           <div id="output-status">
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
										class="nav-link active">Produk</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/pesanan/'.$toko->idToko);?>"
										class="nav-link">Pesanan</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/laporan');?>" class="nav-link">Laporan</a>
								</li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/ubah_toko/'.$toko->idToko);?>"
										class="nav-link">Ubah Toko</a></li>
							</ul>
                  </div>
                </div>
              </div>
          <div class="col-md-8">
          <div class="row">
          <div class="col-12">
          <form method="post" enctype="multipart/form-data"  action="<?php echo site_url('frontend/tambah_produkbaru');?>" class="needs-validation" novalidate="" > 
                <div class="card" >
                  <div class="card-header">
                    <h4>Form Membuat Produk Baru</h4>
                  </div>
                  <div class="card-body">
                      <input class="form-control" type="hidden" placeholder="" aria-label="Search" value="<?= $toko->idToko?>" data-width="250" name="id">
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="idKat">
                        <?php foreach ($kategori as $item): ?>
                            <option value="<?= $item->idKat?>"><?= $item->namakat?></option>
                        <?php endforeach; ?>
                        </select>
                      </div>
                        </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text"  aria-label="Search" data-width="250" name="namaProduk" required>
                      <div class="invalid-feedback">
                        Nama Produk tidak boleh kosong !
                      </div> 
                      </div>
                    </div>
                    <div class="form-group row mb-2">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Toko</label>
                      <div class="col-9">
                      <div class="form-group">
                        <input type="file" class="form-control" id="image" name="foto" placeholder="Gambar">
                      </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text" aria-label="Search" data-width="250" name="hargaProduk" required>
                      <div class="invalid-feedback">
											Harga produk tidak boleh kosong !
										  </div>  
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text" aria-label="Search" data-width="250" name="stokProduk" required>
                      <div class="invalid-feedback">
                        Stok Produk tidak boleh kosong !
                      </div> 
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berat Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text"  aria-label="Search" data-width="250" name="beratProduk" required>
                      <div class="invalid-feedback">
                        Berat Produk tidak boleh kosong !
                      </div> 
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-9">
                      <textarea class="form-control" required="" name="deskripsi"></textarea>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="card-footer text-right">
                    </div>
                    </div>
                    </div>
                  <div class="card-footer text-right bg-whitesmoke">
                        <button class="btn btn-primary mr-2" type="submit"> Simpan</button>
                        <button class="btn btn-secondary " type="reset">Reset</button>
                  </div>
                  </div>
              </div>
              </div>
            </div>
  		    </div>
      	</section>
      </div>