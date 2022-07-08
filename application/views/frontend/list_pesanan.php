<div class="main-content">
	<section class="section">
		<div class="section-header">
			<div class="section-header-back">
				<a href="<?php echo site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>"
					class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
								<li class="nav-item"><a href="#" class=" nav-link">Beranda</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/produk/'.$toko->idToko);?>"
										class="nav-link">Produk</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/pesanan/'.$toko->idToko);?>"
										class="active nav-link">Pesanan</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/laporan');?>" class="nav-link">Laporan</a>
								</li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/ubah_toko/'.$toko->idToko);?>"
										class="nav-link">Ubah Toko</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4>Data Pesanan</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped table-md">
											<tr>
												<th>Tanggal Order</th>
												<th>Nama Konsumen</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											
											<?php foreach($pesanan as $p){ ?>
											<tr>
												<td><?php echo $p->tglOrder;?></td>
												<td><?php echo $p->namaKonsumen;?></td>
												
												<!-- status -->
												<?php if ($p -> statusOrder == 'Belum Bayar'){ ?>
													<td>
														<div class="badge badge-pill badge-danger mb-1 ">Belum Bayar</div>
													</td>
												<?php } else if($p -> statusOrder == 'Dibatalkan') { ?>
													<td>
														<div class="badge badge-pill badge-dark mb-1 ">Dibatalkan</div>
													</td>
												<?php } else if($p -> statusOrder == 'Sudah Bayar') { ?>
													<td>
														<div class="badge badge-pill badge-info mb-1 ">Sudah Bayar</div>
													</td>
												<?php } else if($p -> statusOrder == 'Barang Diproses') { ?>
													<td>
														<div class="badge badge-pill badge-warning mb-1 ">Barang Diproses</div>
													</td>
												<?php } else if($p -> statusOrder == 'Dikirim') { ?>
													<td>
														<div class="badge badge-pill badge-primary mb-1 ">Dikirim</div>
													</td>
												<?php } else { ?>
													<td>
														<div class="badge badge-pill badge-success mb-1 ">Selesai</div>
													</td>
												<?php } ?>

												<td><a href="<?php echo site_url('frontend/detailPesanan/'.$p->idOrder.'/'.$toko->idToko);?>"
														class="btn btn-primary mr-2">Detail</a>
												

												<?php if ($p -> statusOrder == 'Barang Diproses'){ ?>
													<a href="<?php echo site_url('frontend/kirimPesanan/'.$p->idOrder);?>"
														class="btn btn-warning">Kirim</a>
												</td>
												<?php } ?>
												
											</tr>
											<?php } ?>
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
	function deleteConfirm(url) {
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}

</script>
<!-- Hapus MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
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
