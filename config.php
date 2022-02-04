<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName ="regform";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  ?>