<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css') ?>">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>
            SIGN UP
        </title>
    </head>
<body> 
<div class="container" style="margin-top: 80px">
<h2 align="center">Sign Up</h2>
  <?php echo form_open('register/simpan') ?>
  <div class="form-group">
    <label for="Nama">Nama Lengkap :</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required />
  </div>
  <div class="form-group">
     <label for="Email">Email :</label>
     <input type="email" name="email" class="form-control" placeholder="Email Valid" required />
  </div>
  <div class="form-group">
    <label for="Username">Username :</label>
    <input type="text" name = "username" class="form-control" placeholder="Username" required />
  </div>
  <div class="form-group">
    <label for="Password">Password :</label>
    <input type="password" name = "password" class="form-control" placeholder="Password" required />
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-info"/>
    <a href="<?php echo site_url('halaman_utama') ?>" class="btn btn-info">BACK</a>
  </div>
  <?php echo form_close() ?>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>


</html>