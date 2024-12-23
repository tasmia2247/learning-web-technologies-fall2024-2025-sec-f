<?php
    require_once('../model/userModel.php');
    if(isset($_POST['submit'])){
        $Name  =  trim($_REQUEST['Name']);
        $Id  =  trim($_REQUEST['Id']);
        $password  =  trim($_REQUEST['password']);
        $confirmpassword =  trim($_REQUEST['confirmpassword']);

        if($Name == null ||  empty($Id) || empty($password) || empty($confirmpassword) ){
            echo "Null data found!";
        }else {
            $status = addstudent($Name, $Id , $password, $confirmpassword);
            if($status){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/signup.html');
            }
        }
    }else{
        header('location: ../view/signup.html');
    }

?>