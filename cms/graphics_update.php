<?php include 'common/header.php'; ?>

<?php 
error_reporting(0);
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * from graphics where id='$id'" );
$fetch=mysqli_fetch_array($sql);

if (isset($_POST['btn'])) 
{
	$details=$_POST['details'];

	if (!empty($_FILES['file']['name']) ) 
	{
		$img=uniqid().'_'.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "../img/graphics/".$img);
		$filePath='../img/graphics/'.$fetch['img'];
		unlink($filePath);
	}
	else
	{
	$img=$fetch['img'];
	}

	if (!empty($_FILES['code']['name'])) 
	{
		$code=uniqid().'_'.$_FILES['code']['name'];
		move_uploaded_file($_FILES['code']['tmp_name'], "../img/graphics/code/".$code);
		$filePath1='../img/graphics/code/'.$fetch['code'];
		unlink($filePath1);
	}
	else
	{
	$code=$fetch['code'];
	}
	$sql=mysqli_query($conn,"UPDATE graphics SET img='$img',details='$details',code='$code' where id='$id'");
	if ($sql) 
	{
		echo "<script>window.location='graphics.php';</script>";
	}
	else
	{
		echo "<script>alert('error');</script>";
		echo "<script>window.location='graphics.php';</script>";	
	}

}

?>

<br>
<center>
	<img class="blah img-fluid" src="../img/graphics/<?php echo $fetch['img'] ?>" width="300px"   />
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
					<label>Code <span style="color:red">*</span></label>

					<input type="file" class="form-control" name="code">
				</div>
			</div>

			<div class="col-md-12">
				<center> <button type="submit" name="btn" class="btn btn-success" >Update</button></center>
			</div>


		</div>

	</form>

</div>

<?php include 'common/footer.php'; ?>