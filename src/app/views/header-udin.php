<div id="header">
	<div>
		<nav> <!-- untuk link-->
			<center>
				<ul>
					<li><a href="#">Logo</a></li> <!-- ganti dengan gambar logo ya-->
					<li><a href="#">Home</a></li> <!-- # = masuk ke HOME-->
					
					<li><a href="#">Kategori Barang</a> <!-- # = masuk ke katogori barang-->
						<ul>
							<li><a href="#">Elektronik</a></li>
							<li><a href="#">Sandang</a></li>	
							<li><a href="#">Otomotif</a></li>									
						</ul>
					</li>
						
					<?php 
						//periksa apakah sedang login atau tidak
						if (session_id() == '') session_start();
				
						if (!isset($_SESSION['logged_userid'])) {
							echo '<li><a href="' . SITEURL . '/register/">Register</a></li>';
							echo '<li><a href="#login_form">Login</a></li>';
					?>
					<?php
						} else {
							echo '<li><a href="' . SITEURL . '/profile/">Profile</a></li>';
							echo '<li><a href="' . SITEURL . '/login/destroy/">Logout</a></li>';			
						}

					?>						
					<li>
						<center>
							<form id="search" action="listProduct.php">
								<input name="keyword" type="text" size="40" placeholder="Cari barang..." />
							</form>
						</center>
						
					<!--
						<center><form id="cariBarang">					
							<input type="type" placeholder="Pencarian">
						</form></center> -->
					</li>
					<li><a href="#" id="keranjang">Keranjang</a></li>	
				</ul>
			</center>
		</nav>
	</div>
</div>			

<!-- BAGIAN POP UP MESSAGE-->
<a href="#x" class="overlay" id="login_form"></a>
<div class="popup">
	<h2>Selamat Datang disitus kami</h2>
	<p>Silahkan masukan username dan password</p>
	
	<form name="loginForm" method="post" action="<?php echo SITEURL . '/login' ?>">
		<div>
			<input name="myusername" type="text" id="id" placeholder="username" />
		</div>
		
		<div>
			<input name="mypassword" type="password" id="pass" placeholder="password" />	
		</div>			
		<input type="submit" name="Submit" value="Login"/>
	</form>	
		<br>
		Belum Punya Account ? <a href="#"> DAFTAR </a>
	<a class="close" href="#close"></a>
</div>	
<!-- END HEADER-->