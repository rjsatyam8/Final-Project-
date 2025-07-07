<?php
$host = "sql213.infinityfree.com";
$user = "if0_39412195";
$pass = "Ssatyam123"; // your password
$db   = "if0_39412195_hospitalwebsite";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
