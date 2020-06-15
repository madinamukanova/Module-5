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

$sql = "DELETE from clients
       where ReservationID='$ReservationID' ";
$_SESSION['ReservationID'] = $ReservationID;
$rw = mysqli_query($conn,$sql);
    header("location:successfulcancelreservation.php");
$conn->close();
?>