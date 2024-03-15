<?php
  include 'connect.php';

  if($_SESSION["uName"] == ""){
    header('Location: login.php');
  }
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="Photo/logo-khmer-code3.png" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item" style="border-right: 1px solid blue;">
          <a class="nav-link active" aria-current="page" href="/">
            Welcome to <?php echo $_SESSION["uName"]; ?>
          </a>
        </li>
        
        <li class="nav-item" style="border-right: 1px solid blue;">
          <a class="nav-link" href="#">Document</a>
        </li>
        <li class="nav-item" style="border-right: 1px solid blue;">
          <a class="nav-link" href="#">Student Register</a>
        </li>
        <li class="nav-item" style="border-right: 1px solid blue;">
          <a class="nav-link" href="#">Student Active</a>
        </li>
        <li class="nav-item"style="border-right: 1px solid blue;" >
          <a class="nav-link" href="#">User Account</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="logout.php">
             Logout
          </a>
        </li>
      </ul>
    </div>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

  </div>
</nav>
  

<div class="container" style="margin-top:20px">
    <div class="row">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="Photo/frm_mobile-eng.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="Photo/ps_ebacledamobile-eng.jpg" class="d-block w-100" alt="...">
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>