<?php

/**
 *
 */
class Akun extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $data['transaksi_sewa'] = $this->all_model->get_transaksi_sewa(array('transaksi.user_id'=>$this->session->userdata('user_id')));
    $data['transaksi_jasa'] = $this->all_model->get_transaksi_jasa(array('transaksi_jasa.user_id'=>$this->session->userdata('user_id')));
    $this->load->view('akun_view', $data);
  }

  public function simpan() {
    $user_id = $this->input->post('user_id');
    $nama    = $this->input->post('nama');
    $email   = $this->input->post('email');
    $notelp  = $this->input->post('notelp');
    $alamat  = $this->input->post('alamat');
    $password  = $this->input->post('password');

    $data_update = $this->all_model->update(
      array(
        'user_id' => $user_id
      ),
      array(
        'nama_lengkap' => $nama,
        'email'        => $email,
        'notelp'       => $notelp,
        'alamat'       => $alamat,
        'password'     => $password
      ),
      'users'
    );
    if ($data_update) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a> Data berhasil diubah</div>');
      $this->session->set_userdata('nama', $nama);
      $this->session->set_userdata('email', $email);
      $this->session->set_userdata('notelp', $notelp);
      $this->session->set_userdata('alamat', $alamat);
      $this->session->set_userdata('password', $password);
      redirect('akun');
    }else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a> Data gagal diubah</div>');
      redirect('akun');
    }
  }

}

 ?>
