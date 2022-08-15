<!DOCTYPE html>
<html>
<head>
	<title>Task NO.2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<h1>Filled The Student's Details.</h1>

    <div class="form-container">
	<form action="adddata.php" method="post" >
		
		<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" name="name" class="form-control" placeholder="Enter the Student's name." required><br>
		</div>
		<div class="form-group">
		<label for="Address">Address:</label>
		<input type="text" name="address" class="form-control" placeholder="Enter the Student's address." required><br>
		</div>
		<div class="form-group">
		<label for="Date">DOB:</label>
		<input type="Date" name="dob" class="form-control" placeholder="Enter the Student's Date of birth." required><br>
		</div>
		<div class="form-group">
		<label for="Number">Contact:</label>
		<input type="Number" name="contact" class="form-control" required><br>
		</div>
		<div class="form-group">
		<label>Remarks:</label>
		<input type="text" name="remarks" class="form-control" ><br>
		</div>
		<div >
		<input type="submit" name="Submit" class="btn btn-primary">
	    </div>
	</form>
	</div>
	<br><br>
	<hr><hr>
	<br>

	<h1>The Details of Student are:</h1><br><br><br>
	<table class="table">
		<thead>
		<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Date of Birth</th>
		<th>Contact</th>
		<th>Remarks</th>
		<th>Action</th>
		</tr>
	</thead>

        <?php 
        include'db.php';
        $sql = "SELECT * from firsttask";

        $result = mysqli_query($conn, $sql);

        if ($result) {
        	while ($row = mysqli_fetch_assoc($result)) {
        		$id = $row['id'];
        		$name = $row['name'];
        		$address = $row['address'];
        		$dob = $row['dob'];
        		$contact = $row['contact'];
        		$remarks = $row['remarks'];

             ?>
            <tr>            	
             <td><?php echo $name  ?></td>
             <td><?php echo $address  ?></td>
             <td><?php echo $dob  ?></td>
             <td><?php echo $contact  ?></td>
             <td><?php echo $remarks  ?></td>
             <td>
             	<a href="edit.php?id=<?php echo $id?>">Update</a>
             	<a href="delete.php?id=<?php echo $id?>">Delete</a>
             </td>
            </tr>
            <?php
        	}
        }
         ?>
	
	</table>
	<br><br><br><br>

</body>
</html>