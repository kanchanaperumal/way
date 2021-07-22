<?php
session_start();
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/head.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Home Page</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width-device-width", initial scale="1.0"/>
	<style type="text/css">
		
		body{
	font-family:monospace;
	outline: none;
	background-image:url(img/1.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-color:#CCCCCC;
	height:100%;
		}
		.dropdown-menu{
		background-color:#CCCCCC;
		}
		.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
	border-radius: 0 6px 6px 6px;
	background-color: #CCCCCC;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #666666;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
Share
Improve this answer
Follow.style1 {color: #F0F0F0}
    body,td,th {
	color: #000000;
	font-family: Georgia, Times New Roman, Times, serif;
	font-style: italic;
}
.style7 {font-weight: bold}
    .style8 {color: #000000}
    </style>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><img src="img/1.png" width="71" height="35" class="rounded" alt="Cinque Terre"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Food
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="fruits.html">Fruits</a></li>
          <li><a class="dropdown-item" href="vegetables.html">Vegetables</a></li>
		  
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Recipes by Food</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="vegetarian.html">Vegetarian</a></li>
              <li><a class="dropdown-item" href="Non-Vegetarian.html">Non-Vegetarian</a></li>
            </ul>
          </li>
        </ul>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="dress.html">Dress</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="jewellary.html">Jwellery</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="appliences.html">Appliences</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="games.html">Games</a>
      </li>
    </ul>
	   <ul class="nav navbar-nav navbar-right">
      	  <li class="nav-item">
        <a class="nav-link" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>
Logout<span class="sr-only">(current)</span></a>
      </li>
</ul>
	
  </div>
</nav>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div> <p>&nbsp;</p>
 <p>&nbsp;</p>                
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 
 		<div class="container  style7"><h1 align="left" class="style6 style7 style8"> Hi,   <?php echo $_SESSION['login']; ?>!</h1>
      <h1 align="center" class="style5 blink_me style8"><strong>Welcome to Our Webpage!</strong></h1>
	  <h2 align="center" class="style5 blink_me style8"><strong> Keep On A Way!....</strong></h2>
  </div>
</div>
<!-- InstanceEndEditable -->
</div>

</body>
<!-- InstanceEnd --></html>
