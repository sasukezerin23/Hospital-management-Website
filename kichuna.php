<?php
   include("config.php");

   
   
      // username and password sent from form 
      
      $s="SELECT *  FROM zerin WHERE id=2";
      $result = mysqli_query($db,$s);
      while ($row = mysql_fetch_assoc($result)) {
    echo $row["id"];
    echo $row["name"];
    
}
   
?>
