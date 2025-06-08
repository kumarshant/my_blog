<?php
  session_start();
    include("../includes/db_connect.php");
   if($_SERVER['REQUEST_METHOD']==='POST'){
     
     $username=htmlspecialchars(trim($_POST['username']));
     $email=htmlspecialchars(trim($_POST['email']));
     $password=htmlspecialchars(trim($_POST['password']));
     if(!$username || !$email ||!$password){
        echo("please provide all input feilds");
     }
     else{
        $createTableSQL="CREATE TABLE IF NOT EXISTS users(id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(225) NOT NULL,
        password VARCHAR(10) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

       if ($conn->query($createTableSQL) === TRUE) {
            // Prepare and insert the user data
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);

            if ($stmt->execute()) {
                echo "User created successfully!";
                $_SESSION["user"]=[
                  'id'=>$user['id'],
               'username'=>$username,
               'email'=>$email
            ];
            header("Location:/blog_app");
         }
             else {
                echo "Error inserting user: " .$stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error creating table: ". $conn->error;
        }

        $conn->close();
     }
   }
?>