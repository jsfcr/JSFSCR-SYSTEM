<?php 
	include '../config.php';
		session_destroy();
		unset($_SESSION['log']);
		session_start();
		$_SESSION['log']=false;
		header('location:'. dmn );
	

 ?>