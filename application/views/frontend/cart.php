<div class="main-content">
<div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Keranjang Belanja</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Gambar</th>
                          <th>Harga</th>
                          <th>Qty</th>
                          <th>Sub Total</th>
                          <th>Aksi</th>
                        </tr>
                        <?php 
                            $total = 0;
                            $i = 1;
                            $cart = $this->cart->contents();
                            foreach($cart as $val){
                                $total = $total+$val['subtotal'];?>
                            <tr>
                            <td><?= $i++;?></td>
                            <td><?= $val['name'];?></td>
                            <td><img src="<?=base_url('./fotoProduk/'.$val['foto']);?>" width="80"></td></td>
                            <td><?= number_format($val['price']);?></td>
                            <td ><input type="number" min="1" value="<?= $val['qty'];?>"></td>
                            <td><?= number_format ($val['price'] * $val['qty']);?></td>
                            <td><a href="<?php echo site_url('frontend/hapus_cart/'.$val['rowid']);?>" class="btn btn-danger">Hapus</a></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>Total</th>
                            <th><?= $total;?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><a href="<?php echo site_url('frontend/selesai_belanja/');?>" class="btn btn-success">Selesai Belanja</a></th>
                        </tr>
                    </table>
                    </div>
                </div>
                </div>
            </div>
</div>
