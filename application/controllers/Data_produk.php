<?php

/**
 *
 */
class Data_produk extends CI_Controller
{

  public function __construct()   {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $data['produk'] = $this->all_model->get_produk(array(), 'produk');
    $this->load->view('admin/data_produk_view', $data);
  }

  public function edit($id) {
    $data['kategori'] = $this->all_model->get_where(array(), 'kategori');
    $data['produk'] = $this->all_model->get_produk(array('produk_id'=>$id), 'produk');
    $this->load->view('admin/edit_produk_view', $data);
  }

  public function tambah() {
    $data['kategori'] = $this->all_model->get_where(array(), 'kategori');
    $this->load->view('admin/tambah_produk_view', $data);
  }

  public function hapus($id) {
    $hapus = $this->all_model->delete(array('produk_id'=>$id), 'produk');
    if ($hapus) {
      redirect('data_produk');
    }
  }

  public function simpan() {
    $nama_produk = $this->input->post('nama_produk');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $deskripsi = $this->input->post('deskripsi');
    if (!empty($_FILES)) {
      $config['upload_path']          = getcwd().'/upload/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1024;
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;
      $config['encrypt_name']         = true;
      $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $data = array('upload_data' => $this->upload->data());
          $filename = $data['upload_data']['file_name'];
          $data_update = array(
            'kategori_id' => $kategori,
            'nama_produk' => $nama_produk,
            'harga'       => $harga,
            'stok'        => $stok,
            'deskripsi'   => $deskripsi,
            'gambar'      => $filename,
          );
          $simpan = $this->all_model->insert($data_update, 'produk');
          if ($simpan) {
            redirect('data_produk');
          }
        }
    }else {
      $data_update = array(
        'kategori_id' => $kategori,
        'nama_produk' => $nama_produk,
        'harga'       => $harga,
        'stok'        => $stok,
        'deskripsi'   => $deskripsi,
      );
      $simpan = $this->all_model->insert($data_update, 'produk');
      if ($simpan) {
        redirect('data_produk');
      }
    }
  }

  public function simpan_edit() {
    $produk_id = $this->input->post('produk_id');
    $nama_produk = $this->input->post('nama_produk');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $deskripsi = $this->input->post('deskripsi');

    if (!empty($_FILES)) {
      $config['upload_path']          = getcwd().'/upload/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1024;
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;
      $config['encrypt_name']         = true;
      $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $data = array('upload_data' => $this->upload->data());
          $filename = $data['upload_data']['file_name'];
          $data_update = array(
            'kategori_id' => $kategori,
            'nama_produk' => $nama_produk,
            'harga'       => $harga,
            'stok'        => $stok,
            'deskripsi'   => $deskripsi,
            'gambar'      => $filename,
          );
          $simpan = $this->all_model->update(array('produk_id'=>$produk_id),$data_update, 'produk');
          if ($simpan) {
            redirect('data_produk');
          }
        }
    }else {
      $data_update = array(
        'kategori_id' => $kategori,
        'nama_produk' => $nama_produk,
        'harga'       => $harga,
        'stok'        => $stok,
        'deskripsi'   => $deskripsi,
      );
      $simpan = $this->all_model->update(array('produk_id'=>$produk_id),$data_update, 'produk');
      if ($simpan) {
        redirect('data_produk');
      }
    }
  }

}

 ?>
