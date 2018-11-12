<?php include 'common/header.php'; ?>
<?php $id= '../img/webdesigns/'.$_GET['id']; ?>

<br>
<br>

<div class="container">
<center>
<button class="btn btn-info" onclick="copyToClipboard('#p1')">Copy Code</button>
<br>
<br>
<p id="p1" class="text-left"><?php show_source($id); ?></p>

  
</center>
</div>

	<script type="text/javascript">
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

	</script>


<br>
<br>
<br>

<?php include 'common/footer.php'; ?>
