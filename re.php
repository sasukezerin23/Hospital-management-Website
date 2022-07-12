<?php
   $conn = mysqli_connect("localhost","root","","register");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myid=mysqli_real_escape_string($conn,$_POST['id']);
      $myusername = mysqli_real_escape_string($conn,$_POST['name']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $m="admin";
      $sql = "SELECT id FROM register WHERE id='$myid' and name = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($conn,$sql);
    
      $count = mysqli_num_rows($result);
      
   
		
      if($count ==1) {
        
         $_SESSION['login_user'] = $myusername;
         if (isset($_POST['remember'])){
            setcookie("id",$myid, time() + (3*60)); 
            setcookie("user",$myusername , time() + (3*60)); 
            setcookie("pass", $mypassword , time() + (3*60)); 
            $_SESSION['login_user'] = $myusername;
             header("location: register_home.php");
         }
          if (!isset($_POST['remember'])){
            setcookie("id","", time() + (3*60)); 
            setcookie("user","", time() + (3*60)); 
            setcookie("pass", "" , time() + (3*60)); 
            $_SESSION['login_user'] = $myusername;
             header("location: register_home.php");
         }
         
      }else {
         $_SESSION['error'] = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>login</title>
   <style >
      body{
         background: url(f1.jpg);
         background-size: cover;
         margin: 0; 
      }
       		.button {
	width: 150px;
    background-color: white; /* Green */
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 20px;
    margin-left: 100px;
    margin-right: 20px; 
     border: 1px solid black; 
}
 .button:hover {
    background-color: black;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
      .input
      {
         width: 70%;

         outline: none;
         padding:10px 11px;
         border: 1px #aaa solid;
         font-size:15px;
         background: #fff;
         display: block;
         margin: 20px auto;
         

      }
      #login
      {
         background: #19blca;
         color:#fff;
         border:none; 
      }
      div
      {
         width: 30%;
         height: 400px;
         background: rgba(0,0,0,-.5);
         box-shadow: 5px 4px 43px #000;
         position: absolute;
         top: 80px;
         left: 470px; 
      }
      form
      {
         margin: 40px auto;
         text-align: center;
      }
      b{
           font-size: 25px;
           color: #fff ;
           text-shadow: 2px 2px gray;
      }
      a{
         font-size: 28px;
         color: blue;
      }
   </style>
</head>
<body>
   <div>
<form action="re.php" method="POST">
   <b>LOGIN REGISTER</b>
    <input type="integer" class="input" value="<?php if (isset($_COOKIE["id"])){echo $_COOKIE["id"];}?>" name="id"  placeholder="Enter your id">
   <input type="text" class="input" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="name" placeholder="Enter your name">
   <input type="password" class="input" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password" placeholder="Enter your password">
   <input type="checkbox" name="remember" class="no" value=" "/><label for ="remember">Remember me</label><br>
   <input type="submit" class="button"name="submit" value="login">
   
</form>
</div>
</body>
</html>
 </head>
