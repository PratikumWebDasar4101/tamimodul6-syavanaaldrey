<?php 
session_start();
 	$username = $_POST["username"];
 	$password = $_POST["password"];
 	if($username == "aldrey" && $password == 1234){
 		$_SESSION["username"] = $username;
 		header("Location: halamanawal.php");
 	}else{
 		header("Location: login.php");
 	}
?>