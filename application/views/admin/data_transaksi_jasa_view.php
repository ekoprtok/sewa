<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Transaksi Jasa</h3>
      </div>
      <div class="box-body">
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
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($transaksi)):
                foreach ($transaksi as $key => $p) {
                  $no = $key+1;
                  $aksi = ($p->status == '0') ? '<a href="'.base_url('data_transaksi_jasa/setuju/'.$p->transaksi_jasa_id).'" class="btn btn-danger btn-xs">Setujui</a>' : '-';
                  $status = ($p->status == '0') ? '<label class="label label-default">Menunggu</label>' : '<label class="label label-success">Disetujui</label>';
                  echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$p->nama_lengkap.'</td>';
                    echo '<td>'.$p->nama_jasa.'</td>';
                    echo '<td>'.$p->keterangan.'</td>';
                    echo '<td>'.$p->tanggal_mulai.'</td>';
                    echo '<td>'.$this->all_model->format_harga($p->harga_jasa).'</td>';
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
