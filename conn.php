<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bank_inc";
// bankinc.wdyogesh.com

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>