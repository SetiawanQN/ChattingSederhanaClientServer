<?php
	session_start();
	if(!isset($_SESSION['administrator'])) {
		header("location:../index.php");
	}
?>