<?php
   include("session.php");
   /* Setting Time to UTC */

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $postBody = $_POST['body'];
      $sql = "INSERT INTO posts (who, body) VALUES ('$login_session', '$postBody')";

      if ($db->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
      
   }
?>