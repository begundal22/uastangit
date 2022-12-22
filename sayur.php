<?php 
session_start();
require  'config/functions.php';
$tbl_barang = query("SELECT * FROM tbl_barang WHERE nama LIKE '%sayur%'");


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Tan-Git</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="admin/font-awesome/css/font-awesome.css">
    <link rel="shortcut icon" href="icon.png">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link type="text/css" rel="stylesheet" href="css/style1.css"/>

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
        margin-top: 50px;
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

    

  <!-- start: Page Title -->
  <div id="page-title">

    <div id="page-title-inner">

      <!-- start: Container -->
      <div class="container ">

        <h2><i class="fa fa-shopping-bag" style="padding-right: 10px"></i>Produk Kami</h2>

      </div>
      <!-- end: Container  -->

    </div>  

  </div>
  <!-- end: Page Title -->


  <!-- page table -->
  <a href="index.php" style="margin-left: 52px;" class="btn btn-md btn-danger">Kembali</a>
        <div class="row" style=" margin-left: 40px; margin-top: 50px;">
          <div class="col-lg-11">
           <div class="panel panel-primary">
              <div class="panel-heading">Sayuran</div>

              <div class="panel-body">
               <?php $i = 1; ?>
               <?php foreach( $tbl_barang as $row ) : ?>

                <div class="col-md-4">
                  <div class="span4">
                    <div class="icons-box">
                      <div class="title"><h3><?php echo $row['nama']; ?></h3></div>
                      <img src="img/<?php echo $row['gambar']; ?>" style="width: 100px;" />
                      
                      <div><h4 class="product-price" style="margin-top: 10px;">Rp.<?php echo number_format($row['harga']);?></h4></div>
                    <div><i class="fa fa-map-marker"></i>&nbsp;<h8><?php echo $row['alamat']; ?></h8></div><br>
          <!--  <p>
            
          </p> -->
          <div class="clear"><a href="detailproduk.php?kd=<?php echo $row['id'];?>" class="btn btn-md btn-warning">Detail</a> <a href="detailproduk.php?kd=<?php echo $row['id'];?>" class="btn btn-md btn-info">Beli &raquo;</a></div>

           </div>
      </div>        
        
    </div>
          

        <?php $i++; ?>
      <?php endforeach; ?>
              </div> 
            </div>
          </div>
        </div>
        
        <!-- go to top -->
    <span class="to_top"><i class="fa fa-arrow-up"></i></span>
    <!-- end go to top -->


      <!-- FOOTER -->
      <?php include 'template/ftr_cust.php'; ?>
    <!-- /FOOTER -->
 
        


      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>

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
  </body>
</html>