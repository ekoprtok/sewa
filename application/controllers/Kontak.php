<?php

/**
 *
 */
class Kontak extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['tentang'] = $this->all_model->get_where(array(), 'pengaturan');
    $this->load->view('Kontak_view', $data);
  }

}

 ?>
