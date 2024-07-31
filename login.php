<?php
session_start();
$login = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
 include './Partial/_dbconnect.php';
 $username = $_POST["username"];
 $password = $_POST["password"];

  $sql = "select * from users where username = '$username' AND password = '$password'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location:welcome.php");
  }
  else{
    $showError = " Invalid Password";
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
    <title>login</title>
  </head>
  <body>
    <?php require './Partial/_nav.php'
    ?>
    <?php
    if($login){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Login successfull.
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
      <h1 class="text-light bg-primary text-center ">LOGIN</h1>
      <hr>
      <form action="./login.php" method="post">
        <div class="form-group col-md-5">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group col-md-5">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>