<?php

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

// check connection and send to error page if no connection
if(!$conn){
  header("Location: error.php");
  exit;
}

// Site-wide config
$site_title = "Customer Admin"

?>