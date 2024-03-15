<?php 
    
    date_default_timezone_set("Asia/Bangkok");
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_st_student";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
