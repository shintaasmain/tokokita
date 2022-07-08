      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Aduan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo site_url('adminpanel/dashboard');?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?php echo site_url('aduan');?>">Aduan</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Aduan</h2>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md" >
                        <tr>
                          <th >No</th>
                          <th >Nama</th>
                          <th >Email</th>
                          <th >No Handphone</th>
                          <th width="20%" >Pesan</th>
                        </tr>
                        
                        <?php 
                        $i = 1;
                        foreach($aduan as $item){?>
                          <tr>
                          <td><?= $i++;?></td>
                          <td><?php echo $item->nama;?></td>
                          <td><?php echo $item->email;?></td>
                          <td><?php echo $item->nohp;?></td>
                          <td><?php echo $item->pesanaduan;?></td>
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
