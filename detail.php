<?php 
require  'config/functions.php';

if (!isset($_SESSION)) {
        session_start();
    } 


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>TanG-it</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="admin/font-awesome/css/font-awesome.css">
    
    <!-- favicon -->
    <link rel="shortcut icon" href="icon.png">

    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <style>
      /* Page Title
=================================================================== */

#page-title-icon {
  background: #fff;
  height: 48px;
  width: 48px;
  -webkit-border-radius: 50em;
  -moz-border-radius: 50em;
  border-radius: 50em;
  padding: 4px;
  margin-left: -16px;
  margin-top: -18px;
  position: relative;
  z-index: 10;
  float: left;
  
}

#page-title-icon-inner {
  background: #ffd35f;
  height: 48px;
  width: 48px;
  -webkit-border-radius: 50em;
  -moz-border-radius: 50em;
  border-radius: 50em;
  margin-left: -52px;
  margin-top: -14px;
  position: relative;
  z-index: 30;
  float: left;
}

#page-title {
  background: url(img/syr.png);
  display: block;
  margin-top: 40px;
  margin-bottom: 25px;
  position: relative;
  z-index: 20;
  border-bottom: 5px solid #f6f6f6;
}

#page-title-inner {
  background: rgba(0, 0, 0, 0.7);
  -webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
  -moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
  box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
  padding: 10px;
}

#page-title i {
  margin: -6px 2px -5px -18px;
  padding: 0px;
}

#page-title h2 {
  display: inline-block;
  font-family: "Boogaloo" !important;
  color: #fff;
  padding: 2px 20px 5px 20px;
  font-size: 30px;
}

#page-title span {
  color: #555;
}

    /*FOOTER*/

     .newsletter-follow {
      text-align: center;
      margin-top: -20px;
      margin-left: -80px;
    }

     .newsletter-follow li {
      display: inline-block;
      margin-right: 5px;
    }

    .newsletter-follow li:last-child {
      margin-right: 0px;
    }

     .newsletter-follow li a {
      position: relative;
      display: block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border: 1px solid #15161D;
      background-color: #E4E7ED;
      -webkit-transition: 0.2s all;
      transition: 0.2s all;
    }


     .newsletter-follow li a:hover,  .newsletter-follow li a:focus {
      background-color: #15161D;
      color: #D10024;
    }
    </style>  

   
  </head>
  <body>
    <!-- navbar -->

    <?php include 'template/navbar_cust.php'; ?>
    
      <!-- start: Table -->
            <!-- start: Page Title -->
  <div id="page-title">

    <div id="page-title-inner">

      <!-- start: Container -->
      <div class="container ">

        <h2><i class="fa fa-shopping-cart" style="padding-right: 10px"></i>Detail Keranjang Belanja</h2>

      </div>
      <!-- end: Container  -->

    </div>  

  </div>
  <!-- end: Page Title -->


<!-- start: Container -->
    <div class="container">

      <!-- start: Table -->
<table class="table table-hover table-condensed">
<tr>
          <th><center>No Pembelian</center></th>
                    <th><center>Kode Barang</center></th>
          <th><center>Nama Barang</center></th>
          <th><center>Jumlah</center></th>
          <th><center>Harga Satuan</center></th>
          <th><center>Sub Total</center></th>
          <th><center>Opsi</center></th>
        </tr>
          <?php
        //MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($conn, "SELECT * from tbl_barang where id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            ?>
                <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $data['id']; ?></center></td>
                <td><center><?php echo $data['nama']; ?></center></td>
                <td><center>Rp.<?php echo number_format($data['harga']); ?></center></td>
                <td><center><?php echo number_format($val); ?></center></td>
                <td><center>Rp.<?php echo number_format($jumlah_harga); ?></center></td>
                <td>
                  <center>
                    <a href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-md btn-success"><i class="fa fa-plus" style="padding-right: 10px"></i>
                    Tambah
                    </a> 
                    <a href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-md btn-warning"><i class="fa fa-minus" style="padding-right: 10px"></i>Kurang</a> 
                    <a href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-md btn-danger"><i class="fa fa-trash-o" style="padding-right: 10px"></i>Hapus</a>
                  </center>
                </td>
                </tr>
                
          <?php
                    //mysql_free_result($query);      
            }
              //$total += $sub;
            }?>  
                         <?php
        if($total == 0){
          echo '<tr><td colspan="5" align="center">Ups, Keranjang kosong!</td></tr></table>';
          echo '<p><div align="right">
            <a href="index.php" class="btn btn-info btn-lg">&laquo; Continue Shopping</a>
            </div></p>';
        } elseif (!isset($_SESSION['username'])) {
            echo "<script>
                      alert('silahkan login');
                      document.location.href = 'login_form.php';
                  </script>";
        } else {
          echo '
            <tr style="background-color: #DDD;"><td colspan="4" align="left"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
            <p><div align="right">
            <a href="index.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
            <a href="checkout.php?total='.$total.'" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
            </div></p>
          ';
        }
        ?>

</table>
      
        
      <!-- end: Table -->

    </div>
    <!-- end: Container -->

    

    <!-- FOOTER -->
    <?php include 'template/ftr_cust.php'; ?>
    <!-- /FOOTER -->


  </body>  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>