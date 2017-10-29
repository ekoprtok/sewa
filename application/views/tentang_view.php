<?php $this->load->view('header'); ?>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Tentang</li>
        </ol>
    </div>
</div>
<div class="reg-form">
  <div class="container">
    <div class="reg">
      <h3><?php echo $tentang[0]->judul;?></h3>
      <p align="justify"><?php echo $tentang[0]->isi;?>
      </p>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
