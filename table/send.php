<?php
$conn = mysqli_connect("localhost","root","","testing");
$sql = "SELECT email, last_name FROM tbl_sample";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $to = $row["email"];
        $subject = "EYE HOSPITAL";
        $txt = $row["last_name"];
        if(isset($txt))
       	{$headers = "From:sasukezerin96@gmail.com";
	   mail($to,$subject,$txt,$headers);}

    }
}
header('location:s.php');
?>