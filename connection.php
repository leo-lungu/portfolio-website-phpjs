<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloggers";


    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>