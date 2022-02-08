<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "users";

$connection = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$connection){
	die("Connection Failed: ".mysqli_connect_error());
}