<?php
  include("conn.php");
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome register</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<header>
	<div class="nav-bar">
		<ul class="menu">
			<li><a href=""> Home </a></li>
			<li><a href="search-form.php">Insert</a></li>
			<li><a href="register_display.php">display</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
	</div>
	<div class="welcome">
		<h1>welcome register</h1>
		<h1><?php echo $_SESSION['login_user']?></h1>

	</div>
</header>
</body>
</html>