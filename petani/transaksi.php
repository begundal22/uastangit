<?php
session_start();
require '../config/functions.php';
$tb_hasil = query("SELECT * FROM tb_hasil where petani LIKE '%$_SESSION[username]%' ORDER BY id");


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
											<th scope="col" class="text-center">Telepon</th>
											<th scope="col" class="text-center">No Rekening</th>
											<th scope="col" class="text-center">Bayar</th>
											<th scope="col" class="text-center">Nama Barang</th>
											<th scope="col" class="text-center">Harga Barang</th>
											<th scope="col" class="text-center">Keterangan</th>
											<th scope="col" class="text-center">Ongkir</th>
											<th scope="col" class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbdy>
							
										<?php $i = 1; ?>
										<?php foreach( $tb_hasil as $row ) : ?>
										<?php 
											$ket = $row['keterangan'];
											$tb_trans = query(" SELECT * FROM tb_trans where tlp LIKE '%$ket%'") ; 
											?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row['nama'];?></td>
												<td><?php echo $row['alamat'];?></td>
												<td><?php echo $row['pos'];?></td>
												<td><a href="https://wa.me/<?php echo $row['tlp']; ?>">+<?php echo $row['tlp'];?></a></td>
												<td><?php echo $row['norek'];?></td>
												<td><?php echo $row['bayar'];?></td>
												<td><?php echo $row['namabrg'];?></td>
												<td><?php echo $row['hargabrg'];?></td>
												<td><?php echo $row['keterangan'];?>
												<a href="ubah1.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-info btn-sm" name="print" style="margin-top: 4px;float:right;"><i class="fa fa-edit"></i></button></a></td>
												<?php foreach( $tb_trans as $row1 ) : ?>
												<td><?php echo $row1['ongkir'];?></td>
												<?php endforeach;?>
												<td>								
													<a href="hapus1.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-danger btn-sm" name="hapus" style="margin-top: 4px;"><i class="fa fa-trash"></i></button></a>
													<a href="print.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-success btn-sm" name="print" style="margin-top: 4px;"><i class="fa fa-print"></i></button></a>
												</td>
											</tr>
										<?php endforeach;?>
										<?php $i++  ?>
									</tbody>
								</table>
								<li>Klik nomer telepon diatas untuk mengirimkan invoice atau keperluan lainnya kepada pembeli</li>
								<li>Tambahkan keterangan yang berisikan nomer telepon transporter untuk mendapatkan harga ongkir</li>
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

