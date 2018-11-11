<?php include 'common/header.php'; ?>

<div class="modal" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title">Add Websites</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<form action="websites_add.php" method="post" enctype="multipart/form-data">
<div class="modal-body">
<center>
<img class="blah img-fluid" width="300px"   />
</center>
<div class="row">
<div class="col-md-12 col-12">
<div class="form-group">
<label>Image <span style="color:red">*</span></label>

<input type="file" class="form-control" name="file"  onchange="readURL(this);">
</div>
</div>
<div class="col-md-12 col-12">

<div class="form-group">
<label>Details <span style="color:red">*</span></label>
<input type="text" class="form-control" name="details">
</div>
</div>
<div class="col-md-12 col-12">
<div class="form-group">
<label>Link <span style="color:red">*</span></label>
<input type="text" class="form-control" name="link">
</div>
</div>

<div class="col-md-12 col-12">
<div class="form-group">
<label>My Work <span style="color:red">*</span></label>
<input type="text" class="form-control" name="work">
</div>
</div>

</div>
</div>

<div class="modal-footer">
<button type="submit"  name="btn" class="btn btn-primary">Add</button>
</div>
</form>
</div>
</div>
</div>
<br>
<center> <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" >Add Websites</button></center>
<br>




<div class="table-responsive container-fluid">

<table  class="table table-hover"  border="1" width="100%">
<thead class="thead-dark">
<tr>
<th>Sr. No.</th>
<th>image</th>
<th>Website</th>
<th>My Work</th>
<th>Link</th>
<th >Update</th>
<th >Delete</th>
</tr>
</thead>
<tbody >
<?php 
$i=1;
$sql=mysqli_query($conn,"SELECT * from websites");
while ($fetch=mysqli_fetch_array($sql)) {
$id=$fetch['id'];
$img=$fetch['img'];
$details=$fetch['details'];
$link=$fetch['link'];
$work=$fetch['work'];

?>


<tr>
<td><?php echo $i++ ?></td>
<td><img src="../img/websites/<?php echo $img ?>" class="img-fluid" width="200"></td>
<td><?php echo $details ?></td>
<td><?php echo $work ?></td>
<td><?php echo $link ?></td>
<td><a href="websites_update.php?id=<?php echo $id ?>" class="btn btn-info">Update</a></td>
<td>
<a href="websites_delete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete this file ?');" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>


</table>
</div>

	

<?php include 'common/footer.php'; ?>