<?php
	session_start();
	if(!isset($_SESSION['username'])) {  //jika sessionnya bukan username maka akan dikembalikan kehalaman index.php
		header("location:index.php");
	}
?>