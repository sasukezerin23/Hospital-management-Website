<?php
session_start();
$s=$_SESSION['i'];
$i=$_SESSION['n'];
   $db=mysqli_connect("localhost","root","","demo");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     // $myid=mysqli_real_escape_string($db,$_POST['id']);
      $d_id=mysqli_real_escape_string($db,$_POST['d_id']);
      $d_name=mysqli_real_escape_string($db,$_POST['d_name']);
      $p_id=mysqli_real_escape_string($db,$_POST['p_id']);
      $p_name=mysqli_real_escape_string($db,$_POST['p_name']);
      // $myusername= $_SESSION['login_user'];
      $sql = "INSERT INTO  register (id,dname,patient_id,patient_name) VALUES ('$s','$i','$p_id','$p_name')";
      $result = mysqli_query($db,$sql);
      
      header("Location:admin.php");
      
    
      
      
	}
?>
