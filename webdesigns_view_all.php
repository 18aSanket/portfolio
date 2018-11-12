<?php include 'common/header.php'; ?>


<div class="table-responsive container-fluid">
<h1 class="text-center mt-2 mb-2">View And Download Code</h1>
<table  class="table table-hover"  border="1" width="100%">
<thead class="thead-dark">
<tr>
<th>Sr. No.</th>
<th>Iframe</th>
<th>Details</th>
<th>Code</th>

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
<iframe src="img/webdesigns/<?php echo $img ?>" width="200" height="100px"  style="border: none"></iframe>
</td>
<td><?php echo $details ?></td>
<td>
<a href="webdesigns_code.php?id=<?php echo $img ?>"  class="btn btn-primary" >View Code</a>
</td>

</tr>
<?php } ?>
</tbody>


</table>
</div>

<?php include 'common/footer.php'; ?>
