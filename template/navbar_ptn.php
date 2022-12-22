<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php">TanG-it</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">

				<li>
					<?php 

          if(isset($_SESSION['username'])){

            ?>
            
            <a href="profil.php" class="element place-right">Selamat datang, <?php echo "$_SESSION[username]"; ?></a>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg" style="margin-right: 10px"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
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
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li>
						<a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					</li>
					<li class="dropdown-header">Setup Konten</li>
					<li>
                        <a href="setup_sayur.php" data-toggle="collapse" data-target="#demo"> Sayuran </a>
                      
                    </li>
                    <li>
                    	<a href="setup_buah.php" data-toggle="collapse" data-target="#demo">Buah - Buahan</a>
                    	
                    </li>
					<li>
                    	<a href="setup_rempah.php" data-toggle="collapse" data-target="#demo">Rempah - Rempah</a>
                    	
                    </li>
                    <li class="dropdown-header">Setup Pembayaran</li>
                    <li>
                        <a href="transaksi.php"><i class="fa fa-money fa-fw"></i>&nbsp;Pembayaran</a>
                    </li>
					<li>
                        <a href="trans.php"><i class="fa fa-car fa-fw"></i>&nbsp;Transporter</a>
                    </li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>