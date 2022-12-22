<?php
session_start();

require '../config/functions.php';


// pagination
// konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%rempah%'"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); 
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;



$tb_barang = query("SELECT * FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%rempah%' LIMIT $awalData, $jumlahDataPerHalaman");


$jmlbarang = query("SELECT SUM(harga) as harga FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%sayur%'");

$jmlbarang1 = query("SELECT SUM(harga) as harga FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%buah%'");

$jmlbarang2 = query("SELECT SUM(harga) as harga FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%rempah%'");


// jika tombol cari ditekan
if (isset($_POST["cari"])) {
	$tb_barang = cari($_POST["keyword"]);
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

<?php include '../template/head_ptn.php'; ?>

    <style>
    .white-box{background:#fff;padding:25px;margin-bottom:15px}
    .white-box .box-title{margin:0 0 12px;font-weight:500;text-transform:uppercase;font-size:14px}
    </style>
</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<?php include '../template/navbar_ptn.php'; ?>

		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Rempah - Rempah
						</h1>
						<ol class="breadcrumb">
							<li>
								<i style="padding-right: 10px"></i>Rempah - Rempah
							</li>
							
						</ol>

			<!-- catatan admin -->
            <?php include '../template/cat_admin.php'; ?>
				<!-- page table -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Rempah - Rempah</h3></div>
							<div class="panel-body">
								<center><h2 style="color: red;">Produk Rempah</h2></center><br>
								<div class="table-responsive">

									<form method="post" action="" class="form-inline" style="float: right;">
										<div class="form-group">
											<input type="text" name="keyword" class="form-control" placeholder="Masukkan Pencarian..." autofocus autocomplete="off"  size="30" /> 
											<button type="submit" name="cari" class="btn btn-primary">Cari...</button>
										</div>
										<!-- <br>
										
										<div class="form-group" >
										    <ul class="pagination">

										        <li><a href="#">&laquo;</a></li>

										        <li><a href="#">1</a></li>

										        <li><a href="#">2</a></li>

										        <li><a href="#">3</a></li>

										        <li><a href="#">4</a></li>

										        <li><a href="#">5</a></li>

										        <li><a href="#">&raquo;</a></li>

										    </ul>
									    </div>
 -->
									</form>
									<br><br><br>
									
								<table id="myTable" class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th scope="col" class="text-center">No.</th>
											<th scope="col" class="text-center">Nama Produk</th>
											<th scope="col" class="text-center">Harga</th>
											<th scope="col" class="text-center">Stock</th>
											<th scope="col" class="text-center">Keterangan</th>
											<th scope="col" class="text-center">Gambar</th>
											<th scope="col" class="text-center">Alamat</th>
											<th scope="col" class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbdy>

										<?php $i = 1; ?>
										<?php foreach( $tb_barang as $row ) : ?>
											<tr class="text-center">
												<td><?= $i; ?></td>
												<td><?= $row["nama"] ;?></td>
												<td>Rp.<?= number_format($row["harga"]) ;?></td>
												<td><?= $row["stock"] ;?></td>
												<td><?= $row["keterangan"] ;?></td>
												<td><img src="../img/<?= $row["gambar"] ;?>" width="90px"></td>
												<td><?= $row["alamat"] ;?></td>
												<td>
																																				
													<a href="ubah.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-warning btn-sm" name="ubah">Ubah</button></a>
	
													<a href="hapus.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-danger btn-sm" name="hapus" style="margin-top: 4px;">Hapus</button></a>
												</td>
											</tr>
											<?php $i++; ?>
										<?php endforeach; ?>

									</tbody>
									
								</table>
								<!-- navigasi -->
										<ul class="pagination">

											<?php if( $halamanAktif > 1 ) : ?>
											<li><a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a></li>
											<?php endif; ?>

											<?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
												<?php if( $i == $halamanAktif ) : ?>
											<li class="active"><a href="?halaman=<?= $i;  ?>"><?= $i; ?></a></li>
												<?php else: ?>
													<li><a href="?halaman=<?= $i;  ?>"><?= $i; ?></a></li>

												<?php endif; ?>
											<?php endfor; ?>

											<?php if( $halamanAktif < $jumlahHalaman ) : ?>
											<li><a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a></li>
											<?php endif; ?>

											<a href="tambah.php ?>" style="margin-left: 20px;"><button type="submit" class="btn btn-info" name="tambah">Tambah</button></a>
											
										</ul>


								<!-- tutup navigasi -->



							</div>
						</div>

						</div>
					</div>

				</div>



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
		<!-- tooltip -->
		<script>
			$('.tooltip-demo').tooltip({
				selector: "[data-toggle=tooltip]",
				container: "body"
			})
		</script>

			<!-- generate datatable on our table -->
			<script>
				$(document).ready(function(){
		//inialize datatable
		$('#myTable').DataTable();

	    //hide alert
	    $(document).on('click', '.close', function(){
	    	$('.alert').hide();
	    })
	});
	</script>

	</body>

	</html>

