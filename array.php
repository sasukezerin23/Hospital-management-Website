<?php
$s=$_POST['i'];
$i=$_POST['n'];
$db = mysqli_connect("localhost","root","","demo");
$sql="SELECT * FROM countries WHERE id = '$s'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row['name'];
?>