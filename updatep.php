
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
		{   margin-top: 40px;
			width: 30%;
			height: 200px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			top: 80px;
			left: 470px; 
			margin-bottom: 20px;
		}
		.show_update
		{   margin-top: 300px;
			width: 30%;
			height:700px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			top: 80px;
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
	</style>
</head>
<body>
<div class="update_box">
<form action="" method="post">
	<b>Old Patient</b>
	<input type="text" name="id" placeholder="Enter your id">
	<input type="submit" name="submit" value="update">

</form>
</div>
</body>
</html>
<?php
session_start();
$p='';
$s='';
$r='';
$t='';
$f='';
$r1='';
$t1='';
$f1='';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
$u=$_SESSION['login_user'];
//$u="zerin";
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
$r=$row["od_sph"];
$t=$row["od_cyl"];
$f=$row["od_axis"];
$r1=$row["os_sph"];
$t1=$row["os_cyl"];
$f1=$row["os_axis"];
 $_SESSION['id'] = $myid;
 $_SESSION['name'] = $p;
 $_SESSION['ods'] = $r;
 $_SESSION['odc'] = $t;
 $_SESSION['oss'] = $r1;
 $_SESSION['osc'] = $t1;
 $_SESSION['odx'] = $f;
 $_SESSION['osx'] = $f1;
    }
//}
mysqli_close($conn);
}
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
			height:580px;
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
<b>Old Patient Information</b>
<p><?php echo $p;?></p>
<form action="up1.php" method="POST">
	<input type="text" name="odsph" placeholder="<?php echo $r;?>">
	<input type="text" name="odcyl" placeholder="<?php echo $t;?>">
	<input type="text" name="ossph" placeholder="<?php echo $r1;?>">
	<input type="text" name="oscyl" placeholder="<?php echo $t1;?>">
	<input type="text" name="odaxis" placeholder="<?php echo $f;?>">
	<input type="text" name="osaxis" placeholder="<?php echo $f1;?>">
	<input type="submit" name="submit" value="update"> 
</form>	
</div>
</body>
</html>
