<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "MyGarda";

$mysqli = new mysqli($host, $username, $password, $database);

// Periksa apakah koneksi berhasil
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

?>