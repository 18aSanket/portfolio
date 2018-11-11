<?php include 'common/header.php'; ?>

<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title">Add webdesigns</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<form action="webdesigns_add.php" method="post" enctype="multipart/form-data">
<div class="modal-body">
<center>

<iframe src="" width="100%" class="blah" style="border: none"></iframe>

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
<center> <button  type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal" >Add webdesigns</button></center>
<br>




<div class="table-responsive container-fluid">

<table  class="table table-hover"  border="1" width="100%">
<thead class="thead-dark">
<tr>
<th>Sr. No.</th>
<th>Iframe</th>
<th>Details</th>
<th>Code</th>
<th >Update</th>
<th >Delete</th>
</tr>
</thead>
<tbody >
<?php 
$i=1;
$sql=mysqli_query($conn,"SELECT * from webdesigns");
while ($fetch=mysqli_fetch_array($sql)) {
$id=$fetch['id'];
$img=$fetch['img'];
$details=$fetch['details'];

?>


<tr>
<td><?php echo $i++ ?></td>
<td>
<iframe src="../img/webdesigns/<?php echo $img ?>" width="200" height="100px"  style="border: none"></iframe>
</td>
<td><?php echo $details ?></td>
<td>
<a href="#myModal1" class="btn btn-primary" data-id="<?php echo $img ?>"  data-toggle="modal" >View</a>



</td>
<td><a href="webdesigns_update.php?id=<?php echo $id ?>"  class="btn btn-info">Update</a></td>

<td>
<a href="webdesigns_delete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete this file ?');" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>


</table>
</div>

	<script type="text/javascript">
	$(document).ready(function(){
	$('#myModal1').show('modal', function() {
    var bookId = data('id');
    $('#name').val(bookId);
});
	});

</script>

<?php include 'common/footer.php'; ?>




<div class="modal fade"  id="myModal1">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title">Add webdesigns</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
	 <input type="text"  id="name" value=""/>
	<?php show_source("../img/webdesigns/$img"); ?>
</div>

</div>
</div>
</div>


