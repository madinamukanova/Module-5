<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workers";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Take the values from the Form
$ReservationID=$_POST['ReservationID'];

$sql = "SELECT * from clients
       where ReservationID='$ReservationID'";
$_SESSION['ReservationID'] = $ReservationID;
$rw = mysqli_query($conn,$sql);
$total_rows=mysqli_num_rows($rw);

if ( $total_rows> 0) {
$sql = "INSERT INTO paymentinadvance (ReservationID)
VALUES ('$ReservationID')";
$run = mysqli_query($conn,$sql);
    header("location:paymentdetails.php");

} else {
header("location:unsuccessfulpayment.php");
    
}

$conn->close();
?>
