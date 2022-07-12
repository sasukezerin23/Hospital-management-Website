<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $u= $_SESSION['login_user'] ;
// sql to create table
$sql = "CREATE TABLE $u (
id VARCHAR(30) NOT NULL , 
name VARCHAR(30) NOT NULL,
od_sph VARCHAR(30) default null,
od_cyl VARCHAR(30) default NULL,
os_sph VARCHAR(30) default NULL,
os_cyl VARCHAR(30) default NULL,
od_axis VARCHAR(30) default NULL,
os_axis VARCHAR(30) default NULL,
PRIMARY KEY (id)
)";


if (mysqli_query($conn, $sql)) {
    echo "Table doctor account is created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
header('location:op_file.php');

?>