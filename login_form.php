<?php 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TanG-it</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="shortcut icon" href="icon.png">
</head>
<body>
  <!-- container -->
  <div class="container" style="margin-top: 150px;">
    <!-- row -->
    <div class="row">
      <!--col  -->
      <div class="col-md-4 col-md-offset-4">
        <!-- panel default -->
        <div class="panel panel-default">
          <!-- panel body -->
          <div class="panel-body">
              <p style="color: white";>Welcome to TanG-it</p>
            <form action="" method="post">
              <!-- form group -->
              <div class="form-group">
              <a href="admin/index.php"> <button type="button" class="btn btn-primary btn-lg btn-block">Login Admin</button></a>
              </div>
              <div class="form-group">
              <a href="petani/index.php"> <button type="button" class="btn btn-primary btn-lg btn-block">Login Petani</button></a>
              </div>
              <div class="form-group">
              <a href="login_customer_form.php"> <button type="button" class="btn btn-primary btn-lg btn-block">Login Customer</button></a>
              </div>
              
            </form>
          </div>
          <!-- gambar kunci -->
          <div class="lock"><i class="fa fa-user fa-3x"></i></div>
          <!-- label login form -->
          <div class="label">Login</div> 
          <div class="label2">login</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>