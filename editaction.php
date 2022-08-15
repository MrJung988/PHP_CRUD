<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$remarks = $_POST['remarks'];

$sql = "UPDATE firsttask SET name = '$name', address = '$address', dob = '$dob', contact = '$contact', remarks = '$remarks' where id = '$id' ";

$result = mysqli_query($conn, $sql);

if ($result) {
	header("Location:index.php");
}


?>