<?php
$name = $_POST['name'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$remark = $_POST['remarks'];

include 'db.php';

$sql = "INSERT INTO `firsttask`(`name`, `address`, `dob`, `contact`, `remarks`) VALUES ('$name','$address','$dob','$contact','$remark')";
$result = mysqli_query($conn, $sql);

if ($result) {
	header('Location:index.php');

}
?>