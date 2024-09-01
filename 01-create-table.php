<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS familydb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select database
$conn->select_db('familydb');

$sql to create table
$sql = "CREATE TABLE member_list (
    surname char(20) NOT NULL default ''
 )";

// sql to create table
$sql = "CREATE TABLE member_list (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    surname char(20),
    middle_name char(20),
    first_name char(20),
    generation char(20),
    birth_year char(20),
    die_year char(20),
    father char(20),
    mother char(20),
	picture varchar(100)
	
)";

echo "Success to create a table";

if ($conn->query($sql) === TRUE) {
    echo "Table member_list created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
