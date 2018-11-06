<?php include 'common/header.php';?>
<?php include 'common/dbconfig.php';?>
<!-- main body -->



<h1 class="text-center text-white">Add Design</h1>
<br>

<center>
<img class="blah img-fluid" width="300px"   />
</center>
<br>

<div class="container">

	<form action="" method="post" enctype="multipart/form-data">

		<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					<label>Image <span style="color:red">*</span></label>

					<input type="file" class="form-control" name="file"  onchange="readURL(this);">
				</div>
			</div>
			<div class="col-md-6">

				<div class="form-group">
					<label>Details <span style="color:red">*</span></label>
					<input type="text" class="form-control" name="details">
				</div>
			</div>

			<div class="col-md-12">
				<center> <button type="submit" name="btn" class="btn btn-success" >Add</button></center>
			</div>


		</div>

	</form>

</div>



<?php 
if (isset($_POST['btn'])) 
{
$img=uniqid().'_'.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], "../asset/img/design/".$img);

$details=$_POST['details'];

if (!empty($_FILES['file']['name'])&& !empty($details)) 
{
$sql=mysqli_query($conn,"INSERT INTO design (img,details)VALUES ('$img', '$details')");

if ($sql) {

echo "<script>alert('image added successfully')</script>";
echo "<script>window.location='design_add.php'</script>";
}

}
else
{
	echo "<script>alert('please fill all fields')</script>";
}
}
?>
<!-- main body -->
<?php include 'common/footer.php' ?>


