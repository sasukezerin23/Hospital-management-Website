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
			<li><a href="table/index.php"> ask question </a></li>
			<li><a href="search-form.php">Insert</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
	</div>
	<div class="welcome">
		<h1>welcome Admin</h1>
		<h1><?php echo $_SESSION['login_user'];?></h1>
		<a href="login2.html" class="btn">INSERT</a>
		<a href="login4.html" class="btn">DELETE</a><br>
		<br>
		<br>
	</div>
</header>
</body>
</html>