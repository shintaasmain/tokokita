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
								<li class="nav-item"><a href="#" class="active nav-link">Beranda</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/produk/'.$toko->idToko);?>"
										class="nav-link">Produk</a></li>
								<li class="nav-item"><a href="<?php echo site_url('frontend/pesanan/'.$toko->idToko);?>"
										class="nav-link">Pesanan</a></li>
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
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-primary">
									<i class="far fa-user"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Toko</h4>
									</div>
									<div class="card-body">
										<?= $totalToko;?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-danger">
									<i class="far fa-newspaper"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Transaksi</h4>
									</div>
									<div class="card-body">
										<?= $totalTransaksi ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-warning">
									<i class="far fa-file"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Pesanan</h4>
									</div>
									<div class="card-body">
										-
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>
