<?php
 if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=htmlspecialchars(trim($_POST['email']));
    $password=htmlspecialchars(trim($_POST['password']));

    print_r($email);
 }
?>