<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "assignment1_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h2 style='color:green;'>Database Connected Successfully!</h2>";

?>