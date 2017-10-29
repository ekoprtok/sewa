<?php $this->load->view('header') ?>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url('produk')?>">Produk</a></li>
            <li class="active">Sewa</li>
        </ol>
    </div>
</div>
<div class="container">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Data Sewa
      </div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Jumlah</th>
              <th>Dari Tanggal</th>
              <th>Sampai Tanggal</th>
              <th>Subtotal</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $data = $this->cart->contents();
              if (!empty($data)) {
                $no = 1;
                foreach ($data as $k) {
                  echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$k['name'].'</td>';
                    echo '<td>'.$k['qty'].'</td>';
                    echo '<td>'.$k['dari'].'</td>';
                    echo '<td>'.$k['sampai'].'</td>';
                    echo '<td>'.$this->all_model->format_harga($k['subtotal']).'</td>';
                    echo '<td><a href="'.base_url('sewa/hapus/'.$k['rowid']).'">Hapus</a></td>';
                  echo '</tr>';
                  $no++;
                }
              }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>Total</th>
              <th><?php echo $this->all_model->format_harga($this->cart->total());?></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="panel-footer">
        <a href="<?php echo base_url('produk')?>" class="btn btn-primary">Sewa Lagi</a>
        <a href="<?php echo base_url('sewa/simpan_sewa')?>" class="btn btn-info pull-right">Selesai</a>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer') ?>
