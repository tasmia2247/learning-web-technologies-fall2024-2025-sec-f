<?php
session_start();


if (isset($_GET['submit'])) {
    $email = $_GET['email']; 

    
    if ($email==null) {
        echo "Null data found!";
    } else {
        echo "email: " .$email;
    }
} else {
    echo "Invalid user!";
}
?>
