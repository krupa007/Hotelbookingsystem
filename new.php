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
    echo "New data inser correctly ". "<br>" .$checkin . "   " .$dateformattedcheckin;
  
    }
else 
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();



}

?>

