<?php
   
   session_start();
   $myusername= $_SESSION['login_user'];
$db = mysqli_connect("localhost","root","","file");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myid=mysqli_real_escape_string($db,$_POST['id']);
      $myname = mysqli_real_escape_string($db,$_POST['name']);
      $mypdf = mysqli_real_escape_string($db,$_POST['file']);
      $sql = "INSERT INTO  $myusername (id,name,pdf) VALUES ('$myid', '$myname','$mypdf')";
      $result = mysqli_query($db,$sql);
        // header("Location:op.php");
      
    
      
      
	}
?>
