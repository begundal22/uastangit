<?php  
//export.php  
$connect = mysqli_connect("tang-it.cltwmwlnm2so.us-east-1.rds.amazonaws.com", "root", "", "gayadistro");
$output = '';
if(isset($_POST["export"]))
{
 $result = mysqli_query($connect, "SELECT * FROM tbl_barang WHERE nama LIKE '%tas%'");
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <table class="table" bordered="1">  
  <tr>  
  <th>No</th>
  <th>Nama</th>  
  <th>Harga</th>  
  <th>Stock</th>  
  <th>keterangan</th>
  </tr>
  ';
  $no = 1;
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <tr>
   <td>'.$no++.'</td>  
   <td>'.$row["nama"].'</td>  
   <td>'.$row["harga"].'</td>  
   <td>'.$row["stock"].'</td>  
   <td>'.$row["keterangan"].'</td>  
   </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=tas.xls');
  echo $output;
 }
}
?>