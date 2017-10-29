<?php

/**
 *
 */
class Data_member extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['member'] = $this->all_model->get_where(array('level !='=> '0'), 'users');
    $this->load->view('admin/data_member_view', $data);
  }

}

 ?>
