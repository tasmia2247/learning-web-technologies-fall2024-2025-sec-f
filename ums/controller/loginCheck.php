<?php
    session_start();
    
    require_once('../model/userModel.php');

    if(isset($_POST['submit'])){
        $Name  =  trim($_REQUEST['Name']);
        $password  =  trim($_REQUEST['password']);

        if($Name == null || empty($password) ){
            echo "Null data found!";
        }else {
            
            $status = login($Name, $password);
            if ($status){
            setcookie('flag', 'true', time()+3600, '/');
            $_SESSION['Name'] = $Name;
            header('location: ../view/home.php');
        }else{
            //var_dump($_SESSION['user']);
            echo "Invalid user";
        }
    }
    }else{
        //echo "Invalid request!";
        header('location: ../view/login.html');
    }
?>