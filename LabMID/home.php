<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION['username']?></h1>
        <a href="logout.php">logout</a>
</body>
</html>

<?php
    }else{
        header('location: Login.html'); 
    }
?>