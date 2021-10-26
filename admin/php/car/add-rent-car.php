<?php

require_once '../db.php';

$car_name = $_POST["car_name"];
$car_number = $_POST["car_number"];
$location = $_POST["location"];
$owner_name = $_POST["owner_name"];
$owner_phone = $_POST["owner_phone"];
$availability = $_POST["availability"];

$query = "INSERT INTO car (car_name, car_number, location, owner_name, owner_phone, availability) 
VALUES ('$car_name', '$car_number', '$location', '$owner_name', '$owner_phone', '$availability')";
mysqli_query($connect, $query);
header("Location: ../../pages/home.php");

?>