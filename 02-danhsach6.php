<?php 
// Insert member to database
    include("01-database-connect.php");
//    echo"Inside index-insert FAMILY2.php";
//	echo "Inside index-insert.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $surname_middle = $_POST["surname_middle"];
		$first_name = $_POST["first_name"];
		$year_arrival = $_POST["year_arrival"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
			    
		echo "$surname_middle"; 
	    echo "$first_name";
		echo "$year_arrival";


        $sql = "INSERT INTO contacts (surname_middle, first_name, year_arrival, phone, email) 
		VALUES ('$surname_middle', '$first_name', '$year_arrival', '$phone', '$email')";
		
        if ($conn->query($sql) === TRUE) {
	        echo "Record inserted successfully";
	    } else {    
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	}
	$conn->close();
    
?>

