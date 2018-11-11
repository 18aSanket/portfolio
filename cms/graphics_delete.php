<?php include 'common/header.php'; ?>

<?php
error_reporting(0);
$id=$_GET['id'];
$delete=mysqli_query($conn,"SELECT * From graphics where id='$id'");
$fetch=mysqli_fetch_array($delete);
$filePath='../img/graphics/'.$fetch['img'];
$filePath1='../img/graphics/code/'.$fetch['code'];
	unlink($filePath);
	unlink($filePath1);
	$sql=mysqli_query($conn,"DELETE from graphics where id='$id'");
	if ($sql) 
	{
		echo "<script>window.location='graphics.php'</script>";
	}
	else
	{
		echo "<script>alert('error')</script>";
		echo "<script>window.location='graphics.php'</script>";	
	}




?>

<?php include 'common/footer.php'; ?>