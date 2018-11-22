<?php
   include("session.php");
   /* Setting Time to UTC */
    define('TIMEZONE', 'Europe/Paris');
    date_default_timezone_set(TIMEZONE);
    $now = new DateTime();
    $mins = $now->getOffset() / 60;
    $sgn = ($mins < 0 ? -1 : 1);
    $mins = abs($mins);
    $hrs = floor($mins / 60);
    $mins -= $hrs * 60;
    $offset = sprintf('%+d:%02d', $hrs*$sgn, $mins);
    $db->query("SET time_zone='$offset';");

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