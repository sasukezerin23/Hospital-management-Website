<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myid=mysqli_real_escape_string($db,$_POST['id']);
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $mystudy=mysqli_real_escape_string($db,$_POST['study']);
      $myimage = mysqli_real_escape_string($db,$_POST['image']);
      
      $sql = "INSERT INTO admin (id,name, passcode) VALUES ('$myid', '$myusername', '$mypassword')";
      $result = mysqli_query($db,$sql);
      $sql1 = "INSERT INTO doctor (id,name,study,image) VALUES ('$myid', '$myusername', '$mystudy','$myimage')";
      $result1 = mysqli_query($db,$sql1);
      //$_SESSION['id']=$myid;
      //$_SESSION['name']=$myusername;
      //$_SESSION['study']=$mystudy;
      //$_SESSION['image']=$myimage;
       $_SESSION['login_user'] = $myusername;
      header("location:r.html");
	}
?>

 