<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
//$u=$_SESSION['login_user'];
$u="admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $myid=$_SESSION['id_admin'] ; 
$sql = "DELETE FROM $u WHERE id ='$myid'";
$result = mysqli_query($conn,$sql);
$sql1 = "DELETE FROM doctor WHERE id ='$myid'";
$result1 = mysqli_query($conn,$sql1);
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//if (mysqli_num_rows($result) > 0) {
    // output data of each row
//session_destroy();
mysqli_close($conn);
header('location:d.php')
?>