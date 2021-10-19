<?php

require_once '../db.php';

$id = $_POST["id"];

$query = "DELETE FROM car WHERE id = '$id'";
mysqli_query($connect, $query);
header("Location: ../../index.php");

?>