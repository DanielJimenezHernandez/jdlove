<?php
   include("session.php");
   /* Setting Time to UTC */

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $postBody = $_POST['body'];
      $sql = "INSERT INTO Posts (user_id, post_body, post_id, timestamp, significant_other, posted_by) VALUES (".$_SESSION['login_userId'].", '".$postBody."', NULL, CURRENT_TIMESTAMP, ".$_SESSION['login_significantOther'].", '".$_SESSION['login_userName']."')";
      if ($db->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
      
   }
?>