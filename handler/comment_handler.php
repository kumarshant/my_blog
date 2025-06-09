<?php
session_start();
include("../includes/db_connect.php");

// Check if user is logged in
if (empty($_SESSION['user']) || empty($_SESSION['user']['id'] || empty($_SESSION['user']['email']))) {
    echo "<script>
            alert('You need to sign up or log in first!');
            window.location.href = '/blog_app';
          </script>";
    exit;
}

$user_id = (int)$_SESSION['user']['id']; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comments = htmlspecialchars(trim($_POST['comments']));

    if (empty($comments)) {
        echo "<script>
                alert('Please enter a valid comment.');
                window.location.href = '/blog_app';
              </script>";
        exit;
    }

    $createTableSQL = "CREATE TABLE IF NOT EXISTS comments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        comments TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    )";

    if ($conn->query($createTableSQL) !== TRUE) {
        echo "<script>
                alert('Error creating comments table: " . addslashes($conn->error) . "');
                window.location.href = '/blog_app';
              </script>";
        exit;
    }

   
    $stmt = $conn->prepare("INSERT INTO comments(user_id, comments) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $comments);

    if ($stmt->execute()) {
        echo "<script>
                alert('Comment added successfully!');
                window.location.href = '/blog_app';
              </script>";
    } else {
        echo "<script>
                alert('Error inserting comment: " . addslashes($stmt->error) . "');
                window.location.href = '/blog_app';
              </script>";
    }
    $stmt->close();
}
$conn->close();
?>