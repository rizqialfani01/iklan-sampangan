        <div class="detail-block">
          <div class="row">                
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
              <div class="product-item-holder size-big single-product-gallery small-gallery">
                <div id="owl-single-product">
                  <div class="single-product-gallery-item" id="slide1">
                    <a data-lightbox="image-1" data-title="Gallery" href="<?= base_url('public/gambar'); ?>/<?= $detail->gambar; ?>">
                      <img class="img-responsive" alt="" src="<?= base_url('assets/images/blank.gif') ?>" data-echo="<?= base_url('public/gambar'); ?>/<?= $detail->gambar; ?>" />
                    </a>
                  </div><!-- /.single-product-gallery-item -->
                </div><!-- /.single-product-slider -->

              </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder --> 

            <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
              <div class="product-info">
                <h1 class="name"><?= $detail->judul; ?></h1>

                <div class="description-container m-t-20">
                  <pre class='deskripsi-produk'><?= $detail->deskripsi; ?></pre>
                </div><!-- /.description-container -->

                <div class="quantity-container info-container">
                  <div class="row">
                    <div class="add-btn">
                      <a href="tel:<?= $detail->telp; ?>" class="btn btn-primary"> <i class="fa fa-phone"></i> Hubungi</a>
                      <a href="https://api.whatsapp.com/send?phone=62<?= $detail->telp; ?>" class="btn btn-primary tombol-wa"> <i class="fa fa-whatsapp"></i> Hubungi</a>
                    </div>
                    
                  </div><!-- /.row -->
                </div><!-- /.quantity-container -->

                
              </div><!-- /.product-info -->
            </div><!-- /.col-sm-7 -->
        
          </div><!-- /.row -->
        </div>

      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content -->