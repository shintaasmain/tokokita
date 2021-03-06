<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/assets') ?>/modules/chocolat/dist/css/chocolat.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/modules/datatables/datatables.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css');?>">
  <!-- <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css"> -->

  
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/components.css');?>">
  </head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/admin/assets/img/products/product_3_50.png');?>" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/admin/assets/img/products/product-2-50.png');?>" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/admin/assets/img/products/product-1-50.png');?>" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets/admin/assets/img/avatar/avatar-1.png');?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('userName'); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a onclick="logoutConfirm('<?php echo site_url('login/logout');?>')" href="#!" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">ADMINISTRATOR</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo site_url('adminpanel/dashboard');?>" ><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="<?php echo $this->uri->segment(1) == 'kategori' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo site_url('kategori');?>"><i class="fas fa-th"></i> <span>Kategori</span></a></li>
              <li class="nav-item dropdown <?php echo $this->uri->segment(1) == 'kota' || $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == 'ongkir' ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-plane"></i><span>Jasa Pengiriman</span></a>
                <ul class="dropdown-menu">
                  <li class="<?php echo $this->uri->segment(1) == 'kota' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo site_url('kota');?>"><i class="fa fa-city"></i></i> <span>Kota</span></a></li>
                  <li class="<?php echo $this->uri->segment(1) == 'kurir' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo site_url('kurir');?>"><i class="fa fa-truck"></i><span>Kurir</span></a></li>
                  <li class="<?php echo $this->uri->segment(1) == 'ongkir' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo site_url('ongkir');?>"><i class="fa fa-money-check"></i><span>Ongkos Kirim</span></a></li>
                </ul>
              </li>
              <li class="<?php echo $this->uri->segment(1) == 'member' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo site_url('member');?>" ><i class="fa fa-user"></i><span>Member</span></a></li>
              <li class="<?php echo $this->uri->segment(1) == 'aduan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo site_url('aduan');?>"><i class="fa fa-envelope"></i> <span>Aduan</span></a></li>
              
        </aside>
      </div>

      <!-- Main Content -->
      <?= $contents ?> 
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> By TOKOKITA</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/stisla.js');?>"></script>

 <!-- JS Libraies -->
 <script src="<?php echo base_url('assets/admin/assets') ?>/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
	<script src="<?= base_url('assets/admin/assets') ?>/modules/jquery-ui/jquery-ui.min.js"></script>
  
  <script src="<?php echo base_url('assets/admin/assets/modules/datatables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/modules/jquery-ui/jquery-ui.min.js');?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/admin/assets/js/page/modules-datatables.js');?>"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/admin/assets/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/custom.js')?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/admin/assets/js/page/index.js');?>"></script>

  <script>
  function logoutConfirm(url){
    $('#btn-logout').attr('href', url);
    $('#logoutModal').modal();
  }
</script>
<!-- Logout MODAL -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">??</span>
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

</body>
</html>
