<?php
// Connect and read database
include("01-database-connect.php");

// Assuming you have an id to delete
$id_to_delete = $_POST["id"];

$sql = "DELETE FROM members WHERE id='$id_to_delete'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
