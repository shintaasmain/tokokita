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
								<li class="nav-item"><a href="<?php echo site_url('frontend/dashboard_member');?>"
										class="nav-link">Beranda</a></li>
								<li class="nav-item"><a
										href="<?php echo site_url('frontend/transaksi/'.$this->session->userdata('idKonsumen'));?>"
										class="nav-link active">Transaksi</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/riwayat_transaksi');?>"
										class="nav-link">Riwayat Transaksi</a></li>
								<li class="nav-item"><a href="#" class=" nav-link">Toko</a></li>
								<li class="nav-item"><a
										href="<?php echo site_url('frontend/ubah_profil/'.$this->session->userdata('idKonsumen'));?>"
										class="nav-link">Ubah Profil</a></li>
								<li class="nav-item"><a href="#!"
										onclick="logoutConfirm('<?php echo site_url('home/logout');?>')"
										class="nav-link">Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4>Detail Transaksi</h4>
									<div class="card-header-action">
										<a href="<?= base_url('frontend/transaksi/'.$this->session->userdata['idKonsumen']); ?>" class="btn btn-primary">
											Kembali
										</a>
									</div>
								</div>

								<div class="card-body"> 
									<div class="row">

										<div class="col-md-7">
											<?php foreach($transaksi as $item){ ?>
											<table class="table-hover table-responsive">
												<tbody>
													<tr>
														<td><b>Tanggal Order</b></td>
														<td> </td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td> </td>
														<td><?= $item->tglOrder; ?></td>
													</tr>
													<tr>
														<td><b>Kategori Produk</b></td>
														<td> </td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td> </td>
														<td><?= $item->namakat; ?></td>
													</tr>
													<tr>
														<td><b>Nama Produk</b></td>
														<td> </td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td> </td>
														<td><?= $item->namaProduk; ?></td>
													</tr>
													<tr>
														<td><b>Jumlah</b></td>
														<td> </td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td> </td>
														<td><?= $item->jumlah; ?></td>
													</tr>
													<tr>
														<td><b>Total</b></td>
														<td> </td>
														<td> </td>
														<td>:</td>
														<td> </td>
														<td> </td>
														<td><?= $item->harga; ?></td>
													</tr>

												</tbody>
											</table>

											<!-- Foto Produk -->

											<div class="chocolat-parent">
												<a href="<?= base_url(); ?>fotoProduk/<?= $item->foto; ?>" class="chocolat-image"
													title="Gambar Produk">
													<div data-crop-image="220">
														<img alt="image" src="<?= base_url(); ?>fotoProduk/<?= $item->foto; ?>"
															class="img-fluid">
													</div>
												</a>
											</div>
											<div class="mt-2 mb-2 text-muted">Click Produk image !</div>
											<?php } ?>
										</div>

										<?php foreach($bukti_bayar as $item){ ?>
										<div class="col-md-5">

											<!-- status -->
											<?php if ($item -> statusOrder == 'Belum Bayar'){ ?>
											<div class="col-12">
											<em class="text-danger">*Silahkan Upload Bukti Pembayaran dalam format : .png / .jpg / .jpeg</em>
												<form method="POST" enctype="multipart/form-data" action="<?= base_url('frontend/editProduk'); ?>" class="needs-validation mt-3" novalidate="">
													<div class="form-group-upload">
													<div class="custom-file">
														<label class="custom-file-label" for="file-upload">pilih file...</label>
														<input type="file" class="custom-file-input" id="file-upload" name="berkas"
															value="">
														
													</div>
												</div>
												<div class="col-md-12 text-center mt-4">
													<a href="" class="btn btn-lg btn-warning">Upload</a>
												</div>
												
												</form>
												
												
											</div>

											<?php } else if($item -> statusOrder == 'Sudah Bayar') { ?>
											<!-- Foto Bukti Tf -->
											<div class="mb-2 text-muted text-center">Click Bukti Bayar !</div>
											<div class="chocolat-parent">

												<a href="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
													class="chocolat-image" title="Gambar Produk">
													<div data-crop-image="220">
														<img alt="image"
															src="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
															class="img-fluid">
													</div>
												</a>
											</div>

											<!-- Button Acc -->
											<div class="col-12 text-center">
												<a href="<?php echo site_url('frontend/terimaPembayaran/'.$item->idOrder);?>"
													class="btn btn-lg btn-success">Terima Pembayaran</a>
											</div>

											<?php } else if($item -> statusOrder == 'Barang Diproses') { ?>
											<!-- Foto Bukti Tf -->
											<div class="mb-2 text-muted text-center">Click Bukti Bayar !</div>
											<div class="chocolat-parent">

												<a href="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
													class="chocolat-image" title="Gambar Produk">
													<div data-crop-image="220">
														<img alt="image"
															src="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
															class="img-fluid">
													</div>
												</a>
											</div>

											<!-- Button info Barang DiProses -->
											<div class="col-12 text-center">
												<a href="#" class="btn btn-lg btn-warning">Barang Diproses</a>
											</div>
											<?php } else if($item -> statusOrder == 'Dikirim') { ?>
											<!-- Foto Bukti Tf -->
											<div class="mb-2 text-muted text-center">Click Bukti Bayar !</div>
											<div class="chocolat-parent">

												<a href="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
													class="chocolat-image" title="Gambar Produk">
													<div data-crop-image="220">
														<img alt="image"
															src="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
															class="img-fluid">
													</div>
												</a>
											</div>

											<!-- Button info Barang DiProses -->
											<div class="col-12 text-center">
												<a href="#" class="btn btn-lg btn-primary">Barang Dikirim</a>
											</div>

											<?php } else { ?>
											<!-- Foto Bukti Tf -->
											<div class="mb-2 text-muted text-center">Click Bukti Bayar !</div>
											<div class="chocolat-parent">

												<a href="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
													class="chocolat-image" title="Gambar Produk">
													<div data-crop-image="220">
														<img alt="image"
															src="<?= base_url(); ?>fotoBuktiBayar/<?= $item->fotoBuktiBayar; ?>"
															class="img-fluid">
													</div>
												</a>
											</div>

											<!-- Button info Barang DiProses -->
											<div class="col-12 text-center">
												<a href="#" class="btn btn-lg btn-success">Pesanan Selesai</a>
											</div>
											<?php } ?>
										</div>
										<?php } ?>

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
