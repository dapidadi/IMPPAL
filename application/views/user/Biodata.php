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
            INPUT BIODATA
        </title>
    </head>
<body> 
<div class="container" style="margin-top: 80px">
<h2 align="center">Input Biodata</h2>
  <?php echo form_open('user/Biodata/simpan') ?>
  <div class="form-group">
    <label for="Nama">Nama Lengkap :</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required />
  </div>
  <div class="form-group">
     <label for="Tempat">Tempat Lahir :</label>
    <input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" required />
  </div>
  <div class="form-group">
     <label for="Tanggal">Tanggal Lahir :</label>
     <input type="date" name="tanggal" required />
  </div>
  <div class="form-group">
    <label for="Alamat">Alamat :</label>
    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required />
  </div>
  <div class="form-group">
    <label for="gender">Jenis Kelamin :</label><br>
    <input type="radio" name="gender" value="Laki-laki">Laki-laki<br>
  <input type="radio" name="gender" value="Perempuan">Perempuan<br>
  </div>
  <div class="form-group">
    <label for="Nilai">Nilai UN :</label>
    <input type="text" name="nilai" class="form-control" placeholder="ex : 32.00" required />
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-info"/>
    <a href="<?php echo site_url('user/dashboard') ?>" class="btn btn-info">BACK</a>
  </div>
  <?php echo form_close() ?>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>


</html>