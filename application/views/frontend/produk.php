<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Toko "<?php echo $toko -> namaToko; ?> "</h1>
          </div>
          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Toko</h4>
                  </div>
                  <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="<?php echo site_url('frontend/getidToko/'.$toko->idToko);?>" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="#" class=" active nav-link">Produk</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('frontend/pesananProduk');?>" class="nav-link">Pesanan</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/laporanProduk');?>" class="nav-link">Laporan</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('frontend/ubah_toko/'.$toko->idToko);?>" class="nav-link">Ubah Toko</a></li>
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
                        <a href="<?php echo site_url('frontend/tampil_formproduk/'.$toko->idToko);?>" class="btn btn-primary">Silakan Membuat Produk</a>
                </div>
                </div>
                </div>
              </div>
              </div>
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h4>Data Produk</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-md" id="table-1">
                      <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($produk as $p): ?>
                          <tr>
                          <td><?php echo $p->namaProduk;?></td>
                          <td><?php echo $p->harga;?></td>
                          <td><?php echo $p->stok;?></td>
                          <td><a href=" <?php echo site_url('frontend/getidProduk/'.$p->idProduk.'/'.$p->idToko);?>" class="btn btn-primary">Detail</a>
                         <a onclick="deleteConfirm('<?php echo site_url('frontend/hapusProduk/'.$p->idProduk.'/'.$p->idToko);?>')" href="#!" class="btn btn-danger" >Hapus</a></td>
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



      