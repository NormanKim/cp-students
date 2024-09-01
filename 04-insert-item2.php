<?php 
// Insert member to database
    include("01-database-connect.php");
//    echo"Inside index-insert FAMILY2.php";
//	echo "Inside index-insert.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $type = $_POST["type"];
		$name = $_POST["name"];
		$address = $_POST["address"];
			    
		echo "$type"; 
		echo "$name";
	    echo "$address";


        $sql = "INSERT INTO video (type, name, address) VALUES ('$type', '$name', '$address')";
        if ($conn->query($sql) === TRUE) {
	        echo "Record inserted successfully";
	    } else {    
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	}
	$conn->close();
    
?>

