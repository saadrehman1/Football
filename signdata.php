<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['First Name']);
$lname   = $conn->real_escape_string($_POST['Last Name']);
$dob    = $conn->real_escape_string($_POST['Date Of Birth']);
$gender = $conn->real_escape_string($_POST['Gender']);
$cellno = $conn->real_escape_string($_POST['Cell No']);
$password = $conn->real_escape_string($_POST['Password']);

$query   = "INSERT into userdata (First Name,Last Name,Date Of Birth,Gender,Cell No,Password) VALUES('" . $fname . "','" . $lname . "','" . $dob . "','" . $gender . "','" . $cellno . "','" . $password . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For Contacting Us <br>";

$conn->close();

?>