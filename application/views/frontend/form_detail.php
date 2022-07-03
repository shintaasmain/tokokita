  <?php echo form_open_multipart('frontend/tambah_produkbaru');?>
             <?php foreach($produk as $p): ?>
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Produk</h4>
                  </div>
                  <div class="card-body">
                      <input class="form-control" type="hidden" placeholder="" aria-label="Search" value="<?php echo $p->namaToko;?>" data-width="250" name="id">
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                      <div class="col-sm-12 col-md-7">
                      <select class="form-control mb-3" name="idKurir">
                        <?php foreach ($Kategori as $Kat): ?>
                            <option <?php if ($Kat->idKat == $p->idKat) { 
                                echo 'selected="selected"';}?> 
                              value="<?= $Kat->idKat?>"><?= $Kat->namakat?></option>
                        <?php endforeach; ?>
                      </select> 
                      </div>
                        </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250" name="namaProduk" value="<?= $p->namaProduk;?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Toko</label>
                      <div class="col-9">
                      <input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250" name="namatToko" value="<?= $p->namaToko;?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250" name="hargaProduk" value="<?= $p->harga;?>">
                      <?php echo form_error('hargaProduk','<small style="color:#FD0707">','</small>'); ?>  
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250" name="stokProduk" value="<?= $p->stok;?>">
                      <?php echo form_error('stokProduk','<small style="color:#FD0707">','</small>'); ?>  
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berat Produk</label>
                      <div class="col-9">
                      <input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250" name="beratProduk" value="<?= $p->berat;?>">
                      <?php echo form_error('beratProduk','<small style="color:#FD0707">','</small>'); ?>  
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-9">
                      <textarea class="form-control" name="deskripsiProduk"><?= $p->deskripsiProduk;?></textarea> 
                      </div>
                    </div>
                    <div class="form-group row mb-2">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Produk</label>
                      <di class="col-9">
                      <img src="<?=base_url('./fotoProduk/'.$p->foto);?>" width="360">
                      <div class="form-group">
                        <input type="file" class="form-control" id="image" name="foto" placeholder="Gambar">
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
                  <?php echo form_close();?>
                  <?php endforeach ; ?>