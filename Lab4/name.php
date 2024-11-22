<?php
session_start();


if (isset($_GET['submit'])) {
    $name = $_GET['name']; 

    
    if ($name==null) {
        echo "Null data found!";
    } else {
        echo "name: " .$name;
    }
} else {
    echo "Invalid submission!";
}
?>
<?php

session_start();

if (isset($_POST['submit'])) {

    $username = $_REQUEST['name'];
    $count = strlen($username);
    $letter = substr($username, 0,1);
    $firstLetter;
    $number=0;

    $array1  =[
          "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    ];
    $array2 = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    ];
    


    for ($i = 0; $i < $count; $i++){
    for ($j = 0; $j< count($array2); $j++) {
        if ($username[$i] == $array2[$j]) {
      
            $number=$number+1;
        }
       
    }
}

if ($username == null || $count < 2 || in_array($letter, $array1) == true || $number != $count) {
    echo "Write your name ";
} 
    else {

        echo  "{$count}";
    }
    
    
}