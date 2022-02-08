<!DOCTYPE html>
<html>
 <head> 
	<meta charset="utf-8">
    <title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<link rel="stylesheet" type="text/css" href="../css/nav-bar.css">
	<link rel="stylesheet" type="text/css" href="../css/Footer.css"
	<link rel="stylesheet" href="../css/styles-2.css" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		.error{
			color:red;
			font-size:12px;
			left: 10px;
			position: relative;
			top: -15px;
		}
	</style>
 </head>   
 
<?php
	include_once "header.php";
?>

<?php
		$usernameError = $userError = $passwordError = $stmError = "";
		if(isset($_GET['error'])){
			if($_GET['error']== 'invaliduserid'){
				$usernameError = "*Invalid username";
			}
			else if($_GET['error']== 'usernametaken'){
				$userError = "*Username already taken";
			}
			else if($_GET['error']== 'passwordsdontmatch'){
				$passwordError = "*Password doesn't match";
			}
			else if($_GET['error']== 'stmtfailed'){
				$stmError = "Something went wrong, try again";
			}
			else if($_GET['error']== 'none'){
				echo "<script>alert('You have signed up!')</script>";
			}	
		}
?>

	<div class="sub-header">
			<div class="centered">

				<h1>Register Here</h1>
				<p class="directory"><a href="Home.html"><i class="fa fa-home"></a></i>/  <span>SignUp</span></p>
			</div>
	</div>
  <div class="signupbox">
	<img src="../images/icon-90.png" title="register" alt="icon" />
    <h1>SignUp Here</h1>
	<form action="../includes/signup.php" method="POST" >
		<fieldset>
			<legend>Personal Information</legend>
			<div class="form-item odd">
				<label for="fname" class="subTitle">First Name</label>
				<input type="text" id="fname" name="first-name" placeholder="First Name" required />
			</div>
			
			<div class="form-item even">
				<label for="lname" class="subTitle">Last Name</label>
				<input type="text" id="lname" name="last-name" placeholder="Last Name" required />
			</div>
			
			<div class="form-item odd">
				<label for="city" class="subTitle"> City</label>
				<input type="text" id="city" name="city" placeholder="Enter your city" required />
			</div>
			
			<div class="form-item even">
				<label for="phone-number" class="subTitle">Phone Number</label>
				<input type="tel" id="phone-number" name="phone" placeholder="(###)-##-######"   pattern="[0-9]{3}-[0-9]{2}-[0-9]{6}" required  />
			</div>
			
			<div class="form-item even" >
			<label class="subTitle">Country</label>
				<select name="country">
				<option  disabled selected>Select Country</option>
				<option value="LB">Lebanon</option>
				<option value="TR">Turkya</option>
				<option value="US">United States of America</option>
				<option value="UK">United Kingdom</option>
				<option value="SR">Syria</option>
				<option value="EG">Egypt</option>
				</select>
			</div>
			
			<div class="form-item odd ">
				<label class="subTitle">Gender</label>
				<input type="radio" name="gender" id="male" value="male" required /> <label for="male" class="gender">Male</label>
				<input type="radio" name="gender" id="female" value="female" required /> <label for="female" class="gender">Female</label>
			</div>
			
		</fieldset>
		
		<fieldset>
			<legend>Create Your Account</legend>
			<div class="form-item odd">
					<label for="mail" class="subTitle">Email</label>
					<input type="email" id="mail" name="email" placeholder="example@domain.com" required />
				</div>
				<div class="form-item even">
					<label for="uname" class="subTitle">Username</label>
					<input type="text" id="uname" name="username" required placeholder="Usename..." />
					<span class="error"><?php echo $userError;?></span>
					<span class="error"><?php echo $usernameError;?></span>
				</div>
				
				<div class="form-item odd">
					<label for="pass" class="subTitle">Password</label>
					<input type="password" id="pass" name="password" required placeholder=" *********" />
				</div>
				<div class="form-item even">
					<label for="confpass" class="subTitle">Confirm Password</label>
					<input type="password" id="confpass" name="confirm-password" required placeholder="Confirm Password" />
					<span class="error"><?php echo $passwordError;?></span>
				</div>
		 </fieldset>
		 
		 <input type="checkbox" name="checkbox" required> <label for="male" class="gender">I agree to the <a href="https://policies.google.com/terms?hl=en-US">Terms of User</a></label>
		 
		<div class="form-action clearFix">
			<input type="submit" name="submit" value="Register" />
			<input type="button" onclick="" value="Clear" />
		</div> 
	</form>
 </div> 

<!-- We just inlude the footer.php -->
<?php
	include_once 'footer.php';
?>
   