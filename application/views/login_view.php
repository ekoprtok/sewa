<?php $this->load->view('header') ?>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">HOME</a></li>
            <li class="active">LOGIN</li>
        </ol>
    </div>
</div>
<div class="login">
    <div class="container">
        <div class="login-grids">
            <div class="col-md-6 log">
                     <h3>Login</h3>
                     <div class="strip"></div>
                     <p>Selamat Datang, Silahkan masuk</p>
                     <p>Jika belum punya akun, silahkan <a href="<?php echo base_url('daftar')?>">klik disini</a></p>
                     <form data-parsley-validate action="<?php echo base_url('login/aksi_login')?>" method="post">
                         <h5>Email:</h5>
                         <input type="text" name="email" data-parsley-type="email" required>
                         <h5>Password:</h5>
                         <input type="password" name="password" required><br>
                         <input type="submit" value="Login">
                     </form>
                    <!-- <a href="#">Forgot Password ?</a> -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php $this->load->view('footer') ?>
