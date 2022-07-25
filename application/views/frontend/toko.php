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
               <li class="nav-item"><a href="<?php echo site_url('frontend/dashboard_member');?>" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/transaksi/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Transaksi</a></li>
                    <!-- <li class="nav-item"><a href="<?php echo site_url('frontend/riwayat_transaksi');?>" class="nav-link">Riwayat Transaksi</a></li> -->
                      <li class="nav-item"><a href="#" class="active nav-link">Toko</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/ubah_profil/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Profil</a></li>
                      <li class="nav-item"><a href="#!" onclick="logoutConfirm('<?php echo site_url('home/logout');?>')" class="nav-link">Logout</a></li>
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
                        <a href="<?php echo site_url('frontend/tampil_formtoko');?>" class="btn btn-primary">Silakan Membuat Toko</a>
                </div>
                </div>
                </div>
              </div>
              </div>
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h4>Data Toko</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-md" id="table-1">
                      <thead>
                    <tr>
                        <th>Nama Toko</th>
                        <th>Deskripsi</th>
                        <th>Logo Toko</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($toko as $toko): ?>
                          <tr>
                          <td><?php echo $toko->namaToko;?></td>
                          <td><?php echo $toko->deskripsi;?></td>
                          <td><img src="<?=base_url('./upload/'.$toko->logo);?>" width="80"></td></td>
                          <td>
                            <?php if ($toko->statusAktif == 'Y') :?>
                              <a href="#" class="badge badge-success">Aktif</a><br>
                              <?php elseif ($toko->statusAktif == 'N'):?>
                                <a href="#" class="badge badge-danger">Tidak Aktif</a><br>
                                <?php endif ;?>
                          </td>
                        <td><a href="<?php echo site_url('frontend/getidToko/'.$toko->idToko);?>" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <?php endforeach ; ?>
                      </tbody>
                    </table>
                </div>
                </div>
                <div class="card-footer text-right">
               
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
