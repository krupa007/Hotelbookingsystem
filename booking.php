<!DOCTYPE html>

<?php

        
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "hotelprject";


if (isset($_POST['reserve'])){
/* @var $members type */
$members=( $_POST['member']);
$room = ($_POST['rooms']);
$checkin = ($_POST['checkin']);
$checkout = ($_POST['checkout']);
$name = ($_POST['name']);
$email = ($_POST['email']);
$telephone = ($_POST['telephone']);
$message= ($_POST['message']);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

        $datetempcheckin = strtotime($checkin);
        $dateformattedcheckin = date("Y-m-d H:i:s",$datetempcheckin);
         
        $datetempcheckout = strtotime($checkout);
        $dateformattedcheckout = date("Y-m-d H:i:s",$datetempcheckout);//new
        
        $sql = "INSERT INTO bookinginfo (member,rooms,check_in,check_out,name,email,telephone,message) VALUES ('$members', '$room', '$dateformattedcheckin', '$dateformattedcheckout','$name','$email','$telephone','$message')";

if ($conn->query($sql) == TRUE) 
    {

    echo ("You are register now");    
      header('location: index.php');
  
   


// . "<br>" .$checkin . "   " .$dateformattedcheckin
   // echo '<script language="javascript">';
 // echo 'alery(message successfully sent)';  //not showing an alert box.
 // echo '</script>';
 // exit;
  
    }
    
else 
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    

$conn->close();



}

        ?>
<html>
    <head>
        
       <title>Blue Moon Hotel</title>



<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/jquery-ui.css" />

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
              
           <!--     <script type="text/javascript">
           alert("You are Register To Blue Moon Hotel ")
          //  echo(" you are  registered.");
          
            
    history.back();
  </script>
-->

        
        
       
    </head>
    <body>
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

                                                <li><a class="active" href="booking.php" data-hover="BOOKING">BOOKING</a></li>

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

<!--******************************************************************booking*************************************************************-->



<div class="booking">

	<div class="container">

		<h2 class="tittle-one">BOOKING</h2>

			<div class="reservation-form">

				<div class="col-md-3 reservation-left">

					<h3>Hotels</h3>

					<ul>

						<li><a href="booking.html"><img src="images/333.jpg" alt="" /></a></li>

						<li><a href="booking.html"><img src="images/555.jpg" alt="" /></a></li>

						<li><a href="booking.html"><img src="images/666.jpg" alt="" /></a></li>

						<li><a href="booking.html"><img src="images/777.jpg" alt="" /></a></li>

					</ul>

				</div>

				<div class="col-md-9 reservation-right">

                                    <form name="booking" action="booking.php" method="POST">

						<h4>How many members?</h4>

						<div class="dropdown-button">           			

                                                    <select class="dropdown" tabindex="10" name="member" data-settings='{"wrapperClass":"flat"}'>

									<option value="1">01 Member</option>

									<option value="2">02 Members</option>

									<option value="3">03 Members</option>

									<option value="4">04 Members</option>

									<option value="5">05 Members</option>

									<option value="6">06 Members</option>

									<option value="7">07 Members</option>

									<option value="8">08 Members</option>

									<option value="9">09 Members</option>

									<option value="10">10 Members</option>

									<option value="10+">10+ Members</option>

 							</select>

						</div>

						<h4>Rooms</h4>

						<div class="dropdown-button">           			

                                                    <select class="dropdown" tabindex="10" name="rooms">

									<option value="Single">Single</option>

									<option value="Double">Double</option>

									<option value="Suit">Suit</option>

									<option value="Special Delux Room">Special Delux Room</option>

									
 							</select>

						</div>

						<h4>When would you like to come?</h4>

						<div class="book-pag">

							

							<div class="book-pag-frm">

								<label>Check In :</label>

								<input name="checkin" class="date" id="datepicker1" type="text" required="">

							</div>

							<div class="book-pag-frm">

								<label>Check Out:</label>

								<input class="date" name="checkout" id="datepicker2" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">

							</div>

							<div class="clearfix"></div>

						</div>	

						

						<h4>Contact details</h4>

                                                <input type="text" value="Name" required="required" name="name"  />

						<input type="text" value="Email"  required="required" name="email"  required />
                                                <!--pattern=""-->

						<input type="text" value="Telephone"  required="" name="telephone">

						<textarea  required="" name="message"> Message </textarea>

                                                
                                                <button class="btn1 btn-1 btn-1e" type="submit" value="RESERVE NOW" name="reserve" >Reserve Now</button>

					</form>

					<!--strat-date-piker-->

					

					<script src="js/jquery-ui.js"></script>

							  <script>

									  $(function() {

									    $( "#datepicker,#datepicker1,#datepicker2" ).datepicker();

									  });

							  </script>

					<!--//End-date-piker-->

				</div>

				<div class="clearfix"></div>

			</div>

	</div>

</div>



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

                            <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Blue Moon</a>

				<ul>

					<li><a href="https://www.facebook.com/bluemountainhotels/" class="f1"></a></li>

					<li><a href="#" class="f2"></a></li>

					<li><a href="https://plus.google.com/104251527710192671192" class="f3"></a></li>

				</ul>

			</div>

			<div class="clearfix"> </div>

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


