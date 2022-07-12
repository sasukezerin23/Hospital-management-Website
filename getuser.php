<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
session_start();
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$u=$_SESSION['login_user'];
$sql="SELECT * FROM $u WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>lp</th>
<th>rp</th>
<th>lsp</th>
<th>rspp</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['lp'] . "</td>";
    echo "<td>" . $row['rp'] . "</td>";
    echo "<td>" . $row['lsp'] . "</td>";
    echo "<td>" . $row['rsp'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>