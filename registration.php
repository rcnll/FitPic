<?php
	session_start();
	//data  credz
	require_once("config.php");
	$_SESSION["RegState"] = 0;
	$_SESSION["RegState"] = "";
	
	//get web data and insert into database
	$Email = $_GET["Email"];
	print "Inside of PHP, Mail for ($Email) <br>"; 
	//Connecting
	$con = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);
	if (!$con) {
		$_SESSION["Message"] = "Connection Failure".mysqli_connect_error();
		$_SESSION["RegState"] = -1;
		header("location: ../index.php");
		exit();
	}
	print "database connected <br>";
	//Queryin'
	$Acode = rand();
	$Rdatetime = date("Y-m-d h:i:s");
	$query = "INSERT into Users(Email,Status,Acode,Rdatetime) VALUES ('$Email',0,'$Acode','$Rdatetime');"; 
	$result = mysqli_query($con, $query);
	if (!$result) {
		die("insert failed. ".mysqli_error($con));
	} print "registration complete. <br>";
	//Emailing
	$msg = "Please click the link to activate your account: ".
	"http://cis-linux2.temple.edu/~tuf43998/lab2/php/authenticate.php?Email=$Email&Acode=$Acode";
	$to = $Email;
	$subject = "Wlcome to Eric's lab for 2305";
	$headers = "From:tuf43998@temple.edu" . "\r\n".
		"CC:tuf43998@temple.edu";
	mail($to,$subject,$msg,$headers);
	//Reporting back and sending
	$_SESSION["RegState"] = 2;
	$_SESSION["message"] = "email sent"
	header("location:../index.php");
	exit();
?>