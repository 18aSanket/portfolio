<?php 
$user="1";
$pass="1";

if (isset($_POST['btn'])) {
	$username=$_POST['user'];
	$password=$_POST['pass'];

if ($user == $username && $password==$pass) {
session_start();
$_SESSION['user']=array($user);
header("location:home.php");
}else{
header("location:index.php");

}

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login to CMS</title>
<meta charset="utf-8">
<link rel="icon" href="../img/logo.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" type="text/css" href="../asset/style.css">
</head>
<body>

<div class="wrapper">
		<form action="" method="post">
		<h3 class="mb-4 myname mycolor text-center">L o g I n</h3>
		<input type="text" class="form-control mt-4" placeholder="Enter User Name here..." name="user">
		<input type="password" class="form-control mt-4" placeholder="Enter Password here..." name="pass">
		<center><input type="submit" class="mybtn mt-4"  name="btn"></center>
		</form>
	</div>
	
	
	
		
</div>



</body>
</html>
<style type="text/css">
body{
background: black;
height: 100vh;
background-size: cover;
background-position: center;
display: flex;
align-items: center;
flex-direction: column; 
justify-content: center;
width: 100%;
min-height: 100%;
}
.wrapper {
width: 500px;
border-radius: 10px;
}
label,h4{
	font-weight: bold;
}


.hidden{
	visibility: hidden;
	padding: 5px;
	color:white;
}



.mycolor:hover{
	color:white;
	transition: 1s all;
}
</style>


