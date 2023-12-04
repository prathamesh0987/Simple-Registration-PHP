<?php
$conn = new mysqli("localhost","root","","formm","3307");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>