<?php
   $host="localhost";
   $username="root";
   $password=null;
   $database="user";
   
   $conn=new mysqli($host,$username,$password,$database);
   if($conn->connect_error){
    die("database connection failed". $conn->connect_error);
   }
?>