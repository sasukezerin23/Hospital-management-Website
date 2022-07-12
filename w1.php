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
			<li><a href="op.php">operation</a></li>
		     <li><a href="op_display.php">operation display</a></li>
			<li><a href="display.php">display</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
	</div>
	<div class="welcome">
		<h1>welcome doctor</h1>
		<h1><?php echo $_SESSION['login_user']?></h1>
		<a href="insert_patient.php" class="btn">New patient </a>
		<a href="updatep.php" class="btn">Old patient </a><br>

	</div>
</header>
</body>
</html>