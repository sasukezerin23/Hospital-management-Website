<?php
session_start();
$s=$_POST['i'];
$i=$_POST['n'];
$_SESSION['i']=$s;
$_SESSION['n']=$i;
echo $s;
echo $i;
//$s=1;
//$i="zerin";
$db = mysqli_connect("localhost","root","","demo");
$sql="SELECT * FROM doctor WHERE id='$s'";
$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		profile
	</title>
	<style type="text/css">
		body{
			background: url(f.jpg);
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
	
		div
		{   

			width: 30%;
			height:100%;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			left: 500px; 
		}
		.button {
	width: 150px;
    background-color: white; /* Green */
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 20px;
    margin-left: 100px;
    margin-right: 20px; 
     border: 1px solid black; 
}
      
     .button:hover {
    background-color: black;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
		h1
		{
			font-color: white;
			color: white;
			position: center;
			margin-left: 100px; 
			text-shadow: 1px 1px gray;
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
	</style>
</head>
<body>
<div>
	<?php
	while($row = mysqli_fetch_array($result))
{
     
     $k=$row['study'];
     $g=$row['name'];
    
     }
?>
<h1>PROFILE</h1>
<h1><?php echo $i;?></h1>
<form action="in.php" method="POST">
<input type="hidden" name="d_id" value="<?php echo $s?>">
<input type="hidden" name="d_name" value="<?php echo $i?>">
<input type="text" name="p_id" placeholder="Enter patient id">
<input type="text" name="p_name" placeholder="Enter patient name">
<input type="submit" class=" button" name="SUBMIT">
</form>
</div>
</body>
</html>

