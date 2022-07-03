<div class="main-content">
        <section class="section">
		  <div class="row">
		  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                  <div class="card-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?=base_url('./fotoSlide/2.jpg');?>" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Shopping</h5>
                            <p>Ayo berbelanja dengan mudah lewat website TOKOKITA</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?=base_url('./fotoSlide/1.jpg');?>" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Fashion</h5>
                            <p>Temukan semua yang Anda butuhkan di TOKOKITA</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?=base_url('./fotoSlide/3.jpg');?>" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Transaksi</h5>
                            <p>Rasakan kemudahan bertransaksi</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
				</div>
				</div>
        
          <div class="section-body">
            <h2 class="section-title">Produk Terbaru</h2>
            <p class="section-lead">Produk terbaru di TOKOKITA</p>
            <div class="row">
                  <!-- looping products -->
          <?php foreach($produkTerbaru as $p) : ?>
            
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="#">
                    <img class="rounded mx-auto d-block" src="<?=base_url('./fotoProduk/'.$p->foto);?>" width="100%" height="100%">
                    </div>
                    <div class="article-title">
                      <h2><a href="#"><?= $p->namaProduk;?></a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p>Rp  <?= $p->harga;?></p>
                    <p><?= character_limiter($p->deskripsiProduk, 20);?></p>
                    <div class="article-cta">
                      <a href="<?php echo site_url('frontend/cart/'.$p->idProduk.'/'.$p->idToko);?>" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                </article>
              </div>
          <?php endforeach; ?>
        <!-- end looping -->
      
            </div>

            <h2 class="section-title">Produk</h2>
            <p class="section-lead">Produk di TOKOKITA</p>
            <div class="row">
               <!-- looping products -->
               <?php foreach($produkToko as $PT) : ?>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="http://localhost/tokokita_2463/fotoProduk/celana">
                    <img class="rounded mx-auto d-block" src="<?=base_url('./fotoProduk/'.$PT->foto);?>" width="100%" height="100%">
                    </div>
                    <div class="article-title">
                      <h2><a href="#"><?= $PT->namaProduk;?></a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p>Rp  <?= $PT->harga;?></p>
                    <p><?= character_limiter($PT->deskripsiProduk, 20);?></p>
                    <div class="article-cta">
                      <a href="<?php echo site_url('frontend/cart/'.$PT->idProduk.'/'.$PT->idToko);?>" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                </article>
              </div>
              <?php endforeach;?>
            </div>

          </div>
        </section>
      </div> 
	  