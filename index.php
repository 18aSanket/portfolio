<?php 
include 'cms/common/dbconfig.php';

$user="zxc";
if (isset($_POST['loginbtn'])) 
{
$username=$_POST['user'];
if ($user == $username) 
{
session_start();
$_SESSION['user']=array($user);
echo "<script>window.location.href='cms/index.php'</script>";
}else
{
echo "<script>window.location.href='index.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sanket S. Agre</title>
<meta charset="utf-8">
<link rel="icon" href="img/logo.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<!-- owl slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- owl slider -->

<!-- image gallery start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link rel="stylesheet" type="text/css" href="asset/compact-gallery.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<!-- image gallery end -->
<link rel="stylesheet" type="text/css" href="asset/style.css">

<body>
<br>
<div class="container text-center" id="home">
<div class="row">	
<div class="col-md-6">	
<img src="img/logo.png" class="img-fluid" id="loginbtn" style="float:left">

<div id="logininput" style="display: none">
<form action="" method="post">
<input type="text"  name="user">
<input type="submit" name="loginbtn" value="login">
</form>
</div>






</div>
<div class="col-md-6">	
<input type="button" class="mybtn" data-toggle="modal" data-target="#myModal" style="float: right;margin-top: 30px;" value="Say Hello"></div>
</div>
<br>
<br>
<br>

<h1 class="mycolor">Web Designer <span>/</span> Web Developer</h1>
<br>
<p class="mycolor">I design and code beautifully simple things, and I love what I do.</p>
<br>
<br>
<br>

<img src="img/coder.png" class="img-fluid">
<br>
<br>
<br>







</div>
<!-- ------------------------------------------------------------------- -->

<div class="mybg" id="myself">
<h1 >Hi, I’m Sanket</h1>
<p  class="mycolor">Nice to meet you.</p>
<br>
<h4>My career began in Edit Institude designing Website and Grahpics, and I’ve arrived as an all around Web designer working in Mariainfotech.</h4>
<br>

<p class="mycolor">I wonder what’s next...</p>



</div>
<!-- ------------------------------------------------------------------- -->

<div class="container text-center" id="skills">
<h1 class="heading  mycolor">SKILLS</h1>
<br>
<p class="text-white h5">Any good designer can design in ANY medium just like
any good developer can program in ANY language.</p>
<br>
<br>
<br>

<div class="row">
<div class="col-md-6 form-group" style="border-right: 1px solid #00FF00">
<h3 class="text-center mycolor">Strong Knowlage</h3>
<br>
<h5 class="text-left">HTML</h5>
<div class="progress">
<div class="progress-bar " style="width: 90%">90 %</div>
</div><br>


<h5 class="text-left">CSS</h5>
<div class="progress">
<div class="progress-bar" style="width: 90%">90 %</div>
</div><br>

<h5 class="text-left">Boostrap 3</h5>
<div class="progress">
<div class="progress-bar" style="width: 85%;">85 %</div>
</div><br>


<h5 class="text-left">Boostrap 4</h5>
<div class="progress">
<div class="progress-bar" style="width: 85%;">85 %</div>
</div><br>



<h5 class="text-left">Javascript</h5>
<div class="progress">
<div class="progress-bar" style="width: 70%;">70 %</div>
</div><br>

<h5 class="text-left">JQuery</h5>
<div class="progress">
<div class="progress-bar" style="width: 70%;">70 %</div>
</div><br>
<h5 class="text-left">PHP</h5>
<div class="progress">
<div class="progress-bar" style="width: 60%;">60 %</div>
</div><br>


<h5 class="text-left">MySQL</h5>
<div class="progress">
<div class="progress-bar" style="width: 60%;">60 %</div>
</div><br>


<h5 class="text-left">GitHub</h5>
<div class="progress">
<div class="progress-bar" style="width: 75%;">75 %</div>
</div><br>






</div>
<div class="col-md-6 form-group" style="border-left: 1px solid #00FF00">
<h3 class="text-center mycolor">Basic Knowlage</h3>
<br>
<h5 class="text-left">Illustrator</h5>
<div class="progress">
<div class="progress-bar" style="width: 75%;">75 %</div>
</div><br>


<h5 class="text-left">Photoshop</h5>
<div class="progress">
<div class="progress-bar" style="width: 60%;">60 %</div>
</div><br>



<h5 class="text-left">Corel Draw</h5>
<div class="progress">
<div class="progress-bar" style="width: 60%;">60 %</div>
</div><br>


<h5 class="text-left">Ajax</h5>
<div class="progress">
<div class="progress-bar" style="width: 50%;">50 %</div>
</div><br>

<h5 class="text-left"> MS Word</h5>
<div class="progress">
<div class="progress-bar" style="width: 50%;">50 %</div>
</div><br>


<h5 class="text-left">MS Excel</h5>
<div class="progress">
<div class="progress-bar" style="width: 50%;">50 %</div>
</div><br>

<h5 class="text-left">WordPress</h5>
<div class="progress">
<div class="progress-bar" style="width: 30%;">30 %</div>
</div><br>

<h5 class="text-left">Code Igniter</h5>
<div class="progress">
<div class="progress-bar" style="width: 30%;">30 %</div>
</div><br>



<h5 class="text-left">.Net</h5>
<div class="progress">
<div class="progress-bar" style="width: 30%;">30 %</div>
</div><br>

</div>
</div>	



</div>

<br>


<br>
<!-- ------------------------------------------------------------------- -->

<div class="container-fluid text-center" id="work">

<h1 class="mycolor">My Recent Work</h1>
<br>
<div class="container">
<p class="text-white h5">My career has taken a natural progression from client websites, to template clubs, to UI templates, to UX design, to complex analytical UX design.</p>
<P class="mycolor">Click on heading to see all and you can download codes</P>
</div>
<br>
<br>
<br>
<br>
<br>




<figcaption  class="h4"><a href="graphics_view_all.php" class="text-white">- Graphics -</a></figcaption>

<section class="gallery-block compact-gallery">


<div class="row no-gutters">

<div class="owl-carousel" >
<?php 
$sql=mysqli_query($conn,"SELECT * from graphics ORDER BY id DESC");
while ($fetch=mysqli_fetch_array($sql)) {
$img=$fetch['img'];
$details=$fetch['details'];
?>
<div class="item zoom-on-hover" style="height:170px">
<a class="lightbox" href="img/graphics/<?php echo $img ?>">
<img class="img-fluid image" src="img/graphics/<?php echo $img ?>">

<span class="description">
<span class="description-body"><?php echo $details ?></span>

</span>
</a>

</div>



<?php } ?>


</div>
</div>
</section>

<br>
<br>
<br>
<br>
<br>

<figcaption  class="h4"><a href="websites_view_all.php" class="text-white">- Websites -</a></figcaption> 
<div class="container">
<div class="row">

<?php 
$sql=mysqli_query($conn,"SELECT * from websites ORDER BY id DESC limit 4");
while ($fetch=mysqli_fetch_array($sql)) {
$img=$fetch['img'];
$details=$fetch['details'];
$link=$fetch['link'];

?>

<div class="col-md-6 form-group">
<div class="hovereffect">
<img class="img-fluid img-thumbnail" src="img/websites/<?php echo $img ?>" >

<div class="overlay">
<h2><?php echo $details ?></h2>
<a class="info mybtn" href="<?php echo $link ?>">View</a>
</div>
</div>
</div>


<?php } ?>


</div>
</div>

<br>
<br>
<br>
<br>
<br>
<figcaption  class="h4"><a href="webdesigns_view_all.php" class="text-white">- Web Designs -</a></figcaption>
<div class="owl-carousel" >

<?php 
$i=1;
$sql=mysqli_query($conn,"SELECT * from webdesigns ORDER BY id DESC");
while ($fetch=mysqli_fetch_array($sql)) {
$id=$fetch['id'];
$img=$fetch['img'];
$details=$fetch['details'];

?>

<div class="card">
<div class="card-header" style="padding: 0">
<iframe src="img/webdesigns/<?php echo $img ?>" width="100%" height="200px" style="border: none"></iframe>
</div>
<div class="card-footer text-center">
<a href="img/webdesigns/<?php echo $img ?>" ><?php echo $details ?></a>
<br>
<a href="img/webdesigns/<?php echo $img ?>" >   - View -</a>
</div>
</div>

<?php } ?>

</div>
</div>
<!-- ------------------------------------------------------------------- -->
<br>
<br>
<br>
<br>
<br>
<div class="container">
<img src="img/hero.png" class="img-fluid" ></div>
<div class="text-center text-white mybg" id="contact">


<br>

<div class="container">




<br>
<br>
<img src="img/logo.png"  class="img-fluid">

<br>
<br>

<p class="text-white h5">Want to chat about something?</p>
<br>
<input type="button" class="mybtn" data-toggle="modal" data-target="#myModal" value="CONTACT ME" name="">
<br>
<div class="row">
<div class="col-md-6">
<a class="fas fa-file-download" href="asset/Sanket Agre Resume.pdf" target="_blank" title="My Resume"></a>
<a class="fab fa-youtube" title="youtube" href="https://www.youtube.com/channel/UCNcGDCtexb7nznRuftwc3GQ"></a>
<a class="fab fa-facebook-square" title="Facebook" href="https://www.facebook.com/18asanket"></a>
<a class="fab fa-github" title="Github" href="https://github.com/18asanket"></a>
<a class="fab fa-instagram" title="Instagram" href="https://www.instagram.com/18asanket/"></a>
</div>
<div class="col-md-6">
<h5 style="margin-top: 25px;">Design & Developed By <span href="#" class="mycolor">Sanket S. Agre.</span></h5>
</div>
</div>
<br>
<div class="text-center">This Website Design in <span class="mycolor">Bootstrap 4</span> and Developed in <span  class="mycolor">PHP.</span></div>
</div>
<br>
</div>



<script src="asset/script.js"></script>

</body>
</html>


<video autoplay muted loop id="myVideo">
<source src="asset/movie2.mp4" type="video/mp4">
</video>


<div class="modal fade" id="myModal" >
<div class="modal-dialog">
<div class="modal-content" >


<div class="modal-header">
<h4 class="modal-title">Contact Me</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<form action="contact.php" method="post">
<div class="modal-body">
<div class="form-group">
<label>Full Name <span style="color:red">*</span></label>
<input type="text" class="form-control" name="name">
</div>

<div class="form-group">
<label>Email <span style="color:red">*</span></label>
<input type="text" class="form-control" name="email">
</div>


<div class="form-group">
<label>Phone Number <span style="color:red">*</span></label>
<input type="text" class="form-control" name="number">
</div>
<div class="form-group">
<label>Massage <span style="color:red">*</span></label>
<textarea name="msg" rows="3" class="form-control"></textarea>
</div>


</div>

<div class="modal-footer">
<button type="submit" name="btn" class="btn btn-success" >Send</button>
</div>
</form>
</div>
</div>
</div>