<?php
if(isset($_POST['loginBtn']))
{
  include("../autoload.php");
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $login= new AdminControl($userName,$password);
  $login->doLogin();
}