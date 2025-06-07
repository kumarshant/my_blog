<?php
session_start();
include("../includes/db_connect.php");
 if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=htmlspecialchars(trim($_POST['email']));
    $password=htmlspecialchars(trim($_POST['password']));

   $stmt=$conn->prepare("SELECT id, username,email,password FROM users WHERE email=?");
   $stmt->bind_param('s',$email);
   $stmt->execute();

   $result= $stmt->get_result();

   if($result->num_rows === 1){
      $user = $result->fetch_assoc();
      
      if($password===$user['password']){
            $_SESSION['user']=[
               'username'=>$user['username'],
               'email'=>$user['email']
            ];
            header("Location:/blog_app");
      }
      else{
         print("invalid password");
      }
   }
   else{
      echo "user not found . try signing up ";
      header("Location:/blog_app");
   }
   $stmt->close();
   $conn->close();
 }
?>