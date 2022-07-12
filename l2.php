<?php
   $db=mysqli_connect("localhost","root","","register");
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myid=mysqli_real_escape_string($db,$_POST['id']);
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $mystudy=mysqli_real_escape_string($db,$_POST['study']);
      $myimage = mysqli_real_escape_string($db,$_POST['image']);
      
      $sql = "INSERT INTO register (id,name, passcode) VALUES ('$myid', '$myusername', '$mypassword')";
      $result = mysqli_query($db,$sql);
      $sql1 = "INSERT INTO employee (id,name,study,image) VALUES ('$myid', '$myusername', '$mystudy','$myimage')";
      $result1 = mysqli_query($db,$sql1);
    
     $_SESSION['login_user'] = $myusername;
      header("location:r2.html");
	}
?>

 