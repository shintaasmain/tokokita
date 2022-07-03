      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Member</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Member</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Member</h2>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Username</th>
                          <th>Nama Konsumen</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>Telepon</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($member as $item){?>
                          <tr>
                          <td><?php echo $item->idKonsumen;?></td>
                          <td><?php echo $item->username;?></td>
                          <td><?php echo $item->namaKonsumen;?></td>
                          <td><?php echo $item->alamat;?></td>
                          <td><?php echo $item->email;?></td>
                          <td><?php echo $item->tlpn;?></td>
                          <td>
                            <?php if ($item->statusAktif == 'Y') :?>
                              <a href="#" class="badge badge-success">Aktif</a><br>
                              <?php elseif ($item->statusAktif == 'N'):?>
                                <a href="#" class="badge badge-danger">Tidak Aktif</a><br>
                                <?php endif ;?>
                          </td>
                          <td>
                                <?php if ($item->statusAktif == 'Y'): ?>
                                  <a href="<?= site_url('member/getid_tidakaktif/'.$item->idKonsumen); ?>" class="btn btn-warning"> Non Aktif</a> <br>
                                <?php elseif ($item->statusAktif == 'N') : ?>
                                  <a href="<?= site_url('member/getid_aktif/'.$item->idKonsumen); ?>" class="btn btn-primary">Aktif</a><br>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php } ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
