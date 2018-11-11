<?php include 'cms/common/dbconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/logo.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">

</script>
  <link rel="stylesheet" type="text/css" href="cms/cms_asset/cms_style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
  <a href="index.php"><img src="img/logo.png" class="img-fluid" width="33px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item">
        <a class="nav-link" href="graphics_view_all.php">Graphics</a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="websites_view_all.php">Websites</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="webdesigns_view_all.php">Web-Designs</a>
      </li>
          
    </ul>
  </div>
  </div> 
</nav>