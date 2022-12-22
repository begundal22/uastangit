<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" >TanG-it</a>
      <a class="navbar-brand" href="index.php">Home</a>
      <a class="navbar-brand" href="info.php">Info Harga</a>
      <a class="navbar-brand" href="berita.php">Berita</a>
      <a class="navbar-brand" href="trans.php">Transporter</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li>
            <a href="javascript:void(0);" id="jwpopupLink">
                <i class="fa fa-shopping-cart" style="padding-right: 10px"></i>
                Cart

                <?php 
                if(!empty($_SESSION["items"])):
                  $count = $_SESSION["items"];

                  ?>

                <span class="badge" style="margin-left: 10px">
                  <?= count($count); ?>
                    
                  </span>

               <?php endif; ?>

            </a>
          
          </li>
          <li id="show_login">
          <?php 

          if(isset($_SESSION['username'])){

            ?>
            
            <a href="profil.php" class="element place-right">Selamat datang, <?php echo "$_SESSION[username]"; ?></a>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog fa-lg" style="margin-right: 10px"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                                
               <li><a href="profil.php"><i class="fa fa-user" style="padding-right: 10px"></i>Profil</a></li>

                <li><a href="logout.php"><i class="fa fa-sign-out" style="padding-right: 10px"></i>Logout</a></li>
              </ul>
            </li>

            <?php
          }else{
            ?>
            <span class="element-divider"></span>
            <a href="login_form.php"><i class="fa fa-user" style="padding-right: 10px"></i>Login</a>
            <?php
          }
          ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>