<?php

if(isset($_POST['submit'])){ 
		
		require_once 'functions.php';
		
		$username = testInput($_POST['userUid']);
		$pwd = testInput($_POST['pass']);
		
		require_once 'dbhandler.php';
		
		loginUser($connection,$username,$pwd);
			
}
else{
	header("location: ../html/login.php?error=Failed");
	exit();
}