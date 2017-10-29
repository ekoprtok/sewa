<?php $this->load->view('admin/header') ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Kategori Sewa</h3>
        <div class="box-tools pull-right">
          <a href="#" data-toggle="modal" data-target="#modal_kategori" class="btn btn-primary ">Tambah</a>
        </div>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($kategori)):
                foreach ($kategori as $key => $p) {
                  $no = $key+1;
                  echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$p->nama_kategori.'</td>';
                    echo '<td>
                    <a class="btn btn-info btn-xs" href="#" id="'.$no.'" data-id="'.$p->kategori_id.'" data-name="'.$p->nama_kategori.'" onclick="edit_kat(\''.$no.'\')">Edit</a>
                    <a class="btn btn-danger btn-xs" href="'.base_url('data_kategori_sewa/hapus/'.$p->kategori_id).'">hapus</a>
                    </td>';
                  echo '</tr>';
                } endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div id="modal_kategori" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kategori</h4>
      </div>
      <form class="" action="<?php echo base_url('data_kategori_sewa/simpan')?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Kategori</label>
            <input type="hidden" name="kategori_id" id="kategori_id" class="form-control">
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info">Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>

  </div>
</div>
<script type="text/javascript">
  $('#example1').DataTable();

  function edit_kat(id) {
    $('#modal_kategori').modal('toggle');
    $('#kategori_id').val($('#'+id).data('id'));
    $('#nama_kategori').val($('#'+id).data('name'));
  }
</script>
<?php $this->load->view('admin/footer') ?>
