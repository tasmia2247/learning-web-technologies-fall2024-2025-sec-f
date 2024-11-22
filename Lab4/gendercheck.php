<?php
session_start();

if (isset($_GET['submit'])) {
    $gender = $_REQUEST['gender'] ;

    if ($gender == null) {
        echo "Null data found!";
    } else {
        echo "Gender: " . $gender;
    }
} else {
    echo "Invalid submission!";
}
?>
