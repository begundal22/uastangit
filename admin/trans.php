<?php
session_start();
require '../config/functions.php';
$tb_trans = query("SELECT * FROM tb_trans where dt LIKE '%$_SESSION[alamat]%' ORDER BY id ");

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
							Transporter
						</h1>
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-car" style="padding-right: 5px;"></i>Transporter
							</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->

				<!-- page table -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Transporter</h3></div>

							<div class="panel-body">
								<center><h2 style="color: black;">Transporter</h2></center><br>
								<div class="table-responsive">
								<table id="myTable" class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th scope="col" class="text-center">No.</th>
											<th scope="col" class="text-center">Nama</th>
											<th scope="col" class="text-center">Dari - Tujuan</th>
											<th scope="col" class="text-center">Telepon</th>
                                            <th scope="col" class="text-center">Ongkir</th>
											<th scope="col" class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbdy>
							
										<?php $i = 1; ?>
										<?php foreach( $tb_trans as $row ) : ?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row['nama'];?></td>
												<td><?php echo $row['dt'];?></td>
												<td><a href="https://wa.me/<?php echo $row['tlp']; ?>">+<?php echo $row['tlp'];?></a></td>
                                                <td><?php echo $row['ongkir'];?></td>
												<td>
													<a href="ubah2.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-warning btn-sm" name="ubah" style="margin-top: 4px;">Ubah</button></a>								
													<a href="hapus1.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-danger btn-sm" name="hapus" style="margin-top: 4px;">Hapus</button></a>
												</td>
											</tr>
											
										<?php $i++  ?>
										<?php endforeach;?>
                                        
									</tbody>
								</table>
                                <a href="tambahtrans.php"><button type="submit" class="btn btn-info btn-sm" name="tambah" style="margin-top: 4px;">Tambah Transporter</button></a>

								<li>Klik nomer telepon diatas untuk mengirimkan pesan atau keperluan lainnya kepada pihak transporter</li>
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

