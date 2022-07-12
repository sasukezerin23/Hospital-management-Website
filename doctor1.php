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