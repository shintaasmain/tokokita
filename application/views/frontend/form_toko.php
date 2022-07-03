<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
        
          </div>

          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Member</h4>
                  </div>
                  <div class="card-body">
               <ul class="nav nav-pills flex-column">
               <li class="nav-item"><a href="<?php echo site_url('frontend/dashboard_member');?>" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/transaksi/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Transaksi</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('frontend/riwayat_transaksi');?>" class="nav-link">Riwayat Transaksi</a></li>
                      <li class="nav-item"><a href="<?php echo site_url ('frontend/toko/'.$this->session->userdata('idKonsumen'));?>" class="active nav-link">Toko</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/ubah_profil/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Ubah Profil</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('home/logout');?>" class="nav-link">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            <div class="col-md-8">
          <div class="row">
          <div class="col-12">
          <?php echo form_open_multipart('frontend/tambah_tokobaru/'.$this->session->userdata('idKonsumen'));?>
                <div class="card">
                  <div class="card-header">
                    <h4>Form Membuat Toko Baru</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Toko</label>
                      <div class="col-9">
                      <input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250" name="namaToko">
                      <?php echo form_error('namaToko','<small style="color:#FD0707">','</small>'); ?>  
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-9">
                      <textarea class="form-control" name="deskripsi"></textarea>
                      <?php echo form_error('deskripsi','<small style="color:#FD0707">','</small>'); ?>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo Toko</label>
                      <div class="col-9">
                      <div class="form-group">
                    <input type="file" class="form-control" id="image" name="logo" placeholder="Gambar">
                   </div>
                   <div class="form-group row mb-4 hidden">
                      <div class="col-9">
                      <input class=" form-control" type="hidden" placeholder="" aria-label="Search" data-width="250" name="statusAktif">
                    </div>
                    </div>
                      <div class="col-9">
                      <div class="card-footer text-right">
                    </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right bg-whitesmoke">
                        <button class="btn btn-primary mr-2" type="submit" value="upload">Simpan</button>
                        <button class="btn btn-secondary " type="reset">Reset</button>
                  </div>
                </div>
                <?php echo form_close();?>
              </div>
              </div>
            </div>
  		    </div>
      	</section>
      </div>