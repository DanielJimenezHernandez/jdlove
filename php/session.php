<?php
   include('database_connect.php');
   session_start();
   
   if(!isset($_SESSION['login_userName'])){
      header("location: ../login/login.php");
   }
?>