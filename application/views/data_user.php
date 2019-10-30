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
        <h1>DATA USERS</h1>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id User</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_user as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->email ?></td>
                    <td><?php echo $hasil->username ?></td>
                    <td><?php echo $hasil->password ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>admin/data_user/edit/<?php echo $hasil->id_user ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>admin/data_user/hapus/<?php echo $hasil->id_user ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
            <a href="<?php echo site_url('welcome/halaman_admin') ?>" class="btn btn-sm btn-success">Back</a>
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