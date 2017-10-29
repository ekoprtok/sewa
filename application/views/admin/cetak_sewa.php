<style>
@media print {
 .nop{
   display: none;
 }
 }
</style>
<link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
<center><h4>Laporan Transaksi Sewa</h4></center>
<center><h5><?php echo $this->all_model->format_tanggal($_GET['tgl1']).' - '.$this->all_model->format_tanggal($_GET['tgl1']);?></h5></center>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama User</th>
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
    <?php $total = 0; if (!empty($transaksi)):
        foreach ($transaksi as $key => $p) {
          $total = $total +$p->harga;
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
            echo '<td>'.$p->nama_lengkap.'</td>';
            echo '<td>'.$p->nama_produk.'</td>';
            echo '<td>'.$p->nama_kategori.'</td>';
            echo '<td>'.$p->jumlah.'</td>';
            echo '<td>'.$p->dari.'</td>';
            echo '<td>'.$p->sampai.'</td>';
            echo '<td>'.$this->all_model->format_harga($p->harga).'</td>';
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
      <th></th>
      <th></th>
      <th>Total Transaksi</th>
      <th><?php echo $this->all_model->format_harga($total) ?></th>
      <th></th>
    </tr>
  </tfoot>
</table>

<center><a href="#" onclick="print();" class="nop">Cetak</a></cetak>
