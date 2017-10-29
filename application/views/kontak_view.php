<?php $this->load->view('header'); ?>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Kontak</li>
        </ol>
    </div>
</div>
<div class="reg-form">
  <div class="container">
    <div class="reg">
      <h3><?php echo $tentang[1]->judul;?></h3>
      <div class="col-sm-6">
        <p align="justify"><?php echo $tentang[1]->isi;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
