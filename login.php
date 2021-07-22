<!doctype html>
<html><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- InstanceBeginEditable name="doctitle" -->
<title>login</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width-device-width", initial scale="1.0"/>
	<style type="text/css">
		
		body{
	font-family:monospace;
	outline: none;
	background-image: url(img/image.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	height:100%;
	background-color: #333333;
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
	color: #339933;
	font-family: Georgia, Times New Roman, Times, serif;
	font-style: italic;
}
    .style2 {font-size: 36px}
	


    .style3 {
	
	color: #000000;
	font-weight: bold;
}
.style4 {
	animation: blinker 1s linear 0.5s infinite;
	color: #000000;
	font-weight: bold;
}
    </style>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- InstanceBeginEditable name="head" -->
    	
	
	<style type="text/css">
<!--
.login {
	width: 400px;
	margin: 0 auto;
	padding: 30px 0;		
}
.login form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.login h1 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.login hr {
	margin: 0 -30px 20px;
}
.login .form-group {
	margin-bottom: 20px;
}
.login label {
	font-weight: normal;
	font-size: 15px;
}
.login .form-control {
	min-height: 38px;
	box-shadow: none !important;
}	
.login .input-group-addon {
	max-width: 42px;
	text-align: center;
}
.style3 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	color: #333333;
}
.style5 {color: #DDECF4}
.style6 {color: #333333}
.style11 {color: #333333; font-family: "Times New Roman", Times, serif;}
.style13 {color: #666666; font-family: Georgia, "Times New Roman", Times, serif; }
.style14 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style15 {
	font-size: 24px;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #000000;
}
.style16 {font-size: 24px; font-family: Georgia, "Times New Roman", Times, serif; color: #000066; }
	

-->
    </style>
    <!-- InstanceEndEditable -->
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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="register.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>Sign up<span class="sr-only">(current)</span></a>
      </li>
    </ul>
	    <ul class="nav navbar-nav navbar-right">
      
	  <li class="nav-item">
        <a class="nav-link" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>
Login<span class="sr-only">(current)</span></a>
      </li>
</ul>
	
  </div>
</nav>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div>

                <div class="login">
                    <form action="loginprocessform.php" method="POST">
					<h1 align="center" class="style13">Login Here</h1>
                      
                       <div class="form-group">
                          <label><span class="style11"></span><span class="style3">User Name</span></label>
                          <span class="style6">
                          <input type="text" class="form-control" name="username" placeholder="Please Enter User Name" required>
                          </span><span class="style5">                            </span></div>

                            <div class="form-group">
                            <label><span class="style11"></span><span class="style3">Password</span></label>
							<span class="style6">
                            <input type="password" class="form-control" name="password" placeholder="Please Enter Password" maxlength="15" required>
							 </span><span class="style5">                            </span> </div>
                        
						<div class="form-group" align="center">
                        <button type="submit" class="btn btn-primary" name=Login">
                        <div align="center" class="style14">Login</div>
                        </button>
						</div>
                    </form>
					<div class="text-center">
	  <div align="center"><span class="style15">Don't have an account?</span> <a href="register.php" class="style16">Register here</a></div>
	</div>
                </div>
</div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
