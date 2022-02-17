<?php
    include '_dbconnect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $email=  $_POST['email'];
      $sql = "SELECT * FROM `subscriber` WHERE email ='$email'";
        $exits = mysqli_query($connection , $sql);
        $num = mysqli_num_rows($exits);
        if($num > 0){
            header("Location: index.php?alreadysubscribe=true");
        exit();
        }
        else{
            $insert = "INSERT INTO `subscriber` (`serial no.`, `email`, `datetime`) VALUES (NULL, '$email', current_timestamp());";
      $query  = mysqli_query($connection , $insert);
      if($query){
        header("Location: index.php?subscribe=true");
        exit();
      }
      else{
        header("Location: index.php?subscribe=false");
        exit();
      }
        
      
            }
      
      
    }
      
?>