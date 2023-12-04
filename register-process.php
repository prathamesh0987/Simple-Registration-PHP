<?php

include 'dbconnection.php';
error_reporting(0);
//print_r($_POST);exit;
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$_FILES['image'];


$target_path = "images/profile/";
if ($_FILES['image']['tmp_name']!='') {
        $main_name = $_FILES['image']['name'];
        $tmp_main = $_FILES['image']['tmp_name'];
        $mainname = explode(".", $main_name);
        $filename = $mainname[0];
        $ext = end($mainname);
        $profile = 'profile-'.$filename . '.' . $ext;
        $target_file = $target_path . $profile;
        move_uploaded_file($tmp_main, $target_file);
}
else
{
    $profile = $_POST['editfile'];
}

$editid=$_POST['editid'];
$action=$_POST['action'];



if($action!='update')
{
$sql = "INSERT INTO demoo (name, email, phone, gender, image)
VALUES ('$name', '$email', '$phone', '$gender', '$profile')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
$sql = "UPDATE `demoo` SET `name`='$name',`email`='$email',`phone`='$phone',`image`='$profile',`gender`='$gender' WHERE id='$editid'";


if ($conn->query($sql) === TRUE) {
  echo "Update created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();




?>

