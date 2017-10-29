<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Laporan Transaksi Jasa</h3>
      </div>
      <div class="box-body">
        <form class="" action="" method="GET">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Dari</label>
              <input type="date" name="tgl1" class="form-control" required>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Sampai</label>
              <input type="date" name="tgl2" class="form-control" required>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>Aksi</label>
              <button type="submit" class="btn btn-info form-control"> Cari</button>
            </div>
          </div>
          <?php if (isset($_GET['tgl1'])): ?>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Cetak</label>
                <a href="<?php echo base_url('laporan_jasa/cetak_jasa?tgl1='.$_GET['tgl1'].'&tgl2='.$_GET['tgl2'])?>" target="_blank" class="btn btn-info form-control"> Cetak</a>
              </div>
            </div>
          <?php endif; ?>
        </form>
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama User</th>
              <th>Jasa</th>
              <th>Keterangan</th>
              <th>Tanggal Mulai</th>
              <th>Total Bayar</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $total = 0; if (!empty($transaksi)):
                foreach ($transaksi as $key => $p) {
                  $no = $key+1;
                  $total = $total + $p->harga_jasa;
                  $status = ($p->status == '0') ? '<label class="label label-default">Menunggu</label>' : '<label class="label label-success">Disetujui</label>';
                  echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$p->nama_lengkap.'</td>';
                    echo '<td>'.$p->nama_jasa.'</td>';
                    echo '<td>'.$p->keterangan.'</td>';
                    echo '<td>'.$p->tanggal_mulai.'</td>';
                    echo '<td>'.$this->all_model->format_harga($p->harga_jasa).'</td>';
                    echo '<td>'.$status.'</td>';
                  echo '</tr>';
                } endif; ?>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>Total Transaksi</th>
              <th><?php echo $this->all_model->format_harga($total) ?></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#example1').DataTable();
</script>
<?php $this->load->view('admin/footer') ?>
