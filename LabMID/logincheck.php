
<?php
    session_start();
 
    if(isset($_REQUEST['submit'])){
       
      
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);

 
        if($username == null || empty($password) ){
            echo "Null data found!";
 
        }else if ($_SESSION['username']==$username && $_SESSION['password']== $password){
             
     
            $_SESSION['flag'] = true;
        
           header('location: home.php');
        }
        else{
            echo "Invalid user";
            
        }

      
        
    }
 
?>