<?php
session_start();
require '../config/functions.php';


$query=mysqli_query($conn, "SELECT * FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%sayur%'");
$hasil=mysqli_num_rows($query);

$query=mysqli_query($conn, "SELECT * FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%buah%'");
$hasil1=mysqli_num_rows($query);

$query=mysqli_query($conn, "SELECT * FROM tbl_barang WHERE petani LIKE '%$_SESSION[username]%' AND nama LIKE '%rempah%'");
$hasil2=mysqli_num_rows($query);



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

    <!-- chart -->
    <script type="text/javascript" src="js/canvasjs.min.js"></script>



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
                            Dashboard Petani
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                    
            </div>
            <!-- /.container-fluid -->
            <br><br><br><br>
              <div class="row">
                      <div class="col-md-10">
                            <div id="chartContainer" style="height: 430px; width: 100%;">
                      </div> 
                  </div>
        </div>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

      

        <script >
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light1", // "light1", "light2", "dark1"
    exportEnabled: true,
    animationEnabled: true,
    title: {
        text: "Grafik Stock Produk" 
    },
    subtitles: [{
      text: "Pada Tanggal <?= date('Y-m-d h:i:sa') ?>"
    }],
    axisX: {
      title: "States"
    },
    data: [{
        type: "pie",
        startAngle: 25,
        toolTipContent: "<b>{label}</b>: {y}%",
        showInLegend: "true",
        legendText: "{label}",
        indexLabelFontSize: 16,
        indexLabel: "{label} - {y}%",
        dataPoints: [
        { y: <?= $hasil; ?>, label: "Sayur" },
        { y: <?= $hasil1; ?>, label: "Buah" },
        { y: <?= $hasil2 ?>, label: "Rempah" },
        ]
    }]
});
            chart.render();

        }

        var d = new Date();
        document.getElementById("demo").innerHTML = d.toUTCString();
    </script>

    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/canvasjs.min.js"></script>

        
</body>

</html>
