<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Bukonk Betaja</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('theme/user/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('theme/user/css/style.css');?>" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url('theme/user/js/simpleCart.min.js');?>"></script>
		<script src="<?php echo base_url('theme/user/js/jquery-2.1.4.min.js');?>"></script>
		<script src="<?php echo base_url('theme/user/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('theme/user/js/imagezoom.js');?>"></script>
    <script defer src="<?php echo base_url('theme/user/js/jquery.flexslider.js');?>"></script>
    <script defer src="<?php echo base_url('theme/user/js/parsley.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('theme/user/css/flexslider.css');?>" type="text/css" media="screen" />
    <style>
    body { /* Body offset for fixed navbar */
    padding-top: 70px;
    }
    .navbar-default {
        background-color: #A5E126;
        border-color: #e7e7e7;
    }

    .logo a, .logo a:hover {
        font-family: 'Pathway Gothic One';
        background-color: #A5E126;
        text-transform: uppercase;
        text-decoration: none;
         padding: 0 60px;
        font-weight: bold;
        font-size: 34px;
        color: #fff;
    }

    .navbar .navbar-form { /* Positioning the form */
      padding-top: 0;
      padding-bottom: 0;
      margin-right: 0;
      margin-left: 0;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }


    @media(max-width:767px) {
      body { /* Body offset for fixed navbar for mobile devices */
      padding-top: 140px;
    }

    .navbar .navbar-form {
          width: 100% /* Full width search box for mobile devices */
      }
    }


    /* Media queries to adjust form width */
    @media(min-width:768px) {
      .navbar-form .input-group>.form-control {
      width: 200px;
    }
    }

    @media(min-width:992px) {
    .navbar-form .input-group>.form-control {
      width: 270px;
    }
    }

    @media(min-width:1200px) {
    .navbar-form .input-group>.form-control {
      width: 370px;
    }
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
    }
    </style>
    </head>
    <body>

      <div class="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="logo">
                      <a href="<?php echo base_url();?>">bukonk betaja</a>
                  </div>
                </div>

                <div class="collapse navbar-collapse upper-navbar">
                  <ul class="nav navbar-nav ">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="<?php echo base_url('produk');?>">Sewa Produk</a></li>
                    <li><a href="<?php echo base_url('jasa');?>">Jasa Latihan</a></li>
                    <li><a href="<?php echo base_url('tentang');?>">Tentang</a></li>
                    <li><a href="<?php echo base_url('kontak');?>">Kontak</a></li>
                  </ul>
                  <ul id="menu-topmenu" class="nav navbar-nav navbar-right">
                    <?php if (empty($this->session->userdata('is_login'))){ ?>
                      <li><a href="<?php echo base_url('daftar')?>" role="button">Daftar</a></li>
                      <li><a href="<?php echo base_url('login')?>" role="button">Masuk</a></li>
                    <?php }else{ ?>
                      <li><a href="<?php echo base_url('akun')?>" role="button"><?php echo ucfirst($this->session->userdata('nama'));?></a></li>
                      <li><a href="<?php echo base_url('login/logout')?>" role="button">Logout</a></li>
                    <?php } ?>
                  </ul>
                </div>
          </div>
        </nav>
      </div>
