<?php include 'common/header.php'; ?>

<div class="table-responsive container-fluid">
<h1 class="text-center mt-2 mb-2">View And Download Image</h1>
<table  class="table table-hover"  border="1" width="100%">
<thead class="thead-dark">
<tr>
<th>Sr. No.</th>
<th>image</th>
<th>Details</th>
<th >download</th>
</tr>
</thead>
<tbody >
<?php 
$i=1;
$sql=mysqli_query($conn,"SELECT * from graphics order by id DESC");
while ($fetch=mysqli_fetch_array($sql)) {
$id=$fetch['id'];
$img=$fetch['img'];
$details=$fetch['details'];

?>


<tr>
<td><?php echo $i++ ?></td>
<td><img src="img/graphics/<?php echo $img ?>" class="img-fluid" width="200"></td>
<td><?php echo $details ?></td>
<td><a href="" download class="btn btn-info">Download</a></td>
</tr>
<?php } ?>
</tbody>


</table>
</div>

<?php include 'common/footer.php'; ?>


