<?php
session_start();

if (isset($_POST['submit'])) {
    // Retrieving and trimming inputs
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $address = trim($_POST['address']);
    $gender = trim($_POST['gender']);

    // Check if any of the inputs are empty
    if (empty($username) || empty($password) || empty($address) || empty($gender)) {
        echo "Null data found!";
    } else {
        // Store session variables after successful registration
        $_SESSION['flag'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;  // Store password (remember, in real applications, it should be hashed)
        $_SESSION['address'] = $address;
        $_SESSION['gender'] = $gender;

        // Redirect to the login page
        header('Location: login.html');
        exit;
    }
} else {
    // If form wasn't submitted, redirect to registration page
    header('Location: login.html');
    exit;
}
?>
