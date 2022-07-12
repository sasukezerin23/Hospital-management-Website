<?php
$conn = mysqli_connect("localhost","root","","testing");
$sql = "SELECT email, last_name FROM tbl_sample";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $s=$row["id"];
        $to = $row["email"];
        $subject = "My subject";
        $txt = $row["last_name"];
       $headers = "From:sasukezerin96@gmail.com";
	   mail($to,$subject,$txt,$headers);
	   $sql1="DELETE from tbl_sample WHERE id='$s'";
       $result1 = mysqli_query($conn, $sql1);

    }
}
header('location:s.php');
?>