<?php include 'common/dbconfig.php'; ?>
<?php include 'common/header.php'; ?>

<?php 
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * from websites where id='$id'" );
$fetch=mysqli_fetch_array($sql);



if (isset($_POST['btn'])) 
{
	$details=$_POST['details'];
	$link=$_POST['link'];
	if (!empty($_FILES['file']['name'])) 
	{
		$img=uniqid().'_'.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "../img/websites/".$img);
		$filePath='../img/websites/'.$fetch['img'];
		if (file_exists($filePath)) 
		{
			unlink($filePath);
		}

	}else
	{
		$img=$fetch['img'];
	}

	$sql=mysqli_query($conn,"UPDATE websites SET img='$img',details='$details',link='$link' where id='$id'");


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



?>

<br>
<center>
	<img class="blah img-fluid" src="../img/websites/<?php echo $fetch['img'] ?>" width="300px"   />
</center>
<br>


<div class="container">

	<form action="" method="post" enctype="multipart/form-data">

		<div class="row">

			<div class="col-md-4">
				<div class="form-group">
					<label>Image <span style="color:red">*</span></label>

					<input type="file" class="form-control" name="file" onchange="readURL(this);">
				</div>
			</div>
			<div class="col-md-4">

				<div class="form-group">
					<label>Details <span style="color:red">*</span></label>
					<input type="text" class="form-control" value="<?php echo $fetch['details'] ?>" name="details">
				</div>
			</div>
			<div class="col-md-4">

				<div class="form-group">
					<label>Link <span style="color:red">*</span></label>
					<input type="text" class="form-control" value="<?php echo $fetch['link'] ?>" name="link">
				</div>
			</div>

			<div class="col-md-12">
				<center> <button type="submit" name="btn" class="btn btn-success" >Update</button></center>
			</div>


		</div>

	</form>

</div>

<?php include 'common/footer.php'; ?>