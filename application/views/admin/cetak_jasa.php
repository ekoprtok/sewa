<style>
@media print {
 .nop{
   display: none;
 }
 }
</style>
<link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
<center><h4>Laporan Transaksi Jasa</h4></center>
<center><h5><?php echo $this->all_model->format_tanggal($_GET['tgl1']).' - '.$this->all_model->format_tanggal($_GET['tgl1']);?></h5></center>
<table class="table table-bordered table-hover">
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
    <?php $total = 0;if (!empty($transaksi)):
        foreach ($transaksi as $key => $p) {
          $total = $total +$p->harga_jasa;
          $no = $key+1;
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

<center><a href="#" onclick="print();" class="nop">Cetak</a></cetak>
