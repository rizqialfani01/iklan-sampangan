        <!-- ========================================== SECTION – HERO ========================================= -->
        <div class="search-result-container">
          <div class="clearfix filters-container m-t-10">
            <div class='heading-detail-block clearfix'>
              <h3 class='heading-title-detail-block pull-left'>Pasang Iklan</h3>
            </div>
          </div>
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active ">
              <p class="text paragraf-pasang-iklan">Silahkan isikan keterangan iklan pada formulir berikut.</p>
              <form class="register-form outer-top-xs" role="form" action="<?= base_url('iklan/terbit/'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                  <label class="info-title keterangan-form" for="judul">Judul Iklan <span>*</span></label>
                  <input type="text" class="form-control text-input <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" placeholder="Isikan Judul Iklan Anda" maxlength="80" oninput="this.value = this.value.replace(/[^a-z A-Z 0-9]/g, '');"  autofocus>
                  <div class="invalid feedback peringatan">
                    <?= $validation->getError('judul'); ?>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="info-title keterangan-form" for="kategori">Kategori Iklan <span>*</span></label>
                  <select class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" name="kategori" id="kategori" placeholder="Pilih kategori iklan Anda">
                      <option disabled selected>Pilih kategori iklan Anda</option>
                      <option value="Seputar Kuliner">Seputar Kuliner</option>
                      <option value="Pakaian">Pakaian</option>
                      <option value="Elektronik">Elektronik</option>
                      <option value="Bahan Bangunan">Bahan Bangunan</option>
                      <option value="Otomotif">Otomotif</option>
                      <option value="Rumah Tangga">Perlengkapan Rumah Tangga</option>
                      <option value="Barang Lainnya">Barang Lainnya</option>
                      <option value="Jasa">Lainnya</option>
                  </select>
                  <div class="invalid feedback peringatan">
                    <?= $validation->getError('kategori'); ?>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="info-title keterangan-form" for="deskripsi">Deskripsi Iklan <span>*</span></label>
                  <textarea type="text" class="form-control text-input teksarea <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" placeholder="Isikan Deskripsi dari Penawaran Anda  (Sertakan Alamat Jika Diperlukan)" id="deskripsi" name="deskripsi" maxlength="3072"></textarea>
                  <div class="invalid feedback peringatan">
                    <?= $validation->getError('deskripsi'); ?>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="info-title keterangan-form" for="nama">Atas Nama Pengiklan <span>*</span></label>
                  <input type="text" class="form-control text-input <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" maxlength="50" placeholder="Isikan Nama Anda/Toko Anda" oninput="this.value = this.value.replace(/[^a-z A-Z]/g, '');">
                  <div class="invalid feedback peringatan">
                    <?= $validation->getError('telp'); ?>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="info-title keterangan-form" for="telp">Nomor Telepon <span>* Contoh : 0877123456</span></label>
                  <input type="text" class="form-control text-input <?= ($validation->hasError('telp')) ? 'is-invalid' : ''; ?>" id="telp" name="telp" placeholder="Isikan Nomor Telepon Anda (Disarankan Sudah Terdaftar Akun Whatsapp)" maxlength="20" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                  <div class="invalid feedback peringatan">
                    <?= $validation->getError('telp'); ?>
                  </div>
                </div>
                <br>
                <div class="kontainer-tombol-radio">
                  <div class="col-sm-12" style="padding-left: 0px !important;">
                      <label class="info-title keterangan-form" for="status_wa">Apakah Nomor Telepon Anda Terdaftar dengan Whatsapp? <span>*</span></label>
                  </div>
                  <div class="grup-tombol-radio">
                    <div class="col-sm-3" style="padding-left: 0px !important;">
                      <div class="radio">
                        <label>
                          <input type="radio" name="status_wa" id="status_wa" value="Terdaftar">Terdaftar
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-9" style="padding-left: 0px !important;">
                      <div class="radio">
                        <label>
                          <input type="radio" name="status_wa" id="status_wa" value="Tidak Terdaftar">Tidak Terdaftar
                        </label>
                      </div>
                    </div>
                    <div class="invalid feedback peringatan">
                      <?= $validation->getError('status_wa'); ?>
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="info-title keterangan-form" for="gambar" id="label-gambar">Unggah Gambar<span style="margin-left: 5px;">(Sertakan 1 Gambar Jika Diperlukan)</span></label>
                  <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-info btn-file">
                            Cari gambar... <input type="file" id="gambar" name="gambar" class="<?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>">
                        </span>
                    </span>
                    <input type="text" class="form-control" placeholder="Tidak ada gambar terpilih." readonly>
                  </div>
                  <div class="invalid feedback peringatan">
                    <?= $validation->getError('gambar'); ?>
                  </div>
                  <img src="<?= base_url('public/gambar/default.jpeg'); ?>" id='img-upload' class="img-preview"/>
                </div>
<!--                 <input type="hidden" id="status_terbit" name="status_terbit" value="Belum Terbit"> -->
                <button type="submit" class="btn-upper btn btn-warning checkout-page-button" style="font-weight: bold">Pasang Iklan</button>
              </form>
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