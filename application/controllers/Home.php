<?php

/**
 *
 */
class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['produk'] = $this->all_model->get_produk_limit(array(), 'produk');
    $this->load->view('home_view', $data);
  }

}

 ?>
