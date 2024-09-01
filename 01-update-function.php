<?php 
// Insert member to database
    include("01-database-connect.php");
//    echo"Inside index-insert FAMILY2.php";
//	echo "Inside index-insert.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = $_POST["id"];
//	    $surname = "ZZZZZZ";
	    $surname_middle = $_POST["surname_middle"];
		$first_name = $_POST["first_name"];
		$year_arrival = $_POST["year_arrival"];
		$year_commence = $_POST["year_commence"];
		$address = $_POST["address"];
		$faculty = $_POST["faculty"];
		$university = $_POST["university"];
		$addition = $_POST["addition"];
/*			    
		echo "$id"; 
		echo "$surname"; 
		echo "$middle_name";
	    echo "$first_name";
		echo "$birth_year";
*/		

//////////////////////////////////////////
//        $sql = "INSERT INTO member_list (surname, middle_name, first_name, generation, birth_year, die_year, father, mother) VALUES // 		('$surname', '$middle_name', '$first_name', '$generation', '$birth_year', '$die_year','$father', '$mother')";
		$sql = "UPDATE members SET surname_middle = '$surname_middle', first_name = '$first_name',
		                               year_arrival = '$year_arrival', year_commence = '$year_commence', address = '$address',
									   faculty ='$faculty', university ='$university', addition = '$addition'
									   WHERE id = $id";
		
		if ($conn->query($sql) === TRUE) {
	        echo "Record inserted successfully";
	    } else {    
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	}
	$conn->close();
    
?>

