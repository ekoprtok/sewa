<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Edit Produk</h3>
      </div>
      <div class="box-body">
        <form data-parsley-validate action="<?php echo base_url('data_produk/simpan_edit')?>" method="post" enctype="multipart/form-data">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nama Produk</label>
              <input class="form-control" type="hidden" name="produk_id" value="<?php echo (!empty($produk[0]->produk_id)) ? $produk[0]->produk_id : ''?>" >
              <input class="form-control" type="text" name="nama_produk" value="<?php echo (!empty($produk[0]->nama_produk)) ? $produk[0]->nama_produk : ''?>" required>
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <select class="form-control" name="kategori" required>
                <option value="" selected>Pilih Kategori</option>
                <?php foreach ($kategori as $key => $k):
                  $kid = (!empty($produk[0]->kategori_id)) ? $produk[0]->kategori_id : '';
                  if ($kid == $k->kategori_id) {
                    echo '<option value="'.$kid.'" selected>'.$k->nama_kategori.'</option>';
                  }else {
                    echo '<option value="'.$k->kategori_id.'">'.$k->nama_kategori.'</option>';
                  }
                 endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input class="form-control" type="text" name="harga" data-parsley-type="number" value="<?php echo (!empty($produk[0]->harga)) ? $produk[0]->harga : ''?>" required>
            </div>
            <div class="form-group">
              <label>Stok</label>
              <input class="form-control" type="text" name="stok" data-parsley-type="number" value="<?php echo (!empty($produk[0]->stok)) ? $produk[0]->stok : ''?>" required>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" type="text" name="deskripsi" required><?php echo (!empty($produk[0]->deskripsi)) ? $produk[0]->deskripsi : ''?></textarea>
            </div>
            <div class="form-group">
              <label></label>
              <button class="btn btn-info" type="submit">Simpan</button>
              <a class="btn btn-default" href="<?php echo base_url('data_produk')?>">Kembali</a>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" accept="image/*" required><br>
              <?php if (!empty($produk[0]->gambar)): ?>
                <img src="<?php echo base_url('upload/'.$produk[0]->gambar);?>" width="100" alt="">
              <?php endif; ?>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/footer') ?>
