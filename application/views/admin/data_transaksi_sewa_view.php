<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Transaksi Sewa</h3>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
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
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($transaksi)):
                foreach ($transaksi as $key => $p) {
                  $no = $key+1;
                  if ($p->status == '0') {
                    $status = '<label class="label label-default">Menunggu</label>';
                    $aksi = '<a href="'.base_url('data_transaksi_sewa/setuju/'.$p->transaksi_id.'/'.$p->produk_id).'" class="btn btn-danger btn-xs">Setujui</a>';
                  }elseif ($p->status == '2') {
                    $status = '<label class="label label-warning">Kembali</label>';
                    $aksi = '-';
                  }else {
                    $aksi = '<a href="'.base_url('data_transaksi_sewa/kembali/'.$p->transaksi_id.'/'.$p->produk_id).'" class="btn btn-info btn-xs">Kembali</a>';

                    $status = '<label class="label label-success">Disetujui</label>';
                  }
                  echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$p->nama_lengkap.'</td>';
                    echo '<td>'.$p->nama_produk.'</td>';
                    echo '<td>'.$p->nama_kategori.'</td>';
                    echo '<td>'.$p->jumlah.'</td>';
                    echo '<td>'.$this->all_model->format_tanggal($p->dari).'</td>';
                    echo '<td>'.$this->all_model->format_tanggal($p->sampai).'</td>';
                    echo '<td>'.$this->all_model->format_harga($p->harga).'</td>';
                    echo '<td>'.$status.'</td>';
                    echo '<td>'.$aksi.'</td>';
                  echo '</tr>';
                } endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#example1').DataTable();
</script>
<?php $this->load->view('admin/footer') ?>
