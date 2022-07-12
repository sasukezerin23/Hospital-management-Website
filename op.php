<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style >
		body{
			background: url(do.jpg);
			background-size: cover;
			margin: 0; 
		}
		input{
			width: 50%;

			outline: none;
			padding:10px 11px;
			border: 1px #aaa solid;
			font-size:15px;
			background: #fff;
			display: block;
			margin: 25px auto;

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
			height: 500px;
			background: rgba(0,0,0,-.5);
			box-shadow: 5px 4px 43px #000;
			position: absolute;
			top: 80px;
			left: 470px; 
		}
		h1
		{
			font-color: white;
		}
		form
		{
			margin: 40px auto;
			text-align: center;
		}
		b{
           font-size: 30px;
           color: white ;
		}
		a{
			font-size: 28px;
			color: blue;
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
    margin-left: 30px;
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
	</style>
</head>
<body>
<div>
<form action="o.php" method="POST">
	<b>patient information</b>
	<input type="integer" name="id" placeholder="Enter your id">
	<input type="text" name="name" placeholder="Enter your name">
	<input type="text" name="file" placeholder="Enter your file ">

	<input type="submit" class="button" name="submit" value="submit">
	
    
</form>

<p align="right"><a href="w1.php"><button class="button">Back </button></a></p>
</div>

</body>
</html>