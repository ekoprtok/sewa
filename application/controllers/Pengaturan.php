<?php

/**
 *
 */
class Pengaturan extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['pengaturan'] = $this->all_model->get_where(array(), 'pengaturan');
    $this->load->view('admin/data_pengaturan_view', $data);
  }

  public function simpan() {
    $pengaturan_id  = $this->input->post('pengaturan_id');
    $judul  = $this->input->post('judul');
    $isi  = nl2br($this->input->post('isi'));
    $data = array(
      'judul' => $judul,
      'isi'   => $isi,
    );
    $where = array('pengaturan_id' => $pengaturan_id);
    $a = $this->all_model->update($where, $data, 'pengaturan');
    if ($a) {
      redirect('pengaturan');
    }
  }

}

 ?>
