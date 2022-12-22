<?php session_start();

if(isset($_SESSION['username'])){

	//koneksi terpusat
	include "config/functions.php";
	$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
  background-image: url("img/i.jpg");
  height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
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

<title>Detail User</title>
</head>

<!-- navbar -->

<?php include 'template/navbar_cust.php'; ?>

<body class="metro">
	
    <!-- parallax -->
    <div class="rubypedia-parallax">
      <div class="container" style="text-align: center;padding-top: 160px">
        <div class="row">
        </div>
      </div>
    </div>


<?php
	$query	=mysqli_query($conn, "SELECT * FROM tb_login WHERE username='$username'");
  $tampil	=mysqli_fetch_array($query);
?>
    
<!-- ---------------------------------------- ISI TAB ------------------------------------- -->
<div class="container">
  <br><br><br>
  <div class="span6">
    <legend><p><h3><?php echo $tampil['username']; ?></h3></p></legend>
  </div>
  <div class="span6">
    <table class="table table-hover table-striped">
     <tbody>
      <tr>
        <th class="text-left">Nama Lengkap</th>
        <th class="text-left"><?php echo $tampil['username']; ?>&nbsp; <?php echo $tampil['username2']; ?></th>
      </tr>
       <tr>
         <th class="text-left">Email</th>
         <th class="text-left"><abbr title="Email tidak dapat dirubah!"><em><?php echo $tampil['email']; ?></em></abbr></th>
       </tr>
       <tr>
         <th class="text-left">Nomor Identitas</th>
         <th class="text-left"><?php echo $tampil['id']; ?></th>
       </tr>
       <tr>
         <th class="text-left">Telpon/Handphone</th>
         <th class="text-left"><em><?php echo $tampil['tlp']; ?></em></th>
       </tr>

       <tr>
         <th class="text-left">Alamat</th>
         <th class="text-left"><em><?php echo $tampil['alamat']; ?></em></th>
       </tr>
     </tbody>
   </table>
 </div>
</div>
<!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    <br />

    <!-- FOOTER -->
    <?php include 'template/ftr_cust.php'; ?>
    <!-- /FOOTER -->

    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
<?php
}else{
	session_destroy();
	header('Location:login_form.php?status=Silahkan Login');
}
?>