<?php 
// Insert member to database
    include("01-database-connect.php");
//    echo"Inside index-insert FAMILY2.php";
//	echo "Inside index-insert.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $surname_middle= $_POST["surname_middle"];
		$first_name = $_POST["first_name"];
		$year_arrival = $_POST["year_arrival"];
		$year_commence = $_POST["year_commence"];
		$address = $_POST["address"];
		$faculty = $_POST["faculty"];
		$university = $_POST["university"];
		$addition = $_POST["addition"];
			    
		echo "$surname_middle"; 
	    echo "$first_name";
		echo "$year_arrival";


        $sql = "INSERT INTO members (surname_middle, first_name, year_arrival, year_commence, address, faculty, university,
				addition) VALUES ('$surname_middle', '$first_name', '$year_arrival', '$year_commence', '$address', '$faculty', '$university', '$addition')";
		
        if ($conn->query($sql) === TRUE) {
	        echo "Record inserted successfully";
	    } else {    
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	}
	$conn->close();
    
?>

