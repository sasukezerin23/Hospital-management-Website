<?php
   include("conn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myid=mysqli_real_escape_string($db,$_POST['id']);
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE id='$myid' and name = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
    
      $count = mysqli_num_rows($result);
      
   
		
      if($count ==1) {
        
         $_SESSION['login_user'] = $myusername;
          header("location: welcome1.php");
      }else {
         $_SESSION['error'] = "Your Login Name or Password is invalid";
      }
   }
?>

 