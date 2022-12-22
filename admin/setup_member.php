<?php
session_start();
require '../config/functions.php';
$tb_login1 = query("SELECT * FROM tb_login ORDER BY id");

$query=mysqli_query($conn, "SELECT * FROM tb_login");
$asile=mysqli_num_rows($query);

$query=mysqli_query($conn, "SELECT * FROM tb_admin");
$asil=mysqli_num_rows($query);

$query=mysqli_query($conn, "SELECT * FROM tbl_barang");
$hasil=mysqli_num_rows($query);




if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda Harus Login!');</script>";
    header("Location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

<?php include '../template/head_admin.php'; ?>

    <!-- chart -->
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <style>
        #page-wrapper{
            height: 180vh;
        }

    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include '../template/navbar_admin.php'; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

             <!-- Page Heading -->
             <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">
                  Member
                </h1>
                <ol class="breadcrumb">
                  <li>
                    <i class="fa fa-address-book" style="padding-right: 10px"></i>Member
                  </li>
                </ol>
              </div>
            </div>
            <!-- /.row -->

            <!-- catatan admin -->
             <!-- catatan admin -->
             <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-address-book fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $asile ?></div>
                                        <div>Member</div>
                                    </div>
                                </div>
                            </div>
                            <a href="setup_member.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-bag fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $hasil ?></div>
                                        <div>Produk</div>
                                    </div>
                                </div>
                            </div>
                            <a href="beranda.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $asil ?></div>
                                        <div>Admin</div>
                                    </div>
                                </div>
                            </div>
                            <a href="setup_admin.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->        
                <br><br>

            <div class="row">
              <div class="col-md-12">

                <div class="panel panel-default">

                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user" style="padding-right: 10px;"></i>Data Member</h3>
                  </div>
                  <div class="panel-body">

                   <table class="table table-hover table-striped table-bordered" id="myTable">
                    <thead>
                    <h1 class="text-success text-center">Data Member</h1>
                    <br>
                    <tr>
                      <th scope="col" class="text-center">No</th>
                      <th scope="col" class="text-center">Nama Lengkap</th>
                      <th scope="col" class="text-center">Email</th>
                      <th scope="col" class="text-center">Nomor Identitas</th>
                      <th scope="col" class="text-center">Telepon</th>
                      <th scope="col" class="text-center">Alamat</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                     <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $tb_login1 as $row ) : ?>
                    <tr class="text-center">
                        <td><?= $i; ?></td>
                        <td><?= $row["username"] ;?>&nbsp;<?= $row["username2"] ?></td>
                        <td><?= $row["email"] ;?></td>
                        <td><?= $row["id"] ;?></td>
                        <td><?= $row["tlp"] ;?></td>
                        <td><?= $row["alamat"] ;?></td>
                        <td>
                                              
                          <a href="ganti.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-warning btn-sm" name="ubah">Ubah</button></a>
                      
                          <a href="gosok.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-danger btn-sm" name="gosok" style="margin-top: -0px;">Hapus</button></a>                          
                        </td>
                      </tr>


                      <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                    </table>
                    <a href="nambah.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-primary btn-sm" name="nambah" ><i class="fa fa-user-plus" style="padding-right: 5px;"></i>Tambah</button></a>
                  </div>
                </div>
              </div>
            </div>


        
    </div>
    <!-- /#wrapper -->
      


    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

      <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/chart.js"></script>

     <!-- datatables -->
    <script src="datatables/datatables.min.js"></script>

    <!-- generate datatable on our table -->
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>


        
</body>

</html>
