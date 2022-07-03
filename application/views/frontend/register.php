<div class="main-content">
        <section class="section">
		        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
          

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo site_url('home/act_reg');?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Lengkap</label>
                      <input id="first_name" type="text" class="form-control" name="namaLengkap" autofocus>
                      <?php echo form_error('namaLengkap','<small style="color:#FD0707">','</small>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Email</label>
                      <input id="last_name" type="email" class="form-control" name="email">
                      <?php echo form_error('email','<small style="color:#FD0707">','</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" class="form-control" name="username">
                    <?php echo form_error('username','<small style="color:#FD0707">','</small>'); ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <?php echo form_error('password','<small style="color:#FD0707">','</small>'); ?>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirm">
                      <?php echo form_error('password_confirm','<small style="color:#FD0707">','</small>'); ?>
                    </div>
                  </div>

                  <div class="row">
				     <div class="form-group col-12">
                    <label for="email">Alamat</label>
                    <input id="email" type="text" class="form-control" name="alamat">
                    <?php echo form_error('alamat','<small style="color:#FD0707">','</small>'); ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    <div class="form-group col-6">
                      <label>Kota</label>
                      <select class="form-control selectric" name="idKota">
                      <?php foreach ($Kota as $i): ?>
                            <option value="<?= $i->idKota?>"><?= $i->namaKota?></option>
                        <?php endforeach; ?>
					    </select>
                    </div>
                    <div class="form-group col-6">
                      <label>No Telpon</label>
                    <input type="text" class="form-control" name="no_telepon">
                    <?php echo form_error('no_telepon','<small style="color:#FD0707">','</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          
          </div>
        </div>
		</section>
      </div> 
	  