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
	</style>
</head>
<body>
<div>
<form action="i.php" method="post">
	<b>LOGIN</b>
	<input type="integer" name="id" placeholder="Enter your id">
	<input type="text" name="name" placeholder="Enter your name">
	
		<input type="text" name="lp" placeholder="lp">
		<input type="text" name="rp" placeholder="rp">
		<input type="text" name="lsp" placeholder="lsp">
		<input type="text" name="rsp" placeholder="rsp">

	<input type="submit" name="submit" value="login">

</form>
</div>
</body>
</html>