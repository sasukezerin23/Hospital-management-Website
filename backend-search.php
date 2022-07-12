<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: 10px;
  text-align: center;
  margin-top: 10px;
  margin-bottom: 20px;
}

.title {
  color: grey;
  font-size: 18px;
}
button {
  width: 200px;
    background-color: white; /* Green */
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 20px;
    margin-left: 02px;
    margin-right: 20px;
    border: 1px solid black; 
}
      
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
  margin-left:30px; 
}
.button:hover {
    background-color: black;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
img
{
    width: 100%;
    height: 60%;
}

</script>
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
//if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM doctor WHERE study LIKE '" . $term . "%'";
    $s="SELECT study from doctor";
    $result = mysqli_query($link, $sql);
    $r= mysqli_query($link, $s);
       // if(mysqli_num_rows($result) > 0){
?>
 
<?php  
session_start();
     $arr = array();
     $s=''; 
     
      if (mysqli_num_rows($r)>0)
      {
        while ($f=mysqli_fetch_assoc($r))
        {
            $arr[]=$f;
        } 
      }
      
       while($row = mysqli_fetch_array($result)){
        $_SESSION['i']=$row['id'];
         $_SESSION['n']=$row['name'];
         $_SESSION['s']=$row['study'];
         $s=$row['image'];
         $p="<img src='$s'>"; 
echo"<div style='box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.5);margin-top:10px;margin-bottom:10px;height:600px;width:500px;align:'center';'>".$p."<h1>".$row['name'] ."<br>". $row['id']. "</h1>"."<form action='array.php' method='POST'>"."<input type='hidden' name='i' value='123'>"."<input type='hidden' name='n' value='123'>"."</form>";
 ?>
<form action="a.php" method="POST">

   <input type="hidden" name="i" value="<?php echo $row['id'];?>">
   <input type="hidden" name="n" value="<?php echo $row['name'];?>">
    <input type="submit"class="button" id="w" name="m" value="button">
</form>
<?php
echo "</div>"; 
      
                
            // Close result set
             }
         mysqli_free_result($result);

        //} else{
          //  echo "<p>No matches found</p>";
       // }
  //  } else{
    //    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}

//print_r($arr);
// close connection
mysqli_close($link);
?>

</body>
</html>

