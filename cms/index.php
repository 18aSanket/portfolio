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
	
		
		<h3 class="mb-4 myname text-center">L o g I n</h3>
	
		<input type="text" class="form-control mt-4" placeholder="Enter User Name here..." name="">
		
		<div class="hidden">You Enter Wrong UserName...</div>

		<input type="text" class="form-control mt-4" placeholder="Enter Password here..." name="">
		<div class="hidden">You Enter Wrong Password...</div>

		
			
		<center><input type="submit" class="btn btn-danger mt-4"  name=""></center>
	</div>
	
	
	
		
</div>



</body>
</html>
<style type="text/css">
body{
background: linear-gradient(to right, #dc3545 , #751675);
height: 100vh;
background-size: cover;
background-position: center;
font-family: "Poppins", sans-serif;
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
.text-center{
	color:white;
}

.hidden{
	visibility: hidden;
	padding: 5px;
	color:white;
}

</style>