<?php
$servername = "localhost";
$username = "root"; // Change if different
$password = ""; //Change if you set a password
$database = "bsit_4a";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed; " . $conn->connect_error);
}