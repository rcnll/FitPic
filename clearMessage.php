<?php
	session_start();
	unset($_SESSION["Message"]);
	header("location:../index.php");
	exit();
?>