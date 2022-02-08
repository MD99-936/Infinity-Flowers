<?php


if(isset($_POST['submit'])){ 
		require_once 'functions.php';
		require_once 'dbhandler.php';
		
		$firstName = testInput($_POST['first-name']);
		$lastName = testInput($_POST['last-name']);
		$city = testInput($_POST['city']);
		$phoneNumber = testInput($_POST['phone']);
		$gender = testInput($_POST['gender']);
		$email = testInput($_POST['email']);
		$username = testInput($_POST['username']);
		$usercountry= testInput($_POST['country']);
		$password = testInput($_POST['password']);
		$confPassword = testInput($_POST['confirm-password']);


		if(invalidUserId($username)!==false){
			header("location: ../html/register.php?error=invaliduserid");
			exit();
		}
		
		if(passwordMatch($password,$confPassword)!==false) {
			header("location: ../html/register.php?error=passwordsdontmatch");
			exit();
		}
		if(userExist($connection,$username,$email)!== false) {
			header("location: ../html/register.php?error=usernametaken");
			exit();
		}
		
		createUser($connection,$firstName,$lastName,$city,$gender,$email,$password,$username,$usercountry);
			
}
else{ 
	header("location: ../html/register.php");
	exit();
}    