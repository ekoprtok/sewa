<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-body">
        <div class="col-sm-6">
          <legend>Data Tentang</legend>
          <form class="" action="<?php echo base_url('pengaturan/simpan')?>" method="post">
            <div class="form-group">
              <label>Judul</label>
              <input type="hidden" name="pengaturan_id" value="<?php echo $pengaturan[0]->pengaturan_id;?>" class="form-control">
              <input type="text" name="judul" value="<?php echo $pengaturan[0]->judul?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Isi</label>
              <textarea name="isi" class="form-control" required><?php echo $pengaturan[0]->isi?></textarea>
            </div>
            <div class="form-group">
              <label></label>
              <button type="submit" class="btn btn-info">Simpan</button>
            </div>
          </form>
        </div>
        <div class="col-sm-6">
          <legend>Data Kontak</legend>
          <form class="" action="<?php echo base_url('pengaturan/simpan')?>" method="post">
            <div class="form-group">
              <label>Judul</label>
              <input type="hidden" name="pengaturan_id" value="<?php echo $pengaturan[1]->pengaturan_id;?>" class="form-control">
              <input type="text" name="judul" value="<?php echo $pengaturan[1]->judul?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Isi</label>
              <textarea name="isi" class="form-control" required><?php echo $pengaturan[1]->isi?></textarea>
            </div>
            <div class="form-group">
              <label></label>
              <button type="submit" class="btn btn-info">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/footer') ?>
