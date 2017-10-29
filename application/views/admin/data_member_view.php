<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Member</h3>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Notelp</th>
              <th>Alamat</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($member)):
                foreach ($member as $key => $p) {
                  $no = $key+1;
                  echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$p->nama_lengkap.'</td>';
                    echo '<td>'.$p->email.'</td>';
                    echo '<td>'.$p->notelp.'</td>';
                    echo '<td>'.$p->alamat.'</td>';
                    echo '<td>-</td>';
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
