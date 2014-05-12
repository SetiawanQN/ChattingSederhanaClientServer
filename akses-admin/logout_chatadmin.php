<?php
	session_start();
	
	$user = $_SESSION['administrator'];
	session_destroy();
	header('location:index.php');
?>