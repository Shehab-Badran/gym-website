<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "fitness_fusion";

// Create connection
$conn = mysqli_connect($server, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
