<?php include 'common/header.php'; ?>

<div class="table-responsive container-fluid">
<h1 class="text-center mt-2 mb-2">View And Download Image</h1>

<table  class="table table-hover"  border="1" width="100%">
<thead class="thead-dark">
<tr>
<th>Sr. No.</th>
<th>image</th>
<th>Website</th>
<th>My Work</th>
<th>WebLink</th>
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
<td><img src="img/websites/<?php echo $img ?>" class="img-fluid" width="200"></td>
<td><?php echo $details ?></td>
<td><?php echo $work ?></td>
<td><a class="btn btn-primary" href="<?php echo $link ?>">View</a></td>
</tr>
<?php } ?>
</tbody>


</table>
</div>




<?php include 'common/footer.php'; ?>
