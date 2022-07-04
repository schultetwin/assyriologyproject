<?php
$conn = new mysqli('127.0.0.1','root','','dbassyriology', '3308');

// Check connection
if ($conn -> connect_errno) {
  die ("Failed to connect to MySQL: " . $conn -> connect_error;
 }
?>