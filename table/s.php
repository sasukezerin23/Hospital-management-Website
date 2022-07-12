<?php
$conn = mysqli_connect("localhost","root","","testing");
$sql = "SELECT email, last_name,id FROM tbl_sample";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $to = $row["email"];
        $s=$row["id"];
        $txt = $row["last_name"];
       if (is_null($txt))
       {

       }
        else
        {
        	$sql1="DELETE from tbl_sample WHERE id='$s'";
            $result1 = mysqli_query($conn, $sql1);
        }
    }
}

?>