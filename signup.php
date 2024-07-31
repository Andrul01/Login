<?php

$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
  include './Partial/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  //$exists = false;
  $existSql = "SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows > 0){
    //$exists = true;
    $showError = " Username already exist";
  }
  else{
    if($password == $cpassword){
      $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', CURRENT_TIMESTAMP)";
      $result = mysqli_query($conn,$sql);
      if($result){
        $showAlert = true;
      }
    }
    else{
      $showError = " Password do not match";
    }
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>signup</title>
  </head>
  <body>
    <?php require './Partial/_nav.php'
    ?>
    <?php
    if($showAlert){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Account has been created.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    if($showError){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showError.'.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>
    <div class="container my-5">
      <h1 class="text-light bg-primary text-center ">REGISTRATION</h1>
      <hr>
      <form action="./signup.php" method="post">
        <div class="form-group col-md-5">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" maxLength=20 aria-describedby="emailHelp">
        </div>
        <div class="form-group col-md-5">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" maxLength=25>
        </div>
        <div class="form-group col-md-5">
          <label for="cpassword">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" maxLength=25>
          <small id="emailHelp" class="form-text text-muted">Should be match with password.</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>