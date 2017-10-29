<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/Ionicons/css/ionicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/dist/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/dist/css/skins/_all-skins.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/morris.js/morris.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/jvectormap/jquery-jvectormap.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
  <script src="<?php echo base_url('theme/admin/bower_components/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="<?php echo base_url('theme/admin/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/raphael/raphael.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/jquery-knob/dist/jquery.knob.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/moment/min/moment.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/bower_components/fastclick/lib/fastclick.js');?>"></script>
  <script src="<?php echo base_url('theme/user/js/parsley.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/dist/js/adminlte.min.js');?>"></script>
  <script src="<?php echo base_url('theme/admin/dist/js/demo.js');?>"></script>
  <style>

  .parsley-error {
    border-color: #f6504d!important;
  }

  .parsley-errors-list {
    display: none;
    margin: 0;
    padding: 0;
  }

  .parsley-errors-list.filled {
    display: block;
  }

  .parsley-errors-list > li {
    font-size: 12px;
    list-style: none;
    color: #f6504d;
  }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboard')?>" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php $this->load->view('admin/sidebar')?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <section class="content">
