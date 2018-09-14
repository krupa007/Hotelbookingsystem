

<?php
        // put your code here
   ?>
   




<!DOCTYPE html>

<html>

<head>

<title>Blue-Moon Hotel Home</title>


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/chocolat.css" rel="stylesheet">

<!-- js -->

<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- start-banner-scrolling -->

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


<div class="banner">

	<div class="container">

		<div class="header-nav">

			<div class="logo">

				<h1><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color: lightblue"></span>BLUE MOON </a></h1>

			</div>

			<div class="navigation">

				<span class="menu"><img src="images/menu.png" alt=""/></span>

				<nav class="cl-effect-11" id="cl-effect-11">

					<ul class="nav1">

						<li><a class="active" href="index.php" data-hover="HOME">HOME</a></li>

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
<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!social iconn!!!!!!!!!!!!!!!!! -->

			<div class="social-icons">

				<ul>

					<li><a href="https://www.facebook.com/bluemountainhotels/" class="f1"></a></li>

					<li><a href="#" class="f2"></a></li>

					<li><a href="https://plus.google.com/104251527710192671192" class="f3"></a></li>
                                        
                                        <li><a href="admin.php" class="glyphicon glyphicon-user" style="font-size:30px;"></a></li>

					

				</ul>

			</div>

			<div class="clearfix"></div>

		</div>
            
        </div>


<!-- *************************************************BANNER************ -->


		<div class="banner-info">

			<script src="js/responsiveslides.min.js"></script>

			<script>

									

									$(function () {

									 // Slideshow 4

									$("#slider3").responsiveSlides({

										auto: true,

										pager: false,

										nav: false,

										speed: 500,

										namespace: "callbacks",

										before: function () {

									$('.events').append("<li>before event fired.</li>");

									},

									after: function () {

										$('.events').append("<li>after event fired.</li>");

										}

										});

										});

			</script>

			<div  id="top" class="callbacks_container">

				<ul class="rslides" id="slider3">

					<li>

						<div class="banner-text">

							<h2>WELCOME</h2>

							<h4>EXCELLENT SERVICES WITH BEST PRICE</h4>

						</div>

					</li>

					<li>

						<div class="banner-text">

							<h3>WELCOME</h3>

							<h4>RELAX AND EXPERIENCE SOMETHING NEW</h4>

						</div>

					</li>

					<li>

						<div class="banner-text">

							<h3>WELCOME</h3>

							<h4>FIND YOUR IDEAL STAY ON BLUE-MOON HOTEL</h4>

						</div>

					</li>

				</ul>

			</div>

		</div>





              <!-- ************************//script for menu-********************************************** --> 

              
              
              
              
<!-- //banner -->


<div class="banner-bottom" style="background: none"></div>
<div class="banner-bottom" style="background: none"></div>
<div class="banner-bottom" style="background: none"></div>
</div>
<!-- banner-pos -->

<div class="banner-pos">

	<div class="container">

		<div class="banner-pos-grids">

			<div class="ban-pos-gridone">

				<h3>Featured Hotel</h3>

				<div class="ban-pos-info l-grids">

					<figure class="effect-bubba">

							<img src="images/4.jpg" alt=""/>

							<figcaption>

								<h4>BLUE-MOON HOTEL</h4>

                                                                <p style="font-size: 15px;">Heritage linked interiors invites your eyes and heart inside,</p>																

							</figcaption>			

					</figure>

				</div>

			</div>

			<div class="ban-pos-gridtwo l-grids">

				<div class="ban-pos-info l-grids">

					<figure class="effect-bubba">

							<img src="images/6.jpg" alt=""/>

							<figcaption>

								<h4>BLUE-MOON HOTEL</h4>

                                                                <p style="font: 15px">

Blue-Moon is a wonderful setting to refresh at the end of a fulfilling day of business or sightseeing, with an Ayurvedic or signature Oberoi treatment. It is open 24hrs a day.</p>														

							</figcaption>			

					</figure>

				</div>

			</div>

			<div class="ban-pos-gridthree l-grids">

				<div class="ban-pos-info l-grids">

					<figure class="effect-bubba">

							<img src="images/5.jpg" alt=""/>

							<figcaption>

								<h4>BLUE-MOON HOTEL</h4>

								<p>

Everything a guest might need can be found in the hotel, from a personal working desk with iMac desktop and Wi-Fi,to a Sony Playstation 4 and satellite TV .</p>																

							</figcaption>			

					</figure>

				</div>

			</div>

			<div class="clearfix"></div>

		</div>

	</div>

</div>



<!-- //banner-pos -->

<!-- welcome -->

<div class="welcome">

	<div class="container">

		<h2 class="tittle-one">WELCOME</h2>

		<div class="welcome-grids">

			<div class="col-md-8 welcome-left">

				<ul>

					<li><a href="#">HOME</a></li>

                                        <li><a href="about.php">ABOUT</a></li>

                                        <li><a href="typography.php">SERVICES</a></li>

				</ul>

			</div>

			<div class="col-md-4 welcome-middle">

				<ul>

                                    <li><a href="booking.php">BOOKING</a></li>

                                    <li><a href="contact.php">CONTACT US</a></li>
                                        
                                        <li><a href="#">HOTEL</a></li>

					

				</ul>

			</div>

			

			<div class="clearfix"></div>

		</div>

		<p>With annual festivals and ever-changing events, 
                    it is perfect for the leisure traveller. For the business traveller, 
                    our hotel has two separate meeting facilities and is near the business district.</p>

	</div>

</div>

<!-- //welcome -->

<!-- facilities -->

<div class="facilities">

	<div class="container">

		<h3 class="tittle">FACILITIES</h3>

		<div class="facilities-grids">

			<div class="col-md-6 facilities-grid">

				<img src="images/222.jpg" alt="" />

			</div>

			<div class="col-md-6 facilities-grid-left">

				<div class="fac-grids">

					<div class="facilities-left">

						<img src="images/111.jpg" alt="" />

					</div>

					<div class="facilities-right">

						<img src="images/333.jpg" alt="" />

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="fac-rig-btm">

					<img src="images/444.jpg" alt="" />

				</div>

			</div>

			<div class="clearfix"></div>

		</div>

	</div>

</div>

<!-- //***************************************************facilities******************************************************** -->

<!-- services -->

<div class="feature-serv">

	<div class="container">

		<h3 class="tittle">FEATURED SERVICES</h3>

		<div class="services-bottom-grids">

				<div class="col-md-4 services-bottom-grid">

					<div class="services-bottom-grd-left wel-grid">

						<div class="time-service">

							<figure class="icon">

								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>

							</figure>

						</div>

					</div>

					<div class="services-bottom-grd-right">

						<h4>24-Hour In hotel Dining</h4>

						<p>Should guests wish to try something different, Blue-Moon staff can always organize a variety of multicuisine dishes. </p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="col-md-4 services-bottom-grid">

					<div class="services-bottom-grd-left wel-grid btm-gre">

						<div class="time-service">

							<figure class="icon">

								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>

							</figure>

						</div>

					</div>

					<div class="services-bottom-grd-right">

						<h4> SPA </h4>

						<p>The resort’s Spa therapists are at the guests’ service to provide them with rejuvenating health and beauty treatments at the Waterfront Spa situated right above the water. </p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="col-md-4 services-bottom-grid">

					<div class="services-bottom-grd-left wel-grid">

						<div class="time-service">

							<figure class="icon">

								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>

							</figure>

						</div>

					</div>

					<div class="services-bottom-grd-right">

						<h4>Kids' Entertainment Service</h4>

						<p>At the Kids’ Club, our little guests and their families can play table football and board games, or get creative at the special drawing tables.Blue-Moon also offers an outdoor playground, the Kids’ Corner, and various beach & pool toys for young guests of all ages</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="col-md-4 services-bottom-grid">

					<div class="services-bottom-grd-left wel-grid btm-gre">

						<div class="time-service">

							<figure class="icon">

								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>

							</figure>

						</div>

					</div>

					<div class="services-bottom-grd-right">

						<h4>Luxuriously stocked mini-bars</h4>

						<p>hotel’s bar tenders are at the guests’ service to provide them with drinks of heir choice at the rooftop bar situated right above the cafeteria.</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="col-md-4 services-bottom-grid">

					<div class="services-bottom-grd-left wel-grid">

						<div class="time-service">

							<figure class="icon">

								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

							</figure>

						</div>

					</div>

					<div class="services-bottom-grd-right">

						<h4>Sony PlayStation 4</h4>

						<p>Everything a guest might need can be found in the BLUE-MOON, Wi-Fi internet, to a Sony Playstation 4 and satellite TV in all rooms.</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="col-md-4 services-bottom-grid">

					<div class="services-bottom-grd-left wel-grid btm-gre">

						<div class="time-service">

							<figure class="icon">

								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>

							</figure>

						</div>

					</div>

					<div class="services-bottom-grd-right">

						<h4>Roof Top garden</h4>

						<p>Guests can relax in the garden, or enjoy dinner at their outdoor lounge.</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="clearfix"> </div>

		</div>

	</div>

</div>

<!-- //services -->

<!--******************************************* gallery ******************************************************-->

<div class="gallery" id="gallery">

	<div class="container">

		<h3 class="tittle">GALLERY</h3>

			<div class="gallery-bottom">

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

							<a href="images/dd.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/aaa.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

						   <a href="images/bbb.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

							<a href="images/ccc.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ccc.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More Pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

						   <a href="images/ddd.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ddd.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More Pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="col-md-4 gal-grid">

						 <div class="view view-fifth">

							<a href="images/eee.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/eee.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More Pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

                                                    <a href="images/aa.png" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More Pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

							<a href="images/rf1.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ggg.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More Pics</span>

								</div>

							</a>

						</div>

					</div>

					

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

							<a href="images/cc.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More Pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="col-md-4 gal-grid">

						<div class="view view-fifth">

						   <a href="images/25.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/aaa.jpg" alt="" class="img-responsive">

								<div class="mask">

									<h4>BLUE MOON</h4>

									<p>A wonderful serenity has taken possession of my entire soul.</p>

									<span>More Pics</span>

								</div>

							</a>

						</div>

					</div>

					<div class="clearfix"> </div>

			</div>

				<script src="js/jquery.chocolat.js"></script>

			

			<!--light-box-files -->

			<script type="text/javascript">

			$(function() {

				$('.gallery a').Chocolat();

			});

			</script>



	</div>

</div>

<!-- //gallery -->

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

					<li>Forest Manor Road,</li>

					<li>Toronto, Canada</li>

					<li>+1 (647)- 554-8426</li>
                                        
                                        <li> <a href="mailto:bluemoonhotelstoronto@gmail.com">bluemoonhotelstoronto@gmail.com </a></li>

				</ul>

			</div>

			<div class="col-md-3 ftr-logo">

                            <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color: lightblue"></span>BLUE MOON</a>

				<ul>

					<li><a href="https://www.facebook.com/bluemountainhotels/" class="f1"></a></li>

					<li><a href="#" class="f2"></a></li>

					<li><a href="https://plus.google.com/104251527710192671192" class="f3"></a></li>
                                       

				</ul>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

<!--footer-->



<!-- for bootstrap working -->

	<script src="js/bootstrap.js"></script>

<!-- //for bootstrap working -->

<!-- smooth scrolling -->

	<script type="text/javascript">

		$(document).ready(function() {

									

		$().UItoTop({ easingType: 'easeOutQuart' });

		});

	</script>

	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- //smooth scrolling -->

</body>

</html>



