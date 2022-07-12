<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<style >
		body{
			background: url(do.jpg);
			background-size: cover;
			margin: 0; 
		}
		input{
			width: 50%;

			outline: none;
			padding:10px 11px;
			border: 1px #aaa solid;
			font-size:15px;
			background: #fff;
			display: block;
			margin: 20px auto;

		}
		#login
		{
			background: #19blca;
			color:#fff;
			border:none; 
		}
		.update_box
		{   
			margin-top: 25px;
			width: 30%;
			height: 200px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			
			left: 470px; 
			
		}
		.show_update
		{ 
			width: 30%;
			height:700px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			left: 470px; 
		}
		h1
		{
			font-color: white;
		}
		form
		{
			margin: 40px auto;
			text-align: center;
		}
		b{
           font-size: 30px;
           color: white ;
		}
		a{
			font-size: 28px;
			color: blue;
		}
		p
		{
			font-size: 25px;
			color: white;
		}
	</style>
</head>
<body>
<div class="show_update">
<h1><?php echo $_SESSION['login_user']?></h1>
<b>Patient Information</b>

<form action="up2.php" method="post">
	<input type="text" name="id" placeholder="Enter your Patient id">
	<input type="text" name="name" placeholder="Enter your Patient name">
	<input type="integer" name="odsph" placeholder="Enter your Patient odsph">
	<input type="integer" name="odcyl" placeholder="Enter your Patient odcyl">
	<input type="integer" name="ossph" placeholder="Enter your Patient ossph">
	<input type="integer" name="oscyl" placeholder="Enter your Patient oscyl">
	<input type="integer" name="odaxis" placeholder="Enter your Patient odaxis">
	<input type="integer" name="osaxis" placeholder="Enter your Patient osaxis">
	<input type="submit" name="submit" value="Submit"> 
</form>	
</div>
</body>
</html>
