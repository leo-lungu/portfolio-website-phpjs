<?php 
include "connection.php";
session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];    
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: add.php');
          }
        } else {
            echo "<script>
            window.location.href='login.html';
            alert('Wrong username/password');
            </script>";
        }
    }    
?>