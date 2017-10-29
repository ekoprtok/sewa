<?php

/**
 *
 */
class Laporan_sewa extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $tgl_mulai = (!empty($this->input->get('tgl1'))) ? $this->input->get('tgl1') : null;
    $tgl_selesai = (!empty($this->input->get('tgl2'))) ? $this->input->get('tgl2') : null;
    $data['transaksi'] = $this->all_model->get_laporan_sewa($tgl_mulai, $tgl_selesai);
    $this->load->view('admin/laporan_sewa_view', $data);
  }

  public function cetak_jasa() {
    $tgl_mulai = (!empty($this->input->get('tgl1'))) ? $this->input->get('tgl1') : null;
    $tgl_selesai = (!empty($this->input->get('tgl2'))) ? $this->input->get('tgl2') : null;
    $data['transaksi'] = $this->all_model->get_laporan_sewa($tgl_mulai, $tgl_selesai);
    $this->load->view('admin/cetak_sewa', $data);
  }

}

 ?>
