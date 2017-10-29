<?php $this->load->view('header') ?>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Akunku</li>
        </ol>
    </div>
</div>

<div class="container">
  <form data-parsley-validate class="col-sm-4" action="<?php echo base_url('akun/simpan')?>" method="post">
    <legend>Data Diri</legend>
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="form-group">
      <label>Nama</label>
      <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id')?>">
      <input type="text" name="nama" value="<?php echo $this->session->userdata('nama')?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" data-parsley-type="email"value="<?php echo $this->session->userdata('email')?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>No Telp</label>
      <input type="text" name="notelp" data-parsley-type="number" value="<?php echo $this->session->userdata('notelp')?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control" required><?php echo $this->session->userdata('alamat')?></textarea>
    </div>
    <div class="form-group">
      <label>Password</label>
    <div class="input-group">
      <input id="pswd" type="password" name="password" value="<?php echo $this->session->userdata('password')?>" class="form-control" required>
      <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-eye-open"></span></span>
    </div>
    </div>
    <div class="form-group">
      <label></label>
      <button type="submit" class="btn btn-info">Simpan</button>
    </div>
  </form>

  <div class="col-sm-8">
    <legend>Data Sewa</legend>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Jumlah</th>
          <th>Dari</th>
          <th>Sampai</th>
          <th>Total Bayar</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($transaksi_sewa)):
            foreach ($transaksi_sewa as $key => $p) {
              $no = $key+1;
              if ($p->status == '0') {
                $status = '<label class="label label-default">Menunggu</label>';
              }elseif ($p->status == '2') {
                $status = '<label class="label label-warning">Kembali</label>';
              }else {
                $status = '<label class="label label-success">Disetujui</label>';
              }
              echo '<tr>';
                echo '<td>'.$no.'</td>';
                echo '<td>'.$p->nama_produk.'</td>';
                echo '<td>'.$p->nama_kategori.'</td>';
                echo '<td>'.$p->jumlah.'</td>';
                echo '<td>'.$this->all_model->format_tanggal($p->dari).'</td>';
                echo '<td>'.$this->all_model->format_tanggal($p->sampai).'</td>';
                echo '<td>'.$this->all_model->format_harga($p->harga).'</td>';
                echo '<td>'.$status.'</td>';
              echo '</tr>';
            } endif; ?>
      </tbody>
    </table>


    <legend>Data Jasa Latihan</legend>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Jasa</th>
          <th>Keterangan</th>
          <th>Tanggal Mulai</th>
          <th>Total Bayar</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($transaksi_jasa)):
            foreach ($transaksi_jasa as $key => $p) {
              $no = $key+1;
              $status = ($p->status == '0') ? '<label class="label label-default">Menunggu</label>' : '<label class="label label-success">Disetujui</label>';
              echo '<tr>';
                echo '<td>'.$no.'</td>';
                echo '<td>'.$p->nama_jasa.'</td>';
                echo '<td>'.$p->keterangan.'</td>';
                echo '<td>'.$this->all_model->format_tanggal($p->tanggal_mulai).'</td>';
                echo '<td>'.$this->all_model->format_harga($p->harga_jasa).'</td>';
                echo '<td>'.$status.'</td>';
              echo '</tr>';
            } endif; ?>
      </tbody>
    </table>
  </div>

</div>
<?php $this->load->view('footer') ?>

<script type="text/javascript">
  $('#basic-addon2').mousedown(function () {
    $('#pswd').attr('type', 'text');
  });
  $('#basic-addon2').mouseup(function () {
    $('#pswd').attr('type', 'password');
  });
</script>
