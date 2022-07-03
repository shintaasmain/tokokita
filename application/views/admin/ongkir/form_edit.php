
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Forms</h2>
            <div class="row">

              <div class="col-12 col-md-6 col-lg-6">
                <form method="post" action="<?php echo site_url('ongkir/edit');?>" class="needs-validation" novalidate="" >              <div class="card">
                <input type="hidden" name="id"  value="<?php echo $biaya->idBiayaKirim;?>">
                <div class="card">  
                <div class="card-header">
                    <h4>Form Edit Ongkos Kirim</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <!-- Nama Kurir -->
                    <label class="col-sm-3">Nama Kurir</label>
                      <div class="col-sm-9">
                        <select class="form-control mb-3" name="idKurir">
                        <?php foreach ($kurir as $item): ?>
                            <option <?php if ($biaya->idKurir == $item->idKurir) {
                              echo 'selected="selected"';}?> 
                              value="<?= $item->idKurir?>"><?= $item->namaKurir?></option>
                        <?php endforeach; ?>
                      </select> 
                      </div>
                      <!-- Kota Asal -->
                      <label class="col-sm-3">Kota Asal</label>
                      <div class="col-sm-9">
                        <select class="form-control mb-3" name="idKotaAsal">
                        <?php foreach ($kota as $i): ?>
                            <option <?php if ($biaya->idKotaAsal == $i->idKota) {
                              echo 'selected="selected"';}?>
                              value="<?= $i->idKota?>"><?= $i->namaKota?></option>
                        <?php endforeach; ?>
                      </select>
                      </div>
                      <label class="col-sm-3">Kota Tujuan</label>
                      <div class="col-sm-9">
                        <select class="form-control  mb-3" name="idKotaTujuan">
                        <?php foreach ($kota as $t): ?>
                            <option <?php if ($biaya->idKotaTujuan == $t->idKota){
                            echo 'selected="selected"';}?>  value="<?= $t->idKota?>"><?= $t->namaKota?></option>
                        <?php endforeach; ?>
                      </select> 
                      </div>
                      <label for="inputEmail3" class="col-sm-3 cpl-form-label">Biaya</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $biaya->biaya;?>" name="biaya" placeholder="Biaya" required>
                         <div class="invalid-feedback">
						    	Biaya tidak boleh kosong !
						</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
