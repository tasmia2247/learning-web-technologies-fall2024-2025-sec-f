<?php
session_start();

if (isset($_GET['submit'])) {

    $degree = $_REQUEST['degree'];
    $count = strlen($degree);

    if ($degree == null) {
        echo "select degree";
    } elseif ($count < 2) {
        echo "select two degrees!";
    } else {
        echo "Degree : " . $count;
    }
} else {
    echo "Invalid";
}
?>
