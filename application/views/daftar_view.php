<?php $this->load->view('header'); ?>
<style media="screen">
div textarea {
  border: none;
  border: 1px solid #e6e6e6;
  margin-top: 20px;
  width: 50%;
  padding: 15px;
  font-weight: 100;
  font-family: sans-serif;
  color: #747779;
  resize: none;
  height: 200px;
  outline: none;
}
</style>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="register.html">LOGIN</a></li>
            <li class="active">REGISTER</li>
        </ol>
    </div>
</div>
<div class="reg-form">
  <div class="container">
    <div class="reg">
      <h3>Daftra Sekarang</h3>
      <p>Selamat datang, silahkan melakukan pendaftaran.<p>
      <p>Jika anda sudah punya akun, selahkan <a href="<?php echo base_url('login')?>">Klik Disini</a></p>
      <?php echo $this->session->flashdata('msg');?>
       <form data-parsley-validate action="<?php echo base_url('daftar/simpan')?>" method="post">
        <ul>
          <li class="text-info">Nama Lengkap: </li>
          <li><input type="text" name="nama" required></li>
        </ul>
        <ul>
          <li class="text-info">No Telp: </li>
          <li><input type="text" name="notelp" data-parsley-type="number" required></li>
        </ul>
        <ul>
          <li class="text-info">Alamat: </li>
          <li><textarea name="alamat" rows="1" cols="1" required></textarea></li>
        </ul>
        <ul>
          <li class="text-info">Email: </li>
          <li><input type="text" name="email" data-parsley-type="email" required></li>
        </ul>
        <ul>
          <li class="text-info">Password: </li>
          <li><input type="password" name="password" required></li>
        </ul>
        <input type="submit" value="Daftar">
      </form>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
