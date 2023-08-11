<?php

$hostname = "172.31.22.43";
$username = "Naman200514073";
$password = "eHc3vApvfw";
$database = "Naman200514073";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
