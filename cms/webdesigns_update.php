<?php include 'common/header.php'; ?>

<?php 
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * from webdesigns where id='$id'" );
$fetch=mysqli_fetch_array($sql);



if (isset($_POST['btn'])) 
{
	$details=$_POST['details'];
	if (!empty($_FILES['file']['name'])) 
	{
		$img=uniqid().'_'.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "../img/webdesigns/".$img);
		$filePath='../img/webdesigns/'.$fetch['img'];
		if (file_exists($filePath)) 
		{
			unlink($filePath);
		}

	}else
	{
		$img=$fetch['img'];
	}

	$sql=mysqli_query($conn,"UPDATE webdesigns SET img='$img',details='$details' where id='$id'");


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



?>

<br>
<center>
<iframe class="blah"  src="../img/webdesigns/<?php echo $fetch['img'] ?>" width="300" height="auto"  style="border: none"></iframe>

</center>
<br>


<div class="container">

	<form action="" method="post" enctype="multipart/form-data">

		<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					<label>Image <span style="color:red">*</span></label>

					<input type="file" class="form-control" name="file" onchange="readURL(this);">
				</div>
			</div>
			<div class="col-md-6">

				<div class="form-group">
					<label>Details <span style="color:red">*</span></label>
					<input type="text" class="form-control" value="<?php echo $fetch['details'] ?>" name="details">
				</div>
			</div>
			

			<div class="col-md-12">
				<center> <button type="submit" name="btn" class="btn btn-success" >Update</button></center>
			</div>


		</div>

	</form>

</div>

<?php include 'common/footer.php'; ?>