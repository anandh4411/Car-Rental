<?php

require_once 'db.php';

$car = $_POST["car"];
$pickup = $_POST["pickup"];
$dropoff = $_POST["dropoff"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$query = "INSERT INTO booking (car, pickup, dropoff, name, email, phone) 
VALUES ('$car', '$pickup', '$dropoff', '$name', '$email', '$phone')";
mysqli_query($connect, $query);
header("Location: ../pages/booking-success.html");

?>