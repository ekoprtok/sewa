<?php $this->load->view('header'); ?>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Jasa</li>
        </ol>
    </div>
</div>
    <div class="container">
            <div class="col-md-6">
              <p align="justify">Form jasa latihan digunakan untuk melakukan pendaftaran latihan musik / tari yang akan dilaksanakan ditempat kami,
              anda hanya perlu melengkapi data dihalaman pengisian ini, kemudian mencetak dan datang ke alamat kami untuk melakukan pembayaran secara langsung
              guna menghindari hal - hal yang tidak diinginkan dan demi kenyamanan bersama.</p>
            </div>
            <div class="col-md-6">
                     <form data-parsley-validate action="<?php echo base_url('jasa/simpan')?>" method="post" class="form-horizontal">
                         <div class="form-group">
                           <label>Jenis Latihan Yang Diinginkan:</label>
                           <select class="form-control" name="jenis_latihan" required>
                             <option value="" selected>-Pilih Jenis Latihan-</option>
                             <?php
                                $data = $this->all_model->get_where(array(), 'jenis_jasa');
                                if (!empty($data)) {
                                  foreach ($data as $key => $value) {
                                    echo '<option value="'.$value->jenis_jasa_id.'">'.$value->nama_jasa.' ('.$this->all_model->format_harga($value->harga_jasa).' / Pertemuan)</option>';
                                  }
                                }
                              ?>
                           </select>
                         </div>
                         <div class="form-group">
                           <label>Tanggal Mulai Latihan:</label>
                           <input type="date" name="tanggal_mulai" class="form-control" required>
                         </div>
                         <div class="form-group">
                           <label>Keterangan:</label>
                           <textarea name="keterangan" class="form-control" required></textarea>
                         </div>
                         <div class="form-group">
                           <label></label>
                           <button type="submit" class="btn btn-info">Submit</button>
                         </div>
                     </form>
            </div>
            <div class="clearfix"></div>
    </div>
<?php $this->load->view('footer'); ?>
