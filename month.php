<?php
include "connection.php";
session_start();
    $month = $_POST['month'];
    $result= $conn->query("SELECT * FROM posts WHERE EXTRACT(MONTH FROM date) = '$month'");
    while($row = $result->fetch_assoc()){

        echo "<p style='text-align: right; font-size: 70%'>";
        echo $row['date'] . " &nbsp;&nbsp; " . $row['time'];
        echo "<p style='font-size: 150%'>";
        echo $row['title'];
        echo "<br>";
        echo "</p><p>";
        echo $row['body'];
        echo "</p>";
        echo "<br>";
        echo "<hr>";
    }
?>