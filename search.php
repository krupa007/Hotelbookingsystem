<?php



?>





<!DOCTYPE html>

<html>

<head>

<title></title>




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //for-mobile-apps -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">

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

                            <h1><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Blue-Moon Hotel</a></h1>

			</div>

			<div class="navigation">

				<span class="menu"><img src="images/menu.png" alt=""/></span>

				<nav class="cl-effect-11" id="cl-effect-11">

					<ul class="nav1">

                                            <li><a href="index.php" data-hover="HOME">HOME</a></li>

                                            <li><a href="about.php" data-hover="ABOUT">ABOUT</a></li>

                                            <li><a href="typography.php" data-hover="SERVICES">SERVICES</a></li>

                                            <li><a href="booking.php" data-hover="BOOKING">BOOKING</a></li>

                                            <li><a href="contact.php" data-hover="CONTACT">CONTACT</a></li>

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

					<li><a href="#" class="f1"></a></li>

					<li><a href="#" class="f2"></a></li>

					<li><a href="#" class="f3"></a></li>

					<li><a href="#" class="f4"></a></li>

				</ul>

			</div>

			<div class="clearfix"></div>

		</div>

	</div>

</div>

<!-- //banner -->

<!--search-->

<div class="search-page">

	<div class="container">	

		<div class="search-grids">

			<div class="col-md-3 search-grid-left">

				<div class="search-hotel">

					<h3 class="sear-head">Name contains</h3>

					<form>

						<input type="text" value="Hotel name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Hotel name...';}" required="">

						<input type="submit" value=" ">

					</form>

				</div>

				

				<div class="range">

					<h3 class="sear-head">Average nightly rate</h3>

							<ul class="dropdown-menu6">

								<li>

									                

									<div id="slider-range"></div>							

										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />

									</li>			

							</ul>

							<!---->

							<script type='text/javascript'>//<![CDATA[ 

							$(window).load(function(){

							 $( "#slider-range" ).slider({

										range: true,

										min: 0,

										max: 9000,

										values: [ 50, 6000 ],

										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );

										}

							 });

							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );



							});//]]>  



							</script>

							

				</div>

				<div class="range-two">

					<h3 class="sear-head">Distance from</h3>

						<select class="sel">

							<option value="">Enter City Center</option>

							<option value="">Park View Center</option>

							<option value="">E Park Road</option>

							<option value="">Silver City</option>   

						</select>



							<ul class="dropdown-menu5">

								<li>

									               

									<div id="slider-range1"></div>							

										<input type="text" id="amount1" style="border: 0; color: #ffffff; font-weight: normal;" />

									</li>			

							</ul>

							<!---->

							<script type="text/javascript" src="js/jquery-ui.js"></script>

							

							<script type='text/javascript'>//<![CDATA[ 

							$(window).load(function(){

							 $( "#slider-range1" ).slider({

										range: true,

										min: 0,

										max: 6000,

										values: [ 50, 5000 ],

										slide: function( event, ui ) {  $( "#amount1" ).val( "KM-" + ui.values[ 0 ] + " - KM-" + ui.values[ 1 ] );

										}

							 });

							$( "#amount1" ).val( "KM-" + $( "#slider-range1" ).slider( "values", 0 ) + " - KM-" + $( "#slider-range1" ).slider( "values", 1 ) );



							});//]]>  



							</script>

				</div>

				<div class="single-star-bottom">

					<h3 class="sear-head">Star rating</h3>

						

							<input type="checkbox"  id="nike" value="">

							<label for="nike"><span></span><b><img src="images/st2.png" alt="" /></b></label>

						

						

							<input type="checkbox"  id="nike1" value="">

							<label for="nike1"><span></span> <b><img src="images/st3.png" alt="" /></b></label>

					

					

							<input type="checkbox"  id="nike2" value="">

							<label for="nike2"><span></span><b><img src="images/st4.png" alt="" /></b></label>

				

				

							<input type="checkbox"  id="nike3" value="">

							<label for="nike3"><span></span> <b><img src="images/st5.png" alt="" /></b></label>

				

						

							<input type="checkbox"  id="nike4" value="">

							<label for="nike4"><span></span><b><img src="images/st.png" alt="" /></b></label>

						

				</div>

				

				<div class="menu-grid">

					<ul class="menu_drop">

						<li class="item1"><a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>Features</a>

							<ul>

								<li class="subitem1"><a href="#">Roll-in shower </a></li>

								<li class="subitem2"><a href="#">Comfortable bathroom</a></li>

								<li class="subitem3"><a href="#">WI-FI facility</a></li>

							</ul>

						</li>

						<li class="item2"><a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>Facilities</a>

							<ul>

								<li class="subitem1"><a href="#">Childcare </a></li>

								<li class="subitem2"><a href="#">Gym</a></li>

								<li class="subitem3"><a href="#">Bar</a></li>

							</ul>

						</li>

						<li class="item3"><a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>Accommodation type</a>

							<ul>

								<li class="subitem1"><a href="#">Resort</a></li>

								<li class="subitem2"><a href="#">Hostel</a></li>

								<li class="subitem3"><a href="#">Apartment</a></li>

							</ul>

						</li>

						<li class="item4"><a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>Landmarks</a>

							<ul>

								<li class="subitem1"><a href="#">Mexican City</a></li>

								<li class="subitem2"><a href="#">Park View Center</a></li>

								<li class="subitem3"><a href="#">Land Park Center</a></li>

							</ul>

						</li>

						<li class="item5"><a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>Neighbourhood</a>

							<ul>

								<li class="subitem1"><a href="#">Diamond Park Colony</a></li>

								<li class="subitem2"><a href="#">E Park Road</a></li>

								<li class="subitem3"><a href="#">lake View Center</a></li>

							</ul>

						</li>

					</ul>

					<!-- script for tabs -->

						<script type="text/javascript">

							$(function() {

							

								var menu_ul = $('.menu_drop > li > ul'),

									   menu_a  = $('.menu_drop > li > a');

								

								menu_ul.hide();

							

								menu_a.click(function(e) {

									e.preventDefault();

									if(!$(this).hasClass('active')) {

										menu_a.removeClass('active');

										menu_ul.filter(':visible').slideUp('normal');

										$(this).addClass('active').next().stop(true,true).slideDown('normal');

									} else {

										$(this).removeClass('active');

										$(this).next().stop(true,true).slideUp('normal');

									}

								});

							

							});

						</script>

					<!-- script for tabs -->



				</div>

			</div>

			<div class="col-md-9 search-grid-right">

				<div class="hotel-rooms">

					<div class="hotel-left">

                                            <a href="single.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Grand Park Hyatt</a>

						<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>

						<div class="hotel-left-grids">

							<div class="hotel-left-one">

                                                            <a href="single.php"><img src="images/21.jpg" alt="" /></a>

							</div>

							<div class="hotel-left-two">

								<div class="rating text-left">

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

								</div>

                                                            <a href="single.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diamond Street</a>

								<p>2.5 km to Sed ut perspiciatis <span> 2.6 km to sit voluptatem</span></p>

							</div>

							<div class="clearfix"></div>

						</div>

					</div>

					<div class="hotel-right text-right">

						<h4><span>$8,750</span> $4,850</h4>

						<p>Best price</p>

                                                <a href="single.php">Continue</a>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="hotel-rooms">

					<div class="hotel-left">

                                            <a href="single.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Royal Taj Coromandel</a>

						<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>

						<div class="hotel-left-grids">

							<div class="hotel-left-one">

                                                            <a href="single.php"><img src="images/22.jpg" alt="" /></a>

							</div>

							<div class="hotel-left-two">

								<div class="rating text-left">

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

								</div>

                                                            <a href="single.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diamond Street</a>

								<p>2.5 km to Sed ut perspiciatis <span> 2.6 km to sit voluptatem</span></p>

							</div>

							<div class="clearfix"></div>

						</div>

					</div>

					<div class="hotel-right text-right">

						<h4><span>$3,350</span> $1,450</h4>

						<p>Best price</p>

                                                <a href="single.php">Continue</a>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="hotel-rooms">

					<div class="hotel-left">

                                            <a href="single.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Crowne Plaza</a>

						<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>

						<div class="hotel-left-grids">

							<div class="hotel-left-one">

                                                            <a href="single.php"><img src="images/23.jpg" alt="" /></a>

							</div>

							<div class="hotel-left-two">

								<div class="rating text-left">

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

								</div>

                                                            <a href="single.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diamond Street</a>

								<p>2.5 km to Sed ut perspiciatis <span> 2.6 km to sit voluptatem</span></p>

							</div>

							<div class="clearfix"></div>

						</div>

					</div>

					<div class="hotel-right text-right">

						<h4><span>$9,750</span> $5,700</h4>

						<p>Best price</p>

                                                <a href="single.php">Continue</a>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="hotel-rooms">

					<div class="hotel-left">

                                            <a href="single.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Modern Hilton Park</a>

						<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>

						<div class="hotel-left-grids">

							<div class="hotel-left-one">

                                                            <a href="single.php"><img src="images/24.jpg" alt="" /></a>

							</div>

							<div class="hotel-left-two">

								<div class="rating text-left">

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

								</div>

                                                            <a href="single.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diamond Street</a>

								<p>2.5 km to Sed ut perspiciatis <span> 2.6 km to sit voluptatem</span></p>

							</div>

							<div class="clearfix"></div>

						</div>

					</div>

					<div class="hotel-right text-right">

						<h4><span>$9,750</span> $6,800</h4>

						<p>Best price</p>

                                                <a href="single.php">Continue</a>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="hotel-rooms">

					<div class="hotel-left">

                                            <a href="single.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Grand park Hotel</a>

						<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>

						<div class="hotel-left-grids">

							<div class="hotel-left-one">

                                                            <a href="single.php"><img src="images/25.jpg" alt="" /></a>

							</div>

							<div class="hotel-left-two">

								<div class="rating text-left">

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

								</div>

                                                            <a href="single.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diamond Street</a>

								<p>2.5 km to Sed ut perspiciatis <span> 2.6 km to sit voluptatem</span></p>

							</div>

							<div class="clearfix"></div>

						</div>

					</div>

					<div class="hotel-right text-right">

						<h4><span>$8,750</span> $4,850</h4>

						<p>Best price</p>

                                                <a href="single.php">Continue</a>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="hotel-rooms">

					<div class="hotel-left">

                                            <a href="single.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Royal Park Hyatt</a>

						<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>

						<div class="hotel-left-grids">

							<div class="hotel-left-one">

                                                            <a href="single.php"><img src="images/26.jpg" alt="" /></a>

							</div>

							<div class="hotel-left-two">

								<div class="rating text-left">

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

									<span>☆</span>

								</div>

                                                            <a href="single.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diamond Street</a>

								<p>2.5 km to Sed ut perspiciatis <span> 2.6 km to sit voluptatem</span></p>

							</div>

							<div class="clearfix"></div>

						</div>

					</div>

					<div class="hotel-right text-right">

						<h4><span>$4,650</span> $2,650</h4>

						<p>Best price</p>

                                                <a href="single.php">Continue</a>

					</div>

					<div class="clearfix"></div>

				</div>

			</div>

			<div class="clearfix"></div>

		</div>

	</div>

</div>

<!--//search-->

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

						 <li><a href="#">Double bedrooms</a></li>

						 <li><a href="#">Single bedrooms</a></li>

						 <li><a href="#">Royal facilities</a></li>						

						 <li><a href="#">Connected rooms</a></li>

					 </ul>

			</div>

			<div class="col-md-3 ftr_navi ftr">

				<h3>GET IN TOUCH</h3>

				<ul>

					<li>Ola-ola street jump,</li>

					<li>260-14 City, Country</li>

					<li>+62 000-0000-00</li>

				</ul>

			</div>

			<div class="col-md-3 ftr-logo">

                            <a href="index.php class="glyphicon glyphicon-home" aria-hidden="true"></span>Blue-Moon Hotel</a>

				<ul>

					<li><a href="#" class="f1"> </a></li>

					<li><a href="#" class="f2"> </a></li>

					<li><a href="#" class="f3"> </a></li>

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