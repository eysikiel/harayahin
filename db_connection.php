<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $db = "Harayahin";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // can remove or comment out the "echo" for debugging or confirmation purposes
    // echo "Connected successfully";
?>
