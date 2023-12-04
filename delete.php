<?php
include 'dbconnection.php';

$id = $_GET['deleteid'];

$sql = "DELETE FROM `demoo` WHERE `demoo`.`id` = '$id'";

if ($conn->query($sql) === TRUE) {
    // Record deleted successfully, redirect to the view registration data page
    header("Location: view-registration-data.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
