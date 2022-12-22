<?php
session_start();
require '../config/functions.php';

// ambil data di url
$id = $_GET["id"];

// query data berdasarkan id
$mhs = query("SELECT * FROM tb_login WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if (ganti($_POST) > 0  ) {
		echo "
			   <script>
			   	alert('Data berhasil diubah');
			   	document.location.href = 'beranda.php';
			   </script>
			   ";
	} else {
		echo "
			   <script>
			   	alert('Data gagal diubah');
			   	document.location.href = 'beranda.php';
			   </script>
			   ";
	}

}

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

    <style>
    	form{
    		height: 200vh;
    	}
    </style>
</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<?php include '../template/navbar_admin.php'; ?>

		<div id="page-wrapper">

			<div class="container-fluid">

				
				<!-- page table -->
				<form method="post">
					<center><h2 style="color: blue;">Ubah Member</h2></center><br>
                  <fieldset>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                        	<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
                          <label>Nama Depan:</label>
                          <input class="form-control" name="username" type="text" value="<?= $mhs["username"] ?>">
                          <br>
                           <label>Nama Akhir:</label>
                          <input class="form-control" name="username2" type="text" value="<?= $mhs["username2"] ?>">
                          <br>
                           <label>Email:</label>
                          <input class="form-control" name="email" type="text" value="<?=$mhs["email"]?>">
                          <br>

                          <!-- alert -->
                          <div class="alert alert-danger fade in">

                          	<a href="#" class="close" data-dismiss="alert">&times;</a>

                          	<strong><i class="fa fa-warning" style="padding-right: 5px;"></i>Nomor Identitas</strong>  <a href="#" class="alert-link"></a> harus diisi angka minimal 11 

                          </div>
                          	<label>Nomor Identitas:</label>
                          <input class="form-control" name="id" type="text" value="<?= $mhs["id"] ?>">
                          <br>
                          	<label>Telepon:</label>
                          <div class="form-group">
                          	<input class="form-control" name="tlp" type="text" value="<?= $mhs["tlp"] ?>">
                          </div>
                          <br>
                          <label>Alamat:</label>
                          <textarea name="alamat"  id="ckeditor"><?= $mhs["alamat"] ?></textarea>
                          <br>
                          <div class="btn-group">
                            <button type="submit" name="submit" class="btn btn-warning">Ubah</button>
                          </div>
                        </div>
                      </div>
                    

                    </fieldset>

                </form>
					
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="js/plugins/morris/raphael.min.js"></script>
		<script src="js/plugins/morris/morris.min.js"></script>
		<script src="js/plugins/morris/morris-data.js"></script>

		<!-- Flot Charts JavaScript -->
		<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
		<script src="js/plugins/flot/jquery.flot.js"></script>
		<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
		<script src="js/plugins/flot/jquery.flot.resize.js"></script>
		<script src="js/plugins/flot/jquery.flot.pie.js"></script>
		<script src="js/plugins/flot/flot-data.js"></script>

		<!-- Page-Level Plugin Scripts - Tables -->
		<script src="datatable/jquery.dataTables.min.js"></script>
		<script src="datatable/dataTable.bootstrap.min.js"></script>

		<script src="ckeditor/ckeditor.js"></script>


		<!-- tooltip -->
		<script>
			$('.tooltip-demo').tooltip({
				selector: "[data-toggle=tooltip]",
				container: "body"
			})
		</script>
		<script>
			window.onload = function(){
				CKEDITOR.replace( 'ckeditor' );
			}
		</script>
	</body>

	</html>

