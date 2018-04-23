<?php
	session_start();
	require_once("config.php");

	$Email = $_POST["Email"];
	$Password = md5($_POST["Password"]);

	print "Login($Email)($Password)<br>";

	$con = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);
	if (!$con) {
		$_SESSION["Message"] = "Connection Failed: ".mysqli_connect_error();
		$_SESSION["RegState"] =-1;
		exit();
	}
	$query = "select * from Users where Email='$Email' and Password='$Password';";
	$status = mysqli_query($con, $query);
	if ($status) { 
		$rows = mysqli_num_rows($status);
		if ($rows == 1) { 
			$_SESSION["RegState"] = 4; 
			$_SESSION["Message"] = "Login Success.";
			header("Location: service.php"); 
			exit();
		} 
		$_SESSION["RegState"] = -6;
		$_SESSION["Message"] = "Either Email or Password not matching.";
		header("Location: ../index.php"); 
		die();           
	}           
	$_SESSION["RegState"] = -4;           
	$_SESSION["Message"] = "Database access failure: ".mysqli_error($con);           
	header("Location:  ../index.php"); 
	die();

?>
