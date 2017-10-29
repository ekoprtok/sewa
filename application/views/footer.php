<div class="footer-grid">
    <div class="container">
        <div class="col-md-3 re-ft-grd">
            <h3>Kategori Sewa</h3>
            <ul class="categories">
              <?php $kategori = $this->all_model->get_where(array(), 'kategori');
                    foreach ($kategori as $key => $value) {
                        echo '<li><a href="'.base_url('produk/kategori/'.$value->kategori_id).'">'.$value->nama_kategori.'</a></li>';
                    }
              ?>
            </ul>
        </div>
        <div class="col-md-7 re-ft-grd">
            <h3>Social</h3>
            <ul class="social">
                <li><a href="#" class="fb">facebook</a></li>
                <li><a href="#" class="twt">twitter</a></li>
                <li><a href="#" class="gpls">g+ plus</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!-- <div class="col-md-2 re-ft-grd">
            <div class="bt-logo">
                <div class="logo">
                    <a href="index.html" class="ft-log">bB</a>
                </div>
            </div>
        </div> -->
<div class="clearfix"></div>
    </div>
    <div class="copy-rt">
        <div class="container">
    <p>&copy;   2015 bukonk betaja All Rights Reserved. Design by <a href="http://www.w3layouts.com">w3layouts</a></p>
        </div>
    </div>
</div>
</body>
</html>
