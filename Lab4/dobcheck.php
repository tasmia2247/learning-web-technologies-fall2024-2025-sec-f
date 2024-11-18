<?php
session_start();


if (isset($_GET['submit'])) {
    $date = $_GET['date']; 

    
    if ($date==null) {
        echo "Null data found!";
    } else {
        echo "Date: " .$date;
    }
} else {
    echo "Invalid submission!";
}
?>

