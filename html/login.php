<!DOCTYPE html>
<html>
 <head>    
    <title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="../css/Login.css">
	<link rel="stylesheet" type="text/css" href="../css/nav-bar.css">
	<link rel="stylesheet" href="../css/styles-2.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../css/Footer.css">
	<script src="../js/shop.js" type="text/javascript"></script>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	 <style>
	 .error{
		color: red;
		}
	 .login{
		 color:red;
	 }
	 </style>
 </head>    
 <body>
 
 <?php
	include_once "header.php";
?>
 
 <?php
		$usernameError =  $passwordError = $stmError = "";
		if(isset($_GET['error'])){
			if($_GET['error']== 'wronguser'){
				$usernameError = "*Incorrect Username";
			}
			else if($_GET['error']== 'wrongpassword'){
				$passwordError = "*Incorrect Password";
			}
			else if($_GET['error']== 'done'){
				$user = $_SESSION['useruid']; 
			}
		}
?>
 
 <div class="sub-header">
        <div class="centered">
            <h1>Login</h1>
            <p class="directory"><a href="Home.html"><i class="fa fa-home"></a></i>/  <span>Login</span></p>
        </div>
 </div>
 
 
 <div id="we">
     <div class="loginbox">
        <img src="../images/redavatar.png" class="avatar">
         <h1>Login Here</h1>
         <form method="POST" action="../includes/login_inc.php" >
             <p><label class="login" for="userId">Username or Email</label></p> 
             <input type="text" id="userId" name="userUid" placeholder="Username....." required>
             <p><label class="login" for="pass">Password</label></p>
            <input type="password" id="pass" name="pass" placeholder="***********" required>
            <input type="submit" name="submit" value="Login"> 
			<p>
				<a href="#">Lost Your Password?</a><br>
				<a href="register.php">Don't Have an Account? Sign Up For Free.</a>
			</p>
			<span class="error"><?php echo $usernameError;?></span>
			<span class="error"><?php echo $passwordError;?></span>
			
         </form>     
     </div>
</div>
 

<?php
	include_once 'footer.php';
?> 