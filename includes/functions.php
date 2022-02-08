<?php

function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function invalidUserId($username){
	$result;
	if(!preg_match( "/^[a-zA-Z0-9]*$/",$username)){
		$result=true;
	}
	else{
		$result=false;
	}
	return $result;
}

function passwordMatch($password,$confPassword){
	$result;
	if($password!==$confPassword){
		$result=true;
	}
	else{
		$result=false;
	}
	return $result;
} 

function userExist($connection,$username,$email){   
	
	$sql = "SELECT * FROM users_details WHERE usersUsername = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($connection);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: ../html/register.php?error=stmtfailed");
			exit();
	}
	
	mysqli_stmt_bind_param($stmt,"ss",$username,$email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		return false;
	}
	
	mysqli_stmt_close($stmt);
}

function createUser($connection,$firstName,$lastName,$city,$gender,$email,$password,$username,$usercountry){
	
	$sql = "INSERT INTO users_details (usersFirstName,usersLastName,usersCity,usersGender,usersCountry,usersEmail,usersPassword,usersUsername) VALUES (?,?,?,?,?,?,?,?);";
	$stmt = mysqli_stmt_init($connection);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: ../html/register.php?error=stmtfailed");
			exit();
	}
	
	$hashPassword = password_hash($password,PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt,"ssssssss",$firstName,$lastName,$city,$gender,$usercountry,$email,$hashPassword,$username);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("location: ../html/register.php?error=none");
	exit();
	
}

function loginUser($connection,$username,$pass){
	
	$userExists = userExist($connection,$username,$username);
	
	if($userExists === false){
		header("location: ../html/login.php?error=wronguser");
		exit();
	}

	$passHashed = $userExists["usersPassword"];
	$checkPwd = password_verify($pass, $passHashed);
	
	if($checkPwd === false){
		header("location: ../html/login.php?error=wrongpassword");
		exit();
	}
	else if($checkPwd === true){
		
		session_start();
		$_SESSION["usersid"] = $userExists["usersId"];
		$_SESSION["usersuid"] = $userExists["usersUsername"];
		$_SESSION["userfname"] = $userExists["usersFirstName"];
		$_SESSION["userlname"] = $userExists["usersLastNamerstName"];
		$_SESSION["usersemail"] = $userExists["usersEmail"];
		$_SESSION["userscity"] = $userExists["usersCity"];
		
		header("location: ../index.php?error=done");
		exit();
	}
}



