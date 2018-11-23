<?php
   include("database_connect.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql  = 'SELECT user_id FROM Users WHERE username = "'.$myusername.'" AND PASSWORD ="'.$mypassword.'"';
      $result = $db->query($sql);

      $fetch_userid = $result->fetch_array(MYSQLI_ASSOC);

      $userid = $fetch_userid["user_id"];

      $count = $result->num_rows;
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         session_start();
         $sql  = 'SELECT Users.username, Users.user_id, User_Profile_Info.profile_pic, User_Profile_Info.significant_other FROM Users INNER JOIN User_Profile_Info ON Users.user_id = User_Profile_Info.user_id WHERE Users.user_id ='.$userid.'';
         $result = $db->query($sql);
         $fetch_session_variables = $result->fetch_array(MYSQLI_ASSOC);

         $username = $fetch_session_variables['username'];
         $profilepic = $fetch_session_variables['profile_pic'];
         $significantother = $fetch_session_variables['significant_other'];

         $_SESSION['login_userName'] = $username;
         $_SESSION['login_userId'] = $userid;
         $_SESSION['login_profilePic'] = $profilepic;
         $_SESSION['login_significantOther'] = $significantother;

         header("location: ../index.php");
      }else {
         $error = "Your Login Name $myusername or Password $mypassword is invalid";
         header("location: ../login/login.php");
      }
   }
?>
