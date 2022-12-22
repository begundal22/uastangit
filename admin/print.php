<!DOCTYPE html>
<html>
<head>
	<title>Laporan Produk Sayuran</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PRODUK SAYURAN</h2>
 
	</center>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th width="5%">Stock</th>
            
		</tr>
		<?php 
        include_once('../config/functions.php');
        ?>

        <?php
		$sql = mysqli_query($conn,"SELECT * FROM tbl_barang WHERE nama LIKE '%sayur%'");  
        $no = 1;
        while($data = mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><?php echo $data['stock']; ?></td>
                </tr>
        <?php
        }       
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>