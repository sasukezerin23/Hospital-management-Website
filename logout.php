<?php
	session_start();
	session_destroy();
 
	if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"])){
		setcookie("id", '', time() - (3*60));
		setcookie("pass", '', time() - (3*60));
		setcookie("user", '', time() - (3*600));
	}
 
	header('location:index4.html');
 
?>
