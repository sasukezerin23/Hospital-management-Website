<!DOCTYPE html>
<?php
session_start();
$d='';
$p='';
$s='';
$v='';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
$u="admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
$myid=mysqli_real_escape_string($conn,$_POST['id']); 
$sql = "SELECT * FROM $u WHERE id ='$myid'";
$result = mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {  
$p=$row["name"];
$s=$row["id"];
$v=$row["passcode"];
    }
//}
 $_SESSION['id_admin'] = $myid;    
mysqli_close($conn);
}
?>
<html>
<head>
	<title>login</title>
	<style >
		body{
			background: url(f.jpg);
			background-size: cover;
			margin: 0; 
		}
		input{
			width: 70%;

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
		.delete
		{
			width: 30%;
			height: 450px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			top: 80px;
			left: 200px; 
		}
		.show
		{
			width: 30%;
			height: 450px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			top: 80px;
			left: 800px; 
		}
		form
		{
			margin: 40px auto;
			text-align: center;
		}
		b{
           font-size: 25px;
           color: #fff ;
		}
		a{
			font-size: 28px;
			color: blue;
		}
		h1
		{   
			margin-left: 20px;
			font-color: white;
			color: white;
			font-size: 40px;
			font-family: sans-serif;
		}
    button
   	{
   	 background:white;
   	 margin-top: 30px;
   	 margin-right:40px; 
     width: 90px;
     height: 45px;
     text-align:center;
     font-size:30px;
     border-radius: 8px;
     color: black;
   	}
	</style>
</head>
<body>
	<h1><?php echo $_SESSION['login_user'];?></h1>
<div class="delete">
<form action="" method="post">
	<h1>DELETE</h1>
	<input type="integer" name="id" placeholder="Enter your id">
	<input type="submit" name="submit" value="SEARCH">
	
	
</form>
<p align="right"><a href="admin.php"><button>Back</button></a></p>
</div>
<div class="show">
<form action="delete.php" method="post">
	<h1>DELETE</h1>
	<p><?php echo $p;?></p>
	<p><?php echo $s;?></p>
	<p><?php echo $v;?></p>
	<input type="submit" name="submit" value="DELETE">
	
	
</form>

</div>
</body>
</html>