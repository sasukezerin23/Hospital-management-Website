<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
//$myid =$_SESSION['id'];
$u=$_SESSION['login_user'];
//$u="zerin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$myid1=mysqli_real_escape_string($conn,$_POST['id']); 
$myn=mysqli_real_escape_string($conn,$_POST['name']); 
 $myname=mysqli_real_escape_string($conn,$_POST['odsph']); 
 $myname1=mysqli_real_escape_string($conn,$_POST['odcyl']); 
 $myname2=mysqli_real_escape_string($conn,$_POST['ossph']); 
 $myname3=mysqli_real_escape_string($conn,$_POST['oscyl']); 
 $myname4=mysqli_real_escape_string($conn,$_POST['odaxis']); 
 $myname5=mysqli_real_escape_string($conn,$_POST['osaxis']); 
 $sql = "INSERT INTO $u (id,name,od_sph,od_cyl,os_sph,os_cyl,od_axis,os_axis)   VALUES ('$myid1','$myn','$myname','$myname1','$myname2','$myname3','$myname4','$myname5') ";
      $result = mysqli_query($conn,$sql);
//$sql = "INSERT INTO $u (id,name,od_sph,od_cyl,os_sph,os_sph,od_axis,os_axis) VALUES ('myid','myn','odsph','ossph','oscyl','odaxis','osaxis') ";
$result5 = mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:w1.php');
?>