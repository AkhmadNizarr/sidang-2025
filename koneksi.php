<?php
$host = "localhost";
$username = "root";
$password = "root"; // MAMP's default MySQL root password is 'root'
$database = "sidang"; // Replace with your actual database name
$port = 8889; // MAMP's default MySQL port

// Establish the connection
$koneksi = mysqli_connect($host, $username, $password, $database, $port);

// Check for connection errors
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>