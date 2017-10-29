<?php $this->load->view('header') ?>
<style>
@media print {
body * {
  visibility: hidden;
}
#print, #print * {
  visibility: visible;
}
#print {
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
}
.noprint{
  display: none;
}
}
</style>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url('produk')?>">Produk</a></li>
            <li class="active">Selesai</li>
        </ol>
    </div>
</div>
<div class="container">
  <div class="col-sm-12">
    <p>Berikut ini adalah data produk yang anda sewa, <br>silahkan anda cetak sebagai bukti ketika anda akan melakukan pembayaran ditempat kami.</p><br>
    <div class="panel panel-default" id="print">
      <div class="panel-heading">
        Data Sewa
      </div>
      <div class="panel-body">
        <p>Atas Nama : <?php echo $this->session->userdata('nama')?></p><br>
        <p>No Telp : <?php echo $this->session->userdata('notelp')?></p><br>
        <p>Email : <?php echo $this->session->userdata('email')?></p><br>
        <p>Alamat : <?php echo $this->session->userdata('alamat')?></p><br>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Jumlah</th>
              <th>Dari Tanggal</th>
              <th>Sampai Tanggal</th>
              <th>Subtotal</th>
              <th class="noprint">#</th>
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
                    echo '<td><a href="'.base_url('sewa/hapus/'.$k['rowid']).'" class="noprint">Hapus</a></td>';
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
              <th class="noprint"></th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="panel-footer noprint">
        <a href="#" class="btn btn-info" onclick="print();">Cetak</a>
        <a href="<?php echo base_url('sewa/tutup')?>" class="btn btn-primary  pull-right">Selesai</a>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer') ?>
