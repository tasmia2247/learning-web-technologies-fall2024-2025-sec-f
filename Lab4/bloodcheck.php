<?php
session_start();

if (isset($_GET['submit'])) {
    $blood = $_REQUEST['bloodgp'] ;
    if ($blood == null) {
        echo "select one";
    } else {
        echo "Blood group: " . $blood;
    }
} else {
    echo "Invalid user!";
}
?>

