<?php
   include("config.php");

  $s="SELECT * from data";
   
 $q= mysqli_query($db,$s);
 $r=mysqli_num_rows($q);

   echo "<table border='1' align='center'>
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Message</th>
         <th><input type="submit" value="submit></th>
      </tr>";

   while($row = mysqli_fetch_array($q)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
      echo "<td>" . $row['message'] . "</td>";
      echo "</tr>";
   }
   echo "</table>";
 ?>
