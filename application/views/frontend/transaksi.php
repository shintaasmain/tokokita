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
                      <li class="nav-item"><a href="<?php echo site_url('frontend/transaksi/'.$this->session->userdata('idKonsumen'));?>" class="active nav-link">Transaksi</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('frontend/riwayat_transaksi');?>" class="nav-link">Riwayat Transaksi</a></li>
                      <li class="nav-item"><a href="<?= site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>" class=" nav-link">Toko</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/ubah_profil/'.$this->session->userdata('idKonsumen'));?>" class="nav-link">Ubah Profil</a></li>
                      <li class="nav-item"><a href="#!" onclick="logoutConfirm('<?php echo site_url('home/logout');?>')" class="nav-link">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            <div class="col-md-8">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h4>Data Transaksi</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                    <tr>
                        <th>No</th>
                        <th>Nama Toko</th>
                        <th>Tanggal Order</th>
                        <th>Status Order</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                    <?php 
                    $i=1;
                    foreach ($order as $O): ?> 
                          <tr>
                          <td><?= $i++;?></td>
                          <td><?php echo $O->namaToko;?></td>
                          <td><?php echo $O->tglOrder;?></td>

                          <!-- status -->
												<?php if ($O -> statusOrder == 'Belum Bayar'){ ?>
													<td>
														<div class="badge badge-pill badge-danger mb-1 ">Belum Bayar</div>
													</td>
												<?php } else if($O -> statusOrder == 'Sudah Bayar') { ?>
													<td>
														<div class="badge badge-pill badge-info mb-1 ">Sudah Bayar</div>
													</td>
												<?php } else if($O -> statusOrder == 'Barang Diproses') { ?>
													<td>
														<div class="badge badge-pill badge-warning mb-1 ">Barang Diproses</div>
													</td>
												<?php } else if($O -> statusOrder == 'Dikirim') { ?>
													<td>
														<div class="badge badge-pill badge-primary mb-1 ">Dikirim</div>
													</td>
												<?php } else { ?>
													<td>
														<div class="badge badge-pill badge-success mb-1 ">Selesai</div>
													</td>
												<?php } ?>

                          
                        <td>
                          <!-- detail button -->
                          <a href="<?php echo site_url('frontend/detailTransaksi/'.$O->idOrder);?>" class="btn btn-primary mr-2">Detail</a>
                      
                          <!-- terima button -->
                          <?php if ($O -> statusOrder == 'Dikirim'){ ?>
													<a href="<?php echo site_url('frontend/terimaBarang/'.$O->idOrder);?>"
														class="btn btn-success">Terima</a>
												</td>
												<?php } ?>
                        </td>


                      </tr>
                      <?php endforeach ; ?>
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