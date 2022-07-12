<?php
session_start();
$i=$_SESSION['number'];
$conn = mysqli_connect("localhost","root","","testing");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      $name=mysqli_real_escape_string($conn,$_POST['name']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $phone= mysqli_real_escape_string($conn,$_POST['no']);
      $message=mysqli_real_escape_string($conn,$_POST['message']);
      $reply='';
   
      $sql = "INSERT INTO  tbl_sample (id,first_name,name,phone,email) VALUES ('$i','$message', '$name','$phone','$email')";
      $result = mysqli_query($conn,$sql);
      $j=$i+1;
      $_SESSION['number']=$j;
      header('location:index4.html');
      
	}
?>
