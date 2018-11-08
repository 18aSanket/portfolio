<?php include 'common/dbconfig.php'; ?>
<?php include 'common/header.php'; ?>

<?php 
$id=$_GET['id'];
$delete=mysqli_query($conn,"SELECT * From webdesigns where id='$id'");
$fetch=mysqli_fetch_array($delete);
$filePath='../img/webdesigns/'.$fetch['img'];

if ($_GET['id']) 
{
	unlink($filePath);

	$sql=mysqli_query($conn,"DELETE from webdesigns where id='$id'");

	if ($sql) 
	{
		echo "<script>window.location='webdesigns.php'</script>";
	}
	else
	{
		echo "<script>alert('error')</script>";
		echo "<script>window.location='webdesigns.php'</script>";	
	}

}
else
{
	echo "<script>alert('File does not exists')</script>";
	echo "<script>window.location='webdesigns.php'</script>";	
}


?>

<?php include 'common/footer.php'; ?>