<?php
	session_start();
?>

 <body>
 <header class="top-header">
			<div class="message">
				<span>Welcome to Infinity <label>flo</label>wer</span>
			</div>
			<div class="top-header-setting">
				<ul>
					<li class="dropdown">Language<i class="fa fa-angle-down"></i>
						<div class="dropdown-content">
							 <ul>
								<li><a href="#"><img src="../images/flag/en.png" alt="flag">English</a></li>
								<li><a href="#"><img src="../images/flag/fr.png" alt="flag">French</a></li>
								<li><a href="#"><img src="../images/flag/sa.png" alt="flag">Arabic</a></li>
								<li><a href="#"><img src="../images/flag/hi.png" alt="flag">Hindi</a></li>
							 </ul>
						 </div></li>
					<li class="dropdown">Currency<i class="fa fa-angle-down"></i>
						<div class="dropdown-content">
							<ul>
									<li><a href="#">$ USD</a></li>
									<li><a href="#">€ EURO</a></li>
									<li><a href="#">LL LBP</a></li>
									<li><a href="#">₹ INR</a></li>
							</ul>
					</div></li>
				</ul>
			</div>
		</header>
		<!-- nav bar header-->
<!-- -->

		<header id="navbar" class="header-nav-bar">
			<figure style="margin-left: 40px;float:left;">
				<img src="../images/infinity.jpg" width="100px" height="50px"/>
				<figcaption>
					<span><label class ="title">Flo</label>wer</span>
				</figcaption>
		</figure>
			<div class="menu-bar" style="float:left">
				<ul style='width:1000px;'>
				  <li><a href='../index.php'>Home</a></li>
				  <li><a href="category.html">Shop</a></li>
				  <li><a href="AboutUs.html">About Us</a></li>
				  <li><a href="ContactUs.html">Contact</a></li>
				  <?php
					if(isset($_SESSION['usersuid'])){
						echo "<li><a href='profile.php'>Profile Page</a></li>";
						echo "<li><a href='logout.php'>Log out</a></li>";
					}
					else{		
						echo "<li><a href='register.php'>Sign up</a></li>";
						echo "<li><a href='login.php'>Log in</a></li>";
					}
				  ?>
				</ul>
			</div>
			
		</header>
		
	