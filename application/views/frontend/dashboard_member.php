<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('');?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
                      <li class="nav-item"><a href="#" class="active nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/transaksi/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Transaksi</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('frontend/riwayat_transaksi');?>" class="nav-link">Riwayat Transaksi</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Toko</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/ubah_profil/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Ubah Profil</a></li>
                      <li class="nav-item"><a href="#!" onclick="logoutConfirm('<?php echo site_url('home/logout');?>')" class="nav-link">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header"><h4>Total Toko</h4>
                  </div>
                  <div class="card-body">
                  <?= $totalToko ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Transaksi</h4>
                  </div>
                  <div class="card-body">
                    <?= $totalTransaksi;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap"><div class="card-header">
                    <h4>Total Pesanan</h4>
                  </div>
                  <div class="card-body">
                    -
                  </div>
                </div>
              </div>
            </div>
          </div>
              </div>
            </div>
  		    </div>
      	</section>
      </div>

      <script>
        function logoutConfirm(url){
          $('#btn-logout').attr('href', url);
          $('#logoutModal').modal();
        }
      </script>
      <!-- Logout MODAL -->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin keluar?</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <a id="btn-logout" class="btn btn-danger" href="#">Keluar</a>
            </div>
          </div>
        </div>
      </div>