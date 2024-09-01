<?php
// Connect to database
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "cp-students";
    $db_connect = "";

//    echo"Inside FAMILY2 database.php";
  
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);    
    }
    catch(mysqli_sql_exception){
        echo"Could not connect!";
    }
?>
