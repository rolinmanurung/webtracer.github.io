<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kuesioner";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "kuesioner");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>