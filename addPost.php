<?php
session_start();
include "connection.php";    
date_default_timezone_set('Europe/London');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];    
            $body = $_POST['comment'];   
            $date = date('Y-m-d');
            $time = date('H:i:s'); 
            $sql = "INSERT INTO POSTS (date, time, title, body) VALUES ('$date', '$time', '$title', '$body')";
        if ($conn->query($sql) === TRUE) { 
            echo "done";
            header('Location: viewBlog.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
}
    $conn->close();
?>