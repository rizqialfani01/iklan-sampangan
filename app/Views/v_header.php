<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="home.html"> <img src="<?= base_url('assets/images/logo-ngiklan.png'); ?>" alt="" width="80%"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="<?= base_url('semua-iklan/cari'); ?>" method="post">
              <div class="control-group">
                <input type="text" class="search-field" placeholder="Cari judul iklan disini ..." name="kata_kunci"/>
                <button class="search-button tombol-cari" type="submit" name="submit"></button> </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 logo-holder"> 
          <a href="home.html"> <img src="<?= base_url('assets/images/logo-sehat.png'); ?>" alt="" width="100%"> </a> 
        </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="<?php if ($tab_aktif == 'Beranda') echo 'active' ?> dropdown"> <a href="<?php echo base_url(); ?>">Beranda</a> </li>
                <li class="<?php if ($tab_aktif == 'Daftar Iklan') echo 'active' ?> dropdown"> <a href="<?php echo base_url('semua-iklan'); ?>">Semua Iklan</a> </li>
                <li class="<?php if ($tab_aktif == 'Pasang Iklan') echo 'active' ?> dropdown"> <a href="<?php echo base_url('pasang-iklan'); ?>">Pasang Iklan</a> </li>
                <li class="dropdown"> <a href="https://api.whatsapp.com/send?phone=6287709232776">Pengajuan Edit Iklan</a> </li>
                <li class="dropdown"> <a href="https://api.whatsapp.com/send?phone=6287709232776">Pengajuan Hapus Iklan</a> </li>
                <li class="dropdown"> <a href="https://api.whatsapp.com/send?phone=6287709232776">Kritik & Saran</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<!-- ============================================== HEADER : END ============================================== --> 

<!-- ============================================== HEADER : END ============================================== -->
<body class="cnt-home">