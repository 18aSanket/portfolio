<?php include 'common/dbconfig.php'; ?>
<?php include 'common/header.php'; ?>

<?php 
$id=$_GET['id'];
$delete=mysqli_query($conn,"SELECT * From websites where id='$id'");
$fetch=mysqli_fetch_array($delete);
$filePath='../img/websites/'.$fetch['img'];

if ($_GET['id']) 
{
	unlink($filePath);

	$sql=mysqli_query($conn,"DELETE from websites where id='$id'");

	if ($sql) 
	{
		echo "<script>window.location='websites.php'</script>";
	}
	else
	{
		echo "<script>alert('error')</script>";
		echo "<script>window.location='websites.php'</script>";	
	}

}
else
{
	echo "<script>alert('File does not exists')</script>";
	echo "<script>window.location='websites.php'</script>";	
}


?>

<?php include 'common/footer.php'; ?>