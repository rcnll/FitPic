<?php
	session_start();
	require_once("config.php");
	$Email = $_GET["Email"];
	$Acode = $_GET["Acode"];
	print "Inside authenticate.php. Got ($Email) ($Acode) <br>";
	//  connect to database
	//Connectin'
	$con = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);
	if (!$con) {
		die("Connetction failed".mysqli_connect_error());
	}print "database connected <br>";
	//Queryin'
	$query = "SELECT * from Users where Email='$Email' and Acode = '$Acode';";
	$result = mysqli_query($con, $query);
	if ($result) {
		if (mysqli_num_rows($result) ==1) {
	//build a query SELECT * from Users where Email = '$Email' and Acode = '$Acode'
	// Run and check results
		$Acode = rand();
		$Adatetime = date("Y-m-d H:i:s");
		$query = "UPDATE Users set Status = 1, Acode = '$Acode', ".
			"Adatetime='$Adatetime' where Email = '$Email';";
		}
		
	}	
?>