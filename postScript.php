<?php
   include("session.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $postBody = $_POST['body'];
      $sql = "INSERT INTO posts (who, body) VALUES ('$login_session', '$postBody')";

      if ($db->query($sql) === TRUE) {
        header("Location: post.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
      
   }
?>