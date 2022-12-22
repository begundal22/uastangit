
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "tang-it");


include "cart.php";

if (isset($_POST["finish"])) {
 
      $nama = $_POST["nama"];
      $alamat = $_POST["alamat"];
      $pos = $_POST["pos"];
      $kota = $_POST["kota"];
      $tlp = $_POST["tlp"];
      $norek = $_POST["norek"];
      $narek = $_POST["narek"];
      $bayar = $_POST["bayar"];
      $bank = $_POST["bank"];
      $petani = $_POST["petani"];
      $namabrg = $_POST["namabrg"];
      $hargabrg = $_POST["hargabrg"];
      if ($bayar >=  $hargabrg){
        // query insert data
        $query = "INSERT INTO tb_hasil
        VALUES 
        ('', '$nama', '$alamat', '$pos', '$kota', '$tlp', '$norek', '$narek', '$bayar', '$bank', '$petani', '$namabrg', '$hargabrg')
        ";
        mysqli_query($conn, $query);
        session_destroy();
    } 
    else {
      echo "
           <script>
             alert('Total Bayar Kurang');
             document.location.href = 'detail.php';
           </script>
           ";
    }
      
}


if(isset($_POST['finish'])){
    
    // get the HTML
    ob_start();     
    
    $num = 'TanG-it'.$_POST['pos'].' - ('.$_POST['nama'].')';
    $nom = $_POST['kota'];
    $date = date("d M Y");
?>

<style type="text/css">

    div.zone { border: none; border-radius: 6mm; background: #FFFFFF; border-collapse: collapse; padding:3mm; font-size: 4mm;}
    h1 { padding: 0; margin: 0; color: #DD0000; font-size: 7mm; }
    h2 { padding: 0; margin: 0; color: #222222; font-size: 5mm; position: relative; }

</style>
<page format="105x200" orientation="L" backcolor="#AAAACC" style="font: arial;">
    <div style="rotate: 90; position: absolute; width: 100mm; height: 4mm; left: 195mm; top: 0; font-style: italic; font-weight: normal; text-align: center; font-size: 2.5mm;">
        Harga pembayaran bisa saja berubah sewaktu-waktu, dengan ketentuan tertentu.
    </div>
    <table style="width: 99%;border: none;" cellspacing="4mm" cellpadding="0">
        <tr>
            <td colspan="2" style="width: 100%">
                <div class="zone" style="height: 34mm;position: relative;font-size: 5mm;">
                    <div style="position: absolute; right: 3mm; top: 3mm; text-align: right; font-size: 4mm; ">
                        <b><?php echo $_POST['pos']; ?></b><br>
                    </div>
                    <div style="position: absolute; right: 3mm; bottom: 3mm; text-align: right; font-size: 4mm; ">
                        Username : <b><?php echo $_POST['nama']; ?></b><br>
                        
                        Code Booking : <b><?php echo $num; ?></b><br>
                        Dikirim ke : <b><?php echo $_POST['kota']; ?></b><br>
                    </div>
                    <img src="icon.png" width="100" height="99" />
                    <span style="position: absolute; left: 32mm; top: 10mm; font-size: 28px; color: red">TanG-it</span><br />
                    <span style="position: absolute; left: 32mm; top: 18mm; font-size: 16px;">Malang, <?php echo $date; ?></span>
                    
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 25%;">
                <div class="zone" style="height: 40mm;vertical-align: middle;text-align: center;">
                    <qrcode value="<?php echo $num."\n".$nom."\n".$date; ?>" ec="Q" style="width: 37mm; border: none;" ></qrcode>
                </div>
            </td>
            <td style="width: 75%">
                <div class="zone" style="height: 40mm;vertical-align: middle; text-align: justify">
                    <b>Detail Pembeli :</b><br>
                    Nama Pembeli : <?= $_POST['nama']; ?><br>
                    <br>
                    <b>Detail Pembayaran :</b><br>
                    No. Rekening : <?= $_POST['norek']; ?><br>
                    Melalui Bank : <?= $_POST['bank']; ?>
                    <br>
                    <b>Total Pembayaran :</b>
                    <?php echo $_POST['bayar']; ?>
                    <br><br>
                    <b>Total Harga Barang :</b>
                    <?php echo $_POST['hargabrg']; ?> 
                    <br><br>
                    <br><br>
                    <br><br>
                    <a href="login_customer_form.php" class="btn btn-md btn-danger">Kembali</a>
                </div>
            </td>
            
        </tr>
    </table>
</page>

<?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>TanG-it</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="admin/font-awesome/css/font-awesome.css">
    
    <!-- favicon -->
    <link rel="shortcut icon" href="icon.png">

    <link rel="stylesheet" type="text/css" href="css/style1.css">
<html>
<script>
		window.print();
	</script>
</html>
