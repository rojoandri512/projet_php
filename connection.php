<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "fiche";

// Create connection
session_start();
$_SESSION['message'] = '';
$conn = mysqli_connect($servername, $username, $password, $db);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
