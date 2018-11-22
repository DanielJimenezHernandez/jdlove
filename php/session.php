<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from members where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];


   $email_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select email from members where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_email = $row['email'];

   $ses_sql = mysqli_query($db,"select thumbnail from members where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $profilePic = $row['thumbnail'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: ../login/login.php");
   }
?>