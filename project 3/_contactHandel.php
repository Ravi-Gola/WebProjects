<?php
      include '_dbconnect.php';
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email=  $_POST['email'];
        $message = $_POST['message'];
        $sql ="INSERT INTO `contact` (`serial_no`, `name`, `email`, `message`, `datetime`) VALUES (NULL, '$name', '$email', '$message', current_timestamp());";
        $query=mysqli_query($connection , $sql);
        if($query){
            header("Location: contact.php?messagesend=true");
            exit();
        }
        else{
            header("Location: contact.php?messagesend=false");
            exit();
        }
       
        
         }

?>