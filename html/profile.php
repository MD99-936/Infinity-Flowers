<?php 
	session_start();
?>

<?php
		require_once '../includes/functions.php';
		require_once '../includes/dbhandler.php';
?>



<!DOCTYPE html>
<html>
 <head> 
	<meta charset="utf-8">
    <title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="../css/nav-bar.css">
	<link rel="stylesheet" type="text/css" href="../css/profile.css">
 </head>   
<body>
<div class="header">
	<figure>
		<img src="../images/infinity.jpg"/>
		<figcaption>
			<span><label class ="title">Flo</label>wer</span>
		</figcaption>
	</figure>
		<div class="menu-bar">
			<ul>
				  <li><a href='../index.html'>Home</a></li>
				  <li><a href="category.html">Shop</a></li>
				  <li><a href="AboutUs.html">About Us</a></li>
				  <li><a href="ContactUs.html">Contact</a></li>
			</ul>
		</div>
</div>
<div class="profile">
	<img src="../images/avatar.png" alt="Avatar" title="avatar">
	
</div>
<div class="user_detail">
	<h2>User details</h2>
	<p>
		<label>Username</label>
		<?php echo $_SESSION["usersuid"];?>
	</p>
	<p>
		<label>Email address</label>
		<?php echo $_SESSION["usersemail"];?>
	</p>
	<p>
		<label>City</label>
		<?php echo $_SESSION["usersid"];?>
	</p>
	<p>
		<label></label>
	</p>
</div>
<ul>
</ul>
</body>
</html>

  