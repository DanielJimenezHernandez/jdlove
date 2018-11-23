<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'server');
   define('DB_PASSWORD', 'merariD32640000');
   define('DB_DATABASE', 'jdsocial');
   $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   /* verificar la conexión */
   if (mysqli_connect_errno()) {
      printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
      exit();
   }
?>