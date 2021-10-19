<?php

require_once '../db.php';

$query = "SELECT * FROM car";
$result = mysqli_query($connect, $query);

?>