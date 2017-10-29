<?php

/**
 *
 */
class Daftar extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('daftar_view');
  }

  public function simpan()  {
    $nama = $this->input->post('nama');
    $notelp = $this->input->post('notelp');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $data = array(
      'nama_lengkap' => $nama,
      'notelp'       => $notelp,
      'alamat'       => $alamat,
      'email'        => $email,
      'password'     => $password,
    );
    $a = $this->all_model->insert($data, 'users');
    if ($a) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success">Anda Berhasil mendaftar, silahkan login</div>');
      redirect('daftar');
    }else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger">Anda gagal mendaftar, coba lagi</div>');
      redirect('daftar');
    }
  }
}

 ?>
