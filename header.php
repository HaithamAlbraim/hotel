<?php include("autoload.php");session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almorshed for booking</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!-- Shortcut Icon -->
<link rel="shortcut icon" href="" type="image/x-icon">


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="includs/style.css">
<link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
</head>
<body style="background-color: #ababad;">
<div class="container-fluid m-0 p-0 ">
  <div class="row p-0 m-0">
  <div class="col p-0 m-0">

<nav class="navbar navbar-expand navbar-light " style="background-color: #d5b1a2bd">

  <a class="navbar-brand" href="index.php"><img src="img/nav_icon.png"  width="40px" height="40px" alt="">Almorshed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <?php 
      if(isset($_SESSION['user_id']))
      {
      echo "<li class='nav-item'>
      <a class='nav-link' href='includs/logout.php'>Sign out</a>
    </li>";
        
      }
      else {
        echo "<li class='nav-item'>
        <a class='nav-link' href='login.php'>Login</a>
        </li>
        <li class='nav-item'>
        <a class='nav-link' href='signup.php'>Sign up</a>
        </li>";
      }
      
     
      
      ?>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


  </div>
</nav>


</div>
</div>
