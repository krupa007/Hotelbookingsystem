<?php



?>



<!DOCTYPE html>

<html>

<head>

<title>Blue Moon Hotel </title>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //for-mobile-apps -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />



<!-- js -->

<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->

		<script type="text/javascript" src="js/move-top.js"></script>

		<script type="text/javascript" src="js/easing.js"></script>

		<script type="text/javascript">

			jQuery(document).ready(function($) {

				$(".scroll").click(function(event){		

					event.preventDefault();

					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);

				});

			});

		</script>

	<!-- start-smoth-scrolling -->

</head>

<body>

<!-- banner -->

<div class="banner page-head">

	<div class="container">

		<div class="header-nav">

			<div class="logo">

                            <h1><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Blue Moon</a></h1>

			</div>

			<div class="navigation">

				<span class="menu"><img src="images/menu.png" alt=""/></span>

				<nav class="cl-effect-11" id="cl-effect-11">

					<ul class="nav1">

                                            <li><a href="index.php" data-hover="HOME">HOME</a></li>

                                            <li><a href="about.php" data-hover="ABOUT">ABOUT</a></li>

                                            <li><a href="typography.php" data-hover="SERVICES">SERVICES</a></li>

                                            <li><a href="booking.php" data-hover="BOOKING">BOOKING</a></li>

                                            <li><a class="active" href="contact.php" data-hover="CONTACT">CONTACT</a></li>

					</ul>

				</nav>

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

			<div class="social-icons">

				<ul>

					<li><a href="https://www.facebook.com/bluemountainhotels/" class="f1"></a></li>

					<li><a href="#" class="f2"></a></li>

					<li><a href="https://plus.google.com/104251527710192671192" class="f3"></a></li>

					<li><a href="#" class="f4"></a></li>

				</ul>

			</div>

			<div class="clearfix"></div>

		</div>

	</div>

</div>

<!-- //banner -->

<!--contact-->

<div class="contact">

	<div class="container">

		

		

		<div class="contact-form">

			<h3 class="tittle"></h3>

			

		</div>

	</div>

</div>



<!--//contact-->

<!--footer-->

<div class="footer">

		<div class="container">				 	

			<div class="col-md-3 ftr_navi ftr">

				<h3>NAVIGATION</h3>

				<ul>

                                    <li><a href="index.php">Home</a></li>

                                    <li><a href="about.php">About</a></li>

                                    <li><a href="typography.php">Services</a></li>						

                                    <li><a href="booking.php">Booking</a></li>

                                    <li><a href="contact.php">Contact</a></li>

				</ul>

			</div>

			<div class="col-md-3 ftr_navi ftr">

					 <h3>FACILITIES</h3>

					 <ul>

                                             <li><a href="doubleroom.php">Double bedrooms</a></li>

                                             <li><a href="single.php">Single bedrooms</a></li>

                                             <li><a href="royalfacility.php">Royal facilities</a></li>						

                                             <li><a href="connectedroom.php">Connected rooms</a></li>

					 </ul>

			</div>

			<div class="col-md-3 ftr_navi ftr">

				<h3>GET IN TOUCH</h3>

				<ul>

					<li>80 forest road,</li>

					<li>Toronto, Canada</li>

                                        <li><input type="submit" value="" /></li>                                
                                            
                                        <li><a href="647-554-8426">647-554-8426</a></li>

				</ul>

			</div>

			<div class="col-md-3 ftr-logo">

                            <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Blue Moon </a>

				<ul>

					<li><a href="https://www.facebook.com/bluemountainhotels/" class="f1"> </a></li>

					<li><a href="#" class="f2"> </a></li>

					<li><a href="https://plus.google.com/104251527710192671192" class="f3"> </a></li>

				</ul>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

<!--footer-->

<!-- copy -->

<div class="copy-right">

	<div class="container">

			

	</div>

</div>


	<script src="js/bootstrap.js"></script>



	<script type="text/javascript">

		$(document).ready(function() {

								

		$().UItoTop({ easingType: 'easeOutQuart' });

		});

	</script>

	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>

</html>