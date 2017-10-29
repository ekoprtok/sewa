<?php

/**
 *
 */
class Produk extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $data['produk'] = $this->all_model->get_produk(array());
    $this->load->view('produk_view', $data);
  }

  public function detail($id = null) {
    $data['detail'] = $this->all_model->get_produk(array('produk_id'=>$id));
    $this->load->view('detail_view', $data);
  }

  public function kategori($kat = null) {
    $where = (!empty($kat)) ? array('produk.kategori_id'=>$kat) : array();
    $data['produk'] = $this->all_model->get_produk($where);
    $this->load->view('produk_view', $data);
  }

}

 ?>
