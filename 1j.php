<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myid=mysqli_real_escape_string($db,$_POST['id']);
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      
      $lp = mysqli_real_escape_string($db,$_POST['lp']); 
      $rp = mysqli_real_escape_string($db,$_POST['rp']); 
      $lsp = mysqli_real_escape_string($db,$_POST['lsp']); 
      $rsp = mysqli_real_escape_string($db,$_POST['rsp']); 
       $myusername= $_SESSION['login_user'];
      $sql = "INSERT INTO   $myusername (id,name, lp,rp,lsp,rsp) VALUES ('$myid', '$myusername', '$lp','$rp','$lsp','$rsp')";
      $result = mysqli_query($db,$sql);
      
         header("Location:insertp.html");
      
    
      
      
	}
?>
