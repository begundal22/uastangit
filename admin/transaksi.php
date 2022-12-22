<?php
session_start();
require '../config/functions.php';
$tb_hasil = query("SELECT * FROM tb_hasil ORDER BY id ");

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
							Pembayaran
						</h1>
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-money" style="padding-right: 5px;"></i>Pembayaran
							</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->

				<!-- page table -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Pembayaran</h3></div>

							<div class="panel-body">
								<center><h2 style="color: black;">Pembayaran</h2></center><br>
								<div class="table-responsive">
								<table id="myTable" class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th scope="col" class="text-center">No.</th>
											<th scope="col" class="text-center">Nama</th>
											<th scope="col" class="text-center">Alamat</th>
											<th scope="col" class="text-center">Pos</th>
											<th scope="col" class="text-center">Kota</th>
											<th scope="col" class="text-center">Telepon</th>
											<th scope="col" class="text-center">No Rekening</th>
											<th scope="col" class="text-center">Nama Rekening</th>
											<th scope="col" class="text-center">Bayar</th>
											<th scope="col" class="text-center">Bank</th>
											<th scope="col" class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbdy>
							
										<?php $i = 1; ?>
										<?php foreach( $tb_hasil as $row ) : ?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row['nama'];?></td>
												<td><?php echo $row['alamat'];?></td>
												<td><?php echo $row['pos'];?></td>
												<td><?php echo $row['kota'];?></td>
												<td><?php echo $row['tlp'];?></td>
												<td><?php echo $row['norek'];?></td>
												<td><?php echo $row['narek'];?></td>
												<td><?php echo $row['bayar'];?></td>
												<td><?php echo $row['bank'];?></td>
												<td>								
													<a href="hapus1.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-danger btn-sm" name="hapus" style="margin-top: 4px;"><i class="fa fa-trash"></i></button></a>
												</td>
											</tr>
										<?php $i++  ?>
										<?php endforeach;?>

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

