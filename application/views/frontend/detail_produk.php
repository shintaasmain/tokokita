<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Toko " <?php foreach($produk as $p): ?> <?php echo $p->namaToko;?> <?php endforeach ; ?> "</h1>
          </div>
          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Produk</h4>
                  </div>
                  <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="<?php echo site_url('frontend/getidToko/'.$p->idToko);?>" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/produk/'.$p->idToko);?>" class=" active nav-link">Produk</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/pesananProduk');?>" class="nav-link">Pesanan</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/laporanProduk');?>" class="nav-link">Laporan</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/ubah_toko/'.$p->idToko);?>" class="nav-link">Ubah Toko</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            <div class="col-md-8">
          <div class="row">
          <div class="col-12">
          <form method="post" enctype="multipart/form-data"  action="<?php echo site_url('frontend/detailProduk');?>" class="needs-validation" novalidate="" > 
          <?php foreach($produk as $p): ?>
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Produk</h4>
                  </div>
                  <div class="card-body">
                      <input class="form-control" type="hidden" placeholder="" aria-label="Search" value="<?php echo $p->idToko;?>" data-width="250" name="idToko">
                      <input class="form-control" type="hidden" placeholder="" aria-label="Search" value="<?php echo $p->idProduk;?>" data-width="250" name="idProduk">
                      <div class="form-group row mb-4">
                      <img class="rounded mx-auto d-block" src="<?=base_url('./fotoProduk/'.$p->foto);?>" width="360">
                    </div>
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                      <div class="col-sm-12 col-md-7">
                      <select class="form-control mb-3" name="idKat">
                        <?php foreach ($kategori as $Kat): ?>
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
                      <input class="form-control"  type="text" placeholder="" aria-label="Search" data-width="250" name="namaProduk" value="<?= $p->namaProduk;?>" required>
                      <div class="invalid-feedback">
                        Nama produk tidak boleh kosong!
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Toko</label>
                      <div class="col-9">
                      <input class="form-control"  required type="text" placeholder="" aria-label="Search" data-width="250" name="namaToko" value="<?= $p->namaToko;?>">
                      <div class="invalid-feedback">
                        Nama Toko tidak boleh kosong!
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Produk</label>
                      <div class="col-9">
                      <input class="form-control"  required type="text" placeholder="" aria-label="Search" data-width="250" name="hargaProduk" value="<?= $p->harga;?>">
                      <div class="invalid-feedback">
                        Harga produk tidak boleh kosong!
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok Produk</label>
                      <div class="col-9">
                      <input class="form-control"  required type="text" placeholder="" aria-label="Search" data-width="250" name="stokProduk" value="<?= $p->stok;?>">
                      <div class="invalid-feedback">
                        Stok produk tidak boleh kosong!
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berat Produk</label>
                      <div class="col-9">
                      <input class="form-control"  required type="text" placeholder="" aria-label="Search" data-width="250" name="beratProduk" value="<?= $p->berat;?>">
                      <div class="invalid-feedback">
                        Berat produk tidak boleh kosong!
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-9">
                      <textarea class="form-control"  required name="deskripsiProduk"><?= $p->deskripsiProduk;?></textarea> 
                      <div class="invalid-feedback">
                        Deskripsi produk tidak boleh kosong!
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-2">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Produk</label>
                      <di class="col-9">
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
                  <?php endforeach ; ?>
                  <div class="card-footer text-right bg-whitesmoke">
                        <button class="btn btn-primary mr-2" type="submit">Simpan</button>
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


<script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>
<!-- Hapus MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
      </div>
    </div>
  </div>
</div>



      