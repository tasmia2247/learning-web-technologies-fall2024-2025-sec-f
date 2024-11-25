<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $address  =  trim($_REQUEST['address']);
        $gender =  trim($_REQUEST['gender']);


        if($username == null || $password== null ||$address ==null|| $gender == null){
            echo "Null data found!";
        }else {
           
            $_SESSION['flag'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['address'] = $address;
            $_SESSION['gender'] = $gender;
         header('location: Login');
        }
    }else{
    
        header('location: Login.html');
    }

?>