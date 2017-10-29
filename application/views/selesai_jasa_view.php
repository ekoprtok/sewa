<?php $this->load->view('header'); ?>
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
            <li class="active">Selesai</li>
        </ol>
    </div>
</div>

<div class="container">
  <div class="col-md-6">
    <p align="justify">Pendaftaran <strong><?php echo $this->session->userdata('jenis_latihan'); ?></strong> telah berhasil disimpan, mohon lakukan cetak data sebagai bukti ketika anda akan melakukan pembayaran ditempat kami.</p>
    <br>
    <div class="panel panel-default" id="print">
      <div class="panel-heading">
        Data Pendaftaran <?php echo $this->session->userdata('jenis_latihan'); ?>
      </div>
      <div class="panel-body">
        <p>Atas Nama : <?php echo $this->session->userdata('nama')?></p><br>
        <p>No Telp : <?php echo $this->session->userdata('notelp')?></p><br>
        <p>Email : <?php echo $this->session->userdata('email')?></p><br>
        <p>Alamat : <?php echo $this->session->userdata('alamat')?></p><br>
        <p>Jenis Latihan : <?php echo $this->session->userdata('jenis_latihan')?></p><br>
        <p>Dimulai Tanggal : <?php echo $this->all_model->format_tanggal($this->session->userdata('tanggal_mulai_jasa'));?></p><br>
        <p>Keterangan : <?php echo $this->session->userdata('keterangan_jasa')?></p><br>
        <p>Total Bayar : <?php echo $this->all_model->format_harga($this->session->userdata('total_bayar_jasa'));?></p><br>
      </div>
      <div class="panel-footer noprint">
        <a href="#" class="btn btn-info" onclick="print();">Cetak</a>
        <a href="<?php echo base_url('jasa/tutup')?>" class="btn btn-primary  pull-right">Selesai</a>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>
