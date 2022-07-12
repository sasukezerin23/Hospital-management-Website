<script type="text/javascript">
 
$(document).ready(function(){
 
 // Add Class
 $('.edit').click(function(){
  $(this).addClass('editMode');
 });

 // Save data
 $(".edit").focusout(function(){
  $(this).removeClass("editMode");
  var id = this.id;
  var split_id = id.split("_");
  var field_name = split_id[0];
  var edit_id = split_id[1];
  var value = $(this).text();

  $.ajax({
   url: 'update.php',
   type: 'post',
   data: { field:field_name, value:value, id:edit_id },
   success:function(response){
    console.log('Save successfully'); 
   }
  });
 
 });

});
</script>

<style type="text/css">
	.edit{
 width: 100%;
 height: 25px;
}
.editMode{
 border: 1px solid black;
}

/* Table Layout */
table {
 border:3px solid lavender;
 border-radius:3px;
}

table tr:nth-child(1){
 background-color:dodgerblue;
}
table tr:nth-child(1) th{
 color:white;
 padding:10px 0px;
 letter-spacing: 1px;
}

/* Table rows and columns */
table td{
 padding:10px;
}
table tr:nth-child(even){
 background-color:lavender;
 color:black;
}
</style>
<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "tutorial1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>

<div class='container'>
 
 <table width='100%' border='0'>
  <tr>
   <th width='3%'>S.no</th>
   <th width='10%'>Name</th>
   <th width='7%'>Phone</th>
   <th width='10%'>Email</th>
   <th width='30%'>message</th>
   <th width='40%'>reply</th>
  </tr>
  <?php 
   $query = "select * from user";
   $result = mysqli_query($con,$query);
   $count = 1;
   while($row = mysqli_fetch_array($result) ){
    $id = $row['id'];
    $username = $row['username'];
    $name=$row['name'];
    $message=$row['message'];
    $email=$row['email'];
    $phone=$row['phone'];

  ?>
  <tr>
   <td><?php echo $count; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $phone; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $message; ?></td>
   <td> 
     <div contentEditable='true' class='edit' id='username_<?php echo $id; ?>'> 
       <?php echo $username; ?>
     </div> 
   </td>
  </tr>
  <?php
   $count ++;
  }
  ?> 
 </table>
</div>
