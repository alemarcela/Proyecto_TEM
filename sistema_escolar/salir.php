<?php  
	session_start();
	unset($_SESSION["xswA/:azb"]);
	session_destroy();
	header('location: login.php')
?>