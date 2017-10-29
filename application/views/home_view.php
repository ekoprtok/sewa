<?php $this->load->view('header'); ?>
<?php $this->load->view('slider'); ?>

<div class="shop-grid">
    <div class="container">

        <?php ;if (!empty($produk)) {
          foreach ($produk as $key => $p) {
            echo '
            <div class="col-md-4 grid-stn simpleCart_shelfItem">
              <div class="ih-item square effect3 bottom_to_top">
                  <div class="bottom-2-top">
                      <div class="img"><img src="'.base_url('upload/'.$p->gambar).'" alt="/" class="img-responsive gri-wid"></div>
                  <div class="info">
                      <div class="pull-left styl-hdn">
                          <h3>'.$p->nama_produk.'</h3>
                      </div>
                      <div class="pull-right styl-price">
                        <p><a  href="#" class="item_add"><span class=" item_price">'.$this->all_model->format_harga($p->harga).'</span></a></p>
                      </div>
                      <div class="clearfix"></div>
                  </div></div>
              </div>
              <div class="quick-view">
                  <a href="'.base_url('produk/detail/'.$p->produk_id).'">Detail</a>
              </div>
            </div>';
          }
        } ?>
        <div class="clearfix"></div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
