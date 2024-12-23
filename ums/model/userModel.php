<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
        return $con;
    }

    function login($Name, $password){
        $con = getConnection();
        $sql = "select * from student where Name='{$Name}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addstudent($Name, $Id, $password,$confirmpassword){
        $con = getConnection();
        $sql = "INSERT INTO student VALUES ( '{$Name}', '{$Id}', '{$password}', '{$confirmpassword}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getstudent($Id){

    }

    function getAllstudent(){

    }

    function updatestudent($student){

    }

    function deletestudent($Id){

    }
?> 

