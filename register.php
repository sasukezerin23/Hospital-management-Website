<?php
   include("conn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myid=mysqli_real_escape_string($conn,$_POST['id']);
      $myusername = mysqli_real_escape_string($conn,$_POST['name']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $m="admin";
      $sql = "SELECT id FROM admin WHERE id='$myid' and name = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($conn,$sql);
    
      $count = mysqli_num_rows($result);
      
   
		
      if($count ==1) {
        
         $_SESSION['login_user'] = $myusername;
         if (isset($_POST['remember'])){
            setcookie("id",$myid, time() + (3*60)); 
            setcookie("user",$myusername , time() + (3*60)); 
            setcookie("pass", $mypassword , time() + (3*60)); 
            $_SESSION['login_user'] = $myusername;
             header("location: w1.php");
         }
          if (!isset($_POST['remember'])){
            setcookie("id","", time() + (3*60)); 
            setcookie("user","", time() + (3*60)); 
            setcookie("pass", "" , time() + (3*60)); 
            $_SESSION['login_user'] = $myusername;
             header("location: w1.php");
         }
         
      }else {
         $_SESSION['error'] = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style type="text/css">
	body{
			background: url(f1.jpg);
			background-size: cover;
			margin: 0; 
		}
	.input
		{
			width: 50%;
            margin-top: 20px;
			outline: none;
			padding:10px 11px;
			border: 1px black solid;
			font-size:15px;
			background: #fff;
			display: block;
			margin-left:80px; 	
			margin-bottom: 5px;

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
			height:500px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			top: 100px;
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
    margin-left: 02px;
    margin-right: 20px;
    border: 1px solid black; 
}
      
      	.button1 {
    margin-top: 1px;   		
	width: 150px;
    background-color: white; /* Green */
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 02px;
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
   .button1:hover {
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
		h2
		{  
			margin-top: 5px;
			font-color: white;
			color: white;
			position: center;
			margin-left: 120px; 
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
</head>
<body>
<div>
<h1>REGISTER</h1>
<h2>Please login</h2>
<form action="a.php" method="POST">
	<input type="text" name="id" class="input" value="<?php if (isset($_COOKIE["id"])){echo $_COOKIE["id"];}?>" placeholder="Register id">
	<input type="text" name="username" class="input" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" placeholder="Register username">
	<input type="text" name="password" class="input" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" placeholder="Register password">
	<input type="checkbox" name="remember" class="no" value=" "/><label for ="remember">Remember me</label><br>
   <input type="submit" class="button"name="submit" value="login">
</form>

<p align="right"><a href="login.html"><button class="button1">Back </button></a></p>
</div>
</body>
</html>