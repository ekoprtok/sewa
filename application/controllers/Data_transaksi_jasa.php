<?php

/**
 *
 */
class Data_transaksi_jasa extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['transaksi'] = $this->all_model->get_transaksi_jasa(array());
    $this->load->view('admin/data_transaksi_jasa_view', $data);
  }

  public function setuju($idt) {
    $data = array('status'=> '1');
    if ($this->all_model->update(array('transaksi_jasa_id'=>$idt), $data, 'transaksi_jasa')) {
      redirect('data_transaksi_jasa');
    }
  }
}

 ?>
