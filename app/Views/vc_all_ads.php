        <!-- ========================================== SECTION – HERO ========================================= -->
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
              <div class='heading-all-ads clearfix'>
                <h3 class='heading-title-detail-block pull-left'>Daftar Iklan</h3>
              </div>
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 m-t-10 text-right">
              <div class="pagination-container">
                <?= $pager->links('iklan_model', 'iklan_pagination'); ?>
                <!--<ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>-->
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="border-judul"></div>
        <div class="search-result-container">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                  <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" style="margin: 0 20px; font-size: 16px;">
                      <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                      </button>
                      <?= session()->getFlashdata('pesan'); ?>
                    </div>
                  <?php endif; ?>
                  <p class="hasil-cari" style="<?= $tampil_cari; ?>"><?= $intro_hasil; ?><?= $hasil_cari; ?></p>
                </div>
                <div class="row">
                  <div>
                    <?php foreach ($iklan_tampil as $data_iklan):?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="item">
                        <div class="products">
                          <div class="product produk">
                            <div class="product-image">
                              <div class="image"> 
                                <a class='tombol-gambar-kategori' href="<?= base_url();?>/rinci/<?= $data_iklan['slug'];?>">
                                   <img class='gambar-kategori' src="<?= base_url('public/gambar'); ?>/<?= $data_iklan['gambar'];?>" alt=""> 
                                </a> 
                              </div>
                              <!-- /.image -->
                            </div>
                            <!-- /.product-image -->
                            
                            <div class="product-info text-left judul-iklan">
                              <h3 class="name"><a href="<?= base_url();?>/rinci/<?= $data_iklan['slug'];?>"><p class="judul-ellips"><?= $data_iklan['judul'];?></p></a></h3>
                            </div>
                            <!-- /.product-info -->

                            <div class="cart aksi-grid-produk clearfix animate-effect">
                              <div class="action">
                                  <div class="add-cart-button btn-group">
                                    <a class="btn btn-warning icon tombol-aksi-kategori"  style="font-weight: bold;" href="tel:<?= $data_iklan['telp'];?>"> <i class="fa fa-phone"></i> Hubungi</a>
                                    <a class="btn btn-success icon tombol-aksi-kategori" style="font-weight: bold;" href="https://api.whatsapp.com/send?phone=62<?= $data_iklan['telp']; ?>"> <i class="fa fa-whatsapp"></i> Hubungi</a>
                                  </div>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                          </div>
                          <!-- /.product --> 
                          
                        </div>
                        <!-- /.products --> 
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- /.col -->
                    <?php endforeach; ?>
                  </div>
                  <!-- /.div -->
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container bottom-row kontainer-kategori"></div>
        </div>
        <!-- /.search-result-container -->

      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content -->