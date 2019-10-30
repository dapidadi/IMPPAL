<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <hr>
        <h1>BIODATA</h1>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nomor Peserta</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Nilai</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($data_biodata as $hasil){ 
                ?>
                  <tr>
                    <td><?php echo $hasil->nomor_peserta ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->tempat ?></td>
                    <td><?php echo $hasil->tanggal ?></td>
                    <td><?php echo $hasil->alamat ?></td>
                    <td><?php echo $hasil->gender ?></td>
                    <td><?php echo $hasil->nilai ?></td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
            <a href="<?php echo site_url('user/Dashboard') ?>" class="btn btn-sm btn-success">Back</a>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>