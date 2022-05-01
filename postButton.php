<?php 
include "connection.php";
if (session_status() === PHP_SESSION_ACTIVE) {
    header('Location: addPost.php');
} else {
    header('Location: login.html');
}