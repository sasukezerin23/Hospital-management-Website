<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "tutorial1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['id'];

$query = "UPDATE user SET ".$field."='".$value."' WHERE id=".$editid;
mysqli_query($con,$query);

echo 1;
?>