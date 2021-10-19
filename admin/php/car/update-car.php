<?php

require_once '../db.php';

$id = $_POST["id"];
$car_name = $_POST["car_name"];
$car_number = $_POST["car_number"];
$location = $_POST["location"];
$owner_name = $_POST["owner_name"];
$owner_phone = $_POST["owner_phone"];
$availability = $_POST["availability"];

$query = "UPDATE car 
SET car_name = '$car_name', car_number = '$car_number', location = '$location', owner_name = '$owner_name', owner_phone = '$owner_phone', availability = '$availability'
WHERE id = '$id'";
mysqli_query($connect, $query);
header("Location: ../../index.php");

?>