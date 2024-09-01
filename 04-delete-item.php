<?php
include("01-database-connect.php");
// Assuming you have an id to delete
$id = $_POST["id"];
//$id=3;

$sql = "DELETE FROM video WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
