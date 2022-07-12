<?php
session_start();
$p='';
$s='';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
$myid=mysqli_real_escape_string($conn,$_POST['id']); 
$sql = "SELECT * FROM countries WHERE id ='$myid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$p=$row["name"];
$s=$row["id"];
 $_SESSION['id'] = $myid;
 $_SESSION['name'] = $p;
mysqli_close($conn);
}
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "id" class = "box"/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
					
            </div>
				
         </div>
			
      </div>
     <br>
     <br>
   </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>sad</title>
<style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
             <p><?php echo $s;?></p>
             <p><?php echo $p;?></p>
 <form action = "s1.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "id1" placeholder="<?php echo $p;?>" class = "box"/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
					
</body>
</html>
