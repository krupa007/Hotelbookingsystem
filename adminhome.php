<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "hotelprject";


if(isset($_POST['submit'])){
    
        
       // $first = $_POST['amount_1'];
        
   
//    if (!empty($_POST['amount_2'])){
//        
//        $second = $_POST['amount_2'];
//        
//    }
//     if (!empty($_POST['amount_3'])){
//        
//        $third = $_POST['amount_3'];
//        
//    }
//     if (!empty($_POST['amount_4'])){
//        
//        $forth = $_POST['amount_4'];
//        
//    }
//$host = "localhost";
//$username = "root";
//$pass = "";
//$dbname = "hotelprject";

$conn = new mysqli($host, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
  
    die("Connection failed: " . $conn->connect_error);
}

$query = "UPDATE admin SET update_price = '".$first."' WHERE id = 1";

$result = mysqli_query($conn, $query);
if(!$result)
{
    echo "aa";
}
 else {
    
 {
   
     
 }  
     
 {  
 }
 
 }

$posts = array();
while ($row = mysqli_fetch_row($result)) 
 {

    //mysql_fetch_array($sql)
    $title = $row[1];
    $url = $row[2];
}
    
    

//mysqli_close($conn);
}



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

        <!-- start-smoth-scrolling -->

        <script type="text/javascript" src="js/move-top.js"></script>

        <script type="text/javascript" src="js/easing.js"></script>

        <script type="text/javascript">

            jQuery(document).ready(function ($) {

                $(".scroll").click(function (event) {

                    event.preventDefault();

                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);

                });

            });

        </script>

        <!-- start-smoth-scrolling -->

    </head>

    <body>

        <!-- banner -->

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

                            $("span.menu").click(function () {

                                $("ul.nav1").slideToggle(300, function () {

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





                        </ul>

                    </div>

                    <div class="clearfix"></div>

                </div>

                <div class="banner-bottom" style="background: none"></div>
                <div class="banner-bottom" style="background: none"></div>

                <form action ="adminhome.php" method="post">
                <div class="row">

                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <table style="border:solid; size:5px; background: buttonface;">
                            <tr style="border:solid;border-color: white;" >
                                <th>room details</th><th style="border:solid;">price</th><th><span style="align-content: center;"> update  price </span></th>
                            </tr>
                            <tr style="border:solid; color: white;">
                                <td><?php
$dbname = "hotelprject";

$conn = new mysqli($host, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "Select * from admin order by id = 1";

$result = mysqli_query($conn, $query);

$posts = array();
while ($row = mysqli_fetch_row($result)) {//mysql_fetch_array($sql)
    $title = $row[1];
    $url = $row[2];
} echo $title;
?></td><td style="border:solid;"> <?php echo '$ ' . $url; ?> </td> <td>  <input type= "text" id="amount_1"> </td>
                            </tr>
                            <tr style="border:solid;color: white;">
                                <td><?php
                                    $host = "localhost";
                                    $username = "root";
                                    $pass = "";
                                    $dbname = "hotelprject";

                                    $conn = new mysqli($host, $username, $pass, $dbname);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $query = "Select * from admin order by id = 2";

                                    $result = mysqli_query($conn, $query);

                                    $posts = array();
                                    while ($row = mysqli_fetch_row($result)) {//mysql_fetch_array($sql)
                                        $title1 = $row[1];
                                        $url1 = $row[2];
                                    } echo $title1;
                                    ?></td><td style="border:solid;"><?php echo '$ ' . $url1; ?> </td><td> <input type="text" id="amount_2"> </td>
                            </tr>
                            <tr style="border:solid;color: white;">
                                <td><?php
                                    $host = "localhost";
                                    $username = "root";
                                    $pass = "";
                                    $dbname = "hotelprject";

                                    $conn = new mysqli($host, $username, $pass, $dbname);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $query = "Select * from admin order by id = 3";

                                    $result = mysqli_query($conn, $query);

                                    $posts = array();
                                    while ($row = mysqli_fetch_row($result)) {//mysql_fetch_array($sql)
                                        $title2 = $row[1];
                                        $url2 = $row[2];
                                    } echo $title2;
                                    ?></td><td style="border:solid;"><?php echo '$ ' . $url2; ?></td><td> <input type="text" id="amount_3"> </td>
                            </tr>
                            <tr style="border:solid;color: white; ">
                                <td><?php
                                    $host = "localhost";
                                    $username = "root";
                                    $pass = "";
                                    $dbname = "hotelprject";

                                    $conn = new mysqli($host, $username, $pass, $dbname);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $query = "Select * from admin order by id = 4";

                                    $result = mysqli_query($conn, $query);

                                    $posts = array();
                                    while ($row = mysqli_fetch_row($result)) {//mysql_fetch_array($sql)
                                        $title3 = $row[1];
                                        $url3 = $row[2];
                                    } echo $title3;
                                    ?></td><td style="border:solid;"><?php echo '$ ' . $url3; ?></td><td> <input type="text" id="amount_4"> </td>
                            </tr>
                            <tr style="border:solid; border-color: white">
                                <td><a href="adminviewbooking.html"> <input type="submit" id="" value="view bookings"> </a></td><td></td><td> <input type="submit" id="submit" value="update"> </td>
                            </tr>
                        </table>
                    </div>
                </div>
                </form>




            </div>


            <!-- *************************************************BANNER************ -->
            <div class="banner-bottom" style="background: none"></div>



            <!-- //banner -->


            <div class="banner-bottom" style="background: none"></div>
            <div class="banner-bottom" style="background: none"></div>
            <div class="banner-bottom" style="background: none"></div>
        </div>
        
        <!--******************************************* gallery ******************************************************-->



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

                    <a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color: lightblue"></span>BLUE MOON</a>

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

                            $(document).ready(function () {

                                

                                $().UItoTop({easingType: 'easeOutQuart'});

                            });

        </script>

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

        <!-- //smooth scrolling -->

    </body>

</html>