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
										class="nav-link">Transaksi</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/riwayat_transaksi');?>"
										class="nav-link">Riwayat Transaksi</a></li>
								<li class="nav-item"><a
										href="<?php echo site_url('frontend/toko/'.$this->session->userdata('idKonsumen'));?>"
										class="nav-link">Toko</a></li>
								<li class="nav-item"><a href="#" class="active nav-link">Profil</a></li>
								<li class="nav-item"><a href="#!" onclick="logoutConfirm('<?php echo site_url('home/logout');?>')"
										class="nav-link">Logout</a></li>
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
										<h2 class="section-title"><?php foreach ($profil as $P ):?> Hi,
											<?php echo $P->namaKonsumen ?><?php endforeach;?> !</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<?php foreach ($profil as $p):?>
							<form method="post" enctype="multipart/form-data"
								action="<?php echo site_url('frontend/ubahProfil/'.$p->idKonsumen);?>" class="needs-validation"
								novalidate="">
								<div class="card">
									<div class="card-header">
										<h4>Detail Profil</h4>
									</div>
									<div class="card-body">
									<div class="form-group row mb-4">
                      <img class="rounded mx-auto d-block" src="<?=base_url('./fotoProfil/'.$p->foto);?>" width="360">
                    </div>
										<input class="form-control" type="hidden" placeholder="" aria-label="Search"
											value="<?php echo $this->session->userdata('idKonsumen'); ?>" data-width="250" name="idKonsumen">
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama </label>
											<div class="col-9">
												<input class="form-control" required type="text" placeholder="" aria-label="Search"
													data-width="250" name="namaKonsumen" value="<?= $p->namaKonsumen?>">
												<div class="invalid-feedback">
													Nama tidak boleh kosong!
												</div>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
											<div class="col-9">
												<input class="form-control" required type="text" placeholder="" aria-label="Search"
													data-width="250" name="email" value="<?= $p->email ?>">
												<div class="invalid-feedback">
													Email tidak boleh kosong!
												</div>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Telepon</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250"
													name="tlpn" value="<?= $p->tlpn ?>" required>
												<div class="invalid-feedback">
													Nomor telepon tidak boleh kosong!
												</div>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kota</label>
											<div class="col-sm-12 col-md-7">
												<select class="form-control mb-3" name="idKota">
													<?php foreach ($kota as $k): ?>
													<option <?php if ($k->idKota == $p->idKota) { 
                                echo 'selected="selected"';}?> value="<?= $k->idKota?>"><?= $k->namaKota?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="" aria-label="Search" data-width="250"
													name="alamat" value="<?= $p->alamat ?>" required>
												<div class="invalid-feedback">
													Alamat tidak boleh kosong!
												</div>
											</div>
										</div>
                    <div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Profil</label>
											<div class="col-9">
												<input class="form-control" type="file" placeholder="Foto Profil" data-width="250"
													name="foto" value="<?= $p->foto ?>" required>
												<div class="invalid-feedback">
													Foto Profil tidak boleh kosong!
												</div>
											</div>
										</div>
									</div>
									<div class="col-9">
										<div class="card-footer text-right">
										</div>
									</div>
								</div>
								<?php endforeach;?>
								<div class="card-footer text-right bg-whitesmoke">
									<button class="btn btn-primary mr-2" type="submit">Simpan</button>
									<button class="btn btn-secondary " type="reset">Reset</button>
								</div>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>

<script>
	function logoutConfirm(url) {
		$('#btn-logout').attr('href', url);
		$('#logoutModal').modal();
	}

</script>
<!-- Logout MODAL -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
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
