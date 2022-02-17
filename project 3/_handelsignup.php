<?php
      include '_dbconnect.php';
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $check = false;
        $email=  $_POST['email'];
        $password =$_POST['password'];
        $cpassword = $_POST['cpassword'];
        $check = "SELECT * FROM `users` WHERE email ='$email'";
        $exits = mysqli_query($connection , $check);
        $num = mysqli_num_rows($exits);
        if($num > 0){
            header("Location: index.php?emailexist=true");
            exit();
        }
        else{
            if($password == $cpassword){
                $insert = "INSERT INTO `users` ( `email`, `password`) VALUES ('$email', '$password');";
                $query  = mysqli_query($connection , $insert);
                header("Location: index.php?signupsuccess=true");
                exit();
            }
            else{
                header("Location: index.php?passmatch=true");
                exit();
            }
        }
        }

?>