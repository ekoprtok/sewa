<?php

/**
 *
 */
class Jasa extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $this->load->view('jasa_view');
  }

  public function simpan() {
    $jenis_latihan  = $this->input->post('jenis_latihan');
    $tanggal_mulai  = $this->input->post('tanggal_mulai');
    $keterangan     = $this->input->post('keterangan');

    $data = array(
      'user_id'       => $this->session->userdata('user_id'),
      'keterangan'    => $keterangan,
      'jenis_jasa_id' => $jenis_latihan,
      'tanggal_mulai' => $tanggal_mulai,
    );
    $harga = $this->all_model->get_where(array('jenis_jasa_id'=>$jenis_latihan), 'jenis_jasa');
    $this->session->set_userdata('jenis_latihan', $harga[0]->nama_jasa);
    $this->session->set_userdata('tanggal_mulai_jasa', $tanggal_mulai);
    $this->session->set_userdata('keterangan_jasa', $keterangan);
    $this->session->set_userdata('total_bayar_jasa', $harga[0]->harga_jasa);
    $a = $this->all_model->insert($data, 'transaksi_jasa');
    if ($a) {
      redirect('jasa/selesai');
    }
  }

  public function selesai() {
    $this->load->view('selesai_jasa_view');
  }

  public function tutup() {
    $this->session->unset_userdata('jenis_latihan');
    $this->session->unset_userdata('tanggal_mulai_jasa');
    $this->session->unset_userdata('keterangan_jasa');
    $this->session->unset_userdata('total_bayar_jasa');
     redirect('home');
  }

}

 ?>
