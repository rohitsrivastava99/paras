<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	
    
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div class="header-left">
			<ul class="fableft">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
		<div class="header-right">
			<ul>
			<?php 
			if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
				echo "<li><a href='#'> Welcome ". $_SESSION['login'] ."</a></li> | <li><a href='logout.php'>Log out</a></li>";
			}else{
			?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			<?php } ?>	
			</ul>
			
        </div>

		</div>
	</div>
</div>
<!-- //header -->
<!-- logo -->
<div id="home" class="logo">
	<div class="container">
        <a href="index.php"><img src="images/logo.png" /></a>
            <form class="navbar-form" role="search">
              <div class="form-group">
                <input class="search" type="text" class="form-control" placeholder="Find Phone Numbers">
              </div>
              <button type="submit" class="btn btn-my">Search</button>
            </form>
	</div>
</div>
<div class="navigation">
	<div class="container">
		<span class="menu">MENU</span>
			<ul class="nav1">
                <li><a class="active" href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>		
               <li><a href="services.php">Services</a></li>
               <li><a href="sample.php">Sample</a></li>	
               <li><a href="shoppingcart.php">Shopping Cart</a></li>	
                <li><a href="contact.php">Contact</a></li>
			</ul>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
	</div>
</div>