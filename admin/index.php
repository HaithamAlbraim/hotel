<?php
session_start();
include ("autoload.php");

if(isset($_SESSION['error_message']))
{
  echo $_SESSION['error_message'];
}
?>
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
<body>
  <div class="container-fluid">
    <div class="row justify-content-center  pt-4">
      <div class="col-6 ">
<div class="card mt-4">
  <div class="card-header text-center">
    Admin paje
  </div>
  <div class="card-body">
  <form method="post" action="includs/do_login.inc.php" >
  <div class="form-group">
    <label for="userName">User name</label>
    <input type="text" name="userName" class="form-control" id="userName" >
   
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
<div class="text-center">
  <button type="submit" name="loginBtn" class="btn btn-primary">Submit</button>
  </div>
</form>

  </div>
  
</div>
</div>
    </div>
  </div>
</body>
</html>