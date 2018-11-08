<?php include 'common/dbconfig.php'; ?>
<?php include 'common/header.php'; ?>


<?php 
if (isset($_POST['btn'])) 
{
	$details=ucfirst($_POST['details']);
	$img=uniqid().'_'.$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], "../img/webdesigns/".$img);
	if (!empty($_FILES['file']['name']) && !empty($details)) 
	{
		$sql=mysqli_query($conn,"INSERT INTO webdesigns (img,details)VALUES ('$img', '$details')");
		if ($sql) 
		{
			echo "<script>window.location='webdesigns.php'</script>";	
		}
	}
}
?>
<?php include 'common/footer.php'; ?>