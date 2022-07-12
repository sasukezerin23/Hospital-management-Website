<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
$myid =$_SESSION['id'];
$u=$_SESSION['login_user'];
//$u="zerin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['odsph'])){
  $myname=$_SESSION['ods']; 
} 
else{
   $myname=mysqli_real_escape_string($conn,$_POST['odsph']); 
}	
$sql = "UPDATE $u set od_sph='$myname' WHERE id ='$myid'";
$result = mysqli_query($conn,$sql);
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['odcyl'])){
  $myname1=$_SESSION['odc']; 
} 
else{
   $myname1=mysqli_real_escape_string($conn,$_POST['odcyl']); 
}	
$sql = "UPDATE $u set od_cyl='$myname1' WHERE id ='$myid'";
$result1 = mysqli_query($conn,$sql);
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['ossph'])){
  $myname2=$_SESSION['oss']; 
} 
else{
   $myname2=mysqli_real_escape_string($conn,$_POST['ossph']); 
}	
$sql = "UPDATE $u set os_sph='$myname2' WHERE id ='$myid'";
$result2 = mysqli_query($conn,$sql);
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['oscyl'])){
  $myname3=$_SESSION['osc']; 
} 
else{
   $myname3=mysqli_real_escape_string($conn,$_POST['oscyl']); 
}	
$sql = "UPDATE $u set os_cyl='$myname3' WHERE id ='$myid'";
$result3 = mysqli_query($conn,$sql);
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['odaxis'])){
  $myname4=$_SESSION['odx']; 
} 
else{
   $myname4=mysqli_real_escape_string($conn,$_POST['odaxis']); 
}	
$sql = "UPDATE $u set ox_axis='$myname4' WHERE id ='$myid'";
$result4 = mysqli_query($conn,$sql);
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['osaxis'])){
  $myname5=$_SESSION['osx']; 
} 
else{
   $myname5=mysqli_real_escape_string($conn,$_POST['osaxis']); 
}	
$sql = "UPDATE $u set os_axis='$myname5' WHERE id ='$myid'";
$result5 = mysqli_query($conn,$sql);
}
//session_destroy();
mysqli_close($conn);
header('location:w1.php')
//header('location:updatep.php');
?>