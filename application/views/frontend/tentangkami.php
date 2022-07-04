<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tentang Kami</h1>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, Toko Kita Lovers!</h2>
            <p class="section-lead">
            Berikut Informasi Perusahaan Kami
            </p>
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget" id="profil_widget">
                  <div class="profile-widget-header">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Toko</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Member</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Kurir</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">Toko Kita <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Profil</div></div>
                    Toko Kita adalah platform belanja online terdepan di Asia Tenggara dan Taiwan.
										Diluncurkan tahun 2015, Toko Kita merupakan sebuah platform yang disesuaikan untuk tiap wilayah dan menyediakan pengalaman berbelanja online yang mudah, aman, dan cepat bagi pelanggan melalui dukungan pembayaran dan logistik yang kuat.
										Kami percaya bahwa kegiatan belanja online harus terjangkau, mudah, dan menyenangkan. Ini adalah visi yang ingin Toko Kita berikan melalui platform kami, setiap harinya.
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" enctype="multipart/form-data" action="<?php echo site_url('Aduan/tambah_aduan');?>" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Form Pengaduan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Nama Depan</label>
                            <input type="text" class="form-control" name="nama" required="" placeholder="Toko">
                            <div class="invalid-feedback">
                              Nama tidak boleh kosong!
                            </div>
                          </div>
													<div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required="" placeholder="tokokita@gmail.com">
                            <div class="invalid-feedback">
															Email tidak boleh kosong!
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>No Handphone</label>
                            <input type="number" class="form-control" name="nohp" required="" placeholder="085xxxxxxx">
														<div class="invalid-feedback">
															Nomor tidak boleh kosong!
                            </div>
                          </div>
													<div class="form-group col-md-6 col-12">
                            <label>Pesan Aduan</label>
                            <textarea class="form-control" name="pesanaduan" required="" placeholder="Tulisakan Pesan Anda"></textarea>
														<div class="invalid-feedback">
															Pesan Aduan tidak boleh kosong!
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Kirim</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
