<?php
  include("conn.php");
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome doctor</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<header>
	<div class="nav-bar">
		<ul class="menu">
			<li><a href=""> Home </a></li>
			<li><a href="">operation</a></li>
			<li><a href="">Log out</a></li>
		</ul>
	</div>
	<div class="welcome">
		<h1>welcome doctor</h1>
		<h1><?php echo $_SESSION['login_user']?></h1>
		<<a href="v.html" class="btn">New patient </a>
		<a href="" class="btn">Old patient </a>
	</div>
</header>
</body>
</html>