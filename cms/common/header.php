<?php 
include 'common/session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Panel</title>
    <link rel="icon" href="../asset/img/logo.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="../asset/style.css">
<script type="text/javascript">
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<style type="text/css">
	
/*
    slider css
*/

@font-face { font-family: Notera Personal; src: url('../asset/myfont2.ttf'); } 
@font-face { font-family: beauty; src: url('../asset/myfont.ttf'); } 
@font-face { font-family: Quarion-Light; src: url('../asset/font.ttf'); } 
@font-face { font-family: Lato; src: url('../asset/Lato.ttf'); } 


body {
    font-family: 'Lato';
    background: black;
}


a,
a:hover,
a:focus {
    color: #00FF00;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: black;
    border-bottom:1px solid #00FF00;
    border-radius: 0;
    margin-bottom: 40px;
    
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
}

#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: black;
    color: #fff;
    transition: all 0.3s;
    border-right: 1px solid #00FF00;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    background: black;
    text-align: center;
}

#sidebar ul.components {
    padding: 20px 0;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color:black!important;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: black;
    background: white;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #1d2125;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #343a40!important;
}

a.article,
a.article:hover {
    background: #1d2125 !important;
    color: #fff !important;
}
footer{
	border-top: 1px solid #00FF00;
	background: black;
	text-align: right;
	color:#00FF00;
	padding: 5px 15px;
}
footer span{
color:white;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: calc(100% - 250px);
    padding: 0px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}

#content.active {
    width: 100%;
}

.btn{
	background: #00FF00 !important;
	color:black !important;
	border-color: black !important;
outline:0 !important;

}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 800px) {
    #sidebar {
        margin-left: -250px;

    }
    #sidebar.active {
        margin-left: 0;
    }
    #content {
        width: 100%;
    }
    #content.active {
        width: calc(100% - 250px);
    }
    /*#sidebarCollapse span {
        display: none;
    }*/
}


form{
    color:white;
    text-align: center;
}


.form-control{
    background: black;
    outline: none;
       color:white;
       text-align: center;

}

.form-control:focus{
    background: black;
       outline: none;
       box-shadow: none;
       color:white;
}
table,label,.dataTables_info{
    color:white;
}


</style>
</head>
<body>
<div class="wrapper">
<nav id="sidebar">
<div class="sidebar-header">
<img class="img-fluid" width="100" src="../asset/img/logo.PNG">
</div>
<ul class="list-unstyled components">
<li>
<a href="#Designs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Designs</a>
<ul class="collapse list-unstyled" id="Designs">
	<li><a href="design_add.php"> Add</a></li>
	<li><a href=""> Update</a></li>
	<li><a href="design_view.php"> View</a></li>
</ul>
</li>
<li>
<a href="#Websites" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Websites</a>
<ul class="collapse list-unstyled" id="Websites">
	<li><a href=""> Add</a></li>
	<li><a href=""> Update</a></li>
	<li><a href=""> Delete</a></li>
</ul>
</li>
<li>
<a href="#Cool" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cool Stuff</a>
<ul class="collapse list-unstyled" id="Cool">
	<li><a href=""> Add</a></li>
	<li><a href=""> Update</a></li>
	<li><a href=""> Delete</a></li>
</ul>
</li>


</ul>
</nav>
<div id="content">
<nav class="navbar navbar-expand-md  navbar-dark sticky-top">
<a class="navbar-brand" href="#"><button type="button" id="sidebarCollapse" class="btn btn-info">
<i class="fas fa-align-left"></i>
<span>Toggle Sidebar</span>
</button></a>

<a href="common/logout.php" class="btn btn-info ml-auto">Logout</a>
<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">About</a>
</li> 
</ul>
</div> --> 
</nav>
<div class="container-fluid">
