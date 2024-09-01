<?php
// Connect and read database
include("01-database-connect.php");

// Assuming you have an id to delete
$id_delete_contact = $_POST["id"];

$sql = "DELETE FROM contacts WHERE id='$id_delete_contact'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
