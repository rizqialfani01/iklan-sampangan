<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-3 sidebar'> 
        <div class="sidebar-module-container">
          <div class="sidebar-filter">
            <?php include('v_sidecategory.php'); ?>
            <!--<?php //include('v_product_tags.php'); ?>-->
            <!--<div class="home-banner outer-top-vs outer-bottom-xs">
              <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
            </div>-->
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->      
        <!--<?php //include('vh_hero.php'); ?>-->
        <div class='detail-block' style="margin-top: 0px !important;">
          <div class='heading-detail-block clearfix'>
            <h3 class='heading-title-detail-block pull-left'>Selamat Datang di Ngiklan</h3>
            <div class='btn-group grup-tombol-aksi-panduan'>
              <!-- <a class='btn-primary tombol-aksi-panduan' data-toggle="popover" data-placement="bottom" title="Klik tautan berikut :" data-html="true" data-content="<a href='https://corona.jatengprov.go.id'>https://corona.jatengprov.go.id</a>"> <i class="fa fa-info"></i> <strong>Sumber</strong></a> -->
              <a class='btn-primary tombol-aksi-panduan' href='<?= base_url('public/gambar'); ?>/ngiklan.png' download> <i class="fa fa-download"></i> <strong>Unduh</strong></a>
            </div>
          </div>
          <br>
          <img class="img-responsive" src="<?= base_url('public/gambar/ngiklan.png'); ?>" alt="">
        </div>
        <!--<?php //include('vh_wide_products.php'); ?>-->
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content -->