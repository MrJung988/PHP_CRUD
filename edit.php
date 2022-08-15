<!DOCTYPE html>
<html>
<head>
	<title>Task NO.2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<h1>Please Filled Out the Student's Details.</h1>
	<h2 style="text-align: center;">Update The Details.</h2>

	<?php

	include 'db.php';
	$id = $_GET['id'];

	$sql = "SELECT * from firsttask where id= ".$id;
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$stdid = $row['id'];
		$stdname = $row['name'];
		$stdaddress = $row['address'];
		$stddob = $row['dob'];
		$stdcontact = $row['contact'];
		$stdremarks = $row['remarks'];

	}
	 ?>

    <div class="form-container">
	<form action="editaction.php" method="post">
		<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" name="name" class="form-control" value="<?php echo $stdname ?>" required> <br><br>
	    </div>
		<div class="form-group">
		<label for="Address">Address:</label>
		<input type="text" name="address" class="form-control" value="<?php echo $stdaddress ?>" required><br><br>
		</div>
		<div class="form-group">
		<label for="Date">DOB:</label>
		<input type="Date" name="dob" class="form-control" value="<?php echo $stddob ?>" required><br><br>
		</div>
		<div class="form-group">
		<label for="Number">Contact:</label>
		<input type="Number" name="contact" class="form-control" value="<?php echo $stdcontact ?>" required><br><br>
		</div>
		<div class="form-group">
		<label>Remarks:</label>
		<input type="text" name="remarks" class="form-control" value="<?php echo $stdremarks ?>" ><br><br>
	    </div>
		<input type="hidden" name="id" value=" <?php echo $stdid ?> " >
		<input type="submit" value="Update" class="btn btn-primary">
	</form>	
</div>
</body>
</html>