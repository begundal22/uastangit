<?php 
require  'config/functions.php';
$tb_trans = query("SELECT * FROM tb_trans ORDER BY id");

// jika tombol cari ditekan
if (isset($_POST["cari1"])) {
	$tb_trans = cari1($_POST["keyword"]);
}
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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TanG-it</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>


    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style1.css"/>

    <link rel="stylesheet" type="text/css" href="admin/font-awesome/css/font-awesome.css">
   

   <link rel="stylesheet" type="text/css" href="css/style.css">

   <link rel="shortcut icon" href="icon.png">
   <style>

   /*parallax*/
     .rubypedia-parallax { 
  background-image: url("img/ss.jpg");
  height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }


  /*label baru*/

 .product-label {
  position: absolute;
  top: 15px;
  right: 15px;
}

 .product-label>span {
  border: 2px solid;
  padding: 2px 10px;
  font-size: 12px;
}

 .product-label>span.new {
  background-color: #CAD100;
  border-color: #CAD100;
  color: #FFF;
}



/*popup cart*/
/* jwpopup box style */
.jwpopup {
    display: none;
    position: fixed;
    z-index: 10;
    padding-top: 110px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7);
}
.jwpopup-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    max-width: 500px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

.jwpopup-head {
  font-size: 5px;
    padding: 1px 16px;
    color: white;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}
.jwpopup-main {
  margin-left: 50px;
  margin-right: 50px;
  }
.jwpopup-foot {
  font-size: 12px;
    padding: .5px 16px;
    color: #ffffff;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}

/* tambahkan efek animasi */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* style untuk tombol close */
.close {
  margin-top: 7px;
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover, .close:focus {
    color: #999999;
    text-decoration: none;
    cursor: pointer;
}

  /*sayur*/
    .sayur{
      margin-top: -15%;
      margin-bottom: -140px;
    }

    .sayur hr{
      width: 250px;
      border-top: 3px solid #999;
    }


    /*buah*/
    .buah{
      margin-top: 15px;
    }

    .buah hr{
      width: 250px;
      border-top: 3px solid #999;
    }

    /*rempah*/
    .rempah{
      margin-top: 15px;
    }

    .rempah hr{
      width: 250px;
      border-top: 3px solid #999;
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

    /*go to top*/
    .to_top{
    display: inline-block;
    padding: 8px 12px;
    border: 1px solid #000;
    position: fixed;
    right: 10px;
    background-color: red;
    color: #fff;
    cursor: pointer;
    bottom: 10px;
    font-weight: bold;
}
   </style>
  </head>
  <body>

    <!-- navbar -->
    <?php include 'template/navbar_cust.php'; ?>
    <!-- /navbar -->

    <!-- parallax -->
    <div class="rubypedia-parallax">
      <div class="container" style="text-align: center;padding-top: 160px">
        <div class="row">
          <span class="border" style="margin-left: 300px; color: white;padding: 18px;font-weight: bold; font-family: verdana; font-size: 25px;letter-spacing: 5px;">+</span><br>
          <span class="border" style="font-weight: bold; color: white; padding: 18px;font-size: 60px;letter-spacing: 10px;">TanG-it</span><br><br><br>
          <span class="border" style="background-color: #111;color: #fff;padding: 18px;font-size: 25px;letter-spacing: 10px;">Berkualitas dan Murah</span>
        </div>
      </div>
    </div>

    <div class="bs-callout bs-callout-primary">
      <h4>TanG-it</h4>
      <p>
          Kami adalah penyedia hasil pertanian online terlengkap dan terpercaya, dengan harga terjangkau anda sudah dapat memiliki produk kami.
        </p>
      <p>
      Selamat Berbelanja Customer..
      </p>
    </div>


    


    <!-- Home -->
    <section class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center">Transporter</h2>
            <hr>
          </div>
        </div>
        <br>

        <form method="post" action="" class="form-inline" style="position: absolute;left: 48%;top: 98%;margin-left: -200px;">
										<div class="form-group">
											<input type="text" name="keyword" class="form-control" placeholder="Masukkan Pencarian..." autofocus autocomplete="off"  size="50" /> 
											<button type="submit" name="cari1" class="btn btn-primary">Cari...</button>
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
                  <br><br>


        <?php $i = 1; ?>
        <?php foreach( $tb_trans as $row ) : ?>

      <div class="col-md-4">
          <div class="span4">
            <div class="icons-box">
              <div class="title"><h3><?php echo $row['nama']; ?></h3></div>
              <img src="img/user.png" width="200px" height="180px"/>
              <div><h4 class="product-price" style="margin-top: 10px;"><?php echo $row['dt']; ?></h4></div>
           <br>
          <div class="clear"><a href="detailtrans.php?kd=<?php echo $row['id'];?>" class="btn btn-md btn-warning">Detail</a>
          <a href="detailproduk.php?kd=<?php echo $row['id'];?>" class="btn btn-md btn-info">Beli &raquo;</a></div>
          
        </div>
      </div>        
        
    </div>
         

        
        

        <?php $i++; ?>
      <?php endforeach; ?>


       
      </div>
    </section>



    
    <br>
    <!-- /SECTION -->


     <!-- --------------------------------------------------Akhir Header-------------------------------------------------- -->
    <!-- trigger the jwpopup -->
    <!-- jwpopup box -->
    <div id="jwpopupBox" class="jwpopup">
      <!-- jwpopup content -->
      <div class="jwpopup-content">
        <div class="jwpopup-head">
          <span class="close">×</span>
          <p style="font-size:25px;">Keranjang Belanja</p>
        </div>
        <table class="table table-hover table-condensed table-bordered">
          <tr>
            <th><center>No</center></th>
            <th><center>Item</center></th>
            <th><center>Quantity</center></th>
            <th><center>Sub Total</center></th>
          </tr>
                    <?php
        //MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($conn, "SELECT id, nama, harga FROM tbl_barang WHERE id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            ?>
                <tr>
                <td><center><?php echo $no ++; ?></center></td>
                <td><center><?php echo $data['nama']; ?></center></td>
                <td><center><?php echo number_format($val); ?> Pcs</center></td>
                <td><center>Rp. <?php echo number_format($jumlah_harga); ?></center></td>
                </tr>
                
          <?php
                    //mysql_free_result($query);      
            }
              //$total += $sub;
            }?>
                        <?php
        if($total == 0){ ?>
          <td colspan="4" align="center"><?php echo "Keranjang Kosong!"; ?></td>
        <?php } else { ?>
          
                        <td colspan="4" style="font-size: 18px;"><b><div class="pull-right">Total Belanja Anda : Rp. <?php echo number_format($total); ?>,- </div> </b></td>
          
      <?php }
        ?>
                </table> 
                <p><div align="right">
            <a href="detail.php" class="btn btn-primary">&raquo Details Keranjang &laquo</a>
            </div></p>
            </div>

        </div>
      </div>
    </div>
    <!-- end popup cart -->

    <!-- go to top -->
    <span class="to_top"><i class="fa fa-arrow-up"></i></span>
    <!-- end go to top -->

 <!-- FOOTER -->
<?php include 'template/ftr_cust.php'; ?>
    <!-- /FOOTER -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>

    <script>
      // untuk mendapatkan jwpopup
      var jwpopup = document.getElementById('jwpopupBox');

      // untuk mendapatkan link untuk membuka jwpopup
      var mpLink = document.getElementById("jwpopupLink");

      // untuk mendapatkan aksi elemen close
      var close = document.getElementsByClassName("close")[0];

      // membuka jwpopup ketika link di klik
      mpLink.onclick = function() {
        jwpopup.style.display = "block";
      }

      // membuka jwpopup ketika elemen di klik
      close.onclick = function() {
        jwpopup.style.display = "none";
      }

      // membuka jwpopup ketika user melakukan klik diluar area popup
      window.onclick = function(event) {
        if (event.target == jwpopup) {
          jwpopup.style.display = "none";
        }
      }
    </script>


    <!-- scroll top -->

    <script type="text/javascript">
      $(function(){
        $('.to_top').hide().on('click', function(){
          $('body,html').animate({scrollTop : 0}, 800);
        });
        $(window).on('scroll', function(){
          if($(this).scrollTop() > 500){
            $('.to_top').show();
          }else{
            $('.to_top').hide();
          }
        });
      });
    </script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>