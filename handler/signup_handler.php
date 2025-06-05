<?php
   if($_SERVER['REQUEST_METHOD']==='POST'){
     
     $username=htmlspecialchars(trim($_POST['username']));
     $email=htmlspecialchars(trim($_POST['email']));
     $password=htmlspecialchars(trim($_POST['password']));
     if(!$username || !$email ||!$password){
        echo("please provide all input feilds");
     }
     else{
        print("user created sucessfully!");
     }
   }
?>