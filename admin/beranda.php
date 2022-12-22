<?php
session_start();
require '../config/functions.php';
$tbl_barang = query("SELECT * FROM tbl_barang ORDER BY id DESC LIMIT 3 ");

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
							Beranda
						</h1>
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-dashboard"></i>  <a href="home.php">Dashboard</a>
							</li>
							<li class="active">
								<i class="fa fa-home"></i> Beranda
							</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->

				<!-- page table -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Beranda</h3></div>

							<div class="panel-body">
								<center><h2 style="color: red;">Produk Terbaru</h2></center><br>
								<div class="table-responsive">
								<table id="myTable" class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th scope="col" class="text-center">No.</th>
											<th scope="col" class="text-center">Nama Produk</th>
											<th scope="col" class="text-center">Harga</th>
											<th scope="col" class="text-center">Stock</th>
											<th scope="col" class="text-center">Keterangan</th>
											<th scope="col" class="text-center">Gambar</th>
											<th scope="col" class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbdy>


										<?php $i = 1; ?>
										<?php foreach( $tbl_barang as $row ) : ?>
											<tr class="text-center">
												<td><?= $i; ?></td>
												<td><?= $row["nama"] ;?></td>
												<td>Rp.<?= number_format($row["harga"]) ;?></td>
												<td><?= $row["stock"] ;?></td>
												<td><?= $row["keterangan"] ;?></td>
												<td><img src="../img/<?= $row["gambar"] ;?>" width="90px"></td>
												<td>
													<a href="hapus.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-danger btn-sm" name="hapus" style="margin-top: 4px;">Hapus</button></a>
												</td>
											</tr>
											<?php $i++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
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
		<script src="js/jquery-3.3.1.min.js"></script>

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
		<script src="datatables/datatables.min.js"></script>
		<!-- tooltip -->
		<script>
			$('.tooltip-demo').tooltip({
				selector: "[data-toggle=tooltip]",
				container: "body"
			})
		</script>

		<!-- generate datatable on our table -->
		<script>
			$(document).ready( function () {
				$('#myTable').DataTable();
			} );
		</script>

	</body>

	</html>

