	<?php
// Insert to a row
	include("01-database-connect.php"); // Include your database connection file

 	$id = $_POST["id"];				  
	$picture = $_FILES['img']['name']; // Get the uploaded image file name
	echo "Get picture";
	
	// Move the uploaded image to a specific directory (e.g., 'images/')
	$targetDir = 'images/';
	$targetPath = $targetDir . basename($picture);
	move_uploaded_file($_FILES['img']['tmp_name'], $targetPath);
	
	// Insert the image path into the database
	$query = "UPDATE members SET picture = '$targetPath' WHERE id = $id";
	if (mysqli_query($conn, $query)) {
	    echo "Image inserted successfully!";
	} else {
	    echo "Error inserting image.";
	}
		echo"End of processing";
	?>
