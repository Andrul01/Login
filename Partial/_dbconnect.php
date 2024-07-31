<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "registration1";
  $conn = mysqli_connect($server,$username,$password,$database);
  if(!$conn){
    die("Error".mysqli_connect_error());
  }
  mysqli_set_charset($conn, "utf8mb4");
?>