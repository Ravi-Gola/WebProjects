<?php

include '_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=  $_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";
    $result = mysqli_query($connection , $sql);
    $num=mysqli_num_rows($result);
    if($num == 1)
    { 
        
            session_start();
            $_SESSION['logedin'] = true;
            $_SESSION['email'] = $email;
            header("location: index.php?login=true");
    }
        else{
            header("location: index.php?login=false");
        }
}
    
    

?>