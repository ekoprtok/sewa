<?php $this->load->view('header'); ?>
<style media="screen">
li.qty {
  width: 100%;
  float: left;
   margin: 0;
}
button.btn{
  width: 100%;
    background: #100b0b;
    color: #fff;
    font-family: 'Pathway Gothic One';
    font-size: 18px;
    border: none;
    border-radius: 0;
}
</style>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
  <div class="head-bread">
      <div class="container">
          <ol class="breadcrumb">
              <li><a href="<?php echo base_url();?>">Home</a></li>
              <li><a href="<?php echo base_url('produk')?>">Produk</a></li>
              <li class="active">Detail</li>
          </ol>
      </div>
  </div>

  <div class="showcase-grid">
      <div class="container">
          <div class="col-md-8 showcase">
              <div class="flexslider">
                    <ul class="slides">
                      <li data-thumb="<?php echo base_url('upload/'.$detail[0]->gambar);?>">
                          <div class="thumb-image"> <img src="<?php echo base_url('upload/'.$detail[0]->gambar);?>" data-imagezoom="true" class="img-responsive"> </div>
                      </li>
                    </ul>
                  <div class="clearfix"></div>
              </div>
          </div>
          <div class="col-md-4 showcase">
              <div class="showcase-rt-top">
                  <div class="pull-left shoe-name">
                      <h3><?php echo $detail[0]->nama_produk;?></h3>
                      <h4><?php echo $this->all_model->format_harga($detail[0]->harga);?> / hari</h4>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <hr class="featurette-divider">
              <div class="shocase-rt-bot">
                  <form class="" action="<?php echo base_url('sewa/tambah_sewa')?>" method="post">
                    <div class="float-qty-chart">
                    <ul>
                        <li class="qty">
                            <h4>Dari Tanggal</h4>
                            <input type="hidden" name="produk_id" value="<?php echo $detail[0]->produk_id;?>" required>
                            <input type="hidden" name="nama_produk" value="<?php echo $detail[0]->nama_produk;?>" required>
                            <input type="hidden" name="harga" value="<?php echo $detail[0]->harga;?>" required>
                            <input type="date" name="dari" class="form-control" required>
                        </li>
                        <li class="qty">
                            <h4>Sampai Tanggal</h4>
                            <input type="date" name="sampai" class="form-control" required>
                        </li>
                        <li class="qty">
                            <h4>QTY</h4>
                            <select class="form-control qnty-chrt" name="qty" required>
                              <?php for ($i=1; $i <= $detail[0]->stok; $i++) {
                                echo '<option value="'.$i.'">'.$i.'</option>';
                              } ?>
                            </select>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                    <ul>
                        <li class="ad-2-crt simpleCart_shelfItem">
                            <button type="submit" role="button" class="btn" >Sewa</button>
                        </li>
                    </ul>
                  </form>
              </div>
              <div class="showcase-last">
                  <h3>Detail</h3>
                  <ul>
                    <li><?php echo $detail[0]->deskripsi;?></li>
                  </ul>
              </div>
          </div>
  <div class="clearfix"></div>
      </div>
  </div>
<?php $this->load->view('footer');?>
