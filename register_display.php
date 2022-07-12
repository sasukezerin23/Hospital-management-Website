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
			height: 250px;
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
			height:300px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			top: 80px;
			left: 470px; 
		}
		h1
		{
			color: white;
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
	<h1>Patient ID</h1>
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
$dbname = "demo";
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
$sql = "SELECT * FROM register WHERE patient_id ='$myid'";
$result = mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {  
$p=$row["dname"];
$s=$row["id"];
$r=$row["patient_id"];
$t=$row["patient_name"];
 $_SESSION['id'] = $myid;
 $_SESSION['name'] = $p;
 $_SESSION['pid'] = $r;
 $_SESSION['pname'] = $t;
    }
//}
mysqli_close($conn);
}
?>
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
			height: 250px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			left: 470px; 
			
		}
		.show_update
		{ 
			width: 30%;
			height:300px;
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
           margin-left: 100px;
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
		p{
			margin-left: 120px;
		}
	</style>
</head>
<body>
<div class="show_update">
<b>Information</b>

<p>DOCTOR ID:<?php echo $s;?></p>
<p>DOCTOR Name:<?php echo $p;?></p>
<p>Patient ID:  <?php echo $r;?></p>	
<p>Patient Name<?php echo $t;?></p>


</div>
</body>
</html>
