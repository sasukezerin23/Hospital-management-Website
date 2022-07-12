<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db='database';
   session_start();
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT * from  zerin where id=1";
   $retval = mysqli_query( $sql, $conn );
   
  
   while($row=mysqli_fetch_array($result,MYSQLI_ASSOC) 
     { 
      $_SESSION["name"]=$row["name"];
     
   }
   
   echo $_SESSION["id"];
   
   
   mysqli_close($conn);
?>
