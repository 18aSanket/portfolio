<?php include 'common/header.php'; ?>


<?php 
if (isset($_POST['btn'])) 
{
	$details=ucfirst($_POST['details']);
	$link=$_POST['link'];
	$work=$_POST['work'];
	$img=uniqid().'_'.$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], "../img/websites/".$img);
	if (!empty($_FILES['file']['name']) && !empty($details)) 
	{
		$sql=mysqli_query($conn,"INSERT INTO websites (img,details,link,work)VALUES ('$img', '$details','$link','$work')");
		if ($sql) 
		{
			echo "<script>window.location='websites.php'</script>";	
		}
	}
}
?>
<?php include 'common/footer.php'; ?>