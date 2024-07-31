<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location:login.php");
  exit;
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
    <title>welcome - <?= $_SESSION['username'] ?></title>
  </head>
  <body>
    <?php require'./Partial/_nav.php'?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/Login/Img/cover1.jpg" class="d-block w-100 h-40"
       alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>The Art of Living</h1>
        <p>Life is all about creating yourself.</p>
        <button class="btn btn-primary">Explore</button>
      </div>
      
    </div>
    <div class="carousel-item">
      <img src="/Login/Img/cover2.jpg" class="d-block w-100 "  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Life Uncovered</h1>
        <p>Inspiration for Every Day.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/Login/Img/cover3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Craft Your Best Life</h1>
        <p>Live with Passion, Walk with Purpose.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

    <div class="container my-5">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">welcome - <?php echo $_SESSION['username'] ?></h4>
        <p>Great Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates deserunt velit vero? Officiis explicabo nesciunt et, illum quod consequatur odio culpa est amet quaerat aliquid aut libero, voluptate veniam, beatae magni? Nesciunt doloremque praesentium officia..</p>
        <hr>
        <p class="mb-0">You can logout from here <a href="/Login/logout.php">logout</a>.</p>
    </div>

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
  </body>
</html>