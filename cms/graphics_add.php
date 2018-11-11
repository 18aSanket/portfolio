<?php include 'common/header.php'; ?>


<?php 
if (isset($_POST['btn']))
{
	$details=ucfirst($_POST['details']);

	if (!empty($_FILES['file']['name']) and !empty($details) and empty($_FILES['code']['name'])) 
	{	
		$img=uniqid().'_'.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "../img/graphics/".$img);
		$sql=mysqli_query($conn,"INSERT INTO graphics (img,details,code)VALUES ('$img', '$details','')");
		if ($sql) 
		{
			echo "<script>window.location='graphics.php'</script>";	
		}
	}
	else if(!empty($_FILES['file']['name']) and !empty($details) and !empty($_FILES['code']['name'])) 
	{
		$img=uniqid().'_'.$_FILES['file']['name'];
		$code=uniqid().'_'.$_FILES['code']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "../img/graphics/".$img);
		move_uploaded_file($_FILES['code']['tmp_name'], "../img/graphics/code/".$code);
		$sql=mysqli_query($conn,"INSERT INTO graphics (img,details,code)VALUES ('$img', '$details','$code')");
		if ($sql) 
		{
			echo "<script>window.location='graphics.php'</script>";	
		}
	}
	else
	{	
		echo "<script>alert('fill all fields');</script>";	
		echo "<script>window.location='graphics.php'</script>";	
	}




}
?>
<?php include 'common/footer.php'; ?>